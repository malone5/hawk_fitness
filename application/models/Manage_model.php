<?php
class Manage_model extends CI_Model {

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

	public function set_classes()
	{

	    $data = array(
	        'class_type' => $this->input->post('class_type'),
	        'slug' => $slug,
	        'instructor' => $this->input->post('instructor'),
			'location' => $this->input->post('location'),
			'start_time' => $this->input->post('start_time'),
			'date' => $this->input->post('date'),
	    );

	    return $this->db->insert('fit_classes', $data);
	}
    function getClass($id){
         $query = $this->db->get_where('fit_classes', array('id' => $id));
          return $query->row_array();
    }
    
    function insertAttendee($class_type, $fname, $lname, $age, $attendee, $academic, $student_id){
        
        $data = array(
                    'class_type'=>$class_type,
                    'fname'=>$fname,
                    'lname'=>$lname,
                    'age'=>$age,
                    'attendee'=>$attendee,
                    'acad_level'=>$academic,
                    'student_id'=>$student_id,
                    );
        
        return ($this ->db->insert('attendees',$data));
    }
}


?>
