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

class Testimonials extends MY_Controller
{
	protected $view = 'admin/contents/testimonials/';

	function __construct()
	{
	    parent::__construct();
	}

	public function index()
	{
		$data['content']	= $this->view.'testimonial';
		$data['css']		= $this->view.'css';
		$data['javascript']	= $this->view.'javascript';
		$data['title']		= 'Dashboard';
		$data['sub_title']	= 'Testimonial';

		$params = $this->fetch($data);

		$this->load->view('admin/includes/main', $params);
	}
}
