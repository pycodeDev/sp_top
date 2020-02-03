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
			$data['loll'] = $this->db->select("a.id_alternatif,a.nama_alternatif,h.hasil")->join("tb_alternatif a","h.id_alternatif=a.id_alternatif","left")->order_by('hasil','desc')->get('tb_hasil h')->result_array();
			$data['row_krit'] = $this->db->query("select * from tb_kriteria")->num_rows();
			$data['row_subkrit'] = $this->db->query("select * from tb_sub_kriteria")->num_rows();
			$data['row_alter'] = $this->db->query("select * from tb_alternatif")->num_rows();
			$data['test'] = json_encode($data['loll']);
		
			$data['content'] = $this->load->view('admin/content/dashboard',$data,TRUE);
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
		$data['a'] = $this->crud_model->topsis();
		$this->load->view('admin/debug',$data);
	}
	
	public function hasil()
	{
		$this->crud_model->topsis();
		if (empty($this->session->userdata('username')) and $this->session->userdata('akses') != 'admin') {
			redirect('login');
		} else {
			$user = $this->session->userdata('akses');
			$data['title'] = 'Hasil Perangkingan';
			$data['kc'] = 'Hasil Rank';
			$data['rank'] = $this->db->join("tb_alternatif a","h.id_alternatif=a.id_alternatif","left")->order_by('hasil','desc')->get('tb_hasil h')->result();
			$data['loll'] = $this->db->select("a.id_alternatif,a.nama_alternatif,h.hasil")->join("tb_alternatif a","h.id_alternatif=a.id_alternatif","left")->order_by('hasil','desc')->get('tb_hasil h')->result_array();
			
			$data['test'] = json_encode($data['loll']);
		
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

	public function lap_kriteria(){
		if (empty($this->session->userdata('username')) and $this->session->userdata('akses') != 'admin') {
			redirect('login');
		} else {
			$user = $this->session->userdata('akses');
			$data['title'] = 'Data Kriteria';
			$data['kc'] = 'kriteria';
			$data['d_krit'] = $this->crud_model->get_all_data('tb_kriteria');
			$data['total_d'] = $this->crud_model->total_rows('tb_kriteria');
		
			$data['content'] = $this->load->view('admin/content/lap_kriteria',$data,TRUE);
			$this->load->view('admin/index',$data);
		}
	}
	
	public function lap_subkriteria(){
		if (empty($this->session->userdata('username')) and $this->session->userdata('akses') != 'admin') {
			redirect('login');
		} else {
			$user = $this->session->userdata('akses');
			$data['title'] = 'Data Sub Kriteria';
			$data['kc'] = 'sub kriteria';
			$data['krit'] = $this->crud_model->get_all_data('tb_kriteria');
		
			$data['content'] = $this->load->view('admin/content/lap_subkrit',$data,TRUE);
			$this->load->view('admin/index',$data);
		}
	}
	
	public function lap_rank(){
		if (empty($this->session->userdata('username')) and $this->session->userdata('akses') != 'admin') {
			redirect('login');
		} else {
			$user = $this->session->userdata('akses');
			$data['title'] = 'Data Hasil Ranking';
			$data['kc'] = 'Laporan Rank';
			$data['rank'] = $this->db->join("tb_alternatif a","h.id_alternatif=a.id_alternatif","left")->order_by('hasil','desc')->get('tb_hasil h')->result();
			$data['total_d'] = $this->crud_model->total_rows('tb_hasil');
		
			$data['content'] = $this->load->view('admin/content/lap_rank',$data,TRUE);
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
}
