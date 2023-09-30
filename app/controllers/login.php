<?php
class login  extends Dcontrollers
{
    public function __construct()
    {
        $message = array();
        $data = array();
        parent::__construct();
    }

    public function index(){
        $this->login();
    }

    public function login()
    {
        Session::init();
        if (Session::get('login') == true){
            header("Location:".BASE_URL."login/dashboard");
        }
        $this->load->view('panel/login');
    }

    public function dashboard(){
        Session::checkSession();
        $this->load->view('panel/header');
        $this->load->view('panel/menu');
        $this->load->view('panel/dashboard');
        $this->load->view('panel/footer');
    }

    public function loginAuthentication(){
        $email = $_POST['admin_email'];
        $password = md5($_POST['admin_password']);
        $tab_admin = 'tab_admin';
        $loginModel = $this->load->model('loginmodel');

        $count = $loginModel->login($tab_admin, $email, $password);

        if ($count == 0){
            $message['msg'] = "Email or Password is incorrect! Please check again!";
            header("Location:".BASE_URL."login"); 
        }
        else {
            $result = $loginModel->getLogin($tab_admin, $email, $password);
            Session::init();
            Session::set('login', true);
            Session::set('admin_email', $result[0]['admin_email']);
            Session::set('admin_id', $result[0]['admin_id']);
    
            header("Location:".BASE_URL."login/dashboard");
        }
    }

    public function logout(){
        Session::init();
        Session::destroy();
        header("Location:".BASE_URL."login"); 
    }
}
