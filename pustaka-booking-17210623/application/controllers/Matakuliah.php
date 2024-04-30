<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Matakuliah extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        // Load the form validation library
        $this->load->library('form_validation');
    }

    public function index()
    {
        // Loads the form view
        $this->load->view('view-form-matakuliah');
    }

    public function cetak()
    {
        // Setting validation rules for 'kode' and 'nama'
        $this->form_validation->set_rules('kode', 'Kode Matakuliah', 'required|min_length[3]', [
            'required' => 'Kode Matakuliah harus diisi',
            'min_length' => 'Kode terlalu pendek'
        ]);
        $this->form_validation->set_rules('nama', 'Nama Matakuliah', 'required|min_length[3]', [
            'required' => 'Nama Matakuliah harus diisi',
            'min_length' => 'Nama terlalu pendek'
        ]);

        // Checking if form validation was successful
        if ($this->form_validation->run() === FALSE) {
            // Reloads the form view if validation fails
            $this->load->view('view-form-matakuliah');
        } else {
            // Prepares data for sending to the view
            $data = [
                'kode' => $this->input->post('kode'),
                'nama' => $this->input->post('nama'),
                'sks' => $this->input->post('sks')
            ];
            // Loads the view with course data
            $this->load->view('view-data-matakuliah', $data);
        }
    }
}
