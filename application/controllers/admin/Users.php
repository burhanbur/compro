<?php

/**
 * This is an example of a few basic user interaction methods you could use
 * all done with a hardcoded array
 *
 * @package         sprigan
 * @category        company-profile
 * @author          Burhan Mafazi | burhanmafazi@gmail.com
 * @link            https://burhanmafazi.xyz
 */

defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends MY_Controller
{
	protected $view = 'admin/contents/users/';

	function __construct()
	{
	    parent::__construct();
	}

	public function user()
	{
		$data['content']	= $this->view.'user';
		$data['css']		= $this->view.'css';
		$data['javascript']	= $this->view.'javascript';
		$data['title']		= 'Users';
		$data['sub_title']	= 'User';
		$data['list_role']	= $this->db->select('*')->from('ref_role')->get()->result();

		$params = $this->fetch($data);

		$this->load->view('admin/includes/main', $params);
	}

	public function role()
	{
		$data['content']	= $this->view.'role';
		$data['css']		= $this->view.'css';
		$data['javascript']	= $this->view.'javascript';
		$data['title']		= 'Users';
		$data['sub_title']	= 'Role';
		$data['list_role']	= $this->db->select('*')->from('ref_role')->get()->result();

		$params = $this->fetch($data);

		$this->load->view('admin/includes/main', $params);
	}
}
