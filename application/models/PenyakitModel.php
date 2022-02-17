<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PenyakitModel extends CI_Model {
  
	public function getAll()
	{
    return $this->db->get("penyakit")->result_array();
	}

  public function simpan($data)
  {
    $this->db->insert("penyakit", $data);
  }

  public function getById($id_penyakit)
  {
    return $this->db->get_where("penyakit", ["id_penyakit" => $id_penyakit])->row_array();
  }

  public function update($id_penyakit, $data)
  {
    $this->db->update("penyakit", $data, ["id_penyakit" => $id_penyakit]);
  }

  public function hapus($id_penyakit)
  {
    $this->db->delete("penyakit", ["id_penyakit" => $id_penyakit]);
  }
}
