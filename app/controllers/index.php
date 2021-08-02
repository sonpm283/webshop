<?php

class index extends DController {
    public function __construct()
    {
        $data = [];
        parent::__construct();
    }

    public function home () {
        $this->load->view('header');

        $homemodel = $this->load->model('homemodel');
        $category_product = 'category_product';
        $data['category'] = $homemodel->category($category_product);
        $this->load->view('home',$data);
        $this->load->view('footer');
    }

}