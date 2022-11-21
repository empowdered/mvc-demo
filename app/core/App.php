<?php

class App {

    protected $controller = 'home';
    protected $method = 'index';
    protected $params = array();

    public $url = null;
    
    function __construct() {
        $this->url = $this->parseUrl();
        if(file_exists('../app/controllers/' . $url[0]. '.php')){
            $this->controller = $url[0];
            unset($url[0]);
        }
    }

    function parseUrl() {
        if (isset($_GET['url'])) {
            //echo $_GET['url'];
            $url = explode('/',filter_var(rtrim($_GET['url'],'/')),FILTER_SANITIZE_URL);
            print_r($url);
            
        }
    }

}
