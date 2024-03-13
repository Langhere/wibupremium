<?php

class App {
    protected $controller = 'Home';
    protected $method = 'index';
    protected $param = [];
    public function __construct() {
        $url = $this->parseURL();
        // for admin
        if (!empty($url) && $url[0] == 'admin') {
            $this->controller = 'Admin';
            unset($url[0]);
        }
        // controller
        if(file_exists('../app/controllers/' . $url[0] . '.php')){
            $this->controller = $url[0];
            unset($url[0]);
        }
        require_once('../app/controllers/' . $this->controller . '.php');
        $this->controller = new $this->controller;
        // method
        if(isset($url[1])){
            if(method_exists($this->controller, $url[1])){
                $this->method = $url[1];
                unset($url[1]);
            }
        }
        // param
        // cek dlu kalo array $url masih ada sisa berarti ada paramater
        if (!empty($url)) {
            $this->param = array_values($url);
        } 
        
        call_user_func_array([$this->controller, $this->method], $this->param);
    }

    public function parseURL() {
        if(isset($_GET['url'])){
            $url = rtrim($_GET['url'], '/');
            $url = filter_var($url, FILTER_SANITIZE_URL);
            $url = explode('/', $url);
            return $url;
        }
    }

}