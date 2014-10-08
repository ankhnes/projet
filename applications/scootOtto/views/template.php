<?php

$this->load->helper('url');

$this->load->view('template/header');
$this->load->view($template['content']);
$this->load->view('template/footer');