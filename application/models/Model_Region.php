<?php

class Model_Region extends CI_Model

{
    public function getAllRegions()
    {
        $sql=$this->db->query('select nomRegion, scoreRegion from region');
        return $sql->result();

    }
}








?>