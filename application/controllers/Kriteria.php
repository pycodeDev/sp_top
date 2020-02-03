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
			$data['d_krit'] = $this->crud_model->get_all_data('tb_kriteria');
			$data['total_d'] = $this->crud_model->total_rows('tb_kriteria');

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
	
	public function edit_kriteria($id)
	{
		if (empty($this->session->userdata('username')) and $this->session->userdata('akses') != 'admin') {
			redirect('login');
		} else {
			$user = $this->session->userdata('akses');
			$data['title'] = 'Kelola Kriteria';
			$data['kc'] = 'edit kriteria';
			$data['var'] = $this->crud_model->getById($id,'tb_kriteria','id_kriteria');
		
			$data['content'] = $this->load->view('admin/content/edit_kriteria',$data,TRUE);
			$this->load->view('admin/index',$data);
		}
	}

	public function act_t(){
		$tambah_kriteria = $this->crud_model;
		if ($tambah_kriteria->save_krit()) {
			$this->session->set_flashdata('success','Berhasil Disimpan');
		} 
		redirect(site_url('admin/kriteria'));
	}
	
	public function act_e(){
		$tambah_kriteria = $this->crud_model;
		if ($tambah_kriteria->edit_krit()) {
			$this->session->set_flashdata('success','Berhasil Diedit');
		} 
		redirect(site_url('admin/kriteria'));
	}
	
	public function act_d($id){
		if (!isset($id)) show_404();

        if ($this->crud_model->delete($id,'tb_kriteria','id_kriteria')) {
            redirect(site_url('admin/kriteria'));
        }
	}
	
	//---------------------------debugging---------------------------//
	public function lol(){
		$data['d_krit'] = $this->crud_model->get_all_data('tb_kriteria');
		$data['total_d'] = $this->crud_model->total_rows('tb_kriteria');
		$this->load->view('admin/debug',$data);
	}
}
