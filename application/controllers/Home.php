<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {


	function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
	}


	public function index()
	{
		$this->load->view('Dashboard');
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
}
