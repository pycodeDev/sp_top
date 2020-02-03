<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->library('topsis_lib');
	}

	public function home()
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
			$data['d_krit'] = $this->crud_model->get_all_data('tb_kriteria');
			$data['total_d'] = $this->crud_model->total_rows('tb_kriteria');
		
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
			$data['krit'] = $this->crud_model->get_all_data('tb_kriteria');
		
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
			$data['d_al'] = $this->crud_model->get_all_data('tb_alternatif');
			$data['total_d'] = $this->crud_model->total_rows('tb_alternatif');
		
			$data['content'] = $this->load->view('admin/content/alternatif',$data,TRUE);
			$this->load->view('admin/index',$data);
		}
	}
	
	public function eksekusi()
	{
		if (empty($this->session->userdata('username')) and $this->session->userdata('akses') != 'admin') {
			redirect('login');
		} else {
			$user = $this->session->userdata('akses');
			$data['title'] = 'Kelola Data Eksekusi';
			$data['kc'] = 'eksekusi';
			$data['er'] = $this->db->group_by('id_alternatif')->get('tb_rank')->num_rows();
			$data['variable'] = $this->crud_model->t_alter();
		
			$data['content'] = $this->load->view('admin/content/eksekusi',$data,TRUE);
			$this->load->view('admin/index',$data);
		}
	}

	public function lol()
	{
		$data['a'] = $this->crud_model->coba();
		$this->load->view('admin/debug',$data);
	}
	
	public function hasil()
	{
		if (empty($this->session->userdata('username')) and $this->session->userdata('akses') != 'admin') {
			redirect('login');
		} else {
			$user = $this->session->userdata('akses');
			$data['title'] = 'Hasil Perangkingan';
			$data['kc'] = 'Hasil Rank';
			// $data['er'] = $this->db->group_by('id_alternatif')->get('tb_rank')->num_rows();
			// $data['variable'] = $this->crud_model->t_alter();
		
			$data['content'] = $this->load->view('admin/content/hasil',$data,TRUE);
			$this->load->view('admin/index',$data);
		}
	}

	public function contoh()
	{
		if (empty($this->session->userdata('username')) and $this->session->userdata('akses') != 'admin') {
			redirect('login');
		} else {
			$user = $this->session->userdata('akses');
			$data['title'] = 'Kelola Data Eksekusi';
			$data['kc'] = 'eksekusi';
			$a = [
				[4,4,3,1],
				[4,4,3,2],
				[4,4,3,4],
				[4,5,5,5],
				[5,3,3,3],
				[4,3,3,3],
				[4,5,5,5],
				[3,5,4,4],
				[3,5,4,4],
				[3,5,4,4],
				[3,4,3,1],
				[3,4,4,3],
				[3,3,3,2]
			];
			$data['lol'] = $this->topsis_lib->alg($a);
		
			$data['content'] = $this->load->view('admin/content/eksekusi',$data,TRUE);
			$this->load->view('admin/index',$data);
		}
	}
}
