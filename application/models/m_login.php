<?php

Class m_login extends CI_MODEL
{

	function auth_admin_login($where)
	{
		return $this->db->get_where('tabel_admin', $where);
	}

	function auth_user_login($where)
	{
		return $this->db->get_where('user', $where);
	}

	function load_admin()
	{
		return $this->db->get("tabel_admin");
		//return $this->db->get_where("mst_crew",array('tipe_aktif'=>'1'));
		
		//$sql = "SELECT * FROM mst_crew WHERE tipe_aktif='1'";
		//return $this->db->query($sql);
	}
	
	function insert_admin($where)
	{
		$this->db->insert("tabel_admin",$where);
	}
	

	function keluhan()
	{
		return $this->db->get("mst_keluhan");
		//return $this->db->get_where("mst_crew",array('tipe_aktif'=>'1'));
		
		//$sql = "SELECT * FROM mst_crew WHERE tipe_aktif='1'";
		//return $this->db->query($sql);
	}

	function tambah_keluhan($where)
	{
		$this->db->insert("mst_keluhan",$where);
	}

}
