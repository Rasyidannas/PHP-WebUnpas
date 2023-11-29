<?php

class Home extends Controller{//ini extends dari class Controller pd core/Controller.php
    public function index()
    {
        $data['judul']='Home';
        $data['nama'] = $this->model('User_model')->getUser();
        $this->view('templates/header', $data);
        $this->view('home/index', $data);
        $this->view('templates/footer');
    }
}