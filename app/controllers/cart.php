<?php
class cart  extends Dcontrollers
{
    public function __construct()
    {
        $data = array();
        parent::__construct();
    }

    public function index()
    {
        $this->cart();
    }

    public function cart()
    {
        Session::init();

        $table = 'tab_category_product';
        $tablePost = 'tab_category_post';
        $categorymodel = $this->load->model('categorymodel');
        $data['category'] = $categorymodel->categoryHome($table);
        $data['category_post'] = $categorymodel->categoryPostHome($tablePost);

        $this->load->view('header', $data);
        $this->load->view('cart');
        $this->load->view('footer');
    }

    public function addCart()
    {
        Session::init();
        //Session::destroy();

        $newItem = array(
            'id_product' => $_POST['id_product'],
            'title_product' => $_POST['title_product'],
            'price_product' => $_POST['price_product'],
            'image_product' => $_POST['image_product'],
            'quantity_product' => $_POST['quantity_product']
        );

        if (isset($_SESSION["shopping_cart"])) {
            // Duyệt qua từng sản phẩm trong giỏ hàng
            foreach ($_SESSION["shopping_cart"] as $key => $value) {
                // Nếu sản phẩm đã tồn tại trong giỏ hàng, thì cập nhật số lượng
                if ($_SESSION["shopping_cart"][$key]['id_product'] == $_POST['id_product']) {
                    $_SESSION["shopping_cart"][$key]['quantity_product'] += $_POST['quantity_product'];
                    header("Location:" . BASE_URL . 'cart');
                    exit(); // Kết thúc luôn sau khi cập nhật
                }
            }
        }

        // Nếu sản phẩm chưa tồn tại trong giỏ hàng, thêm mới
        $_SESSION["shopping_cart"][] = $newItem;
        header("Location:" . BASE_URL . 'cart');
    }

    public function updateCart(){
        Session::init();
        if (isset($_POST['delete_cart'])){
            if (isset($_SESSION["shopping_cart"])){
                foreach ($_SESSION["shopping_cart"] as $key => $value) {
                    if ($_SESSION["shopping_cart"][$key]['id_product'] == $_POST['delete_cart']) {
                        unset($_SESSION["shopping_cart"][$key]);
                    }
                }
                header("Location:".BASE_URL.'cart');
            }
            else {
                header("Location:".BASE_URL);
            }
        }
        else {
            foreach ($_POST['qty'] as $key => $qty) {
                foreach ($_SESSION["shopping_cart"] as $session => $value) {
                    if ($value['id_product'] == $key && $qty > 0) {
                        $_SESSION["shopping_cart"][$session]['quantity_product'] = $qty;
                    }
                    // else if ($value['id_product'] == $key && $qty < 1) {
                    //     unset($_SESSION["shopping_cart"][$key]);
                    // }
                }
            }
            header("Location:".BASE_URL.'cart');
        }
    }

    public function order(){
        Session::init();
        
        $table_order = 'tab_order';
        $table_details_order = 'tab_details_order';
        $ordermodel = $this->load->model('ordermodel');

        $name = $_POST['name'];
        $phone = $_POST['phone'];
        $address = $_POST['address'];
        $email = $_POST['email'];
        $content = $_POST['content'];
        $code_order = rand(0, 999999);

        date_default_timezone_set('Asia/Ho_Chi_Minh');
        $date = date("d/m/Y");
        $hour = date("h:i:sa");
        $date_order = $date . ", ". $hour;

        $data_order = array('status_order' => 'New',
            'code_order' => $code_order,
            'date_order' => $date_order
        );

        $result_order = $ordermodel->insertOrder($table_order, $data_order);

        if (Session::get("shopping_cart") == true){
           foreach (Session::get("shopping_cart") as $key => $value) {
            $data_details_order = array('code_order' => $code_order,
                'id_product' => $value['id_product'],   
                'quantity_product' => $value['quantity_product'],
                'name' => $name,
                'phone' => $phone,
                'address' => $address,
                'email' => $email,
                'content' => $content
        );
        $result_details_order = $ordermodel->insertDetailsOrder($table_details_order, $data_details_order);
           }
           unset($_SESSION["shopping_cart"]);
        }
        if ($result_details_order) {
            $message['msg'] = "Order Success!";
            header('Location:' . BASE_URL . "cart?msg=" . urlencode(serialize($message)));
        }
        else {
            $message['msg'] = "Order failed!";
            header('Location:' . BASE_URL . "cart?msg=" . urlencode(serialize($message)));
        }
    }
}
