<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class hello extends CI_Controller{

	public function __construct(){
		parent::__construct();
		$data['title'] = "Codeigniter: HTML with Bootstrap";
		$this->load->view('task/bootstrap',$data);
		$this->load->model('user_model');
		$this->load->view('task/footer');

		$this->load->database();
	}


	// public function index(){
	// 	$shit['todo_list'] = array('Clean House', 'Call Mom', 'Run Errands');
	// 	$shit['title'] = "My Title";
	// 	$shit['heading'] = 'My heading';

	// 	$this->load->view('pages/blogview', $shit);


	// }
	//logssss
	public function index(){
		$this->load->view('task/home');

	}


	public function login_process(){
		$this->load->library('form_validation');
		$this->form_validation->set_rules('uname', 'Username', 'required');
		$this->form_validation->set_rules('pwd', 'Password', 'required');
		if ($this->form_validation->run()) {
			$username = $this->input->post('uname');
			$password = $this->input->post('pwd');
			if ($this->user_model->user_login($username,$password)) {
				// $session_data = array(
				// 	'username' => $username
				// 	);
				// $this->session->set_userdata($session_data);
				redirect(base_url('hello/inserted'));
			}
			else{
				$this->session->set_flashdata('error', "Invalid Username or Password!"); 
				redirect(base_url('register'));
			}
		}
		else{
			$this->index();
		}
	}
	// logout
	public function logout(){
		$this->session->unset_userdata('username');
		redirect(base_url('index'));
	}

	// register
	public function register(){
		$data['title'] = "Codeigniter: HTML with Bootstrap";
		$this->load->view('task/header');
		$this->load->view('task/home',$data);
	}
	public function process(){
		$data = array(
			"fname"  		=>$this->input->post(htmlspecialchars("first_name")),
			"lname"  		=>$this->input->post(htmlspecialchars("last_name")),
			"email"  		=>$this->input->post(htmlspecialchars("email")),
			"username" 	 	=>$this->input->post(htmlspecialchars("username")),
			"password"  	=>$this->input->post("password")
			);
		$this->user_model->insert_data($data);
		redirect(base_url() . "hello/inserted");
	}
	
	public function inserted(){
		$data['title'] = "Codeigniter: HTML with Bootstrap";
		$this->load->view('task/header',$data);

		$data['userArray'] = $this->user_model->get_data();
		$this->load->view('task/user_view',$data);
		$this->load->view('task/footer');

	}

	// update
	public function get_id($record_id){
		$data['title'] = "Codeigniter: HTML with Bootstrap";
		$this->load->view('task/header',$data);


		$record = $this->user_model->getuser($record_id);
		$this->load->view('task/update', ["record"=>$record]);

	}

	public function updatebaby(){
		$data = array(
			'id'			=>$this->input->post('id'),
			'fname'  		=>$this->input->post('firstname'),
			'lname'  		=>$this->input->post('lastname'),
			'email'  		=>$this->input->post('email'),
			'username' 	 	=>$this->input->post('username'),
			'password'  	=>$this->input->post('password'),
			);
		 if($this->user_model->update_data($data)) // call the method from the model
  			{
  			echo '<script type="text/javascript">'; 
			echo 'alert("Sucessfully Updated!");'; 
			echo 'window.location.href = "inserted"';
			echo '</script>';
 			 }
 		 else{
  			echo "fail";
  			}
   
	}




	// delete
	public function delete(){
		$this->load->model('user_model');
		$id = $this->input->get('id');
		$this->user_model->delete_id($id);
		redirect(base_url() . "hello/inserted");


	}



}
?>
