<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('Users_model');
	}

	public function index(){
		$data['students'] = $this->Users_model->getAllUsers();
		$this->load->view('user_list.php', $data);
	}

	public function addnew(){
		$this->load->view('addform.php');
	}

	public function insert(){
		$user['name'] = $this->input->post('name');
		$user['email'] = $this->input->post('email');
		$user['school'] = $this->input->post('school');
		$user['grade']=$this->input->post('grade');
		$user['p_name']=$this->input->post('p_name');
		$user['p_no']=$this->input->post('p_no');
		
		$query = $this->Users_model->insertuser($user);

		if($query){
			header('location:'.base_url().$this->index());
		}

	}

	public function edit($id){
		$data['students'] = $this->Users_model->getUser($id);
		$this->load->view('editform', $data);
	}

	public function update($id){
		$user['name'] = $this->input->post('name');
		$user['email'] = $this->input->post('email');
		$user['school'] = $this->input->post('school');
		$user['grade']=$this->input->post('grade');
		$user['p_name']=$this->input->post('p_name');
		$user['p_no']=$this->input->post('p_no');
		

		$query = $this->Users_model->updateuser($user, $id);

		if($query){
			header('location:'.base_url().$this->index());
		}
	}

	public function delete($id){
		$query = $this->Users_model->deleteuser($id);

		if($query){
			header('location:'.base_url().$this->index());
		}
	}
}


?>