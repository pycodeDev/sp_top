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
	
	public function kriteria()
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
	
	public function sub_kriteria()
	{
		if (empty($this->session->userdata('username')) and $this->session->userdata('akses') != 'admin') {
			redirect('login');
		} else {
			$user = $this->session->userdata('akses');
			$data['title'] = 'Kelola Sub Kriteria';
			$data['kc'] = 'sub kriteria';
		
			$data['content'] = $this->load->view('admin/content/sub_kriteria',$data,TRUE);
			$this->load->view('admin/index',$data);
		}
	}
	
	public function alternatif()
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
}
