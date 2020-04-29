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

class News extends MY_Controller
{
	protected $view = 'admin/contents/news/';

	function __construct()
	{
	    parent::__construct();
	}

	public function index()
	{
		$data['content']	= $this->view.'news';
		$data['css']		= $this->view.'css';
		$data['javascript']	= $this->view.'javascript';
		$data['title']		= 'Dashboard';
		$data['sub_title']	= 'News';

		$params = $this->fetch($data);

		$this->load->view('admin/includes/main', $params);
	}
}
