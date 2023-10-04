<?php
class customermodel extends Dmodels
{
    public function __construct()
    {
        parent::__construct();
    }
    // public function category($table)
    // {
    //     $sql = "SELECT * FROM $table ORDER BY id_category_product DESC";
    //     return $this->db->select($sql);
    // }

    // public function categoryByIDHome($table, $table_product, $id)
    // {
    //     $sql = "SELECT * FROM $table, $table_product WHERE $table.id_category_product = $table_product.id_category_product
    //     AND $table_product.id_category_product = '$id' ORDER BY $table_product.id_product DESC";
    //     return $this->db->select($sql);
    // }

    // public function categoryHome($table)
    // {
    //     $sql = "SELECT * FROM $table ORDER BY id_category_product DESC";
    //     return $this->db->select($sql);
    // }

    // public function categoryByID($table, $id)
    // {
    //     $sql = "SELECT * FROM $table WHERE $id ";
    //     return $this->db->select($sql);
    // }

    public function insertcustomer($table_customer, $data)
    {

        return $this->db->insert($table_customer, $data);
    }


    public function login($table_customer, $username, $password)
    {
        $sql = "SELECT * FROM $table_customer WHERE customer_email=? AND customer_password=? ";
        return $this->db->affectedRows($sql, $username, $password);
    }

    public function getLogin($table_customer, $username, $password)
    {
        $sql = "SELECT * FROM $table_customer WHERE customer_email=? AND customer_password=? ";
        return $this->db->selectAccount($sql, $username, $password);
    }
    // public function updateCategory($table_category_product, $data, $cond)
    // {
    //     return $this->db->update($table_category_product, $data, $cond);
    // }

    // public function updatePost($table_category_product, $data, $cond)
    // {
    //     return $this->db->update($table_category_product, $data, $cond);
    // }

    // public function datelecategory($table_category_product, $cond)
    // {
    //     return $this->db->delete($table_category_product, $cond);
    // }


}