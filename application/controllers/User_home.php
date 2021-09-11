<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User_home extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();

		$type = $this->session->userdata('type');
		if ($type != 'U') {
			$this->session->set_flashdata('no_access', '<i class="fas fa-exclamation-triangle"></i> You are not allowed or not logged in! Please Log in with an user account');
			redirect('users/login');
		}
	}

	public function index()
	{


		$id = $this->session->userdata('id');
		$this->load->model('User_model');
		$view['user_details'] = $this->User_model->get_user_details($id);

		$this->load->view('users/user_index', $view);
	}


	public function hireddevs()
	{

		$this->load->model('User_model');
		$view['mydevs'] = $this->User_model->hireddevs();

		$this->load->view('users/hireddevs', $view);
	}

	public function markcomplete($id)
	{
		$this->load->model('User_model');
		$this->User_model->markcomplete($id);
	
		$this->session->set_flashdata('success', '<i class= "fas fa-trash text-danger"></i> You have mark the job as "Complete". The developer has been removed from the hiring list.');
		redirect('user-home/hireddevs');
	}

	public function alpha_dash_space($fullname)
	{
		if (!preg_match('/^[a-zA-Z\s]+$/', $fullname)) {
			$this->form_validation->set_message('alpha_dash_space', 'The %s field may only contain alpha characters & White spaces');
			return FALSE;
		} else {
			return TRUE;
		}
	}

	public function edit_profile()
	{

		#get existing information
		$this->load->model('User_model');
		$id = $this->session->userdata('id');
		$view['user_details'] = $this->User_model->get_user_details($id);

		$this->form_validation->set_rules('name', 'Name', 'trim|required|min_length[1]|max_length[80]|strip_tags[name]|callback_alpha_dash_space');
		$this->form_validation->set_rules('contact', 'Contact', 'trim|required|min_length[10]|numeric|strip_tags[contact]');


		if ($this->form_validation->run() == FALSE) { //$this->session->set_flashdata('danger', validation_errors());
			if ($this->User_model->get_user_details($id)) {
				$view['user_view'] = "users/edit_profile";
				$this->load->view('layouts/user_home', $view);
			} else {
				$view['user_view'] = "temp/404page";
				$this->load->view('layouts/user_home', $view);
			}
		} else {
			$this->load->model('User_model');

			if ($this->User_model->edit_profile($id)) {
				$this->session->set_flashdata('success', 'Your profile information has been updated successfully.');
				redirect('user_home');
			} else {
				print $this->db->error();
			}
		}
	}

	public function validate_strongpass($str)
	{
		$password = trim($str);

		$regex_lowercase = '/[a-z]/';
		$regex_uppercase = '/[A-Z]/';
		$regex_number = '/[0-9]/';
		$regex_special = '/[!@#$%^&*()\-_=+{};:,<.>§~]/';

		if (empty($password)) {
			$this->form_validation->set_message('validate_strongpass', 'The {field} field is required.');

			return FALSE;
		}

		if (preg_match_all($regex_lowercase, $password) < 1) {
			$this->form_validation->set_message('validate_strongpass', 'The {field} field must be have least one lowercase letter.');

			return FALSE;
		}

		if (preg_match_all($regex_uppercase, $password) < 1) {
			$this->form_validation->set_message('validate_strongpass', 'The {field} field must have at least one uppercase letter.');

			return FALSE;
		}

		if (preg_match_all($regex_number, $password) < 1) {
			$this->form_validation->set_message('validate_strongpass', 'The {field} field must have at least one number.');

			return FALSE;
		}

		if (preg_match_all($regex_special, $password) < 1) {
			$this->form_validation->set_message('validate_strongpass', 'The {field} field must have at least one special character.' . ' ' . htmlentities('!@#$%^&*()\-_=+{};:,<.>§~'));

			return FALSE;
		}

		if (strlen($password) < 5) {
			$this->form_validation->set_message('validate_strongpass', 'The {field} field must be at least 5 characters in length.');

			return FALSE;
		}

		if (strlen($password) > 32) {
			$this->form_validation->set_message('validate_strongpass', 'The {field} field cannot exceed 32 characters in length.');

			return FALSE;
		}

		return TRUE;
	}

	public function change_password()
	{
		#get existing informations
		$this->load->model('User_model');

		$id = $this->session->userdata('id');
		$view['user_details'] = $this->User_model->get_user_details($id);


		$this->form_validation->set_rules('oldpassword', 'Current Password', 'trim|required|callback_validate_strongpass');

		$this->form_validation->set_rules('newpassword', 'New Password', 'trim|required|callback_validate_strongpass');
		$this->form_validation->set_rules(
			'repassword',
			'Confirm Password',
			'trim|required|callback_validate_strongpass|matches[newpassword]'
		);


		if ($this->form_validation->run() == FALSE) {
			if ($this->User_model->get_user_details($id)) {

				$this->load->view('users/change_password', $view);
			} else {

				$this->load->view('temp/404page', $view);
			}
		} else {
			$cur_password = $this->input->post('oldpassword');
			$this->load->model('User_model');
			$passwd = $this->User_model->getCurrPassword($id);


			if (password_verify($cur_password, $passwd->password)) {
				if ($this->User_model->changepass($id)) {
					$this->session->set_flashdata('success', 'Your have changed your password successfully.');
					redirect('user_home');
				} else {
					print $this->db->error();
				}
			} else {
				$this->session->set_flashdata('danger', 'Please enter your current password correctly.');

				$this->load->view('users/change_password', $view);
			}
		}
	}


	
}
