<?php
defined('BASEPATH') or exit('No direct script access allowed');

class cDashboardWaliKelas extends CI_Controller
{



    public function index()
    {
        $this->protect->protect();

        $this->load->view('WaliKelas/Layouts/head');
        $this->load->view('WaliKelas/Layouts/navbar');
        $this->load->view('WaliKelas/Layouts/aside');
        $this->load->view('dashboard');
        $this->load->view('WaliKelas/Layouts/footer');
    }
}

/* End of file cDashboard.php */
