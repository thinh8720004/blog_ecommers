<?php
class product  extends Dcontrollers
{
  public function __construct()
  {
    parent::__construct();
  }
  public function index(){
    $this->add_category();
  }
    public function add_category(){ 
    $this->load->view('panel/header');
    $this->load->view('panel/menu');
    $this->load->view('panel/product/add_category');
    $this->load->view('panel/footer');
    } 

    public function add_product(){ 
      $this->load->view('panel/header');
      $this->load->view('panel/menu');
    $table = "tbl_category_product";
    $categorymodel = $this->load->model('categorymodel');
    $data['category'] = $categorymodel->category($table);
      $this->load->view('panel/product/add_product',$data);
      $this->load->view('panel/footer');
      } 

      
    public function insert_product(){
    $title = $_POST['title_product']; 
    $price = $_POST['price_product']; 
    $desc =  $_POST['desc_product'];
    $quantity =  $_POST['quantity_product']; 
    $image = $_FILES['image_product']['name'];
        $tmp_image = $_FILES['image_product']['tmp_name'];
        $div= explode('.', $image);
        $file_ext = strtolower(end($div));
        $unique_image = $div[0].time().'.'.$file_ext;
        $path_uploads= "public/uploads/product/".$unique_image;
    $category = $_POST['id_category_product'] ;

      $table = 'tbl_product';

    $data = array(
 'title_product' => $title, 
 'price_product'  => $price,
 'quantity_product' => $quantity, 
 'desc_product'  => $desc, 
 'image_product' => $unique_image, 
 'id_category_product'  => $category
);
    $categorymodel = $this->load->model('categorymodel'); 
    $result =  $categorymodel->insertproduct($table, $data);
    if($result==1){
      $message['msg'] = "Thêm sản phẩm thành công"; 
      header('Location:'.BASE_URL."/product/add_product?msg=".urlencode(serialize($message)));
    }else {
      $message['msg'] = "Thêm sản phẩm thất bại"; 
      header('Location:'.BASE_URL."/product/add_product?msg=".urlencode(serialize($message)));
    }
  }

  public function list_category(){
    $this->load->view('panel/header'); 
    $this->load->view('panel/menu');
    $table = "tbl_category_product";

    $categorymodel = $this->load->model('categorymodel');
    $data['category'] = $categorymodel->category($table);

    $this->load->view('panel/product/list_category', $data);
    $this->load->view('panel/footer');
    }
    public function delete_category($id){ 
    $table = "tbl_category_product"; 
    $cond = "id_category_product='$id'"; 
    $categorymodel = $this->load->model('categorymodel');
    $result = $categorymodel->deletecategory($table, $cond); 
    if($result ==1){
    $message['msg'] = "Xóa danh mục sản phẩm thành công" ; 
    header('Location:'.BASE_URL."/post/list_category?msg=".urlencode(serialize($message)));
    }else{
    $message['msg']= "Xóa danh mục sản phẩm thất bại";
    header('Location:'.BASE_URL."/product/list_category?msg=".urlencode(serialize($message)));

    }
  }

  public function edit_category($id){
    $table = "tbl_category_product";
    $cond = "id_category_product='$id'";
    $categorymodel = $this->load->model('categorymodel');
    $data['categorybyid'] = $categorymodel->categorybyid ($table, $cond);

    $this->load->view('panel/header'); 
    $this->load->view('panel/menu');
    $this->load->view('panel/product/edit_category', $data);
    $this->load->view('panel/footer');
    } 
    
    public function update_product($id){
    $table = "tbl_category_product";
    $cond = "id_category_product='$id'";

    $title = $_POST['title_category_product'];
    $desc = $_POST['desc_category_product'];

    $data = array(
    'title_category_product' => $title, 
    'desc_category_product' => $desc
    );
    $categorymodel = $this->load->model('categorymodel');
    $result = $categorymodel->updatecategory($table, $data, $cond);

    if($result==1){
    $message['msg'] = "Cập nhật danh mục sản phẩm thành công"; 
    header('Location:'.BASE_URL."/product/list_category?msg=".urlencode(serialize($message)));
    }else {
      $message['msg'] = "Cập nhật danh mục sản phẩm thất bại"; 
      header('Location:'.BASE_URL."/product/list_category?msg=".urlencode(serialize($message)));
    }

}
}
?>