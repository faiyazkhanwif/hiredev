<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

		$type = $this->session->userdata('type');
		if($type != 'A')
		{
			$this->session->set_flashdata('no_access', '<i class="fas fa-exclamation-triangle"></i> You are not allowed or not logged in! Please Log in with an admin account');
			redirect('users/login');
		}

	}
	public function alpha_dash_space($fullname){
		if (! preg_match('/^[a-zA-Z\s]+$/', $fullname)) {
			$this->form_validation->set_message('alpha_dash_space', 'The %s field may only contain alpha characters & White spaces');
			return FALSE;
		} else {
			return TRUE;
		}
	}
	public function validate_strongpass($str)
	{
		$password = trim($str);

		$regex_lowercase = '/[a-z]/';
		$regex_uppercase = '/[A-Z]/';
		$regex_number = '/[0-9]/';
		$regex_special = '/[!@#$%^&*()\-_=+{};:,<.>§~]/';

		if (empty($password))
		{
			$this->form_validation->set_message('validate_strongpass', 'The {field} field is required.');

			return FALSE;
		}

		if (preg_match_all($regex_lowercase, $password) < 1)
		{
			$this->form_validation->set_message('validate_strongpass', 'The {field} field must be have least one lowercase letter.');

			return FALSE;
		}

		if (preg_match_all($regex_uppercase, $password) < 1)
		{
			$this->form_validation->set_message('validate_strongpass', 'The {field} field must have at least one uppercase letter.');

			return FALSE;
		}

		if (preg_match_all($regex_number, $password) < 1)
		{
			$this->form_validation->set_message('validate_strongpass', 'The {field} field must have at least one number.');

			return FALSE;
		}

		if (preg_match_all($regex_special, $password) < 1)
		{
			$this->form_validation->set_message('validate_strongpass', 'The {field} field must have at least one special character.' . ' ' . htmlentities('!@#$%^&*()\-_=+{};:,<.>§~'));

			return FALSE;
		}

		if (strlen($password) < 5)
		{
			$this->form_validation->set_message('validate_strongpass', 'The {field} field must be at least 5 characters in length.');

			return FALSE;
		}

		if (strlen($password) > 32)
		{
			$this->form_validation->set_message('validate_strongpass', 'The {field} field cannot exceed 32 characters in length.');

			return FALSE;
		}

		return TRUE;
	}

	public function index()
	{
		$this->load->model('Admin_model');

		$view['admin_view'] = "admin/admin_index";
		$this->load->view('layouts/admin_layout', $view);
	}





public function allUsers()
{
	$this->load->model('Admin_model');
	$view['users_data'] = $this->Admin_model->get_users();


	$view['admin_view'] = "admin/view_users";
	$this->load->view('layouts/admin_layout', $view);
}


public function add_users()
{
	$this->form_validation->set_rules('name', 'Name', 'trim|required|max_length[80]|callback_alpha_dash_space');
	$this->form_validation->set_rules('contact', 'Contact', 'trim|min_length[10]|max_length[15]|required|numeric');
	$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email|is_unique[users.email]');
	$this->form_validation->set_rules('password', 'Password', 'trim|required|callback_validate_strongpass');
	$this->form_validation->set_rules('repassword', 'Confirm Password',
		'trim|required|callback_validate_strongpass|matches[password]');
	$this->form_validation->set_rules('type', 'Type','trim|required');


	if($this->form_validation->run() == FALSE)
	{		

		$view['admin_view'] = "admin/add_users";
		$this->load->view('layouts/admin_layout', $view);
	}
	else
	{
		$this->load->model('Admin_model');

		if($this->Admin_model->add_user())
		{
			$this->session->set_flashdata('success', 'User Registration is successful');
			redirect('admin/allUsers');
		}
		else
		{
			print $this->db->error();
		}

	}
}
public function adddevs()
{
	$this->form_validation->set_rules('name', 'Name', 'trim|required|max_length[80]|callback_alpha_dash_space');
	$this->form_validation->set_rules('contact', 'Contact', 'trim|min_length[10]|max_length[15]|required|numeric');
	$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email|is_unique[devs.email]');
	$this->form_validation->set_rules('description', 'Description', 'trim|required|strip_tags[description]');
	$this->form_validation->set_rules('specialty', 'Specialty', 'trim|required|strip_tags[specialty]');

	if($this->form_validation->run() == FALSE)
	{		

		$view['admin_view'] = "admin/adddevs";
		$this->load->view('layouts/admin_layout', $view);
	}
	else
	{
		$this->load->model('Admin_model');

		if($this->Admin_model->adddevs())
		{
			$this->session->set_flashdata('success', 'Developer added successfully');
			redirect('admin/devs');
		}
		else
		{
			print $this->db->error();
		}

	}
}
public function deletedev($id)
{
	$this->load->model('Admin_model');
	$this->Admin_model->deletedev($id);

	$this->session->set_flashdata('success', '<i class= "fas fa-trash text-danger"></i> Developer removed successfully');
	redirect('admin/devs');
}


public function user_delete($id)
{
	$this->load->model('Admin_model');
	$this->Admin_model->delete_user($id);

	$this->session->set_flashdata('success', '<i class= "fas fa-trash text-danger"></i> User deleted successfully');
	redirect('admin/allUsers');
}

public function edit_user($id)
{


	$this->load->model('User_model');

	$this->load->model('Admin_model');
	$view['user_details'] = $this->Admin_model->get_user_details($id);

	$this->form_validation->set_rules('name', 'Name', 'trim|max_length[80]|required|strip_tags[name]|callback_alpha_dash_space');
	$this->form_validation->set_rules('contact', 'Contact', 'trim|required|min_length[10]|max_length[15]|numeric|strip_tags[contact]');
	$this->form_validation->set_rules('password', 'Password', 'trim|required|callback_validate_strongpass');
	$this->form_validation->set_rules('repassword', 'Confirm Password',
		'trim|required|callback_validate_strongpass|matches[password]');

	if($this->form_validation->run() == FALSE)
	{
		if($this->User_model->get_user_details($id))
		{
			$view['admin_view'] = "admin/editotheruser";
			$this->load->view('layouts/admin_layout', $view);
		}
		else
		{
			$view['admin_view'] = "temp/404page";
			$this->load->view('layouts/admin_layout', $view);
		}
	}
	else
	{
		$this->load->model('Admin_model');

		if($this->Admin_model->editotheruser($id))
		{
			$this->session->set_flashdata('success', 'User profile has been updated successfully.');
			redirect('admin');
		}
		else
		{
			print $this->db->error();
		}
	}
}


public function edit_dev($id)
{


	$this->load->model('User_model');

	$this->load->model('Admin_model');
	$view['user_details'] = $this->Admin_model->get_dev_details($id);

	$this->form_validation->set_rules('name', 'Name', 'trim|required|max_length[80]|callback_alpha_dash_space');
	$this->form_validation->set_rules('contact', 'Contact', 'trim|min_length[10]|max_length[15]|required|numeric');
	$this->form_validation->set_rules('description', 'Description', 'trim|required|strip_tags[description]');
	$this->form_validation->set_rules('specialty', 'Specialty', 'trim|required|strip_tags[specialty]');

	if($this->form_validation->run() == FALSE)
	{
		if($this->Admin_model->get_dev_details($id))
		{
			$view['admin_view'] = "admin/editdev";
			$this->load->view('layouts/admin_layout', $view);
		}
		else
		{
			$view['admin_view'] = "temp/404page";
			$this->load->view('layouts/admin_layout', $view);
		}
	}
	else
	{
		$this->load->model('Admin_model');

		if($this->Admin_model->editdev($id))
		{
			$this->session->set_flashdata('success', 'Developer information has been updated successfully.');
			redirect('admin/devs');
		}
		else
		{
			print $this->db->error();
		}
	}
}


public function devs()
{
	$this->load->model('Admin_model');
	$this->load->library('pagination');
	$config = [

		'base_url' => base_url('admin/devs'),
		'per_page' => 10,
		'total_rows'=>  $this->Admin_model->num_rows_admin_devs(),
		'full_tag_open' => "<ul class='custom-pagination'>",
		'full_tag_close' => "</ul>", 
		'first_tag_open' => '<li>',
		'first_tag_close' => '</li>',
		'last_tag_open' => '<li>',
		'last_link'=>'last',
		'last_tag_close' => '</li>',
		'next_tag_open' => '<li>',
		'next_tag_close' => '</li>',
		'prev_tag_open' => '<li>',
		'prev_tag_close' => '</li>',
		'cur_tag_open' => "<li class = 'active'><a>",
		'cur_tag_close' => '</a></li>',
	];
	$this->pagination->initialize($config);


	$this->load->model('Admin_model');
	$view['devs'] = $this->Admin_model->get_devs($config['per_page'], $this->uri->segment(3));

	$view['admin_view'] = "admin/alldevs";
	$this->load->view('layouts/admin_layout', $view);
}



public function hires()
{
	$this->load->model('Admin_model');
	$view['hires'] = $this->Admin_model->get_hires();

	$view['admin_view'] = "admin/hires";
	$this->load->view('layouts/admin_layout', $view);
}

public function devapplications()
{
	$this->load->model('Admin_model');
	$view['apps'] = $this->Admin_model->get_devapplications();

	$view['admin_view'] = "admin/devapplications";
	$this->load->view('layouts/admin_layout', $view);
}

public function deletedevapplications($id)
{
	$this->load->model('Admin_model');
	$this->Admin_model->deletedevapplications($id);

	$this->session->set_flashdata('success', '<i class= "fas fa-trash text-danger"></i> Application removed successfully');
	redirect('admin/devapplications');
}

public function hiredetails($orderId)
{
	$this->load->model('Admin_model');
	$view['hire_detail'] = $this->Admin_model->get_hire_detail($orderId);
	$view['dev_detail'] = $this->Admin_model->get_hire_devdetail($orderId);


	if($this->Admin_model->get_hire_detail($orderId))
	{
		$view['admin_view'] = "admin/hire_detail";
		$this->load->view('layouts/admin_layout', $view);
	}
	else
	{
		$view['admin_view'] = "temp/404page";
		$this->load->view('layouts/admin_layout', $view);
	}

}




public function editadminprofile($id)
{

	$this->load->model('User_model');
		#get existing informations
	$this->load->model('Admin_model');
	$view['user_details'] = $this->Admin_model->get_user_details($id);

	$this->form_validation->set_rules('name', 'Name', 'trim|required|strip_tags[name]|callback_alpha_dash_space');
	$this->form_validation->set_rules('contact', 'Contact', 'trim|required|min_length[10]|max_length[15]|numeric|strip_tags[contact]');

	if($this->form_validation->run() == FALSE)
	{
		if($this->User_model->get_user_details($id))
		{
			$view['admin_view'] = "admin/editadminprofile";
			$this->load->view('layouts/admin_layout', $view);
		}
		else
		{
			$view['admin_view'] = "temp/404page";
			$this->load->view('layouts/admin_layout', $view);
		}
	}
	else
	{
		$this->load->model('Admin_model');

		if($this->Admin_model->editadminprofile($id))
		{
			$this->session->set_flashdata('success', 'Admin profile information has been updated successfully.');
			redirect('admin');
		}
		else
		{
			print $this->db->error();
		}
	}
}


public function change_password($id)
{

	$this->load->model('User_model');
		#get existing informations
	$this->load->model('User_model');
	$view['user_details'] = $this->User_model->get_user_details($id);


	$this->form_validation->set_rules('oldpassword', 'Current Password', 'trim|required');

	$this->form_validation->set_rules('newpassword', 'New Password', 'trim|required|callback_validate_strongpass');
	$this->form_validation->set_rules('repassword', 'Confirm Password',
		'trim|required|callback_validate_strongpass|matches[newpassword]');


	if($this->form_validation->run() == FALSE)
	{
		if($this->User_model->get_user_details($id))
		{
			$view['admin_view'] = "admin/editadminpass";
			$this->load->view('layouts/admin_layout', $view);
		}
		else
		{
			$view['admin_view'] = "temp/404page";
			$this->load->view('layouts/admin_layout', $view);
		}
	}
	else
	{
		$cur_password = $this->input->post('oldpassword');
		$this->load->model('Admin_model');
		$passwd = $this->User_model->getCurrPassword($id);


		if(password_verify($cur_password, $passwd->password)){
			if($this->User_model->changepass($id))
			{
				$this->session->set_flashdata('success', 'Your have changed your password successfully.');
				redirect('admin');
			}
			else
			{
				print $this->db->error();
			}
		}
		else{
			$this->session->set_flashdata('danger', 'Please enter your current password correctly.');
			$view['admin_view'] = "admin/editadminpass";
			$this->load->view('layouts/admin_layout', $view);
		}

	}
}


}
