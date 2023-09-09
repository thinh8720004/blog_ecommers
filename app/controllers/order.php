<?php
class order  extends Dcontrollers
{
    public function __construct()
    {
        Session::checkSession();
        parent::__construct();
    }

    public function index()
    {
        $this->order();
    }

    public function order()
    {
        $this->load->view('panel/header');
        $this->load->view('panel/menu');
        $this->load->view('panel/order/order');
        $this->load->view('panel/footer');
    }

    public function addOrder()
    {
        $this->load->view('panel/header');
        $this->load->view('panel/menu');
        $this->load->view('panel/order/addorder');
        $this->load->view('panel/footer');
    }
}
