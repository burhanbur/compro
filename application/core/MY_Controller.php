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

class MY_Controller extends CI_Controller 
{
	const UPLOAD_PATH = './assets/images/media';

	protected $id;

	protected function __construct(){
		parent::__construct();
		$this->authorization->auth();
		$this->id = $this->session->userdata('id');
		$this->set_timezone();
		$this->isAdmin();
	}

	public function isAdmin()
	{
		if ($this->session->userdata('role') != 1) {
			redirect('/');
		}
	}

	public function set_timezone() 
	{
		$timezone = $this->db->select('timezone')->from('config_general')->get()->row()->timezone;
        date_default_timezone_set($timezone);

        return $timezone;
    }

    public function list_timezone()
    {
    	$data = array();

    	$timezones =  DateTimeZone::listIdentifiers(DateTimeZone::ALL);

		foreach ($timezones as $timezone) 
		{
			array_push($data, $timezone);
		}

		return $data;
    }

    public function _conf()
    {
    	return $this->db->select('t.default_role, t.timezone, t.date_format, t.time_format, l.code, l.language, l.flag')->from('config_general as t')->join('language as l', 'l.id = t.language_id')->get()->row();
    }

	protected function fetch($data)
	{
		$params = array();

		foreach ($data as $key => $value) {
			$params[$key] = $value;
		}

		$params['profile']	= $this->db->select('*')->from('profile')->get()->row();
		$params['menu']		= $this->authorization->getMenu()->row_array();
		$params['admin']	= $this->authorization->getUser($this->id);
		$params['role']		= $this->authorization->getRole($this->id);
		$params['count']	= $this->authorization->getCountRole($this->id)->num_rows();
		$params['timezone']	= $this->set_timezone();
		$params['conf']		= $this->_conf();
		
		return $params;
	}

	protected function _upload($files, $type)
	{
		$config = array();

		$getConf = $this->db->select('*')->from('config_media')->get()->row();

		$config['upload_path']		= self::UPLOAD_PATH;
		$config['allowed_types']	= 'jpg|jpeg|png|docx|doc|xlsx|xls|pdf|mp3|wav|mp4|mpeg|txt';
		$config['max_size']			= $getConf->max_size;
		$config['overwrite']		= $getConf->overwrite;
		$config['file_name']		= $files;

		if ($type == 'image/jpg' || $type == 'image/jpeg' || $type == 'image/png') {			
			$config['max_width']		= $getConf->max_width;
			$config['max_height']		= $getConf->max_height;
		}

		return $config;
	}

	protected function _mail($email, $pass)
	{
		$config = array();

		$config['mailtype'] = 'html';
		$config['charset'] = 'utf-8';
		$config['protocol'] = 'smtp';
		$config['smtp_host'] = 'smtp.gmail.com';
		$config['smtp_user'] = $email;
		$config['smtp_pass'] = $pass;
		// $config['smtp_crypto'] = 'ssl';
		$config['smtp_port'] = 465;
		$config['crlf'] = "\r\n";
		$config['newline'] = "\r\n";

		return $config;
	}
}
