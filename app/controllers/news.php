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
        Session::init();

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
        //seo
        Session::init();

        $this->load->title = 'All articles - link hosting ';

        $this->load->desc = '"Interior Thinh Tu" is a great destination for those who are 
        looking for perfection in interior design. We are proud to present a beautiful online 
        space where you can explore unique and diverse interior design ideas to transform every 
        corner of your home into a living work of art. ';

        $this->load->image = BASE_URL.'public/images/logohere.jpeg';
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
        Session::init();
        
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
            
            $this->load->title = $cate['title_post'];
            $this->load->desc = substr($cate['content_post'], 0, 500);
            $this->load->image = BASE_URL.'/public/uploads/post/imagepost/'.$cate['image_post'];
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
