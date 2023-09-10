<?php
class index  extends Dcontrollers
{
    public function __construct()
    {
        $data = array();
        parent::__construct();
    }

    public function index(){
        $this->homepage();
    }

    // public function category()
    // {
    //     $this->load->view('header');
    //     $homemodel = $this->load->model('homemodel');

    //     $table_category_product = 'tbl_category_product';
    //     $data['category'] = $homemodel->category( $table_category_product);

    //     $this->load->view('category', $data);
    //     $this->load->view('footer');
    // }

    // public function catebyid()
    // {
    //     $this->load->view('header');
    //     $homemodel = $this->load->model('homemodel');
    //     $id = 2;
    //     $table_category_product = 'tbl_category_product';
    //     $data['categorybyid'] = $homemodel->categorybyid($table_category_product,$id);

    //     $this->load->view('categorybyid', $data);
    //     $this->load->view('footer');
    // }

    public function homepage()
    {
        $this->load->view('header');
        $this->load->view('home');
        $this->load->view('footer');
    }

    public function notFound(){
        $this->load->view('header');
        $this->load->view('404');
        $this->load->view('footer');
    }
}
