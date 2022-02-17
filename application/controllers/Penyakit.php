<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Penyakit extends CI_Controller {
  
	public function index()
	{
    $data["penyakit"] = $this->PenyakitModel->getAll();
    $data["active"] = "penyakit";
		$this->load->view("admin/penyakit/index", $data);
	}

  public function tambah()
  {
    $data["active"] = "penyakit";
		$this->load->view("admin/penyakit/tambah", $data); 
  }

  public function edit($id_penyakit)
  {
    $data["penyakit"] = $this->PenyakitModel->getById($id_penyakit);
    $data["active"] = "penyakit";
		$this->load->view("admin/penyakit/edit", $data);
  }

  public function simpan()
  {
    $this->PenyakitModel->simpan($this->input->post());
    $this->session->set_flashdata("sukses", "Berhasil tambah data penyakit");
    redirect("admin/penyakit");
  }

  public function update($id_penyakit)
  {
    $this->PenyakitModel->update($id_penyakit, $this->input->post());
    $this->session->set_flashdata("sukses", "Berhasil edit data penyakit");
    redirect("admin/penyakit");
  }

  public function hapus($id_penyakit)
  {
    $this->PenyakitModel->hapus($id_penyakit);
    $this->session->set_flashdata("sukses", "Berhasil hapus data penyakit");
    redirect("admin/penyakit");
  }
}
