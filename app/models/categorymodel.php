<?php
class categorymodel extends Dmodels
{
    public function __construct()
    {
        parent::__construct();
    }
    public function category($table)
    {
        $sql = "SELECT * FROM $table ORDER BY id_category_product DESC";
        return $this->db->select($sql);
    }

    public function categoryByIDHome($table, $table_product, $id)
    {
        $sql = "SELECT * FROM $table, $table_product WHERE $table.id_category_product = $table_product.id_category_product
        AND $table_product.id_category_product = '$id' ORDER BY $table_product.id_product DESC";
        return $this->db->select($sql);
    }

    public function categoryHome($table)
    {
        $sql = "SELECT * FROM $table ORDER BY id_category_product DESC";
        return $this->db->select($sql);
    }

    public function categoryByID($table, $id)
    {
        $sql = "SELECT * FROM $table WHERE $id ";
        return $this->db->select($sql);
    }

    public function insertCategory($table_category_product, $data)
    {

        return $this->db->insert($table_category_product, $data);
    }
    public function updateCategory($table_category_product, $data, $cond)
    {
        return $this->db->update($table_category_product, $data, $cond);
    }

    public function updatePost($table_category_product, $data, $cond)
    {
        return $this->db->update($table_category_product, $data, $cond);
    }

    public function datelecategory($table_category_product, $cond)
    {
        return $this->db->delete($table_category_product, $cond);
    }

    // post
    public function insertCategoryPost($table, $data)
    {
        return $this->db->insert($table, $data);
    }
    public function postCategory($table)
    {
        $sql = "SELECT * FROM $table ORDER BY id_category_post DESC";
        return $this->db->SELECT($sql);
    }

    public function categoryPostHome($table)
    {
        $sql = "SELECT * FROM $table ORDER BY id_category_post DESC";
        return $this->db->select($sql);
    }

    public function postByIDHome($table_category_post, $table_post, $id)
    {
        $sql = "SELECT * FROM $table_category_post, $table_post WHERE $table_category_post.id_category_post = $table_post.id_category_post
        AND $table_post.id_category_post = '$id' ORDER BY $table_post.id_post DESC";
        return $this->db->select($sql);
    }

    public function deleteCategoryPost($table, $cond)
    {
        return $this->db->delete($table, $cond);
    }

    public function categoryByIDPost($table, $cond)
    {
        $sql = "SELECT * FROM $table WHERE $cond ORDER BY id_category_post DESC";
        return $this->db->SELECT($sql);
    }

    public function updateCategoryPost($table_category_post, $data, $cond)
    {
        return $this->db->update($table_category_post, $data, $cond);
    }

    // product
    public function listProductHome($table_product)
    {
        $sql = "SELECT * FROM $table_product ORDER BY $table_product.id_product DESC";
        return $this->db->select($sql);
    }
    public function deleteCategoryProduct($table, $cond)
    {
        return $this->db->delete($table, $cond);
    }

    public function updateCategoryProduct($table_category_post, $data, $cond)
    {
        return $this->db->update($table_category_post, $data, $cond);
    }

    public function updateProduct($table_category_product, $data, $cond)
    {
        return $this->db->update($table_category_product, $data, $cond);
    }

    public function insertCategoryProduct($table, $data)
    {
        return $this->db->insert($table, $data);
    }

    public function insertProduct($table, $data)
    {
        return $this->db->insert($table, $data);
    }

    public function deleteProduct($table, $cond)
    {
        return $this->db->delete($table, $cond);
    }

    public function product($table_product, $table_category)
    {
        $sql = "SELECT * FROM $table_product,$table_category WHERE $table_product.id_category_product = $table_category.id_category_product
            order by $table_product.id_product DESC  ";
        return $this->db->SELECT($sql);
    }

    public function productByID($table, $cond)
    {
        $sql = "SELECT * FROM $table WHERE $cond";
        return $this->db->select($sql);
    }
}