<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Users extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		/*==============================*/
		redirect($_SERVER['HTTP_REFERER']);
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
	public function registration()
	{
		$this->form_validation->set_rules('name', 'Name', 'trim|required|max_length[80]|strip_tags[name]|callback_alpha_dash_space');
		$this->form_validation->set_rules('contact', 'Contact', 'trim|min_length[10]|max_length[15]|required|numeric');
		$this->form_validation->set_rules(
			'email',
			'Email',
			'trim|required|valid_email|is_unique[users.email]',
			array(
				'required' => 'Email field can not be left empty.',
				'is_unique' => 'This email is already registered.'
			)
		);
		//$this->form_validation->set_rules('password', 'Password', 'trim|required|alpha_dash|min_length[4]|callback_validate_strongpass');
		$this->form_validation->set_rules('password', 'Password', 'trim|required|callback_validate_strongpass');
		//$this->form_validation->set_rules('repassword', 'Confirm Password','trim|required|alpha_dash|min_length[4]|matches[password]');
		$this->form_validation->set_rules(
			'repassword',
			'Confirm Password',
			'trim|required|matches[password]|callback_validate_strongpass'
		);
		$this->form_validation->set_rules(
			'conditionBox',
			'Check box',
			'trim|required',
			array('required' => 'You have to check the box.')
		);
		//$this->form_validation->set_message('validate_strongpass','Password needs');

		if ($this->form_validation->run() == FALSE) {
			$this->load->view('users/reg');
		} else {
			$this->load->model('User_model');

			if ($this->User_model->register_user()) {
				$this->session->set_flashdata('reg_success', 'You have successfully registered. Please log in to start hiring now!');
				redirect('users/login');
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
	public function login()
	{
		$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
		$this->form_validation->set_rules('password', 'Password', 'trim|required');

		if ($this->form_validation->run() == FALSE) {
			$this->load->view('users/login');
		} else {
			$this->load->model('User_model');

			$email = $this->input->post('email');
			$password = $this->input->post('password');

			$user_data = $this->User_model->login_user($email, $password);

			if ($user_data) {

				$login_data = array(

					'user_data' => $user_data,
					'id'		=> $user_data->id,
					'email'		=> $email,
					'type'		=> $user_data->type,
					'name'		=> $user_data->name,
					'logged_in'	=> true

				); // Data keeps in SESSION

				$this->session->set_userdata($login_data);

				if ($user_data->type == 'A') // Admin
				{

					$this->session->set_flashdata('login_success', 'Logged in successfully. You have logged in as an admin.');
					redirect('admin/index');
				} elseif ($user_data->type == 'U') // User
				{
					$this->session->set_flashdata('login_success', 'Welcome, <span class = "text-primary">' . $this->session->userdata('name') . '</span>. You have logged in successfully.');
					redirect('users/browsedevs');
				}
			} else {
				$this->session->set_flashdata('login_fail', '<i class="fas fa-exclamation-triangle"></i> Invalid login. The email or password that you have entered is incorrect. ');

				redirect($_SERVER['HTTP_REFERER']); // Redirect at same page.
			}
		}
	}


	public function devjoin()
	{
		$this->form_validation->set_rules('name', 'Name', 'trim|required|max_length[80]|strip_tags[name]|callback_alpha_dash_space');
		$this->form_validation->set_rules('contact', 'Contact', 'trim|min_length[10]|max_length[15]|required|numeric');
		$this->form_validation->set_rules(
			'email',
			'Email',
			'trim|required|valid_email|is_unique[devapplications.email]',
			array(
				'required' => 'Email field can not be left empty.',
				'is_unique' => 'This email already exists.'
			)
		);
		
		$this->form_validation->set_rules(
			'conditionBox',
			'Check box',
			'trim|required',
			array('required' => 'You have to check the box.')
		);
		//$this->form_validation->set_message('validate_strongpass','Password needs');

		if ($this->form_validation->run() == FALSE) {
			$this->load->view('users/devjoin');
		} else {
			$this->load->model('User_model');

			if ($this->User_model->devapplication()) {
				$this->session->set_flashdata('reg_success', 'We have received your information. Our hiring team will contact you soon!');
				redirect('users/devjoin');
			} else {
				print $this->db->error();
			}
		}
	}

	public function browsedevs()
	{
		if ($this->session->userdata('logged_in') == TRUE) {


			#...Pagination code start
			$this->load->model('User_model');
			$this->load->library('pagination');
			$config = [

				'base_url' => base_url('users/all_devs'),
				'per_page' => 18,
				'total_rows' =>  $this->User_model->num_rows_devs(),
				'full_tag_open' => "<ul class='custom-pagination'>",
				'full_tag_close' => "</ul>",
				'first_tag_open' => '<li>',
				'first_tag_close' => '</li>',
				'last_tag_open' => '<li>',
				'last_tag_close' => '</li>',
				'next_tag_open' => '<li>',
				'next_tag_close' => '</li>',
				'prev_tag_open' => '<li>',
				'prev_tag_close' => '</li>',
				'cur_tag_open' => "<li class = 'active'><a>",
				'cur_tag_close' => '</a></li>',
			];
			$this->pagination->initialize($config);

			$this->load->model('User_model');
			$view['devs'] = $this->User_model->get_devs($config['per_page'], $this->uri->segment(3));

			$this->load->view('layouts/devs', $view);
		} else {
			$this->session->set_flashdata('no_access', '<i class="fas fa-exclamation-triangle"></i> You are not logged in! Please log in to continue.');
			redirect('users/login');
		}
	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect('Home');
	}

	public function devdetails($id)
	{
		$this->load->model('Admin_model');
		$this->load->model('User_model');

		$view['dev_details'] = $this->Admin_model->get_dev_details($id);

		$view['user_details'] = $this->User_model->get_user_details($this->session->userdata('id'));

		if ($this->Admin_model->get_dev_details($id)) {

			$this->load->view('layouts/hire_dev', $view);
		} else {

			$view['user_view'] = "temp/404page";
			$this->load->view('layouts/user_layout', $view);
		}
	}

	public function terms()
	{
		$this->load->view('temp/terms');
	}

	public function about()
	{
		$this->load->view('temp/about');
	}

	public function infophp()
	{
		$this->load->view('users/info');
	}

}
