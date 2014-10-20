<?php
/**
 * User: Jérémy
 * Date: 14/10/2014
 * Time: 12:00
 */
class Brand_model extends CI_Model
{
    public function getList()
    {
        $query = $this->db->get('Brand');
        return $query->result();
    }
}