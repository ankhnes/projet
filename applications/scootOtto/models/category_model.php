<?php

class Category_model extends CI_Model{

    public function getList()
    {
        $query = $this->db->get('category');

        return $query->result('Category_model');
    }
}