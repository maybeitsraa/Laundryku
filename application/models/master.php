<?php

Class master extends CI_MODEL
{

	function load_admin()
	{
		return $this->db->get("tabel_admin");
		//return $this->db->get_where("mst_tipe",array('tipe_aktif'=>'1'));
		
		//$sql = "SELECT * FROM mst_tipe WHERE tipe_aktif='1'";
		//return $this->db->query($sql);
	}
	function load_transaksi()
	{
		return $this->db->get("tabel_transaksi");
		//return $this->db->get_where("mst_tipe",array('tipe_aktif'=>'1'));
		
		//$sql = "SELECT * FROM mst_tipe WHERE tipe_aktif='1'";
		//return $this->db->query($sql);
	}

	function load_user()
	{
		return $this->db->get("tabel_admin");
		//return $this->db->get_where("mst_tipe",array('tipe_aktif'=>'1'));
		
		//$sql = "SELECT * FROM mst_tipe WHERE tipe_aktif='1'";
		//return $this->db->query($sql);
	}

	function load_sampah()
	{
		return $this->db->get("pesanan");
	}
	function load_berita()
	{
		return $this->db->get("berita");
	}
	
	function insert_sampah($where)
	{
		$this->db->insert("pesanan", $where);
	}
	function insert_news($where)
	{
		$this->db->insert("berita",$where);
	}

	function add_user($where)
	{
		$this->db->insert("user",$where);
	}
	
	function update_sampah($where,$update)
	{
		$this->db->where($where);
		$this->db->update("pesanan",$update);
	}
}
