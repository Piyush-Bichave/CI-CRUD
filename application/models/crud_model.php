<?php

class Crud_model extends CI_model
{
    public function getAllProducts()
    {
        $query=$this->db->get('products');

        if($query)
        {
            return $query->result();


        }

    }

    public function insertProduct($data)
    {
        $query=$this->db->insert('products' ,$data);  
        if($query)
        {
            return true;
        }   
        else
        {
            return false;
        }
    }

    public function getSingleProduct($id)
    {
        $this->db->where('id',$id);
        $query=$this->db->get('products');
       
            return $query->row_array();
        

    }

    public function updateProduct($id,$formArray)
    {
        $this->db->where('id',$id);  
        $this->db->update('products',$formArray);

    }


    public function deleteItem($id)
    {
        $this->db->where('id',$id);
        $query=$this->db->delete('products');
        if($query)
        {
            return true;

        }
        else
        {
            return false;
        }
    }

}

?>