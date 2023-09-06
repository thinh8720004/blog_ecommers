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

    public function homepage()
    {
        $this->load->view('header');
        $homemodel = $this->load->model('homemodel');
        $data['category'] = $homemodel->category();
        $this->load->view('home', $data);
        $this->load->view('footer');
    }

    public function notFound(){
        $this->load->view('header');
        $this->load->view('404');
        $this->load->view('footer');
    }
}
