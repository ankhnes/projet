<?php
class Product extends CI_Controller
{

    public function create()
    {
        $this->load->helper('form');
        $this->load->library('form_validation');

        $this->form_validation->set_rules('model', 'Model', 'trim|xss_clean|required');
        $this->form_validation->set_rules('description', 'Description', 'trim|xss_clean|required');
        $this->form_validation->set_rules('price', 'Price', 'trim|xss_clean|required');
        $this->form_validation->set_rules('specialPrice', 'SpecialPrice', 'trim|xss_clean|required');
        $this->form_validation->set_rules('availability', 'Availability', 'trim|xss_clean|required');
        $this->form_validation->set_rules('category', 'Category', 'trim|xss_clean|required');
        $this->form_validation->set_rules('brand', 'Brand', 'trim|xss_clean|required');

        if ($this->form_validation->run() == FALSE)
        {
            $this->load->view('product/create');
        }
        else
        {
            $this->load->view('success');
        }

    }
}