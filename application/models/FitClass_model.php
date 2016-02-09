<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class FitClass_model extends CI_Model{
     function __construct()
     {
          // Call the Model constructor
          parent::__construct();
     }

     function get_fitclass_list()
     {

          $query = $this->db->get('fit_classes');

          return $query->result_array();
     }

     function get_fitclass($id)
     {
          $query = $this->db->get_where('fit_classes', array('id' => $id));
          return $query->row_array();
     }

     function insertFitClass() {

          $data = array(
               'class_type' => $this->input->post('class_type'),
               'instructor' => $this->input->post('instructor'),
               'location' => $this->input->post('location'),
               'start_time' => $this->input->post('start_time'),
               'date' => $this->input->post('date'),
          );

          return $this->db->insert('fit_classes', $data);

     }

     function updateFitClass($id) {

          $data = array(
               'class_type' => $this->input->post('class_type'),
               'instructor' => $this->input->post('instructor'),
               'location' => $this->input->post('location'),
               'start_time' => $this->input->post('start_time'),
               'date' => $this->input->post('date'),
          );

          // Get the class type row
          $this->db->where('id', $id);
          return $this->db->update('fit_classes', $data);

     }

     function deleteFitClass($id) {

          // delete the provided FitClass
          return $this->db->delete('fit_classes', array('id' => $id));

     }

}