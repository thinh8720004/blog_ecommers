<?php
    class categorymodel extends Dmodels {
        public function __construct(){
            parent::__construct();
        }
        public function category($table_category_product){
            $sql = "SELECT * FROM $table_category_product ";
            return $this->db->SELECT($sql);
        }

        public function categorybyid($table_category_product,$id){
            $sql = "SELECT * FROM $table_category_product WHERE id_category_product=:id";
            $data = array(':id' => $id);
            return $this->db->select($sql,$data);
        }

        public function insertcategory($table_category_product,$data) {

    return $this->db->insert($table_category_product,$data);

        }
        public function updatecategory($table_category_product,$data,$cond){
            return $this->db->update($table_category_product,$data,$cond);
        }

        public function datelecategory($table_category_product,$cond){
        return $this->db->delete($table_category_product,$cond);

    }

        // post
        public function insertcategory_post($table,$data){
            return $this->db->insert($table,$data);
        }
        public function post_category($table){
            $sql = "SELECT * FROM $table ";
            return $this->db->SELECT($sql);
        }

        public function deletecategory_post($table, $cond){
            return $this->db->delete($table,$cond);
        }

        public function categorybyid_post($table,$cond){
            $sql = "SELECT * FROM $table WHERE $cond";
            return $this->db->SELECT($sql);
        }

        public function updatecategory_post($table_category_post,$data,$cond){
            return $this->db->update($table_category_post,$data,$cond);
        }

        // product
        public function insertproduct($table,$data){
            return $this->db->insert($table,$data);
        }
    }
?>