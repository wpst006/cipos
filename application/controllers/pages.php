<?php
class Pages extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper('url');
    }

    public function index() {
        $this->load->view('templates/header');
        $this->load->view('pages/index');
        $this->load->view('templates/left');
        $this->load->view('templates/footer');
    }
}
?>
