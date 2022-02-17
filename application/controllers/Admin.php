<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
  
	public function index()
	{
    $data["active"] = "dashboard";
		$this->load->view('admin/index', $data);
	}
}
