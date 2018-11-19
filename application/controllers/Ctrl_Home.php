<?php

class Ctrl_Home extends CI_Controller
{
    public function index()
    {   
        
        $this->load->model('Model_Nom');
        $data['lesNoms'] = $this->Model_Nom->getAllNoms();

        $this->load->view('View_Home',$data);
    }

    public function AfficherLesRegions()
    {
        $idVille= $_GET['idVille'];
        $this->load->model('Model_Region');
        $data['lesRegions']= $this->Model_Region->getAllRegions($idVille);

        $this->load->view('View_Region',$data);
    }

    public function AfficherLesVilles()
    {
        
        $this->load->model('Model_Ville');
        $data['lesVilles']= $this->Model_Ville->getAllVille();

        $this->load->view('View_Ville',$data);
    }



}




?>