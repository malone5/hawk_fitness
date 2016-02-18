<?php
class Home_model extends CI_Model {

	public function __construct()
	{
		$this->load->database();
	}

	public function get_classes()
	{  
        $this ->db->select('*');
        $this ->db-> from('fit_classes');
        $query=$this->db->get();
        return $query->result();
	}

}


?>
