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

class Mailbox extends MY_Controller
{
	protected $view = 'admin/contents/mailbox/';

	function __construct()
	{
	    parent::__construct();
	}

	public function inbox()
	{
		$data['content']	= $this->view.'inbox';
		$data['css']		= $this->view.'css';
		$data['javascript']	= $this->view.'javascript';
		$data['title']		= 'Mailbox';
		$data['sub_title']	= 'Inbox';

		$params = $this->fetch($data);

		$this->load->view('admin/includes/main', $params);
	}

	public function compose()
	{
		$data['content']	= $this->view.'compose';
		$data['css']		= $this->view.'css';
		$data['javascript']	= $this->view.'javascript';
		$data['title']		= 'Mailbox';
		$data['sub_title']	= 'Compose';

		$params = $this->fetch($data);

		$this->load->view('admin/includes/main', $params);
	}

	public function read()
	{
		$data['content']	= $this->view.'read';
		$data['css']		= $this->view.'css';
		$data['javascript']	= $this->view.'javascript';
		$data['title']		= 'Mailbox';
		$data['sub_title']	= 'Read';

		$params = $this->fetch($data);

		$this->load->view('admin/includes/main', $params);
	}
}
