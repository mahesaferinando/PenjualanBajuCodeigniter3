<?php

/**
 * 
 */
class Sewa_model extends CI_Model
{
	public $admin			= 'admin';
	public $sewa			= 'sewa';
	public $user_sewa		= 'user_sewa';
	public $id				= 'id_sewa';
	public $bayar			= 'bayar';
	public $order			= 'ASC';

	function __construct()
	{
		parent::__construct();
	}

	function cek_login($username, $password)
	{
		$this->db->where('username', $username);
		$this->db->where('password', $password);
		return $this->db->get($this->admin)->row();
	}

	function ambil_data()
	{
		$this->db->order_by($this->id, $this->order);
		return $this->db->get($this->sewa)->result(); //banyak data
	}

	function ambil_data1($id)
	{
		$this->db->where($this->id, $id);
		return $this->db->get($this->sewa)->row();
	}

	function tambah_data($data) //array
	{
		return $this->db->insert($this->sewa, $data);
	}

	function tambah_foto($data) //array
	{
		return $this->db->insert($this->bayar, $data);
	}

	function hapus_data($id)
	{
		$this->db->where($this->id, $id);
		return $this->db->delete($this->sewa);
	}

	function hapus_sewa($id)
	{
		$this->db->where($this->id, $id);
		return $this->db->delete($this->user_sewa);
	}


	function edit_data($id, $data)
	{
		$this->db->where($this->id, $id);
		return $this->db->update($this->sewa, $data);
	}

	function ambil_data_id($id)
	{
		$this->db->where($this->id, $id);
		return $this->db->get($this->sewa)->row();
	}

	function tambah_sewa($data)
	{
		return $this->db->insert($this->user_sewa, $data);
	}

	function tampil_sewa($id_user)
	{
		$this->db->select('*');
		$this->db->from($this->user_sewa);
		$this->db->join('sewa', 'sewa.id_sewa=user_sewa.id_sewa');
		$this->db->where('user_sewa.id_user', $id_user);
		return $this->db->get()->result(); //banyak data
	}

	function total($id_user)
	{
		$this->db->select('*');
		$this->db->from($this->user_sewa);
		$this->db->select('SUM(total_harga)as total');
		$this->db->where('user_sewa.id_user', $id_user);
		return $this->db->get()->row()->total; //banyak data
	}

	function pesanan()
	{
		$this->db->select('*');
		$this->db->from($this->user_sewa);
		$this->db->join('sewa', 'sewa.id_sewa=user_sewa.id_sewa');
		return $this->db->get()->result(); //banyak data
	}

	function total_penjualan()
	{
		$this->db->select('*');
		$this->db->from($this->user_sewa);
		$this->db->select('SUM(total_harga)as total_penjualan');
		return $this->db->get()->row()->total_penjualan; //banyak data
	}

	function tambah_bayar($data) //array
	{
		return $this->db->insert($this->bayar, $data);
	}

	function ambil_status()
	{
		$this->db->select('*');
		$this->db->from($this->bayar);
		return $this->db->get()->result(); //banyak data
	}
}
