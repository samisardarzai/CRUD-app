<?php

 defined('BASEPATH') OR exit('No direct script access allowed');
 
 class EmployeeController extends CI_Controller {
 
     public function index (){
       
       $this->load->view('frontend/employee');
     }
     
    
     
 }
 
 ?>



