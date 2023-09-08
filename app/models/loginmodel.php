<?php 
    class loginmodel extends Dmodels {
        public function __construct(){
            parent::__construct();
        }

        public function login($tab_admin, $email, $password){
            $sql = "SELECT * FROM $tab_admin WHERE admin_email=? AND admin_password=? ";
            return $this->db->affectedRows($sql, $email, $password);
        }

        public function getLogin($tab_admin, $email, $password){
            $sql = "SELECT * FROM $tab_admin WHERE admin_email=? AND admin_password=? ";
            return $this->db->selectAccount($sql, $email, $password);
        }
    }
?>