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
        $table_order = "tab_order";

        $ordermodel = $this->load->model('ordermodel');
        $data['orders'] = $ordermodel->listOrder($table_order);

        $this->load->view('panel/header');
        $this->load->view('panel/menu');
        $this->load->view('panel/order/order', $data);
        $this->load->view('panel/footer');
    }

    public function detailsOrder($code_order){
        $table_details_order = "tab_details_order";
        $table_product = "tab_product";
        $table_order = "tab_order";
        $cond = "$table_product.id_product = $table_details_order.id_product AND $table_details_order.code_order = $code_order
        AND $table_order.code_order = $table_details_order.code_order";
        $cond_info = "$table_details_order.code_order = $code_order";

        $ordermodel = $this->load->model('ordermodel');
        $data['details_orders'] = $ordermodel->detailOrder($table_product, $table_details_order, $table_order, $cond);
        $data['details_info'] = $ordermodel->detailsInfo($table_details_order, $cond_info);

        $this->load->view('panel/header');
        $this->load->view('panel/menu');
        $this->load->view('panel/order/detailsorder', $data);
        $this->load->view('panel/footer');
    }

    public function orderConfirm($code_order){
        $table_order = "tab_order";
        $cond = "$table_order.code_order = $code_order";

        $ordermodel = $this->load->model('ordermodel');
        $data = array('status_order' => 1);
        $result = $ordermodel->orderConfirm($table_order, $data, $cond);

        if ($result == 1) {
            $message['msg'] = "Order processed successfully!";
            header('Location:' . BASE_URL . "order?msg=" . urlencode(serialize($message)));
        } else {
            $message['msg'] = "Order processed failed!";
            header('Location:' . BASE_URL . "order?msg=" . urlencode(serialize($message)));
        }
    }
}
