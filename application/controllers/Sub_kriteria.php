<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sub_kriteria extends CI_Controller {

	public function index()
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
    
    public function tambah_sub_kriteria($id)
	{
		if (empty($this->session->userdata('username')) and $this->session->userdata('akses') != 'admin') {
			redirect('login');
		} else {
			$user = $this->session->userdata('akses');
			$data['title'] = 'Kelola Sub Kriteria';
			$data['kc'] = 'tambah sub kriteria';
			$data['id'] = $id;
			$data['type'] = $this->crud_model->getById($id,"tb_kriteria","id_kriteria");

		
			$data['content'] = $this->load->view('admin/content/tambah_sub_krit',$data,TRUE);
			$this->load->view('admin/index',$data);
		}
	}

	public function data_sub()
	{
        $postData = $this->input->post();
        $t_sub_krit = $this->crud_model;
        $lol  = $t_sub_krit->data_sub($postData);

        echo json_encode($lol);
	}
	
	public function act_t($id){
		$t_krit = $this->crud_model;
        $t_krit->s_s_krit($id);
		redirect(site_url('admin/sub_kriteria'));
	}
	
	public function act_d($id){
        if (!isset($id)) show_404();
		$this->crud_model->del_sub($id);
		redirect(site_url('admin/sub_kriteria'));
    }
}
