<?php
class category  extends Dcontrollers
{
    public function __construct()
    {
        $data = array();
        parent::__construct();
    }

    public function listCategory()
    {
        $this->load->view('header');
        $categorymodel = $this->load->model('categorymodel');

        $tab_category_product = 'tab_category_product';
        $data['category'] = $categorymodel->category( $tab_category_product);

        $this->load->view('category', $data);
        $this->load->view('footer');
    }

    public function categoryByID()
    {
        $this->load->view('header');
        $categorymodel = $this->load->model('categorymodel');
        $tab_category_product = 'tab_category_product';
        $id = 2;
        $data['categorybyid'] = $categorymodel->categorybyid($tab_category_product,$id);

        $this->load->view('categorybyid', $data);
        $this->load->view('footer');
    }

    public function insertCategory(){
        $categorymodel = $this->load->model('categorymodel');
        $tab_category_product = 'tab_category_product';
        $data = array (
            'title_category_product' => 'Đồng hồ thời trang',
            'dect_category_product' => 'Đồng hồ thời trang giá rẻ'

        );
      $categorymodel->insertCategory($tab_category_product,$data);
        echo('ohghhgh');
       
    }

    public function notFound(){
        $this->load->view('header');
        $this->load->view('404');
        $this->load->view('footer');
    }
}