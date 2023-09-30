<?php
class cart  extends Dcontrollers
{
    public function __construct()
    {
        $data = array();
        parent::__construct();
    }

    public function index(){
        $this->cart();
    }

    public function cart()
    {
        $table = 'tab_category_product';
        $tablePost = 'tab_category_post';
        $categorymodel = $this->load->model('categorymodel');
        $data['category'] = $categorymodel->categoryHome($table);
        $data['category_post'] = $categorymodel->categoryPostHome($tablePost);

        $this->load->view('header', $data);
        $this->load->view('cart');
        $this->load->view('footer');
    }


}
