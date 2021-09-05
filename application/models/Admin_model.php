<?php 

class Admin_model extends CI_Model
{
	
	public function get_users()
	{
		$query = $this->db->get('users');
		return $query->result();
	}

	
	public function add_user()
	{

		$options = ['cost'=> 12];
		$encripted_pass = password_hash($this->input->post('password'), PASSWORD_BCRYPT, $options);

		$data = array(

			'name'	=> $this->input->post('name'),
			'contact'	=> $this->input->post('contact'),
			'email'	=> $this->input->post('email'),
			'password' => $encripted_pass,
			'type' => $this->input->post('type')

		);

		$insert_user = $this->db->insert('users', $data);
		return $insert_user;

	}
	public function adddevs()
	{

		$data = array(

			'name'	=> $this->input->post('name'),
			'contact'	=> $this->input->post('contact'),
			'email'	=> $this->input->post('email'),
			'description' => $this->input->post('description'),
			'specialty' => $this->input->post('specialty')

		);

		$insert_user = $this->db->insert('devs', $data);
		return $insert_user;

	}

	public function deletedev($id)
	{
		$this->db->where('id', $id);
		$this->db->delete('devs');

		$this->db->where('devID', $id);
		$this->db->delete('hires');

		$this->db->where('devID', $id);
		$this->db->delete('hirerecord');
		
	}

	public function deletedevapplications($id)
	{
		$this->db->where('appID', $id);
		$this->db->delete('devapplications');
		
	}

	public function delete_user($id)
	{
		$this->db->where('id', $id);
		$this->db->delete('users');

		$this->db->where('userID', $id);
		$this->db->delete('hires');

		$this->db->where('userID', $id);
		$this->db->delete('hirerecord');
		
	}

	
	public function get_devs($limit, $offset)
	{	
		/*=== SQL join ===*/
		$this->db->select('devs.id, devs.name, devs.email, devs.contact, devs.description, devs.specialty,  devs.join_date');

		$this->db->from('devs');

		$this->db->order_by('devs.id', 'DESC');
		$this->db->limit($limit, $offset);
		$query = $this->db->get();
		return $query->result();
	}
	
	public function num_rows_admin_devs()
	{
		$this->db->select('*');
		$this->db->from('devs');

		$this->db->order_by('devs.id', 'DESC');
		$query = $this->db->get();
		return $query->num_rows();
	}
	
	public function count_total_devs()
	{
		$query = $this->db->get('devs');
		return $query->result();
	}

	public function count_total_hires()
	{
		$query = $this->db->get('hirerecord');
		return $query->result();
	}

	public function count_total_devapplications()
	{
		$query = $this->db->get('devapplications');
		return $query->result();
	}
	
	
	public function get_hires()
	{
		$this->db->order_by('recordID', 'DESC');
		$query = $this->db->get('hirerecord');
		return $query->result();
	}


	public function get_devapplications()
	{
		$this->db->order_by('appID', 'DESC');
		$query = $this->db->get('devapplications');
		return $query->result();
	}
	
	public function get_hire_detail($orderId)
	{
		$this->db->select('hirerecord.*, users.name, users.contact, users.email');
		$this->db->from('hirerecord');
		$this->db->join('users', 'hirerecord.userID = users.id');
		$this->db->where('hirerecord.recordID', $orderId);
		$query = $this->db->get();
		return $query->row();
	}

	public function get_hire_devdetail($orderId)
	{
		$this->db->select('hirerecord.*, devs.name, devs.contact, devs.email');
		$this->db->from('hirerecord');
		$this->db->join('devs', 'hirerecord.devID = devs.id');
		$this->db->where('hirerecord.recordID', $orderId);
		$query = $this->db->get();
		return $query->row();
	}



	public function get_user_details($id)
	{
		$this->db->where('id', $id);
		$query = $this->db->get('users');
		return $query->row();
	}
	public function get_dev_details($id)
	{
		$this->db->where('id', $id);
		$query = $this->db->get('devs');
		return $query->row();
	}

	public function editadminprofile($id)
	{
		//$options = ['cost'=> 12];
		//$encripted_pass = password_hash($this->input->post('password'), PASSWORD_BCRYPT, $options);

		$data = array(
			'name'	=> $this->input->post('name'),
			'contact'	=> $this->input->post('contact'),
			//'password' => $encripted_pass,

		);

		return $query = $this->db->where('id', $id)->update('users', $data);
	}

	public function getCurrPassword($id)
	{
		$query = $this->db->where(['id'=>$id])
		->get('users');
		if($query->num_rows() > 0){
			return $query->row();
		} 
	}


	public function changepass($id)
	{
		$options = ['cost'=> 12];
		$encripted_pass = password_hash($this->input->post('newpassword'), PASSWORD_BCRYPT, $options);

		$data = array(
			//'name'	=> $this->input->post('name'),
			//'contact'	=> $this->input->post('contact'),
			'password' => $encripted_pass,

		);

		return $query = $this->db->where('id', $id)->update('users', $data);
	}

	public function editotheruser($id)
	{
		$options = ['cost'=> 12];
		$encripted_pass = password_hash($this->input->post('password'), PASSWORD_BCRYPT, $options);

		$data = array(
			'name'	=> $this->input->post('name'),
			'contact'	=> $this->input->post('contact'),
			'password' => $encripted_pass,

		);

		return $query = $this->db->where('id', $id)->update('users', $data);
	}
	public function editdev($id)
	{
		

		$data = array(
			'name'	=> $this->input->post('name'),
			'contact'	=> $this->input->post('contact'),
			'description' => $this->input->post('description'),
			'specialty' => $this->input->post('specialty')

		);

		return $query = $this->db->where('id', $id)->update('devs', $data);
	}
}