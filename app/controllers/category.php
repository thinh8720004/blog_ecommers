<?php
class category  extends Dcontrollers
{
    public function __construct()
    {
        $data = array();
        parent::__construct();
    }

    public function list_category()
    {
        $this->load->view('header');
        $categorymodel = $this->load->model('categorymodel');

        $table_category_product = 'tbl_category_product';
        $data['category'] = $categorymodel->category( $table_category_product);

        $this->load->view('category', $data);
        $this->load->view('footer');
    }

    public function catebyid()
    {
        $this->load->view('header');
        $categorymodel = $this->load->model('categorymodel');
        $table_category_product = 'tbl_category_product';
        $id = 2;
        $data['categorybyid'] = $categorymodel->categorybyid($table_category_product,$id);

        $this->load->view('categorybyid', $data);
        $this->load->view('footer');
    }

    public function insertcategory(){
        $categorymodel = $this->load->model('categorymodel');
        $table_category_product = 'tbl_category_product';
        $data = array (
            'title_category_product' => 'Đồng hồ thời trang',
            'dect_category_product' => 'Đồng hồ thời trang giá rẻ'

        );
      $categorymodel->insertcategory($table_category_product,$data);
        echo('ohghhgh');
       
    }


    public function notFound(){
        $this->load->view('header');
        $this->load->view('404');
        $this->load->view('footer');
    }
}