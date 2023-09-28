<?php
class products extends Dcontrollers
{
    public function __construct()
    {
        $data = array();
        parent::__construct();
    }

    public function index()
    {
        $this->category();
    }

    public function categoryAll()
    {
        $table = 'tab_category_product';
        $table_product = 'tab_product';
        $table_post = 'tab_category_post';
        $categorymodel = $this->load->model('categorymodel');
        $data['category'] = $categorymodel->categoryHome($table);
        $data['category_post'] = $categorymodel->categoryPostHome($table_post);
        $data['list_product'] = $categorymodel->listProductHome($table_product);

        $this->load->view('header', $data);
        //$this->load->view('slider');
        $this->load->view('listproduct', $data);
        $this->load->view('footer');
    }
    public function category($id)
    {
        $table = 'tab_category_product';
        $table_product = 'tab_product';
        $table_post = 'tab_category_post';
        $categorymodel = $this->load->model('categorymodel');
        $data['category'] = $categorymodel->categoryHome($table);
        $data['category_post'] = $categorymodel->categoryPostHome($table_post);
        $data['category_by_id'] = $categorymodel->categoryByIDHome($table, $table_product, $id);

        $this->load->view('header', $data);
        //$this->load->view('slider');
        $this->load->view('categoryproduct', $data);
        $this->load->view('footer');
    }

    public function productDetails($id)
    {
        $table = 'tab_category_product';
        $table_product = 'tab_product';
        $table_post = 'tab_category_post';

        $cond = " $table_product.id_category_product = $table.id_category_product AND $table_product.id_product = '$id'";

        $categorymodel = $this->load->model('categorymodel');
        $data['category'] = $categorymodel->categoryHome($table);
        $data['category_post'] = $categorymodel->categoryPostHome($table_post);

        $data['details_product'] = $categorymodel->detailsProductHome($table, $table_product, $cond);
        $this->load->view('header', $data);

        //$this->load->view('slider');
        $this->load->view('detailsproduct', $data);
        $this->load->view('footer');
    }
}