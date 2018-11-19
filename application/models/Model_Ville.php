<?php

class Model_Ville extends CI_Model
{
    public function getAllVille()
    {
        $sql= $this->db->query('select nomVille, scoreVille from ville');
        return $sql->result();
    }

}

?>