<?php

class Controller{
    
    function __construct() {
       //echo 'home/index <br>';
    }
    
    protected function model($model){
        require_once '../app/models/' . $model . '.php';
        return new $model;
    }
    
    function view($view,$data=[]){
        require_once '../app/views/' . $view .'.php';
        
    }
    
    function test(){
        echo 'test';
    }
}
