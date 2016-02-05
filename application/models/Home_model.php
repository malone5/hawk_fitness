<?php
class Home_model extends CI_Model {

	public function __construct()
	{
		$this->load->database();
	}

	public function get_classes($slug = FALSE)
	{  
        $this ->db->select('*');
        $this ->db-> from('fit_classes');
        $this ->db->join('class_type','fit_Classes.class_type=class_type.id');
        $query=$this->db->get();
        return $query->result();
	}

}


?>
