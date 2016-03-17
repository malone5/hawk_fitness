<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class FitClass_model extends CI_Model{
     function __construct()
     {
          // Call the Model constructor
          parent::__construct();
     }

     function get_fitclass_list()
     {

          $this->db->from('fit_classes');
          $this->db->order_by("date", "desc");
          $query = $this->db->get(); 

          return $query->result_array();
     }

     function get_fitclass($id)
     {
          $query = $this->db->get_where('fit_classes', array('id' => $id));
          return $query->row_array();
     }
    function insertClass($data1,$data2,$data3,$data4,$data5){
            $data=array();
            for($i=0;$i<sizeof($data1);$i++){

                $data[]=array('class_type'=>$data1[$i],
                              'instructor'=>$data2[$i],
                              'location' =>$data3[$i],
                              'start_time'=>$data4[$i],
                              'date'=>$data5[$i]
                             );
            }
            return $this->db->insert_batch('fit_classes',$data);
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
    function batchDelete($data){
        $this->db->where_in('id',$data);
        return $this->db->delete('fit_classes');
    }
}
