<?php

 defined('BASEPATH') OR exit('No direct script access allowed');
 
 class EmployeeController extends CI_Controller {
 
     public function index (){
      
       $this->load->view('frontend/homepage');
    ;
     }
     public function employee (){
      $this->load->view('template/header');
       $this->load->view('frontend/employee');
       $this->load->view('template/footer');
     }

     public function create (){
      $this->load->view('template/header');
       $this->load->view('frontend/create');
       $this->load->view('template/footer');
     }
     public function store (){
        $date = [
          'frist_name'=>$this->input->post('frist_name'),
          'last_name'=>$this->input->post('last_name'),
          'email'=>$this->input->post('email'),
          'phone'=>$this->input->post('phone')
        ];
        var_dump($date);
     }
    
     
 }
 
 ?>



