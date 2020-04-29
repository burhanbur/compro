<?php

/**
 * This is an example of a few basic user interaction methods you could use
 * all done with a hardcoded array
 *
 * @package         impresix
 * @category        company-profile
 * @author          Burhan Mafazi | burhanmafazi@gmail.com
 * @link            https://burhanmafazi.xyz
 */

defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller
{
	
	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$role = $this->session->userdata('role');

		$data['title']		= 'Login';
		$data['profile']	= $this->db->select('*')->from('profile')->get()->row();

		if ($role == 1) {
			redirect('admin/home');
		} elseif ($role == 2) {
			redirect('author/home');
		} else {
			$this->load->view('login', $data);
		}
	}

	public function getLogin()
	{
		$data = array(
			'username' => $this->input->post('username'),
			'password' => md5($this->input->post('password'))
		);

		$login = $this->authorization->login($data);

		if($login->num_rows()) {
			if ($login->row()->status == 1) {			
				foreach($login->result() as $sess) {
					$sess_data['id'] = $sess->user_id;
					$sess_data['username'] = $sess->username;
					$sess_data['role'] = $sess->role_id;
					$sess_data['lastlogin'] = $sess->lastlogin;
					$this->session->set_userdata($sess_data);
				}

				$this->db->update('users',
	                array('lastlogin' => date('y-m-d H:i:s')),
	                array('id' => $sess->user_id)
	            );

	            $role = $this->session->userdata('role');

	  			if ($role == 1) {
					redirect('admin/home');
				} elseif ($role == 2){
					redirect('author/home');
				}
			} else {
				echo "<script>alert('Gagal login: Akun Anda sudah tidak aktif');history.back();</script>";
			}
		} else {
			echo "<script>alert('Gagal login: Periksa kembali username atau password Anda');history.back();</script>";
		}
	}

	public function selectRole()
	{
		$input = $this->input->post('role');
		$this->session->set_userdata('role', $input);
		$role = $this->session->userdata('role');

		if ($role == 1) {
			redirect('sadmin/home');
		} elseif ($role == 2) {
			redirect('author/home');
		}
	}
}
