<?php

defined('BASEPATH') or exit('No direct script access allowed');

class admin extends CI_Controller
{

	public function index()
	{
		$this->load->helpers('url');
		$this->load->view('Login/index');
	}

	public function __construct()
	{
		parent::__construct();
		$this->load->helper("url");
		$this->load->model('Login_model');
	}

	public function dashboard()
	{
		$this->load->helper("url");
		$this->load->database();
		$query = $this->db->get('table_dashboard_admin');
		$this->db->select('*');
		$this->db->from('table_dashboard_admin');
		$query = $this->db->get();
		$data['data_dash'] = $query->result();
		$this->load->view('admin-partials/header');
		$this->load->view('admin-partials/side-bar');
		$this->load->view('admin-partials/top-bar');
		$this->load->view('admin-partials/dashboard', $data);
		$this->load->view('admin-partials/footer');
	}

	public function pesanan()
	{
		$this->load->helper("url");
		$this->load->database();
		$query = $this->db->get('table_pesanan');
		$this->db->select('*');
		$this->db->from('table_pesanan');
		$query = $this->db->get();
		$data['data_pesan'] = $query->result();
		$this->load->view('admin-partials/header');
		$this->load->view('admin-partials/side-bar');
		$this->load->view('admin-partials/top-bar');
		$this->load->view('admin-partials/pesanan', $data);
		$this->load->view('admin-partials/footer');
	}

	public function barang()
	{
		$this->load->view('Admin/barang');
	}

	public function produksi()
	{
		echo "halaman produksi";
	}

	public function packing()
	{
		echo "halaman packing";
	}

	public function user()
	{
		$this->load->model('Login_model');
		$data['login'] = $this->Login_model->login();
		// print_r($data['login']);
		if (count((array)$data['login']) > 0) {
			$this->session->set_userdata('logged_in', $data['login']);
			print_r($data['login']);
			$akses = $data['login']->AKSES;
			switch ($akses) {
				case 'admin':
					redirect('admin/dashboard');
				case 'produksi':
					redirect('admin/produksi');
				case 'packing':
					redirect('admin/packing');
					break;
			}
		} else {
			redirect('/'); //gagal
		}
	}
}