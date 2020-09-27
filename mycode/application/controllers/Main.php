<?php
class Main extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        // Your own constructor code
    }

    public function index()
    {
        $this->load->helper('url');
        $this->load->view('welcome_message');
    }
}