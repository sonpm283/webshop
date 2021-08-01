<?php

class index extends DController {
    public function __construct()
    {
        $data = [];
        parent::__construct();
    }

    public function home () {
        $this->load->view('header');
        $category = $this->load->model('homemodel');
        $data['category'] = $category->category();
        $this->load->view('home',$data);
        $this->load->view('footer');
    }

}