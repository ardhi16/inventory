<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Barang extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('user_id') == null) redirect('auth/login');
        $this->load->model('Barang_model');
    }

    public function index()
    {
        $id = $this->session->userdata('user_id');
        $filter['user_id'] = $id;
        $data['barang'] = $this->Barang_model->get($filter)->result_array();
        $data['title'] = 'Barang';
        $data['main'] = 'barang/index';
        $this->load->view('layout', $data);
    }

    function tambah()
    {
        if ($_POST) {
            $data['barang_nama'] = $this->input->post('barang_nama');
            $data['barang_harga'] = $this->input->post('barang_harga');
            $data['barang_tanggal'] = date('Y-m-d H:i:s');
            $data['user_id'] = $this->session->userdata('user_id');
            $data['kategori_id'] = $this->input->post('kategori_id');
            $this->db->insert('barang', $data);
            redirect('barang');
         } else {
            $data['kategori'] = $this->db->get('kategori')->result_array();
            $data['title'] = 'Tambah';
            $data['main'] = 'barang/tambah';
            $this->load->view('layout', $data);
        }
    }

    function edit($barang_id)
    {
        if($_POST){
            $data['barang_nama'] = $this->input->post('barang_nama');
            $data['barang_harga'] = $this->input->post('barang_harga');
            $data['kategori_id'] = $this->input->post('kategori_id');
            $this->db->update('barang', $data, ['barang_id' => $barang_id]);
            redirect('barang');
            
        }else{
            $data['kategori'] = $this->db->get('kategori')->result_array();
            $data['barang'] = $this->db->get_where('barang', ['barang_id' => $barang_id])->row_array();
            
            $data['title'] = 'Edit';
            $data['main'] = 'barang/edit';
            $this->load->view('layout', $data);
        }
    }

    function detail($barang_id)
    {
        $data['barang'] = $this->db->get_where('barang', ['barang_id' => $barang_id])->row_array();
        $data['title'] = 'Detail';
        $data['main'] = 'barang/detail';
        $this->load->view('layout', $data);
    }

    function hapus($barang_id)
    {
        $this->db->delete('barang', ['barang_id' => $barang_id]);
        redirect('barang');
    }
}

/* End of file Barang.php */
