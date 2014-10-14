<?php
class Product extends CI_Controller
{

    public function create()
    {
        $this->load->helper('form');
        $this->load->library('form_validation');

        $this->form_validation->set_rules('model', 'model', 'trim|xss_clean|required');
        $this->form_validation->set_rules('reference', 'reference', 'trim|xss_clean|required');
        $this->form_validation->set_rules('description', 'description', 'trim|xss_clean|required');
        $this->form_validation->set_rules('price', 'price', 'trim|xss_clean|required');
        $this->form_validation->set_rules('specialPrice', 'specialPrice', 'trim|xss_clean|required');
        $this->form_validation->set_rules('availability', 'availability', 'trim|xss_clean|required');
        $this->form_validation->set_rules('category', 'category', 'trim|xss_clean|required');
        $this->form_validation->set_rules('brand', 'brand', 'trim|xss_clean|required');

        $this->load->model('category_model');
        $aCategory = $this->category_model->getList();

        $this->load->model('brand_model');
        $aBrand = $this->brand_model->getList();

        $aAvailability = array('stock','out','waiting','deleted');

        if ($this->form_validation->run() == FALSE)
        {

            $this->load->view('product/create', array('aCategory' => $aCategory, 'aBrand' => $aBrand,'aAvailability' => $aAvailability));
        }
        else
        {
            $model = $this->input->product('model');
            $reference = $this->input->product('reference');
            $description = $this->input->product('description');
            $price = $this->input->product('price');
            $specialPrice = $this->input->product('specialPrice');
            $availability = $this->input->product('availability');
            $category = $this->input->product('idCategory');
            $brand = $this->input->product('idBrand');

            $this->load->model('product_model');
            $flag = $this->product_model->create($model, $reference, $description, $availability, $price, $specialPrice, $category, $brand);

            if($flag === true)
            {
                $this->load->view('formsuccess');
            }
            else
            {
                //$this->load->view('success2');
                $this->load->view('product/create', array('aCategories' => $aCategory, 'aBrand' => $aBrand));
            }
        }

    }
}