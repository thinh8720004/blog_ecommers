<?php
class products extends Dcontrollers
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

    public function category($id)
    {
        Session::init();

        $table = 'tab_category_product';
        $table_product = 'tab_product';
        $table_post = 'tab_category_post';
        $categorymodel = $this->load->model('categorymodel');
        $data['category'] = $categorymodel->categoryHome($table);
        $data['category_post'] = $categorymodel->categoryPostHome($table_post);
        $data['category_by_id'] = $categorymodel->categoryByIDHome($table, $table_product, $id);

        $this->load->view('header', $data);
        $this->load->view('categoryproduct', $data);
        $this->load->view('footer');
    }

    public function hotProduct()
    {
        Session::init();

        $table = 'tab_category_product';
        $table_product = 'tab_product';
        $table_post = 'tab_category_post';

        $categorymodel = $this->load->model('categorymodel');

        $data['category'] = $categorymodel->categoryHome($table);
        $data['category_post'] = $categorymodel->categoryPostHome($table_post);
        $data['hot_product'] = $categorymodel->hotProduct($table_product);

        $this->load->view('header', $data);
        $this->load->view('hotproduct', $data);
        $this->load->view('footer');
    }

    public function categoryAll()
    {
        Session::init();

        $table = 'tab_category_product';
        $table_product = 'tab_product';
        $table_post = 'tab_category_post';
        $categorymodel = $this->load->model('categorymodel');
        $data['category'] = $categorymodel->categoryHome($table);
        $data['category_post'] = $categorymodel->categoryPostHome($table_post);
        $data['list_product'] = $categorymodel->listProductHome($table_product);

        $this->load->view('header', $data);
        $this->load->view('listproduct', $data);
        $this->load->view('footer');
    }
    public function search()
    {
        Session::init();

        if (isset($_GET['search'])) {
            $search = $_GET['search'];
        }

        $table = 'tab_category_product';
        $table_product = 'tab_product';
        $table_post = 'tab_category_post';
        $categorymodel = $this->load->model('categorymodel');
        $data['category'] = $categorymodel->categoryHome($table);
        $data['category_post'] = $categorymodel->categoryPostHome($table_post);
        $data['list_product'] = $categorymodel->searchProduct($table_product, $search);



        $this->load->view('header', $data);
        $this->load->view('searchproduct', $data);
        $this->load->view('footer');
    }

    public function productDetails($id)
    {
        Session::init();

        $table = 'tab_category_product';
        $table_product = 'tab_product';
        $table_post = 'tab_category_post';

        $cond = " $table_product.id_category_product = $table.id_category_product AND $table_product.id_product = '$id'";
        $categorymodel = $this->load->model('categorymodel');
        $data['category'] = $categorymodel->categoryHome($table);
        $data['category_post'] = $categorymodel->categoryPostHome($table_post);
        $data['details_product'] = $categorymodel->detailsProductHome($table, $table_product, $cond);

        foreach ($data['details_product'] as $key => $cate) {
            $id_cate = $cate['id_category_product'];

            $this->load->title = $cate['title_product'];
            $this->load->desc = substr($cate['desc_product'], 0, 500);
            $this->load->image = BASE_URL . '/public/uploads/product/imageproduct/' . $cate['image_product'];
        }
        $cond_related = " $table_product.id_category_product = $table.id_category_product
                        AND $table.id_category_product = '$id_cate'
                        AND $table_product.id_product NOT IN ('$id')";

        $data['related'] = $categorymodel->relatedProductHome($table, $table_product, $cond_related);


        $this->load->view('header', $data);
        $this->load->view('detailsproduct', $data);
        $this->load->view('footer');
    }

    public function ranger()
    {
        Session::init();

        // if (isset($_GET['price-range=4-10tr'])) {
        //     $min_price = "0";
        //     $max_price = "2000000";
        // }
        // if (isset($_GET['price-range=4-10tr'])) {
        //     $min_price = "2000000";
        //     $max_price = "4000000";
        // }
        // if (isset($_GET['price-range=4-10tr'])) {
        //     $min_price = "4000000";
        //     $max_price = "10000000";
        // }
        // if (isset($_GET['price-range=4-10tr'])) {
        //     $min_price = "10000000";
        //     $max_price = "20000000";
        // }
        // if (isset($_GET['20tr'])) {
        //     $min_price = "20000000";
        //     $max_price = "2000000000000000";
        // }

        if (isset($_GET['price-range'])) {
            $price_range = $_GET['price-range'];

            switch ($price_range) {
                case 'duoi2tr':
                    $min_price = "0";
                    $max_price = "2000000";
                    break;
                case '2-4tr':
                    $min_price = "2000000";
                    $max_price = "4000000";
                    break;
                case '4-10tr':
                    $min_price = "4000000";
                    $max_price = "10000000";
                    break;
                case '10-20tr':
                    $min_price = "10000000";
                    $max_price = "20000000";
                    break;
                case '20tr':
                    $min_price = "20000000";
                    $max_price = "2000000000000000";
                    break;
                default:
                    // Xử lý mặc định nếu không có lựa chọn hợp lệ
                    break;
            }
        }
        $table = 'tab_category_product';
        $table_product = 'tab_product';
        $table_post = 'tab_category_post';
        $categorymodel = $this->load->model('categorymodel');
        $data['category'] = $categorymodel->categoryHome($table);
        $data['category_post'] = $categorymodel->categoryPostHome($table_post);
        $data['list_product'] = $categorymodel->rangerProduct($table_product, $min_price, $max_price);



        $this->load->view('header', $data);
        $this->load->view('rangerproduct', $data);
        $this->load->view('footer');
    }
}