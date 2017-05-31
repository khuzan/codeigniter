<?php

	class User_model extends CI_model{
		
		
		//login
		function user_login($username,$password){
			$this->db->where('username', $username);
			$this->db->where('password', $password);
			$query = $this->db->get('user'); 
			//SELECT * from user WHERE username = '$username' AND password = '$password';

			if ($query->num_rows()>0) {
				return true;
			}
			else{
				return false;
			}

		}

		// create
		function insert_data($data){
			$this->db->insert('user',$data); //<--- INSERT INTO BLA BLABLA
		}

		function get_data(){

			$this->load->database();
			$query = $this->db->query("SELECT * from user");
			$query->result_array();
			return $query->result_array();
		}

		
		// delete
		function delete_id($id){
			$this->load->database();
			$this->db->where('id', $id);
			$this->db->delete('user');
			return true;
		}
		// update
		function getuser($record_id){
			$query = $this->db->get_where('user', array('id' => $record_id));// SELECT from table where id = id
			if ($query->num_rows() > 0) {
				return $query->row();
			}
		}
		public function update_data($data){

			
			extract($data);
		    $this->db->where('id',$id);
		    $this->db->update('user',$data);
		     return true;
		}
		


	}

?>
