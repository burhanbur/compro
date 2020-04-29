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

class Media extends MY_Controller
{
	protected $view = 'admin/contents/media/';

	function __construct()
	{
	    parent::__construct();
	}

	public function index()
	{
		$data['content']	= $this->view.'library';
		$data['css']		= $this->view.'css';
		$data['javascript']	= $this->view.'javascript';
		$data['title']		= 'Media';
		$data['sub_title']	= 'Library';

		$params = $this->fetch($data);

		$this->load->view('admin/includes/main', $params);
	}

	public function store()
	{
		$count = count($_FILES['files']['name']);

		for ($i=0; $i < $count; $i++) {
			if(!empty($_FILES['files']['name'][$i])){
				$_FILES['file']['name'] = $_FILES['files']['name'][$i];
				$_FILES['file']['type'] = $_FILES['files']['type'][$i];
				$_FILES['file']['tmp_name'] = $_FILES['files']['tmp_name'][$i];
				$_FILES['file']['error'] = $_FILES['files']['error'][$i];
				$_FILES['file']['size'] = $_FILES['files']['size'][$i];

				$conf = $this->_upload($_FILES['files']['name'][$i], $_FILES['files']['type'][$i]);

				$this->upload->initialize($conf);

				if($this->upload->do_upload('file')){
					$upload = $this->upload->data();

					$data = array(
						'file_name' => $upload['file_name'],
						'file_size' => round($upload['file_size']),
						'file_type' => $upload['file_type'],
						'file_ext' => $upload['file_ext'],
						'created_at' => date($this->_conf()->date_format.' '.$this->_conf()->time_format)
					);

					if ($this->db->insert('media', $data)) {
						$this->session->set_flashdata('success','Upload file success');
					} else {
						$this->session->set_flashdata('error', $this->upload->display_errors());
					}
				} else {
					$this->session->set_flashdata('error', $this->upload->display_errors());
				}
			} else {
				$this->session->set_flashdata('error', $this->upload->display_errors());
			}
		}

		redirect('/admin/media');
	}
}
