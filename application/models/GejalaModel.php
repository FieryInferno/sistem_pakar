<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class GejalaModel extends CI_Model {
  
	public function getAll()
	{
    return $this->db->get("gejala")->result_array();
	}

  public function simpan($data)
  {
    $this->db->insert("gejala", $data);
  }

  public function getById($id_gejala)
  {
    return $this->db->get_where("gejala", ["id_gejala" => $id_gejala])->row_array();
  }

  public function update($id_gejala, $data)
  {
    $this->db->update("gejala", $data, ["id_gejala" => $id_gejala]);
  }

  public function hapus($id_gejala)
  {
    $this->db->delete("gejala", ["id_gejala" => $id_gejala]);
  }
}
