<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class RelasiModel extends CI_Model {
  
	public function getAll()
	{
    $this->db->join("penyakit", "relasi.penyakit_id = penyakit.id_penyakit");
    return $this->db->get("relasi")->result_array();
	}

  public function simpan($data)
  {
    $this->db->insert("relasi", [
      "penyakit_id" => $data["penyakit"],
      "gejala_id"   => json_encode($data["gejala"]),
    ]);
  }

  public function getById($id_relasi)
  {
    return $this->db->get_where("relasi", ["id_relasi" => $id_relasi])->row_array();
  }

  public function update($id_relasi, $data)
  {
    $this->db->update("relasi", [
      "penyakit_id" => $data["penyakit"],
      "gejala_id"   => json_encode($data["gejala"]),
    ], ["id_relasi" => $id_relasi]);
  }

  public function hapus($id_relasi)
  {
    $this->db->delete("relasi", ["id_relasi" => $id_relasi]);
  }

  public function getPenyakit($data)
  {
    $this->db->join("penyakit", "relasi.penyakit_id = penyakit.id_penyakit");
    return $this->db->get_where("relasi", ["gejala_id" => $data])->row_array();
  }
}
