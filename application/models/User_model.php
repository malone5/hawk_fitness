<?php 
Class User_model extends CI_Model {

	function login ($username, $password) 
    {
		$this->db->select('id, uname, pword');
		$this->db->from('users');
		$this->db->where('uname', $username);
		$this->db->where('pword', $password);
		$this->db->limit(1);

		$query = $this->db->get();

		if($query->num_rows() == 1) 
        {

			return $query->result();

		} else {

			return false;

		}
	}
    function checkEmail($email)
    {
        $this->db->select('id, uname');
        $this->db->from('users');
        $this->db->where('email',$email);
        $query = $this->db->get();
        if($query ->num_rows()==1)
        return true;
        
    }

    function updatePassword($email, $password)
    {
        $this->db->set('pword', $password);
        $this->db->where('email', $email);
        $this->db->update('users');
        return true;
    }
}

?>
