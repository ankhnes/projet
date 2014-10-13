<?php
/**
 * Created by PhpStorm.
 * User: Jérémy
 * Date: 12/10/2014
 * Time: 16:54
 */

class Category_controller extends CI_Controller{

    public function getList()
    {
        $this->load->model('category_model');
        $categories = o;
    }
}