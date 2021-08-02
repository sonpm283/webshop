<?php

class homemodel extends DModel {
    public function __construct()
    {
        parent::__construct();
    }

    public function category($table) {
        $result = $this->db->select($table);
        return $result;
    }

}