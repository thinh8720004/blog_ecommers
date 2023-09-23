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
        $this->load->view('header');
        $this->load->view('slider');

        $this->load->view('home');
        $this->load->view('footer');
    }
    public function category()
    {
        $this->load->view('header');
        // $this->load->view('slider');// trang category ko cần slider
        $this->load->view('categoryproduct');
        $this->load->view('footer');
    }
    public function detailsProduct()
    {
        $this->load->view('header');
        // $this->load->view('slider');// trang category ko cần slider
        $this->load->view('detailsproduct');
        $this->load->view('footer');
    }

    public function notFound()
    {
        $this->load->view('header');
        $this->load->view('404');
        $this->load->view('footer');
    }

}