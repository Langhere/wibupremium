<?php

class favorit extends Controller{
    public function index(){
        $this->view('templates/header');
        $this->view('favorit/index');
        $this->view('templates/footer');
    }
}