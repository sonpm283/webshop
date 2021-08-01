<?php

class product extends DController{
    public function __construct()
    {
       parent::__construct();
    }

    public function chitietsanpham() {
        echo 'Chi tiet san pham';
    }

    public function index () {
        $this->load->view('header');
        $this->load->view('product');
        $this->load->view('footer');
    }
}