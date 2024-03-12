<?php

class Modebaca extends Controller{
    public function index(){
        $this->view('templates/header');
        $this->view('mode_baca/index');
        // $this->view('templates/footer');
    }
}