<?php

/**
 * This is an example of a few basic user interaction methods you could use
 * all done with a hardcoded array
 *
 * @package         spriganx
 * @category        company-profile
 * @author          Burhan Mafazi | burhanmafazi@gmail.com
 * @link            https://burhanmafazi.xyz
 */

defined('BASEPATH') OR exit('No direct script access allowed');

class Authorization extends CI_Model 
{
	public function auth()
	{        
		if(empty($this->session->userdata('username')))
		{
			$this->session->sess_destroy();
			redirect('login');
		}
    }	
    
    public function login($data)
	{
		$this->db->select('t.user_id, t.role_id, u.username, u.lastlogin, u.status, rr.id as role_id');
		$this->db->from('login as t');
		$this->db->join('users as u', 'u.id = t.user_id');
		$this->db->join('ref_role as rr', 'rr.id = t.role_id');
		$this->db->where('u.username', $data['username']);
		$this->db->where('u.password', $data['password']);

		$query = $this->db->get();
		return $query;
	}

	public function getUser($id){
		$this->db->select('name, avatar, email');
		$this->db->from('users');
		$this->db->where('id', $id);

		$query = $this->db->get();
		return $query->row();
	}

	public function getRole($id){
		$this->db->select('*');
		$this->db->from('ref_role as t');
		$this->db->join('login as l', 'l.role_id = t.id');
		$this->db->where('l.user_id', $id);

		$query = $this->db->get();
		return $query;
	}

	public function getMenu(){
		$role = $this->session->userdata('role');
		$id = $this->session->userdata('id');

		$array = array('user_id' => $id, 'role_id' => $role);

		$this->db->select('*');
		$this->db->from('login');
		$this->db->where($array);

		$query = $this->db->get();
		return $query;
	}

	public function getCountRole($id){
		$this->db->select('*');
		$this->db->from('login');
		$this->db->where('user_id', $id);

		$query = $this->db->get();
		return $query;
	}
}
