<?php
    class categorymodel extends Dmodels {
        public function __construct(){
            parent::__construct();
        }
        public function category($table_category_product){
            $sql = "SELECT * FROM $table_category_product ";
            return $this->db->SELECT($sql);
        }

        public function categoryByID($table_category_product,$id){
            $sql = "SELECT * FROM $table_category_product WHERE id_category_product=:id";
            $data = array(':id' => $id);
            return $this->db->select($sql,$data);
        }

        public function insertCategory($table_category_product,$data) {
        return $this->db->insert($table_category_product,$data);
        }
       
    }
?>