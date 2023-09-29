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
}
