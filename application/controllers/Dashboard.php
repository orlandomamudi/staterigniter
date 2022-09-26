<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        if ($this->session->userdata("logged") <> 1) {
            redirect(site_url('login'));
        }
    }

    public function index()
    {
        $data = array(
            'title' => 'Dashboard - Staterigniter',
            'active_menu_db' => 'active',
        );

        $this->load->view('templates/backend/header');
        $this->load->view('templates/backend/sidebar');
        $this->load->view('dashboard/dashboard');
        $this->load->view('templates/backend/footer');
    }
}
