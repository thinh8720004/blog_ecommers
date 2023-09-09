<?php
class category  extends Dcontrollers
{
    public function __construct()
    {
        $data = array();
        parent::__construct();
    }

    public function list_category()
    {
        $this->load->view('header');
        $categorymodel = $this->load->model('categorymodel');

        $table_category_product = 'tbl_category_product';
        $data['category'] = $categorymodel->category( $table_category_product);

        $this->load->view('category', $data);
        $this->load->view('footer');
    }

    public function catebyid()
    {
        $this->load->view('header');
        $categorymodel = $this->load->model('categorymodel');
        $table_category_product = 'tbl_category_product';
        $id = 2;
        $data['categorybyid'] = $categorymodel->categorybyid($table_category_product,$id);

        $this->load->view('categorybyid', $data);
        $this->load->view('footer');
    }

    public function insertcategory(){
        $categorymodel = $this->load->model('categorymodel');
        $table_category_product = 'tbl_category_product';
        $data = array (
            'title_category_product' => 'Đồng hồ thời trang',
            'dect_category_product' => 'Đồng hồ thời trang giá rẻ'

        );
      $categorymodel->insertcategory($table_category_product,$data);
        echo('ohghhgh');
       
    }

    public function updatecategory(){
        $categorymodel = $this->load->model('categorymodel');
        $table_category_product = 'tbl_category_product';
        $cond = "tbl_category_product.id_category_product = 3";
        $data = array (
            'title_category_product' => 'Đồng hồ thời trang',
            'dect_category_product' => 'Đồng hồ thời trang giá rẻ'

        );

        $result = $categorymodel->updatecategory($table_category_product,$data,$cond);
       if($result ==1){
       echo "cập nhật thành công";
       }else {
        echo "Cập nhật không thành công";
       }

    }

        public function deletecategory(){
            $categorymodel = $this->load->model('categorymodel');
            $table_category_product = 'tbl_category_product';
            $id = 3;
            $cond = "tbl_category_product.id_category_product = $id";
            // $data = array (
            //     'title_category_product' => 'Đồng hồ thời trang',
            //     'dect_category_product' => 'Đồng hồ thời trang giá rẻ'
    
            // );
    
            $result = $categorymodel->deletecategory($table_category_product,$cond);
           if($result ==1){
           echo "cập nhật thành công";
           }else {
            echo "Cập nhật không thành công";
           }
    
        }


    public function notFound(){
        $this->load->view('header');
        $this->load->view('404');
        $this->load->view('footer');
    }
}