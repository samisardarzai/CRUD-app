<?php
defined ('BASEPATH') OR exit ("no direct script");

class EmployeeModel extends CI_Model{

    public function getEmployee(){
        $query= $this->db->get('employee');
        return $query->result();
    }
    public function insertEmployee($data){

       return $this->db->insert('employee',$data);
    }

    public function get
}

?>