<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class HomeController extends CI_Controller {

    public function index (){
      $this->load->model('homemodel');
      $data['sum']= $this->homemodel->sum();
      $data['num']= $this->homemodel->num();
      $this->load->view('welcome_message',$data);
    }
    
   
    
}

?>