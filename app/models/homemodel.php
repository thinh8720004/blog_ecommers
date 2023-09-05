<?php
    class homemodel extends Dmodels {
        public function __construct(){
            parent::__construct();
        }

        public function category(){
            $sql = "SELECT * FROM tab_category_product ORDER BY id_category_product DESC";
            $query = $this->db->query($sql);
            $result = $query->fetchAll();
            return $result;
        }
    }
?>