<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {


	function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->model('ModelCeloe');
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

	public function viewLogin()
	{
		$this->load->view('Login');
	}
}
