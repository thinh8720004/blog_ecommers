<?php
    class postmodel extends Dmodels {
        public function __construct(){
            parent::__construct();
        }
        public function categoryPost($table){
            $sql = "SELECT * FROM $table ORDER BY id_category_post DESC";
            return $this->db->select($sql);
        }

        public function insertPost($table,$data) {
            return $this->db->insert($table,$data);
        }

        public function post($tab_post,$tab_category){
            $sql = "SELECT * FROM $tab_post,$tab_category WHERE $tab_post.id_category_post = $tab_category.id_category_post
            order by $tab_post.id_post DESC  ";
            return $this->db->SELECT($sql);
        }

        public function datelePost($table_post,$cond){
            return $this->db->delete($table_post,$cond);
    
        }

        public function postByID($tab_post,$cond){
            $sql = "SELECT * FROM $tab_post WHERE $cond ";
            return $this->db->select($sql);
        }

        public function updatePost($table,$data,$cond){
            return $this->db->update($table,$data,$cond);
        }

        public function deleteCategory($tab_category_product,$cond){
        return $this->db->delete($tab_category_product,$cond);

    }

        // post
        public function insertcategory_post($table,$data){
            return $this->db->insert($table,$data);
        }
        public function post_category($table){
            $sql = "SELECT * FROM $table ORDER BY id_category_post DESC";
            return $this->db->SELECT($sql);
        }

        public function deletecategory_post($table, $cond){
            return $this->db->delete($table,$cond);
        }

        public function categorybyid_post($table,$cond){
            $sql = "SELECT * FROM $table WHERE $cond ORDER BY id_category_post DESC";
            return $this->db->SELECT($sql);
        }

        public function updatecategory_post($table_category_post,$data,$cond){
            return $this->db->update($table_category_post,$data,$cond);
        }

        // product
        // public function deletecategory_product($table, $cond){
        //     return $this->db->delete($table,$cond);
        // }
        // public function updatecategory_product($table_category_post,$data,$cond){
        //     return $this->db->update($table_category_post,$data,$cond);
        // }
        // public function insertcategory_product($table,$data){
        //     return $this->db->insert($table,$data);
        // }
        // public function insertproduct($table,$data){
        //     return $this->db->insert($table,$data);
        // }
        // public function deleteproduct($table,$cond){
        //     return $this->db->delete($table,$cond);
    
        // }
        // public function product($table_product,$table_category){
        //     $sql = "SELECT * FROM $table_product,$table_category WHERE $table_product.id_category_product = $table_category.id_category_product
        //     order by $table_product.id_product DESC  ";
        //     return $this->db->SELECT($sql);
        // }

        // public function productbyid($table,$cond){
        //     $sql = "SELECT * FROM $table WHERE $cond";
        //     return $this->db->select($sql);
        // }

    }
?>