<?php
    class ordermodel extends Dmodels {
        public function __construct(){
            parent::__construct();
        }

        public function insertOrder($table_order, $data_order){
           return $this->db->insert($table_order, $data_order);
        } 
        
        public function insertDetailsOrder($table_details_order, $data_details_order) {
            return $this->db->insert($table_details_order, $data_details_order);
        }

        public function listOrder($table_order){
            $sql = "SELECT * FROM $table_order ORDER BY $table_order.id_order DESC";
            return $this->db->select($sql);
        }

        public function detailOrder($table_product, $table_details_order, $table_order, $cond){
            $sql = "SELECT * FROM $table_product, $table_details_order, $table_order WHERE $cond";
            return $this->db->select($sql);
        }

        public function detailsInfo($table_details_order, $cond_info){
            $sql = "SELECT * FROM $table_details_order WHERE $cond_info LIMIT 1";
            return $this->db->select($sql);
        }

        public function orderConfirm($table_order, $data, $cond){
            return $this->db->update($table_order, $data, $cond);
        }

    }
?>