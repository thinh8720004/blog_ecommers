<?php
class news extends Dcontrollers
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
        $table_category_post = 'tab_category_post';
        $table_post = 'tab_post';
        $categorymodel = $this->load->model('categorymodel');
        $data['category'] = $categorymodel->categoryHome($table);
        $data['category_post'] = $categorymodel->categoryPostHome($table_category_post);
        $data['post_by_id'] = $categorymodel->postByIDHome($table_category_post, $table_post, $id);

        $this->load->view('header', $data);
        // $this->load->view('slider');

        $this->load->view('categorypost', $data);
        $this->load->view('footer');
    }
    public function detailsNews($id)
    {
        $this->load->view('header');
        // $this->load->view('slider');// trang category ko cần slider
        $this->load->view('detailspost');
        $this->load->view('footer');
    }

    public function notFound()
    {
        $this->load->view('header');
        $this->load->view('404');
        $this->load->view('footer');
    }
}
