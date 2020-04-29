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

class Setting extends MY_Controller
{
	protected $view = 'admin/contents/setting/';
	protected $general = 'config_general';
	protected $media = 'config_media';
	protected $profile = 'profile';

	function __construct()
	{
	    parent::__construct();
	}

	public function general()
	{		
		$data['content']	= $this->view.'general';
		$data['css']		= $this->view.'css';
		$data['javascript']	= $this->view.'javascript';
		$data['title']		= 'Settings';
		$data['sub_title']	= 'General';

		$data['config']		= $this->db->select('*')->from($this->general)->get()->row();
		$data['list_timezone'] = $this->list_timezone();
		$data['language']	= $this->db->select('*')->from('language')->get()->result();
		$data['list_role']	= $this->db->select('*')->from('ref_role')->get()->result();

		$params = $this->fetch($data);
		
		$this->load->view('admin/includes/main', $params);
	}

	public function mail()
	{
		$data['content']	= $this->view.'mail';
		$data['css']		= $this->view.'css';
		$data['javascript']	= $this->view.'javascript';
		$data['title']		= 'Settings';
		$data['sub_title']	= 'Mail';

		$params = $this->fetch($data);

		$this->load->view('admin/includes/main', $params);
	}

	public function media()
	{
		$data['content']	= $this->view.'media';
		$data['css']		= $this->view.'css';
		$data['javascript']	= $this->view.'javascript';
		$data['title']		= 'Settings';
		$data['sub_title']	= 'Media';

		$data['config']		= $this->db->select('*')->from($this->media)->get()->row();

		$params = $this->fetch($data);

		$this->load->view('admin/includes/main', $params);
	}

	public function update_profile()
	{
		$data = array(
			'company' => $this->input->post('company'),
			'email' => $this->input->post('email'),
			'phone' => $this->input->post('phone'),
			'address' => $this->input->post('address'),
			'site_url' => $this->input->post('site_url'),
			'logo' => $this->input->post('logo')
		);

		if ($this->db->where('id', $this->uri->segment(4))->update($this->profile, $data)) {
			$this->session->set_flashdata('success','Update data success');
		} else {
			$this->session->set_flashdata('error','Update data error');
		}

		redirect('admin/setting/general');
	}

	public function update_general()
	{
		$data = array(
			'default_role' => $this->input->post('default_role'),
			'timezone' => $this->input->post('timezone'),
			'date_format' => $this->input->post('date_format'),
			'time_format' => $this->input->post('time_format'),
			'language_id' => $this->input->post('language_id')
		);

		if ($this->db->where('id', $this->uri->segment(4))->update($this->general, $data)) {
			$this->session->set_flashdata('success','Update data success');
		} else {
			$this->session->set_flashdata('error','Update data error');
		}

		redirect('admin/setting/general');
	}

	public function update_media()
	{
		$data = array(
			'max_size' => $this->input->post('max_size'),
			'max_width' => $this->input->post('max_width'),
			'max_height' => $this->input->post('max_height'),
			'overwrite' => $this->input->post('overwrite')
		);

		if ($this->db->where('id', $this->uri->segment(4))->update($this->media, $data)) {
			$this->session->set_flashdata('success','Update data success');
		} else {
			$this->session->set_flashdata('error','Update data error');
		}

		redirect('admin/setting/media');
	}
}
