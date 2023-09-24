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
        $categorymodel = $this->load->model('categorymodel');
        $data['category'] = $categorymodel->categoryHome($table);

        $this->load->view('header', $data);
        $this->load->view('cart');
        $this->load->view('footer');
    }


}
