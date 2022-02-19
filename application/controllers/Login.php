<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
  
	public function index()
	{
		$this->load->view('login');
	}

  public function auth()
  {
    $result = $this->LoginModel->login($this->input->post());

    if ($result) {
      redirect("admin");
    } else {
      $this->session->set_flashdata("error", "Username atau password salah");
      redirect($_SERVER['HTTP_REFERER']);
    }
  }

  public function logout()
  {
    $this->session->sess_destroy();
    redirect();
  }
}
