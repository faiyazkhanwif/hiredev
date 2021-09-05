<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Checkout extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();

		if ($this->session->userdata('logged_in') == FALSE) {
			$this->session->set_flashdata('no_access', '<i class="fas fa-exclamation-triangle"></i> You are not allowed or not logged in! Please Log in.');
			redirect('users/login');
		}
	}

	public function index($id)
	{
		$this->load->model('Admin_model');

		$this->load->model('User_model');

		if ($this->User_model->hiredev($id)) {
			redirect('checkout/place_order');
		}
	}

	public function place_order()
	{
		$this->load->view('users/hired_page');
	}
}
