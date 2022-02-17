<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Gejala extends CI_Controller {
  
	public function index()
	{
    $data["gejala"] = $this->GejalaModel->getAll();
    $data["active"] = "gejala";
		$this->load->view("admin/gejala/index", $data);
	}

  public function tambah()
  {
    $data["active"] = "gejala";
		$this->load->view("admin/gejala/tambah", $data); 
  }

  public function edit($id_gejala)
  {
    $data["gejala"] = $this->GejalaModel->getById($id_gejala);
    $data["active"] = "gejala";
		$this->load->view("admin/gejala/edit", $data);
  }

  public function simpan()
  {
    $this->GejalaModel->simpan($this->input->post());
    $this->session->set_flashdata("sukses", "Berhasil tambah data gejala");
    redirect("admin/gejala");
  }

  public function update($id_gejala)
  {
    $this->GejalaModel->update($id_gejala, $this->input->post());
    $this->session->set_flashdata("sukses", "Berhasil edit data gejala");
    redirect("admin/gejala");
  }

  public function hapus($id_gejala)
  {
    $this->GejalaModel->hapus($id_gejala);
    $this->session->set_flashdata("sukses", "Berhasil hapus data gejala");
    redirect("admin/gejala");
  }
}
