<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class admin extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_login');
        $this->load->model('master');
    }
    
    function index()
    {
        if($this->session->userdata('status') == 'login')
        {
            redirect(base_url("admin/dashboard"));
        }
        else
        {
            $this->load->view('admin/login-admin');
        }
    }

    public function ceklogin()
    {
        $username_admin = $this->input->post('username_admin');
        $password_admin = $this->input->post('password_admin');
        
        $where = array(
            'username_admin' => $username_admin,
            'password_admin' => $password_admin
        );
        
        $cek = $this->m_login->auth_admin_login($where)->num_rows();
        
        if($cek > 0)
        {
            $dataSession = array(
                'username_admin' => $username_admin,
                'status' => 'login'
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
		if($this->session->userdata('status')== 'login')
		{
			$data['tabel_transaksi'] = $this->master->load_transaksi()->result();
			$this->load->view('admin/dashboard',$data);
		}
		else
		{
			$this->load->view('admin/login-admin');
		}
	}
    function tampil()
	{
		if($this->session->userdata('status')== 'login')
		{
			$data['tabel_transaksi'] = $this->master->load_transaksi()->result();
			$this->load->view('home',$data);
		}
		else
		{
			$this->load->view('admin/login-admin');
		}
	}

    function register()
	{
		if($this->session->userdata('status') == 'login')
		{
			$data['reg'] = $this->m_login->load_admin()->result();
			$this->load->view('admin/reg',$data);
		}
		else
		{
			$this->load->view('admin/reg');
		}
	}

	function admin_tambah()
	{
		$nama_admin = $this->input->post('nama_admin');
		$id_admin = $this->input->post('id_admin');
		$telp_admin = $this->input->post('telp_admin');
		$email_admin = $this->input->post('email_admin');
		$username_admin = $this->input->post('username_admin');
		$password_admin = $this->input->post('password_admin');
		$alamat_admin = $this->input->post('alamat_admin');
		
		$where = array(
			'nama_admin'=>$nama_admin,
			'id_admin'=>$id_admin,
			'telp_admin'=>$telp_admin,
			'email_admin'=>$email_admin,
			'username_admin'=>$username_admin,
			'password_admin'=>$password_admin,
			'alamat_admin'=>$alamat_admin
		);
	
		
		$this->m_login->insert_admin($where);
		
		$hasil = array(
			'STATUS'=>'1'
		);
		print json_encode($hasil);
		
	}

    function logout()
	{
		$this->session->sess_destroy();
		redirect(base_url("admin"));
	}
}
