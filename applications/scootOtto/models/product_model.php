<?php
class Product_model extends CI_Model
{
    public $model,
            $reference,
            $description,
            $availability,
            $price,
            $specialPrice,
            $idCategory,
            $idBrand;
    
    public function createProduct($model, $reference, $description, $availability, $price, $specialPrice, $idCategory, $idBrand) {
        
        $flag = false;
        if(isset($model) && !empty($model) && isset($reference) && !empty($reference) && isset($description) && !empty($description) && isset($availability) && !empty($availability) 
                && isset($price) && !empty($price) && isset($specialPrice) && !empty($specialPrice)  && isset($idCategory) && !empty($idCategory) && isset($idCategory) && !empty($idBrand))
        {
            $this->model = $model;
            $this->reference = $reference;
            $this->description = $description;
            $this->availability = $availability;
            $this->price = $price;
            $this->specialPrice = $specialPrice;
            $this->idCategory = $idCategory;
            $this->idBrand = $idBrand;
            
            $this->db->insert('Product', $this);
            
            if ($this->db->affected_rows() > 0)
            {
                $this->id = $this->db->insert_id();
                $flag = true;
            }
        }
        return $flag;
    }
    public function getProduct($idCategory){
        
        
    }
}
