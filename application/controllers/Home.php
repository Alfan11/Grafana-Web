<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {


	function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->model('ModelCeloe');
	}

	public function viewLogin()
	{
		$this->load->view('Login');
	}

	public function login()
	{
		$data = array
		(
			'username' => $this->input->post('username'),
			'passowrd' => $this->input->post('password')
		);

		if($this->ModelCeloe->login($data))
		{
			$a = $this->load->view('Dashboard');
		} else {
			$data['error_message'] = "Username and password not match";
			$a = $this->load->view('Login',$data);
		}
	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect('Home/login'); 
	}

	public function index()
	{
		$this->load->view('Dashboard');
	}

	public function viewCeloe()
	{
		$this->load->view('Celoe');
	}
	
	public function viewVMS()
	{
		$this->load->view('Vms');
	}

	public function viewLB()
	{
		$this->load->view('LoadBalancer');
	}

	public function viewNInf()
	{
		$this->load->view('NetworkInterface');
	}

	public function viewStorage()
	{
		$this->load->view('Storage');
	}

	public function viewApache2()
	{
		$this->load->view('VpsApache');
	}

	public function viewMonitoring()
	{
		$this->load->view('VpsMonitoring');
	}

	public function viewQuick()
	{
		$this->load->view('QuickBasic');
	}




}
