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
     	$this ->db-> where("YEARWEEK(`date`, 1) = YEARWEEK(CURDATE(), 1)");
     	$query=$this->db->get();
     	return $query->result_array();
	}

	public function get_class_types()
	{
		$this ->db->select('*');
     	$this ->db-> from('class_type');
     	$query=$this->db->get();
     	return $query->result_array();
	}

}


?>
