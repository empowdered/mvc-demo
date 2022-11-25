<?php

class App {

    protected $controller = 'home';
    protected $method = 'index';
    protected $params = [];

    //public $url = null;

    function __construct() {

        $url = $this->parseUrl();

        //echo "<pre>";
        //print_r($url);

        if (isset($url[0]) && file_exists('../app/controllers/' . $url[0] . '.php')) {
            $this->controller = $url[0];
            unset($url[0]);
        }

        require_once '../app/controllers/' . $this->controller . '.php';

        $this->controller = new $this->controller;

        if (isset($url[1])) {
            if (method_exists($this->controller, $url[1])) {
                //echo 'Ok';
                $this->method = $url[1];
                unset($url[1]);
            }
        }

        //$this->params = array_values($url);
        $this->params = $url ? array_values($url) : [];
        
        call_user_func_array([$this->controller,$this->method],$this->params);
        
        //print_r($url);
        //echo "</pre>";
    }

    function parseUrl() {
        if (isset($_GET['url'])) {
            //echo $_GET['url'];
            $url = explode('/', filter_var(rtrim($_GET['url'], '/')), FILTER_SANITIZE_URL);
            //print_r($url);
            return $url;
        }
    }

}
