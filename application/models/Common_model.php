<?php
    class Common_model extends CI_Model{
        public function __construct()
        {
            parent::__construct();
        }
        public function get($where,$table){
            return $this->db->where($where)->get($table)->row();
        }
        public function add($table,$data)
        {
            return $this->db->insert($table, $data);
        }
    }
?>