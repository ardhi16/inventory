<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Barang_model extends CI_Model {

    function get($filter=null)
    {
        $this->db->join('kategori', 'kategori.kategori_id = barang.kategori_id', 'left');
        return $this->db->get_where('barang', $filter);
    }

}

/* End of file Barang_model.php */
