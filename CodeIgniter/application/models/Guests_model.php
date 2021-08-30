<?php

class Guests_model extends CI_Model {

    protected $table = 'guests';

    public function __construct() {
        parent::__construct();
    }
	
	public function get_count() {
        return $this->db->count_all($this->table);
    }
	
	public function insert($data) {
        return $this->db->insert($this->table, $data);
    }

    public function get_all($limit, $start) {
		$this->db->limit($limit, $start);
        $query = $this->db->get($this->table);
        return $query->result();
    }
	
}