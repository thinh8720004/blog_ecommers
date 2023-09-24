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

    public function category()
    {       
        $table = 'tab_category_product';
        $categorymodel = $this->load->model('categorymodel');
        $data['category'] = $categorymodel->categoryHome($table);

        $this->load->view('header', $data);
        //$this->load->view('slider');
        $this->load->view('categoryproduct');
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
