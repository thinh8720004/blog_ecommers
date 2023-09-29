<?php
class products  extends Dcontrollers
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

    public function productDetails($id)
    {
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
        }
        $cond_related = " $table_product.id_category_product = $table.id_category_product
                        AND $table.id_category_product = '$id_cate'
                        AND $table_product.id_product NOT IN ('$id')";
                        
        $data['related'] = $categorymodel->relatedProductHome($table, $table_product, $cond_related);


        $this->load->view('header', $data);
        $this->load->view('detailsproduct', $data);
        $this->load->view('footer');
    }
}
