<?php
class Home extends CI_Controller{
	
	public function index()
	{
            $args = array(
              'template' => array(
                  'content' => 'home/index'
              )  
            );
		$this->load->view('template',$args);
	}
}