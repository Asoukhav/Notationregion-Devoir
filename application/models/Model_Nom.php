<?php

class Model_Nom extends CI_Model
{
    public function getAllNoms()
    {
        $sql =$this->db->query('select statutUser,nomUser from user');
        return $sql->result();
    }
}






?>