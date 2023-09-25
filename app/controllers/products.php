<?php
class products  extends Dcontrollers
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

    public function productDetails()
    {
        $this->load->view('header');
        //$this->load->view('slider');
        $this->load->view('detailsproduct');
        $this->load->view('footer');
    }
}
