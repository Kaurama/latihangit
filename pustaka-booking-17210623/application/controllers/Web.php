<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Web extends CI_Controller {

    public function __construct() {
        parent::__construct();
    }

    public function index() {
        $data['judul'] = 'Halaman Depan';
        $this->load->view('v_header', $data);
        $this->load->view('v_index', $data);
        $this->load->view('v_footer', $data);
    }

    public function about()
    {
    $data['judul'] = "Halaman About";
    $this->load->view('v_header', $data);
    $this->load->view('v_about', $data);
    $this->load->view('v_footer', $data);
    }
    public function contact()
{
    $data['judul'] = "Halaman contact";
    $this->load->view('v_header', $data);
    $this->load->view('v_contact', $data);
    $this->load->view('v_footer', $data); // Load the contact view
}
}
