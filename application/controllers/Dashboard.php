<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

    public function index() {
        $this->load->view('Login/index');
    }

    public function __construct()
	{
		parent::__construct();
		$this->load->helper("url");
		$this->load->model('Login_model');
	}

    public function admin()
	{
		$this->load->helper('url');
		$this->load->view('Admin/index');
		
	}

	public function produksi()
	{
		echo "halaman produksi";
	}

	public function packing()
	{
		echo "halaman packing";
	}

    public function user() {
		$this->load->model('login_model');
		$data['login'] = $this->login_model->login();
		
		if(count((array)$data['login']) > 0){
			$this->session->set_userdata('logged_in', $data['login']);
			
			$akses = $data['login']->akses;
				switch ($akses){
						case 'admin' :
							redirect('dashboard/admin');
						case 'produksi' :
							redirect('dashboard/produksi');
						case 'packing' :
							redirect('dashboard/packing');
					break;
				}
				}else{ 
					redirect('/');//gagal
		}	
	}
}
