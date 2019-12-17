<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kriteria extends CI_Controller {

	public function index()
	{
		if (empty($this->session->userdata('username')) and $this->session->userdata('akses') != 'admin') {
			redirect('login');
		} else {
			$user = $this->session->userdata('akses');
			$data['title'] = 'Kelola Kriteria';
			$data['kc'] = 'kriteria';
		
			$data['content'] = $this->load->view('admin/content/kriteria',$data,TRUE);
			$this->load->view('admin/index',$data);
		}
	}
    
    public function tambah_kriteria()
	{
		if (empty($this->session->userdata('username')) and $this->session->userdata('akses') != 'admin') {
			redirect('login');
		} else {
			$user = $this->session->userdata('akses');
			$data['title'] = 'Kelola Kriteria';
			$data['kc'] = 'tambah kriteria';
		
			$data['content'] = $this->load->view('admin/content/tambah_kriteria',$data,TRUE);
			$this->load->view('admin/index',$data);
		}
	}
}
