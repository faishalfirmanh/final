<?php
class LoginModel extends CI_Model{
  // defined('BASEPATH') OR exit('No direct script access allowed');
  public function __construct()
	{
		parent::__construct();
		//Do your magic here
	}

  public function login($username,$password)
	{
		$this->db->select('id,username,password');
		$this->db->from('admin');
		$this->db->where('username', $username);
		$this->db->where('password',MD5($password));
		$query=$this->db->get();
		if($query->num_rows()==1)
		{
			return $query->result();
		}
		else
		{
			return false;
		}

	}

  // public function loginAdm($username, $password)
  //     $this->db->select('id, username,password');
  //     $this->db->from('admin');
  //     $this->db->where('username', $username);
  //     $this->db->where('password', md5($password));
  //     $query = $this->$this->db->get();
  //     if ($query->num_rows()==1) {
  //
  //     	return $query->result();
  //     }
  //     else
  //     {
  //     	return false;
  //     }




}
