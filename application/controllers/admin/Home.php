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

class Home extends MY_Controller
{
	protected $view = 'admin/contents/';

	function __construct()
	{
	    parent::__construct();
	}

	public function index()
	{
		$data['content']	= $this->view.'dashboard';
		$data['css']		= '';
		$data['javascript']	= $this->view.'javascript';
		$data['title']		= 'Dashboard';
		$data['sub_title']	= 'Home';

		$params = $this->fetch($data);

		$this->load->view('admin/includes/main', $params);
	}
}
