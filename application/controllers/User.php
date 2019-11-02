<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

    public function index()
    {
        $data['title'] = 'User';
        $data['users'] = $this->db->get('user')->result_array();
        $this->load->view('user/list', $data);
    }

    function hapus($id)
    {
        $this->db->where('user_id', $id);
        $this->db->delete('user');
        redirect('user');
    }


}

/* End of file User.php */
