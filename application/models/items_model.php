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
    
    public function get_items($id = null) {
        if (!isset($id)) {
            $query = $this->db->get('items');
            return $query->result_array();
        }

        $query = $this->db->get_where('items', array('id' => $id));
        return $query->row_array();
    }
}
?>
