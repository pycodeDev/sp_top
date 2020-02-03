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
			$data['d_al'] = $this->crud_model->get_all_data('tb_alternatif');
			$data['total_d'] = $this->crud_model->total_rows('tb_alternatif');
		
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

	public function edit_alternatif($id)
	{
		if (empty($this->session->userdata('username')) and $this->session->userdata('akses') != 'admin') {
			redirect('login');
		} else {
			$user = $this->session->userdata('akses');
			$data['title'] = 'Kelola Alternatif';
			$data['kc'] = 'edit alternatif';
			$data['var'] = $this->crud_model->getById($id,'tb_alternatif','id_alternatif');
		
			$data['content'] = $this->load->view('admin/content/edit_alternatif',$data,TRUE);
			$this->load->view('admin/index',$data);
		}
	}

	public function act_t(){
		$tambah_alternatif = $this->crud_model;
		if ($tambah_alternatif->save_al()) {
			$this->session->set_flashdata('success','Berhasil Disimpan');
		} 
		redirect(site_url('admin/alternatif'));
	}
	
	public function act_e(){
		$tambah_alternatif = $this->crud_model;
		if ($tambah_alternatif->edit_al()) {
			$this->session->set_flashdata('success','Berhasil Diedit');
		} 
		redirect(site_url('admin/alternatif'));
	}
	
	public function act_d($id){
		if (!isset($id)) show_404();
		$this->crud_model->d_rank($id);
		$this->crud_model->d_has($id);
		$this->crud_model->delete($id,'tb_alternatif','id_alternatif');
		redirect(site_url('admin/alternatif'));
	}
}
