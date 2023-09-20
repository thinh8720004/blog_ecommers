<?php
class product  extends Dcontrollers
{
  public function __construct()
  {
    Session::checkSession();
    parent::__construct();
  }

  public function index()
  {
    $this->addCategory();
  }

  public function addCategory()
  {
    $this->load->view('panel/header');
    $this->load->view('panel/menu');
    $this->load->view('panel/product/addcategory');
    $this->load->view('panel/footer');
  }

  public function addProduct()
  {
    $this->load->view('panel/header');
    $this->load->view('panel/menu');
    $table = "tab_category_product";
    $categorymodel = $this->load->model('categorymodel');
    $data['category'] = $categorymodel->category($table);
    $this->load->view('panel/product/addproduct', $data);
    $this->load->view('panel/footer');
  }

  public function insertProduct()
  {
    $title = $_POST['title_product'];
    $price = $_POST['price_product'];
    $desc =  $_POST['desc_product'];
    $quantity =  $_POST['quantity_product'];
    $image = $_FILES['image_product']['name'];

    if (isset($_FILES['image_product']) && $_FILES['image_product']['error'] === UPLOAD_ERR_OK) {
      $image = $_FILES['image_product']['name'];
      $image_tmp = $_FILES['image_product']['tmp_name'];

      $target_directory = "public/uploads/product/imageproduct"; // Đường dẫn đến thư mục mục tiêu

      if (!is_dir($target_directory)) {
        mkdir($target_directory, 0777, true); // Tạo thư mục và tạo các thư mục cha nếu chưa tồn tại
      }

      move_uploaded_file($image_tmp, $target_directory . "/" . $image);
    } else {
      echo "Vui lòng chọn một tệp hình ảnh để tải lên.";
    }

    $category = $_POST['id_category_product'];

    $table = 'tab_product';

    $data = array(
      'title_product' => $title,
      'price_product'  => $price,
      'quantity_product' => $quantity,
      'desc_product'  => $desc,
      'image_product' => $image,
      'id_category_product'  => $category
    );
    $categorymodel = $this->load->model('categorymodel');
    $result =  $categorymodel->insertProduct($table, $data);
    if ($result == 1) {
      //move_uploaded_file($tmp_image,$path_upload);
      $message['msg'] = "Added product successfully!";
      header('Location:' . BASE_URL . "product/addproduct?msg=" . urlencode(serialize($message)));
    } else {
      $message['msg'] = "Add product failed!";
      header('Location:' . BASE_URL . "product/addproduct?msg=" . urlencode(serialize($message)));
    }
  }


  public function listProduct()
  {
    $this->load->view('panel/header');
    $this->load->view('panel/menu');
    $table = "tab_product";

    $categorymodel = $this->load->model('categorymodel');
    $data['category'] = $categorymodel->category($table);

    $this->load->view('panel/product/listproduct', $data);
    $this->load->view('panel/footer');
  }
  public function deleteProduct($id)
  {
    $table = "tab_category_product";
    $cond = "id_category_product='$id'";
    $categorymodel = $this->load->model('categorymodel');
    $result = $categorymodel->deleteCategory($table, $cond);

    if ($result == 1) {
      $message['msg'] = "Delete product successfully!";
      header('Location:' . BASE_URL . 'product/listproduct?msg=' . urldecode(serialize($message)));
    } else {
      $message['msg'] = "Delete product failed!";
      header('Location:' . BASE_URL . 'product/listproduct?msg=' . urldecode(serialize($message)));
    }
  }

  public function editProduct($id)
  {
    $table = "tab_category_product";
    $cond = "id_category_product='$id'";
    $categorymodel = $this->load->model('categorymodel');
    $data['categorybyid'] = $categorymodel->categorybyid($table, $cond);

    $this->load->view('panel/header');
    $this->load->view('panel/menu');
    $this->load->view('panel/product/editProduct', $data);
    $this->load->view('panel/footer');
  }

  public function updateProduct($id)
  {
    $table = "tab_category_product";
    $cond = "id_category_product='$id'";

    $title = $_POST['title_category_product'];
    $desc = $_POST['desc_category_product'];

    $data = array(
      'title_category_product' => $title,
      'desc_category_product' => $desc
    );
    $categorymodel = $this->load->model('categorymodel');
    $result = $categorymodel->updateCategory($table, $data, $cond);

    if ($result == 1) {
      $message['msg'] = "Update product successfully!";
      header('Location:' . BASE_URL . 'product?msg=' . urldecode(serialize($message)));
    } else {
      $message['msg'] = "Update product failed!";
      header('Location:' . BASE_URL . 'product?msg=' . urldecode(serialize($message)));
    }
  }

  //Category
  public function insertCategory()
  {
    $title = $_POST['title_category_product'];
    $desc = $_POST['describe_category_product'];
    $table = 'tab_category_product';
    $data = array(
      'title_category_product' => $title,
      'describe_category_product' => $desc
    );
    $categorymodel = $this->load->model('categorymodel');
    $result = $categorymodel->insertCategoryProduct($table, $data);

    if ($result == 1) {
      $message['msg'] = "Added Category Product successfully!";
      header('Location:' . BASE_URL . "product/addcategory?msg=" . urlencode(serialize($message)));
    } else {
      $message['msg'] = "Add Category Product failed!";
      header('Location:' . BASE_URL . "product/addcategory?msg=" . urlencode(serialize($message)));
    }
  }

  public function editCategory($id)
  {
    $table = "tab_category_product";
    $cond = "id_category_product='$id'";
    $categorymodel = $this->load->model('categorymodel');
    $data['categorybyid'] = $categorymodel->categorybyid($table, $cond);

    $this->load->view('panel/header');
    $this->load->view('panel/menu');
    $this->load->view('panel/product/editcategory', $data);
    $this->load->view('panel/footer');
  }

  public function updateCategoryProduct($id)
  {
    $table = "tab_category_product";
    $cond = "id_category_product='$id'";

    $title = $_POST['title_category_product'];
    $desc = $_POST['describe_category_product'];

    $data = array(
      'title_category_product' => $title,
      'desc_category_product' => $desc
    );
    $categorymodel = $this->load->model('categorymodel');
    $result = $categorymodel->updateCategory($table, $data, $cond);

    if ($result == 1) {
      $message['msg'] = "Update category product successfully!";
      header('Location:' . BASE_URL . "product/listcategory?msg=" . urlencode(serialize($message)));
    } else {
      $message['msg'] = "Update category product failed!";
      header('Location:' . BASE_URL . "product/listcategory?msg=" . urlencode(serialize($message)));
    }
  }

  public function deleteCategory($id)
  {
    $table = "tab_category_product";
    $cond = "id_category_product='$id'";
    $categorymodel = $this->load->model('categorymodel');
    $result = $categorymodel->deleteCategoryProduct($table, $cond);
    if ($result == 1) {
      $message['msg'] = "Delete category product successfully!";
      header('Location:' . BASE_URL . "product/listcategory?msg=" . urlencode(serialize($message)));
    } else {
      $message['msg'] = "Delete category product failed!";
      header('Location:' . BASE_URL . "product/listcategory?msg=" . urlencode(serialize($message)));
    }
  }

  public function listCategory()
  {
    $this->load->view('panel/header');
    $this->load->view('panel/menu');
    $table = "tab_category_product";

    $categorymodel = $this->load->model('categorymodel');
    $data['category'] = $categorymodel->category($table);

    $this->load->view('panel/product/listcategory', $data);
    $this->load->view('panel/footer');
  }
}
