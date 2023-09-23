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

    public function category()
    {
        $this->load->view('header');
        // $this->load->view('slider');

        $this->load->view('categorypost');
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