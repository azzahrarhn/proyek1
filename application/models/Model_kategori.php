<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Model_kategori extends CI_Model
{
	public function lip_product()
	{
		return $this->db->get_where('product', array('kategori' => 'Lip_Product'));
	}

	public function cheek_product()
	{
		return $this->db->get_where('product', array('kategori' => 'Cheek_Product'));
	}

	public function eye_product()
	{
		return $this->db->get_where('product', array('kategori' => 'Eye_Product'));
	}

	public function base_makeup()
	{
		return $this->db->get_where('product', array('kategori' => 'Base_Makeup'));
	}

	public function aksesoris()
	{
		return $this->db->get_where('product', array('kategori' => 'aksesoris'));
	}
}
