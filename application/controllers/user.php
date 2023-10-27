<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class user extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_login');
        $this->load->model('master');
    }
    
    function index()
    {
        if($this->session->userdata('status') == 'user_login')
        {
            redirect(base_url("user/dashboard"));
        }
        else
        {
            $this->load->view('login-user');
        }
    }

    public function ceklogin()
    {
        $username_user = $this->input->post('username_user');
        $password_user = $this->input->post('password_user');
        
        $where = array(
            'username_user' => $username_user,
            'password_user' => $password_user
        );
        
        $cek = $this->m_login->auth_user_login($where)->num_rows();
        
        if($cek > 0)
        {
            $dataSession = array(
                'username_user' => $username_user,
                'status' => 'user_login'
            );
            $this->session->set_userdata($dataSession);
            
            $result = array(
                'STATUS' => '1',
                'MESSAGE' => 'Login berhasil'
            );
            
            echo json_encode($result);
        }
        else
        {
            $result = array(
                'STATUS' => '0',
                'MESSAGE' => 'Login gagal'
            );
            
            echo json_encode($result);
        }
    }

    function dashboard()
	{
		if($this->session->userdata('status')== 'user_login')
		{
			$data['tabel_transaksi'] = $this->master->load_transaksi()->result();
			$this->load->view('home',$data);
		}
		else
		{
			$this->load->view('login-user');
		}
	}

    function register()
	{
		if($this->session->userdata('status') == 'user_login')
		{
			$data['register'] = $this->m_login->load_admin()->result();
			$this->load->view('register-user',$data);
		}
		else
		{
			$this->load->view('register-user');
		}
	}
    

	function user_add()
	{
		$id_user = $this->input->post('id_user');
		$username = $this->input->post('username');
		$email = $this->input->post('email');
		$password = $this->input->post('password');
		$nama_panjang = $this->input->post('nama_panjang');
		
		$where = array(
			'id_user'=>$id_user,
			'username'=>$username,
			'email'=>$email,
			'password'=>$password,
			'nama_panjang'=>$nama_panjang
		);
	
		
		$this->master->add_user($where);
		
		$hasil = array(
			'STATUS'=>'1'
		);
		print json_encode($hasil);
		
	}

    function logout()
	{
		$this->session->sess_destroy();
		redirect(base_url("user"));
	}
}
