<?php

class Manga extends Controller {
    public function index() {
        $this->view('templates/header');
        $this->view('templates/navbar');
        $this->view('manga/index');
        $this->view('templates/footer');
    }
}