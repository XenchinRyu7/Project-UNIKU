<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class FormController extends CI_Controller {

    public function index()
    {
        $this->load->view('input_form');
    }

    public function process_form()
    {
        // Proses data yang dikirim melalui form
        $data['nama'] = $this->input->post('nama');
        $data['email'] = $this->input->post('email');

        // Tampilkan hasil atau lakukan tindakan selanjutnya
        $this->load->view('result', $data);
    }
}
