<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LoginModel extends CI_Model {
  
	public function login($data)
	{
    $result = $this->db->get_where("admin", [
      "username"  => $data["username"],
      "password"  => $data["password"],
    ]);

    if ($result) {
      return TRUE;
    } else {
      return FALSE;
    }
	}
}
