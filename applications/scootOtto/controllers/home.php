<?php
class Home extends CI_Controller{
	
	public function index()
	{
            $args = array(
              'template' => array(
                  'content' => 'home/index',
                  'title' => 'Otto-Bruc scooters'
              )  
            );
		$this->load->view('template',$args);
	}
}