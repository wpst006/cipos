<?php
class Items_model extends CI_Model {

    function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->database();
    }

    public function insert() {
        
        $data = array(
            'title' => $this->input->post('title'),
            'quantity' => (int) $this->input->post('quantity'),
            'price' => (float) $this->input->post('price')
        );

        return $this->db->insert('items', $data);
    }
}
?>
