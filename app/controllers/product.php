<?php
class product  extends Dcontrollers
{
  public function __construct()
  {
    parent::__construct();
  }

  public function index()
  {
    $this->addProduct();
  }

  public function addProduct()
  {
    $this->load->view('panel/header');
    $this->load->view('panel/menu');
    $this->load->view('panel/product/addproduct');
    $this->load->view('panel/footer');
  }

  public function insertProduct()
  {
    $title = isset($_POST['title_category_product']) ? $_POST['title_category_product'] : '';
    $describe = isset($_POST['describe_category_product']) ? $_POST['describe_category_product'] : '';

    if (empty($title) || empty($describe)) {
      $message['msg'] = "Add category failed!";
      header('Location:' . BASE_URL . 'product?msg=' . urldecode(serialize($message)));
      return;
    }

    $table = "tab_category_product";
    $data = array(
      'title_category_product' => $title,
      'describe_category_product' => $describe
    );

    $categorymodel = $this->load->model('categorymodel');
    $result = $categorymodel->insertCategory($table, $data);

    if ($result == 1) {
      $message['msg'] = "Added category successfully!";
      header('Location:' . BASE_URL . 'product?msg=' . urldecode(serialize($message)));
    } else {
      $message['msg'] = "Add category failed!";
      header('Location:' . BASE_URL . 'product?msg=' . urldecode(serialize($message)));
    }
  }
}
