<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

    public function index()
    {
       redirect('auth/login');
    }

    function login()
    {
        if ($this->session->userdata('user_id') != null) redirect('home');
        if ($_POST) {
            $username = $this->input->post('username');
            $password = $this->input->post('password');
            $cek = $this->db->get_where('user', ['username' => $username])->row_array();
            if(isset($cek) && password_verify($password, $cek['password'])){
                
                $session['user_id'] = $cek['user_id'];
                $session['fullname'] = $cek['fullname'];
                
                $this->session->set_userdata( $session );
                
                redirect('home');

            }else{
                redirect('auth/login');
            }
            
        } else {
            $data['title'] = 'Login';
            $this->load->view('login', $data);
        }
    }

    function logout()
    {
        $this->session->unset_userdata('user_id');
        $this->session->unset_userdata('fullname');
        redirect('auth/login');
    }

    function register()
    {
        if ($_POST) {
            $data['username'] = $this->input->post('username');
            $data['password'] = password_hash($this->input->post('password'), PASSWORD_DEFAULT);
            $data['fullname'] = $this->input->post('fullname');
            $this->db->insert('user', $data);
            redirect('auth/login');
        } else {
            $data['title'] = 'Register';
            $this->load->view('register', $data);
        }
    }


}

/* End of file Auth.php */
