<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function index()
	{
		if (empty($this->session->userdata('username')) and $this->session->userdata('akses') != 'admin') {
			redirect('login');
		} else {
			$user = $this->session->userdata('akses');
			$data['title'] = 'Dashboard '.$user;
		
			$data['content'] = $this->load->view('admin/content/dashboard',NULL,TRUE);
			$this->load->view('admin/index',$data);
		}
	}
}
