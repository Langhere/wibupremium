<?php

class Home extends Controller {
    public function index(){
        // $this->view('templates/header.php');
        $this->view('home/index');
        // $this->view('templates/footer.php');
    }
}