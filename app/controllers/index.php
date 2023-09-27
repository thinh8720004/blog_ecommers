<?php
class index extends Dcontrollers
{
    public function __construct()
    {
        $data = array();
        parent::__construct();
    }

    public function index()
    {
        $this->homepage();
    }

    public function homepage()
    {
        $table = 'tab_category_product';
        $tablePost = 'tab_category_post';
        $categorymodel = $this->load->model('categorymodel');
        $data['category'] = $categorymodel->categoryHome($table);
        $data['category_post'] = $categorymodel->categoryPostHome($tablePost);

        $this->load->view('header', $data);
        $this->load->view('slider');
        $this->load->view('home');
        $this->load->view('footer');
    }

    // public function category()
    // {
    //     $this->load->view('header');
    //     // $this->load->view('slider');// trang category ko cần slider
    //     $this->load->view('categoryproduct');
    //     $this->load->view('footer');
    // }

    // public function detailsProduct()
    // {
    //     $this->load->view('header');
    //     // $this->load->view('slider');// trang category ko cần slider
    //     $this->load->view('detailsproduct');
    //     $this->load->view('footer');
    // }

    public function contact()
    {
        $table = 'tab_category_product';
        $tablePost = 'tab_category_post';
        $categorymodel = $this->load->model('categorymodel');
        $data['category'] = $categorymodel->categoryHome($table);
        $data['category_post'] = $categorymodel->categoryPostHome($tablePost);

        $this->load->view('header', $data);
        $this->load->view('contact');
        $this->load->view('footer');
    }

    public function notFound()
    {
        $table = 'tab_category_product';
        $tablePost = 'tab_category_post';
        $categorymodel = $this->load->model('categorymodel');
        $data['category'] = $categorymodel->categoryHome($table);
        $data['category_post'] = $categorymodel->categoryPostHome($tablePost);

        $this->load->view('header', $data);
        $this->load->view('404');
        $this->load->view('footer');
    }
}