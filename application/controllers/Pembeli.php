<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pembeli extends CI_Controller
{
    public function index()
    {
        $this->load->view('pembeli/index');
    }

    public function login()
    {
        $this->load->view('pembeli/login');
    }

    public function register()
    {
        $this->load->view('pembeli/register');
    }
}