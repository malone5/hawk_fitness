<?php
class Report_model extends CI_Model {

    public function __construct()
    {
        $this->load->database();
    }

    public function getAttendees()
    {
        $query = $this->db->get('attendees');
        return $query->result_array();
    }

}


?>
