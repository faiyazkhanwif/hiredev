<?php

class User_model extends CI_Model
{
	public function register_user()
	{

		$options = ['cost' => 12];
		$encripted_pass = password_hash($this->input->post('password'), PASSWORD_BCRYPT, $options);

		$data = array(

			'name'	=> $this->input->post('name'),
			'contact'	=> $this->input->post('contact'),
			'email'	=> $this->input->post('email'),
			'password' => $encripted_pass

		);

		$insert_data = $this->db->insert('users', $data);
		return $insert_data;
	}

	public function login_user($email, $password)
	{
		$this->db->where('email', $email);
		$result = $this->db->get('users');

		$db_password = $result->row('password');

		if (password_verify($password, $db_password)) {
			// return $result->row(0)->id;
			return $result->row();
		} else {
			return false;
		}
	}

	public function devapplication()
	{
		$data = array(

			'name'	=> $this->input->post('name'),
			'contact'	=> $this->input->post('contact'),
			'email'	=> $this->input->post('email')

		);

		$insert_data = $this->db->insert('devapplications', $data);
		return $insert_data;
	}

	public function getmail($email)
	{
		$this->db->where('email', $email);
		$result = $this->db->get('users');
		return $result->result_array();
	}


	public function get_devs($limit, $offset)
	{
		$this->db->select('*');
		$this->db->from('devs');

		$this->db->order_by('devs.id', 'DESC');
		$this->db->limit($limit, $offset);
		$query = $this->db->get();
		return $query->result();
	}
	#...For pagination
	public function num_rows_devs()
	{
		$this->db->select('*');
		$this->db->from('devs');

		$this->db->order_by('devs.id', 'DESC');
		$query = $this->db->get();
		return $query->num_rows();
	}


	public function hiredev($id)
	{

		$data = array(
			'userID'	=> $this->session->userdata('id'),
			'devID' => $id,
		);
		$insert_order = $this->db->insert('hires', $data);
		$insert_order1 = $this->db->insert('hirerecord', $data);

		return $insert_order;
	}

	public function hireddevs()
	{
		//$this->db->order_by('hireID', 'DESC');
		//$this->db->where('userID', $this->session->userdata('id'));
		//$query = $this->db->get('hireddevs');
		//return $query->result();

		$this->db->select('hires.*, devs.name, devs.contact, devs.email');
		$this->db->from('hires');
		$this->db->join('devs', 'hires.devID = devs.id');
		$this->db->where('hires.userID', $this->session->userdata('id'));
		$query = $this->db->get();
		return $query->result();
	}

	public function markcomplete($id)
	{
		$this->db->where('hireID', $id);
		$this->db->delete('hires');
		
	}


	public function get_user_details($id)
	{
		$this->db->where('id', $id);
		$query = $this->db->get('users');
		return $query->row();
	}
	
	public function get_user_details_alt($email)
	{
		$this->db->where('email', $email);
		$query = $this->db->get('users');
		return $query->result();
	}


	public function edit_profile($id)
	{

		$data = array(
			'name'	=> $this->input->post('name'),
			'contact'	=> $this->input->post('contact')
		);

		return $query = $this->db->where('id', $id)->update('users', $data);
	}

	public function getCurrPassword($id)
	{
		$query = $this->db->where(['id' => $id])
			->get('users');
		if ($query->num_rows() > 0) {
			return $query->row();
		}
	}


	public function changepass($id)
	{
		$options = ['cost' => 12];
		$encripted_pass = password_hash($this->input->post('newpassword'), PASSWORD_BCRYPT, $options);

		$data = array(
			//'name'	=> $this->input->post('name'),
			//'contact'	=> $this->input->post('contact'),
			'password' => $encripted_pass,

		);

		return $query = $this->db->where('id', $id)->update('users', $data);
	}

}
