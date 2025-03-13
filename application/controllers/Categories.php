<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Categories extends CI_Controller
{

	public function lip_product()
	{
		$data['title'] = 'Lip_Product Categories';
		$data['lip_product'] = $this->model_kategori->lip_product()->result();
		$this->load->view('layout/home/header', $data);
		$this->load->view('lip_product', $data);
		$this->load->view('layout/home/footer');
	}

	public function cheek_product()
	{
		$data['title'] = 'Cheek_Product Categories';
		$data['cheek_product'] = $this->model_kategori->cheek_product()->result();
		$this->load->view('layout/home/header', $data);
		$this->load->view('cheek_product', $data);
		$this->load->view('layout/home/footer');
	}

	public function eye_product()
	{
		$data['title'] = 'Eye_Product Categories';
		$data['eye_product'] = $this->model_kategori->eye_product()->result();
		$this->load->view('layout/home/header', $data);
		$this->load->view('eye_product', $data);
		$this->load->view('layout/home/footer');
	}

	public function base_makeup()
	{
		$data['title'] = 'Base_Makeup Categories';
		$data['base_makeup'] = $this->model_kategori->base_makeup()->result();
		$this->load->view('layout/home/header', $data);
		$this->load->view('base_makeup', $data);
		$this->load->view('layout/home/footer');
	}

	public function aksesoris()
	{
		$data['title'] = 'Aksesoris Categories';
		$data['aksesoris'] = $this->model_kategori->aksesoris()->result();
		$this->load->view('layout/home/header', $data);
		$this->load->view('aksesoris', $data);
		$this->load->view('layout/home/footer');
	}
}
