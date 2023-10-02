<?php

 defined('BASEPATH') OR exit('No direct script access allowed');
 
 class EmployeeController extends CI_Controller {
 
     public function index (){
      $this->load->view('template/header');
       $this->load->view('frontend/employee');
       $this->load->view('template/footer');
     }
     
    
     
 }
 
 ?>



