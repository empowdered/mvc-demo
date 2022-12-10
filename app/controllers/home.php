<?php

class Home extends Controller {

   protected $user;
    
    function __construct(){
        $this->user = $this->model('User');
    }
    function index($name = '') {
        $user = $this->user;
        $user->name = $name;
        //echo $user->name;
        $this->view('home/index', ['name' => $user->name]);
    }
    //public function index($name=''){
        //$this->view('home/index',['name' => $user->name]);
    //}

    public function create($username = '', $email = '') {
        User::create([
            'username' => $username,
            'email' => $email
        ]);
    }

}
