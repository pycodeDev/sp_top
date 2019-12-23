<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Alternatif extends CI_Controller {

	public function index()
	{
		if (empty($this->session->userdata('username')) and $this->session->userdata('akses') != 'admin') {
			redirect('login');
		} else {
			$user = $this->session->userdata('akses');
			$data['title'] = 'Kelola Alternatif';
			$data['kc'] = 'alternatif';
		
			$data['content'] = $this->load->view('admin/content/alternatif',$data,TRUE);
			$this->load->view('admin/index',$data);
		}
	}
    
    public function tambah_alternatif()
	{
		if (empty($this->session->userdata('username')) and $this->session->userdata('akses') != 'admin') {
			redirect('login');
		} else {
			$user = $this->session->userdata('akses');
			$data['title'] = 'Kelola Alternatif';
			$data['kc'] = 'tambah alternatif';
		
			$data['content'] = $this->load->view('admin/content/tambah_alternatif',$data,TRUE);
			$this->load->view('admin/index',$data);
		}
	}
}
