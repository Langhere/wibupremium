<?php

class manga extends Controller{
    public function index(){
        $this->view('templates/header');
        $this->view('manga/index');
        $this->view('templates/footer');
    }
}