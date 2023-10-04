<?php
class customer extends Dcontrollers
{
    public function __construct()
    {
        $data = array();
        parent::__construct();
    }

    public function index()
    {
        $this->client();
    }

    public function client()
    {
        // $table_category_product = 'tab_category_product';
        // $table_category_post = 'tab_category_post';
        // $table_product = 'tab_product';
        // $table_post = 'tab_post';

        // $categorymodel = $this->load->model('categorymodel');
        // $data['category'] = $categorymodel->categoryHome($table_category_product);
        // $data['category_post'] = $categorymodel->categoryPostHome($table_category_post);
        // $data['product_home'] = $categorymodel->listProductIndex($table_product);
        // $data['post_index'] = $categorymodel->postIndex($table_post);

        // $this->load->view('header', $data);
        // $this->load->view('slider', $data);
        // $this->load->view('home', $data);
        // $this->load->view('footer');
    }

    public function login()
    {

        $table_category_product = 'tab_category_product';
        $table_category_post = 'tab_category_post';
        $table_product = 'tab_product';
        $table_post = 'tab_post';

        $categorymodel = $this->load->model('categorymodel');
        $data['category'] = $categorymodel->categoryHome($table_category_product);
        $data['category_post'] = $categorymodel->categoryPostHome($table_category_post);
        $data['product_home'] = $categorymodel->listProductIndex($table_product);
        $data['post_index'] = $categorymodel->postIndex($table_post);

        Session::init();

        $this->load->view('header', $data);
        // $this->load->view('slider', $data);
        $this->load->view('customerlogin');
        $this->load->view('footer');
    }
    public function loginCustomer()
    {
        $username = $_POST['username'];
        $password = md5($_POST['password']);

        $table_customer = 'tab_customers';
        $customermodel = $this->load->model('customermodel');

        $count = $customermodel->login($table_customer, $username, $password);

        if ($count == 0) {
            $message['msg'] = "Email or Password is incorrect! Please check again!";
            header('Location:' . BASE_URL . "customer/login?msg=" . urlencode(serialize($message)));
        } else {
            $result = $customermodel->getLogin($table_customer, $username, $password);
            Session::init();
            Session::set('customer', true);
            Session::set('customer_name', $result[0]['customer_name']);
            Session::set('customer_id', $result[0]['customer_name']);
            $message['msg'] = "Login OK";

            header('Location:' . BASE_URL . "customer/login?msg=" . urlencode(serialize($message)));
        }
    }

    public function insertLogin()
    {
        $name = $_POST['txtFullName'];
        $email = $_POST['txtEmail'];
        $phone = $_POST['txtPhone'];
        $address = $_POST['txtAddress'];
        $password = $_POST['txtPassword'];

        $table_customer = 'tab_customers';

        $data = array(
            'customer_name' => $name,
            'customer_email' => $email,
            'customer_phone' => $phone,
            'customer_address' => $address,
            'customer_password' => md5($password)
        );
        $customermodel = $this->load->model('customermodel');
        $result = $customermodel->insertcustomer($table_customer, $data);
        if ($result == 1) {
            $message['msg'] = "Added customer successfully!";
            header('Location:' . BASE_URL . "customer/login?msg=" . urlencode(serialize($message)));
        } else {
            $message['msg'] = "Add customer failed!";
            header('Location:' . BASE_URL . "customer/login?msg=" . urlencode(serialize($message)));
        }
    }
    public function logout()
    {


        Session::init();
        // Session::unset('customer');
        Session::destroy();
        $message['msg'] = "Logout successfully";
        header('Location:' . BASE_URL . "customer/login?msg=" . urlencode(serialize($message)));




    }
    // public function register()
    // {
    //     $table = 'tab_category_product';
    //     $tablePost = 'tab_category_post';
    //     $categorymodel = $this->load->model('categorymodel');
    //     $data['category'] = $categorymodel->categoryHome($table);
    //     $data['category_post'] = $categorymodel->categoryPostHome($tablePost);

    //     $this->load->view('header', $data);
    //     $this->load->view('contact');
    //     $this->load->view('footer');
    // }

    // public function notFound()
    // {
    //     $table = 'tab_category_product';
    //     $tablePost = 'tab_category_post';
    //     $categorymodel = $this->load->model('categorymodel');
    //     $data['category'] = $categorymodel->categoryHome($table);
    //     $data['category_post'] = $categorymodel->categoryPostHome($tablePost);

    //     $this->load->view('header', $data);
    //     $this->load->view('404');
    //     $this->load->view('footer');
    // }
}