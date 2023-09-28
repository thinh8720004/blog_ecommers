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

    public function newsAll()
    {
        $table = 'tab_category_product';
        $table_category_post = 'tab_category_post';
        $table_post = 'tab_post';

        $categorymodel = $this->load->model('categorymodel');
        $postmodel = $this->load->model('postmodel');

        $data['category'] = $categorymodel->categoryHome($table);
        $data['category_post'] = $categorymodel->categoryPostHome($table_category_post);
        $data['list_post'] = $postmodel->listPostHome($table_post);

        $this->load->view('header', $data);
        // $this->load->view('slider');

        $this->load->view('listpost', $data);
        $this->load->view('footer');
    }

    public function detailsNews($id)
    {
        $table = 'tab_category_product';
        $table_category_post = 'tab_category_post';
        $table_post = 'tab_post';
        $cond = "$table_category_post.id_category_post = $table_post.id_category_post AND $table_post.id_post = '$id'";
        
        $categorymodel = $this->load->model('categorymodel');
        $data['category'] = $categorymodel->categoryHome($table);
        $data['category_post'] = $categorymodel->categoryPostHome($table_category_post);
        $data['post_by_id'] = $categorymodel->postByIDHome($table_category_post, $table_post, $id);
        $data['details_post'] = $categorymodel->detailsPostHome($table_category_post, $table_post, $cond);
        
        foreach ($data['details_post'] as $key => $cate){
            $id_cate = $cate['id_category_post'];
        }
        
        $related_cond = "$table_category_post.id_category_post = $table_post.id_category_post AND $table_post.id_category_post = '$id_cate'
            AND $table_post.id_post NOT IN('$id')";

        $data['related'] = $categorymodel->relatedPostHome($table_category_post, $table_post, $related_cond);

        $this->load->view('header', $data);
        // $this->load->view('slider');// trang category ko cần slider
        $this->load->view('detailspost', $data);
        $this->load->view('footer');
    }

    public function notFound()
    {
        $this->load->view('header');
        $this->load->view('404');
        $this->load->view('footer');
    }
}
