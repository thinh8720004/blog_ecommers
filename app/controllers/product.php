<?php
class product extends Dcontrollers
{
  public function __construct()
  {
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

  public function insertCategory()
  {
    $title = $_POST['title_category_product'];
    $desc = $_POST['desc_category_product'];
    $table = 'tab_category_product';
    $data = array(
      'title_category_product' => $title,
      'desc_category_product' => $desc
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
  public function listProduct()
  {
    $this->load->view('panel/header');
    $this->load->view('panel/menu');
    $table_product = "tab_product";
    $table_category = "tab_category_product";

    $categorymodel = $this->load->model('categorymodel');
    $data['category'] = $categorymodel->product($table_product, $table_category);

    $this->load->view('panel/product/listproduct', $data);
    $this->load->view('panel/footer');
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

  public function deleteProduct($id)
  {
    $table = "tab_product";
    $cond = "id_product='$id'";
    $categorymodel = $this->load->model('categorymodel');
    $result = $categorymodel->deleteProduct($table, $cond);
    if ($result == 1) {
      $message['msg'] = "Delete product successfully!";
      header('Location:' . BASE_URL . "product/listproduct?msg=" . urlencode(serialize($message)));
    } else {
      $message['msg'] = "Delete product failed!";
      header('Location:' . BASE_URL . "product/listproduct?msg=" . urlencode(serialize($message)));
    }
  }

  public function editCategory($id)
  {
    $table = "tab_category_product";
    $cond = "id_category_product='$id'";
    $categorymodel = $this->load->model('categorymodel');
    $data['categorybyid'] = $categorymodel->categoryByID($table, $cond);

    $this->load->view('panel/header');
    $this->load->view('panel/menu');
    $this->load->view('panel/product/editcategory', $data);
    $this->load->view('panel/footer');
  }

  // product
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

  public function editProduct($id)
  {
    $table = "tab_product";
    $table_category = "tab_category_product";
    $cond = "id_product='$id'";
    $categorymodel = $this->load->model('categorymodel');

    $data['productbyid'] = $categorymodel->productByID($table, $cond);
    $data['category'] = $categorymodel->category($table_category);

    $this->load->view('panel/header');
    $this->load->view('panel/menu');
    $this->load->view('panel/product/editproduct', $data);
    $this->load->view('panel/footer');
  }

  public function insertProduct()
  {
    $title = $_POST['title_product'];
    $price = $_POST['price_product'];
    $desc = $_POST['desc_product'];
    $quantity = $_POST['quantity_product'];
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
      'price_product' => $price,
      'quantity_product' => $quantity,
      'desc_product' => $desc,
      'image_product' => $image,
      'id_category_product' => $category
    );
    $categorymodel = $this->load->model('categorymodel');
    $result = $categorymodel->insertProduct($table, $data);
    if ($result == 1) {
      // move_uploaded_file($tmp_image,$path_upload);
      $message['msg'] = "Added product successfully!";
      header('Location:' . BASE_URL . "product/addproduct?msg=" . urlencode(serialize($message)));
    } else {
      $message['msg'] = "Add product failed!";
      header('Location:' . BASE_URL . "product/addproduct?msg=" . urlencode(serialize($message)));
    }
  }


  public function updateProduct($id)
  {
    $table = "tab_product";
    $cond = "id_product='$id'";
    $categorymodel = $this->load->model('categorymodel');

    $title = $_POST['title_product'];
    $image = $_FILES['image_product']['name'];
    $desc = $_POST['desc_product'];
    $price = $_POST['price_product'];
    $quantity = $_POST['quantity_product'];
    $category = $_POST['category_product'];

    if (isset($_FILES['imageproduct']) && $_FILES['image_product']['error'] === UPLOAD_ERR_OK) {
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
    if ($image) {
      $data['categorybyid'] = $categorymodel->categoryByID($table, $cond);
      unlink("public/uploads/product/imageproduct/" . $data['categorybyid'][0]['image_product']);
      $data = array(
        'title_product' => $title,
        'image_product' => $image,
        'desc_product' => $desc,
        'price_product' => $price,
        'quantity_product' => $quantity,
        'id_category_product' => $category,
      );
    } else {
      $data = array(
        'title_product' => $title,
        'desc_product' => $desc,
        'price_product' => $price,
        'quantity_product' => $quantity,
        'id_category_product' => $category,
      );
    }

    $result = $categorymodel->updateProduct($table, $data, $cond);
    if ($result == 1) {
      $message['msg'] = "Update product successfully!";
      header('Location:' . BASE_URL . "product/addproduct?msg=" . urlencode(serialize($message)));
    } else {
      $message['msg'] = "Update product failed!";
      header('Location:' . BASE_URL . "product/addproduct?msg=" . urlencode(serialize($message)));
    }
  }

  public function updateCategoryProduct($id)
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
      $message['msg'] = "Update category product successfully!";
      header('Location:' . BASE_URL . "product/addcategory?msg=" . urlencode(serialize($message)));
    } else {
      $message['msg'] = "Update category product failed!";
      header('Location:' . BASE_URL . "product/addcategory?msg=" . urlencode(serialize($message)));
    }
  }
}
