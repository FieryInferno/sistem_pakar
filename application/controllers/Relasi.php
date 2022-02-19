<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Relasi extends CI_Controller {
  
	public function index()
	{
    $data["relasi"] = $this->RelasiModel->getAll();

    for ($i=0; $i < count($data["relasi"]); $i++) {
      $gejala  = json_decode($data["relasi"][$i]["gejala_id"]);

      for ($j=0; $j < count($gejala); $j++) {
        $gejala[$j] = $this->GejalaModel->getGejalaName($gejala[$j]);
      }

      $data["relasi"][$i]["gejala_id"]  = $gejala;
    }
    $data["active"] = "relasi";
		$this->load->view("admin/relasi/index", $data);
	}

  public function tambah()
  {
    $data["active"]   = "relasi";
    $data["penyakit"] = $this->PenyakitModel->getAll();
    $data["gejala"]   = $this->GejalaModel->getAll();
		$this->load->view("admin/relasi/tambah", $data); 
  }

  public function edit($id_relasi)
  {
    $data["relasi"] = $this->RelasiModel->getById($id_relasi);
    $data["active"]   = "relasi";
    $data["penyakit"] = $this->PenyakitModel->getAll();
    $data["gejala"]   = $this->GejalaModel->getAll();
		$this->load->view("admin/relasi/edit", $data);
  }

  public function simpan()
  {
    $this->RelasiModel->simpan($this->input->post());
    $this->session->set_flashdata("sukses", "Berhasil tambah data relasi");
    redirect("admin/relasi");
  }

  public function update($id_relasi)
  {
    $this->RelasiModel->update($id_relasi, $this->input->post());
    $this->session->set_flashdata("sukses", "Berhasil edit data relasi");
    redirect("admin/relasi");
  }

  public function hapus($id_relasi)
  {
    $this->RelasiModel->hapus($id_relasi);
    $this->session->set_flashdata("sukses", "Berhasil hapus data relasi");
    redirect("admin/relasi");
  }
}
