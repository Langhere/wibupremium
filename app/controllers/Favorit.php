<?php

class Favorit extends Controller{
    public function index(){
        $this->view('templates/header');
        $this->view('templates/navbar');
        $this->view('favorit/index');
        $this->view('templates/footer');
    }
}