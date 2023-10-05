<?php
class customer  extends Dcontrollers
{
    public function __construct()
    {
        $data = array();
        parent::__construct();
    }

    public function index(){
        $this->customer();
    }

    public function customer()
    {
        $table_category_product = 'tab_category_product';
        $table_category_post = 'tab_category_post';
        $table_product = 'tab_product';
        $table_post = 'tab_post';

        $categorymodel = $this->load->model('categorymodel');
        $data['category'] = $categorymodel->categoryHome($table_category_product);
        $data['category_post'] = $categorymodel->categoryPostHome($table_category_post);
        $data['product_home'] = $categorymodel->listProductIndex($table_product);
        $data['post_index'] = $categorymodel->postIndex($table_post);

        $this->load->view('header', $data);
        $this->load->view('slider', $data);
        $this->load->view('home', $data);
        $this->load->view('footer');
    }


    public function login()
    {
        $table_category_product = 'tab_category_product';
        $table_category_post = 'tab_category_post';
        $table_product = 'tab_product';
        $table_post = 'tab_post';

        $categorymodel = $this->load->model('categorymodel');
        
        $data['category'] = $categorymodel->categoryHome($table_category_product);
        $data['category_post'] = $categorymodel->categoryPostHome($table_category_post);
        $data['post_index'] = $categorymodel->postIndex($table_post);

        $this->load->view('header', $data);
        $this->load->view('customerlogin');
        $this->load->view('footer');
    }

    public function logout()
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

    public function notFound(){
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
