<?php
defined ('BASEPATH') OR exit ("no direct script");

class HomeModel extends CI_Model{
    public function sum (){
        $a=10;
        $b=40;
        return $a+$b;
    }
    public function num (){
        $a=10;
        $b=40;
        return $a*$b;
    }
}