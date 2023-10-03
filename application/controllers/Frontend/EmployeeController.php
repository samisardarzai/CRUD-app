<?php

 defined('BASEPATH') OR exit('No direct script access allowed');
 
 class EmployeeController extends CI_Controller {
 
     public function index (){
      
       $this->load->view('frontend/homepage');
    ;
     }
     public function employee (){
      $this->load->view('template/header');
      $this->load->model('EmployeeModel');
      $data['employee']=$this->EmployeeModel->getEmployee();
       $this->load->view('frontend/employee',$data);
       $this->load->view('template/footer');
     }

     public function create (){
      $this->load->view('template/header');
       $this->load->view('frontend/create');
       $this->load->view('template/footer');
     }

     public function store (){
         
        $this->form_validation->set_rules('first_name','First Name','required');
        $this->form_validation->set_rules('last_name','Last Name','required');
        $this->form_validation->set_rules('email','Email Address','required');
        $this->form_validation->set_rules('phone','Phone Number','required');

        if($this->form_validation->run()){
          $data = [

            'first_name'=>$this->input->post('first_name'),
            'last_name'=>$this->input->post('last_name'),
            'email'=>$this->input->post('email'),
            'phone'=>$this->input->post('phone')
          ];

          $this->load->model('EmployeeModel');
          $this->EmployeeModel->insertEmployee($data);
           redirect(base_url('home/employee'));
          // var_dump($date);
        }
        else{
            //  redirect(base_url('home/employee/add'));
            $this->create();
        }
     
     }
    
     
 }
 
 ?>



