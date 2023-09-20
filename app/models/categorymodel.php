<?php
class categorymodel extends Dmodels
{
    public function __construct()
    {
        parent::__construct();
    }
    public function category($tab_category_product)
    {
        $sql = "SELECT * FROM $tab_category_product ORDER BY id_category_product DESC";
        return $this->db->SELECT($sql);
    }

    public function categoryByID($tab_category_product, $id)
    {
        $sql = "SELECT * FROM $tab_category_product WHERE id_category_product=:id";
        $data = array(':id' => $id);
        return $this->db->select($sql, $data);
    }

    public function insertProduct($tab_product, $data)
    {
        return $this->db->insert($tab_product, $data);
    }

    public function updateCategory($tab_category_product, $data, $cond)
    {
        return $this->db->update($tab_category_product, $data, $cond);
    }

    public function deleteCategory($tab_category_product, $cond)
    {
        return $this->db->delete($tab_category_product, $cond);
    }

    // Category 
    public function postCategory($table)
    {
        $sql = "SELECT * FROM $table ";
        return $this->db->SELECT($sql);
    }

    public function insertCategoryPost($tab_category_post, $data)
    {
        return $this->db->insert($tab_category_post, $data);
    }
    public function categoryByIDPost($table, $cond)
    {
        $sql = "SELECT * FROM $table WHERE $cond";
        return $this->db->SELECT($sql);
    }

    public function updateCategoryPost($tab_category_post, $data, $cond)
    {
        return $this->db->update($tab_category_post, $data, $cond);
    }

    public function deleteCategoryPost($tab_category_post, $cond)
    {
        return $this->db->delete($tab_category_post, $cond);
    }

    //Product
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
