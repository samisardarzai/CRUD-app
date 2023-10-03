<?php
defined ('BASEPATH') OR exit ("no direct script");

class EmployeeModel extends CI_Model{
    public function insertEmployee($data){

       return $this->db->insert('employee',$data);
    }
}

?>