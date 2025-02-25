<?php
class form_model extends CI_Model{
    function create($data){
        $this->db->insert('users', $data);
    }
}
?>