<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();


		$this->load->library('cart');
	}

	public function index()
	{



		$this->load->model('User_model');
		$view['user_details'] = $this->User_model->get_user_details($this->session->userdata('id'));




		$this->load->view('layouts/landhome', $view);
	}
}
