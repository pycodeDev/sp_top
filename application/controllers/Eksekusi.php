<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Eksekusi extends CI_Controller {

	public function index()
	{
		if (empty($this->session->userdata('username')) and $this->session->userdata('akses') != 'admin') {
			redirect('login');
		} else {
			$user = $this->session->userdata('akses');
			$data['title'] = 'Kelola Data Eksekusi';
			$data['kc'] = 'eksekusi';
			$data['variable'] = $this->crud_model->t_alter();
		
			$data['content'] = $this->load->view('admin/content/eksekusi',$data,TRUE);
			$this->load->view('admin/index',$data);
		}
	}
    
    public function tambah_eksekusi($id){
        if (empty($this->session->userdata('username')) and $this->session->userdata('akses') != 'admin') {
			redirect('login');
		} else {
			$user = $this->session->userdata('akses');
			$data['title'] = 'Tambah Data Eksekusi';
			$data['kc'] = 'Data eksekusi';
			$data['alter'] = $this->crud_model->getById($id,'tb_alternatif','id_alternatif');
			$data['variable'] = $this->crud_model->data_form();
		
			$data['content'] = $this->load->view('admin/content/tambah_eksekusi',$data,TRUE);
			$this->load->view('admin/index',$data);
		}
    }
	
	public function edit_eksekusi($id){
        if (empty($this->session->userdata('username')) and $this->session->userdata('akses') != 'admin') {
			redirect('login');
		} else {
			$user = $this->session->userdata('akses');
			$data['title'] = 'Edit Data Eksekusi';
			$data['kc'] = 'Data eksekusi';
			$data['alter'] = $this->crud_model->getById($id,'tb_alternatif','id_alternatif');
			$data['cek'] = $this->db->get_where('tb_rank', ['id_alternatif' => $id])->result_array();
			$data['variable'] = $this->crud_model->data_form();
		
			$data['content'] = $this->load->view('admin/content/edit_eksekusi',$data,TRUE);
			$this->load->view('admin/index',$data);
		}
    }
	
	public function act_t(){
        $t_krit = $this->crud_model;
        $post = $this->input->post();
        $t_krit->s_rank($post['id_alternatif']);
        redirect(site_url('admin/eksekusi'));
    }
	
	public function act_e(){
        $t_krit = $this->crud_model;
        $post = $this->input->post();
        $t_krit->u_rank($post['id_alternatif']);
        redirect(site_url('admin/eksekusi'));
    }
	
	public function act_d($id){
        if (!isset($id)) show_404();
		$this->crud_model->d_rank($id);
		$this->crud_model->d_has($id);
		redirect(site_url('admin/eksekusi'));
    }
}
