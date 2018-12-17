<?php

class Donasi_uang extends CI_Controller {
    function __construct(){
        parent:: __construct();

        
        //Validasi jika user belum login
        if($this->session->userdata('logedin') !=TRUE){
            $url=base_url('login_donatur');
            redirect($url);
        }
    }

    public function index(){
        $this->load->model('Bencana_model');
        $data['bencana'] = $this->Bencana_model->getAllBencana();
        $this->load->view('donasi/uang', $data);
    }

    function invoice() {
        $this->load->view('donasi/invoice');
    }

}