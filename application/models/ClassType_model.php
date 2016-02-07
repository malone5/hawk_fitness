<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class ClassType_model extends CI_Model{
     function __construct()
     {
          // Call the Model constructor
          parent::__construct();
     }

     //read the department list from db
     function get_classtype_list()
     {
          $query = $this->db->get_where('class_type');
          return $query->result_array();
     }

     function get_classtype_names()
     {
          $query = $this->db->query('SELECT id, name FROM class_type');
          return $query->result_array();

     }

     function get_classtype($id)
     {
          $query = $this->db->get_where('class_type', array('id' => $id));
          return $query->row_array();
     }



     function insertClasstype() {

          $data = array(
               'name' => $this->input->post('name'),
               'description' => $this->input->post('description'),
               );

          return $this->db->insert('class_type', $data);

     }

     function updateClasstype($id) {

          $data = array(
               'name' => $this->input->post('name'),
               'description' => $this->input->post('description'),
               );

          // Get the class type row
          $this->db->where('id', $id);
          return $this->db->update('class_type', $data);

     }

     function deleteClasstype($id) {

          // delete the provided classtype
          return $this->db->delete('class_type', array('id' => $id));

     }

}