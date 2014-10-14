<?php
/**
 * User: Mike
 * Date: 14/10/2014
 * Time: 12:05
 */

class Brand extends CI_Controller
{
    public function getList()
    {
        $this->load->model('brand_model');
        $brands = $this->brand_model->getList();

        $this->load->view('brand/list', array('brands' => $brands));
    }
}