<?php
Class User_model extends CI_Model {

	function login ($username, $password) {
		$this->db->select('id, uname, pword');
		$this->db->from('users');
		$this->db->where('uname', $username);
		$this->db->where('pword', $password);
		$this->db->limit(1);

		$query = $this->db->get();

		if($query->num_rows() == 1) {
			return $query->result();
		} else {
			return false;
		}
	}
	function getUser($id){
			$this->db->select('*');
			$this->db->from('users');
			$this->db->where('id',$id);
			$query = $this->db->get();
			if($query ->num_rows()==1){
				return $query->row_array();
			}
	}
	function getUserID($uname){
			$this->db->select('id, role');
			$this->db->from('users');
			$this->db->where('uname',$uname);
			$query = $this->db->get();
			if($query ->num_rows()==1){
				return $query->row_array();
			}
	}

  function checkPassword($id){
        $this->db->select('uname, pword');
        $this->db->from('users');
        $this->db->where('id',$id);
        $query = $this->db->get();
        if($query ->num_rows()==1)
        return $query->row_array();

    }
		function updateUsername($uname,$id){
				$this->db->set('uname', $uname);
				$this->db->where('id', $id);
				$this->db->update('users');
				return true;
		}
    function updatePassword($password, $id){
        $this->db->set('pword', $password);
        $this->db->where('id', $id);
        $this->db->update('users');
        return true;
    }
		function checkUsername($uname){
				$this->db->select('id');
				$this->db->from('users');
				$this->db->where('uname',$uname);
				$query = $this->db->get();
				if($query ->num_rows()==1){
					return true;
				}
				else{
					return false;
				}
		}
}

?>
