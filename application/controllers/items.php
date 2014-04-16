<?php
class Items extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('items_model');
    }

    public function save() {
        $this->load->helper('form');       
 
        $this->load->view('templates/header');
        
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {           
            $this->items_model->insert();         
        }
        
        $this->load->view('items/save');
        $this->load->view('templates/left');
        $this->load->view('templates/footer');
    }
}
?>
