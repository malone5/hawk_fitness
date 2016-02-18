<?php
class Manage_model extends CI_Model {

	public function __construct()
	{
		$this->load->database();
	}

	public function get_classes()
	{
		
		$query = $this->db->get('fit_classes');
		return $query->result_array();

	}

	public function set_classes() 
	{
		
	    $data = array(
	        'class_type' => $this->input->post('class_type'),
	        'instructor' => $this->input->post('instructor'),
			'location' => $this->input->post('location'),
			'start_time' => $this->input->post('start_time'),
			'date' => $this->input->post('date'),
	    );

	    return $this->db->insert('fit_classes', $data);
	}
}


?>