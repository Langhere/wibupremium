<?php

class Admin extends Controller {
    public function index(){
        $this->view('templates/headeradmin');
        $this->view('admin/index');
        $this->view('templates/footeradmin');
    }
}