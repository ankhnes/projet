<?php

class Category extends CI_Controller
{

    public function getList()
    {
        $this->load->model('category_model');
        $categories = $this->category_model->getList();
        $this->load->view('category/list', array('categories' => $categories));
    }
    
    public function hello()
    {
        $hello = 'Hello world';
        $this->load->view('category/hello.php',array('hello' => $hello));
    }
}