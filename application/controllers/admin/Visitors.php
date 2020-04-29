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

class Visitors extends MY_Controller
{
	protected $view = 'admin/contents/visitors/';

	function __construct()
	{
	    parent::__construct();
	    $this->load->model('visitor');
	}

	public function index()
	{
		$data['content']	= $this->view.'visitor';
		$data['css']		= $this->view.'css';
		$data['javascript']	= $this->view.'javascript';
		$data['title']		= 'Reports';
		$data['sub_title']	= 'Visitor';

		$data['visitor']	= $this->visitor->visitors();

		$params = $this->fetch($data);
		
		$this->load->view('admin/includes/main', $params);
	}
}
