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


}