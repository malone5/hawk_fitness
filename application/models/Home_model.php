<?php
class Home_model extends CI_Model {

	public function __construct()
	{
		$this->load->database();
	}

	public function get_classes($slug = FALSE)
	{
		if ($slug === FALSE)
		{
			$query = $this->db->get('fit_classes');
			return $query->result_array();
		}

		$query = $this->db->get_where('fit_classes', array('slug' => $slug));
		return $query->row_array();
	}

}


?>
