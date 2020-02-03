<?php
defined('BASEPATH') OR exit('No direct script access alowed');

class Crud_model extends CI_Model
{
    public function save_krit()
    {
        $post = $this->input->post();
        $data = array(
            'jenis_kriteria' => $post['jenis_k'],
            'nama_kriteria' => $post['nama_k']
        );
        $this->db->insert('tb_kriteria', $data);
    }
    
    public function edit_krit()
    {
        $post = $this->input->post();
        $data = array(
            'jenis_kriteria' => $post['jenis_k'],
            'nama_kriteria' => $post['nama_k']
        );
        $this->db->update("tb_kriteria", $data, array("id_kriteria" => $post["id_kriteria"]));
    }
    
    public function save_al()
    {
        $post = $this->input->post();
        $data = array(
            'nama_alternatif' => $post['nama_al']
        );
        $this->db->insert('tb_alternatif', $data);
    }
    
    public function edit_al()
    {
        $post = $this->input->post();
        $data = array(
            'nama_alternatif' => $post['nama_al']
        );
        $this->db->update("tb_alternatif", $data, array("id_alternatif" => $post["id_alternatif"]));
    }

    public function del_krit($id){
        return $this->db->delete("tb_kriteria", array("id_kriteria" => $id));
    }
    
    public function del_sub($id){
        return $this->db->delete("tb_sub_kriteria", array("id_kriteria" => $id));
    }

    public function get_all_data($table){
        return $this->db->get($table)->result();
    }
    public function total_rows($table){
        return $this->db->get($table)->num_rows();
    }
    public function delete($id,$table,$kolom)
    {
        return $this->db->delete($table, array($kolom => $id));
    }
    public function getById($id,$table,$kolom)
    {
        return $this->db->get_where($table, [$kolom => $id])->row();
    }
    public function data_sub($post){
        $hasil = array();
        $q = $this->db->select("tk.nama_kriteria, tk.id_kriteria, tk.jenis_kriteria, tsk.nama_sub_kriteria")->join("tb_kriteria tk","tsk.id_kriteria=tk.id_kriteria", "left")->get_where("tb_sub_kriteria tsk", ['tsk.id_kriteria' => $post['id']]);
        $hasil = $q->result_array();
        return $hasil;
    }

    public function t_alter(){
        $data = array();
        $alter = $this->db->get("tb_alternatif")->result_array();
        for ($i=0; $i < sizeof($alter); $i++) { 
            $a = $alter[$i]['id_alternatif'];
            $ceka = $this->db->query("SELECT id_alternatif FROM `tb_rank` where id_alternatif='$a'")->num_rows();
            if ($ceka > 0) {
                array_push($data,array(
                    "id_alternatif" => $alter[$i]['id_alternatif'],
                    "nama_alternatif" => $alter[$i]['nama_alternatif'],
                    "status" => "sudah"
                ));
            }else {
                array_push($data,array(
                    "id_alternatif" => $alter[$i]['id_alternatif'],
                    "nama_alternatif" => $alter[$i]['nama_alternatif'],
                    "status" => "belum"
                ));
            }
        }
        return $data;
    }

    public function data_form(){
        $data = array();       
        $q = $this->db->select("nama_kriteria,id_kriteria")->order_by('id_kriteria','asc')->get("tb_kriteria")->result_array();
        for ($i=0; $i < sizeof($q); $i++) { 
            $aa = array();
            $que = $this->db->select("nama_sub_kriteria,nilai")->order_by('id','asc')->get_where("tb_sub_kriteria", ["id_kriteria" => $q[$i]['id_kriteria']])->result_array();
            for ($a=0; $a < sizeof($que); $a++) { 
                array_push($aa, array(
                    $que[$a]['nama_sub_kriteria'] => $que[$a]['nilai']
                ));
            }

            array_push($data,array(
                $q[$i]['nama_kriteria'] => [$aa]
            ));
        }
        return $data;
    }

    public function s_rank($id){
        $post = $this->input->post();
        $a = $this->db->query("select id_kriteria from tb_kriteria order by id_kriteria asc")->result_array();
        for ($i=0; $i < sizeof($a); $i++) { 
            $test = 'kriteria'.$i;
            $data = array(
                "id_alternatif" => $post['id_alternatif'],
                "id_kriteria" => $a[$i]['id_kriteria'],
                "nilai" => $post[$test]
            ); 
            $this->db->insert('tb_rank', $data);
        }
    }
    
    public function u_rank($id){
        $post = $this->input->post();
        $a = $this->db->select("nama_kriteria,id_kriteria")->order_by('id_kriteria','asc')->get("tb_kriteria")->result_array();
        for ($i=0; $i < sizeof($a); $i++) {
            $test = 'kriteria'.$i;
            $data = array(
                "nilai" => $post[$test]
            );
            $this->db->update("tb_rank", $data, array("id_alternatif" => $post["id_alternatif"], "id_kriteria" => $a[$i]['id_kriteria']));
        }
    }

    public function d_rank($id){
        return $this->db->delete("tb_rank", array("id_alternatif" => $id));
    }

    public function d_has($id){
        return $this->db->delete("tb_hasil", array("id_alternatif" => $id));
    }

    public function s_s_krit($id){
        $post = $this->input->post();
        for ($i=1; $i < 6; $i++) { 
            $test = 'sub'.$i;
            $nama = 'namasub'.$i;
            $data = array(
                "nama_sub_kriteria" => $post[$nama],
                "id_kriteria" => $post['krit'],
                "nilai" => $post[$test]
            ); 
            $this->db->insert('tb_sub_kriteria', $data);
        }
    }

    public function coba(){
        $id_alternatif = $this->db->select('id_alternatif')->group_by('id_alternatif')->get('tb_rank')->result_array();
        $b = [];
        for ($i=0; $i < sizeof($id_alternatif); $i++) { 
            $data = [];
            $nilai = $this->db->get_where('tb_rank', ['id_alternatif' => $id_alternatif[$i]['id_alternatif']])->result_array();

            for ($j=0; $j < sizeof($nilai); $j++) {
                $cc = $nilai[$j]['nilai'];
                array_push($data,$cc);
            }
            array_push($b,$data);
        }
        $aaa = $this->topsis_lib->alg($b);

        // for ($i=0; $i < count($aaa); $i++) { 
        //     array_push()
        // } masukkan id alternatif
        return $b;
    }
}