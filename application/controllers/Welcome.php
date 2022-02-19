<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
  
	public function index()
	{
    $data["gejala"]   = $this->GejalaModel->getAll();
		$this->load->view('welcome_message', $data);
	}

  public function cekPenyakit()
  {
    $data["hasil"]  = $this->RelasiModel->getPenyakit(json_encode($this->input->post("gejala")));
    $this->load->view("hasil", $data);
  }
}
