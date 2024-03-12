<?php

class Baca extends Controller {
    public function index(){
        $this->view('templates/header');
        $this->view('templates/navbar');
        $this->view('baca/index');
    }
}