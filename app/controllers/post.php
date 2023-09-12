<?php
class post  extends Dcontrollers
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
        $this->load->view('panel/post/add_category');
        $this->load->view('panel/footer');

    }
     public function insert_category(){
        $title = $_POST['title_category_post'];
        $desc = $_POST['desc_category_post'];
        $table = 'tbl_category_post';
        $data = array(
            'title_category_post' => $title,
            'desc_category_post' => $desc
        );
        $categorymodel =$this->load->model('categorymodel');
        $result = $categorymodel->insertcategory_post($table,$data);

        if($result ==1){
            $message['msg'] = "Thêm Danh Mục Bài Viết Thành Công:";
            header('Location:'.BASE_URL."/post/list_category?msg=".urlencode(serialize($message)));
        }else {
            $message['msg'] = "Thêm Danh Mục Bài Viết Thành Công:";
            header('Location:'.BASE_URL."/post/list_category?msg=".urlencode(serialize($message)));

        }


     }

     public function list_category(){
        $this->load->view('panel/header'); 
        $this->load->view('panel/menu');

        $table = "tbl_category_post";

        $categorymodel = $this->load->model('categorymodel'); 
        $data['category'] = $categorymodel->post_category($table);


        $this->load->view('panel/post/list_category', $data);
         $this->load->view('panel/footer');

     }

     public function delete_category($id){
        $table = "tbl_category_post";
        $cond = "id_category_post='$id'";
        $categorymodel= $this->load->model('categorymodel');
        $result = $categorymodel->deletecategory_post($table, $cond); 
        if($result==1){
        $message['msg'] = "Xóa danh mục bài viết thành công"; 
        header('Location:'.BASE_URL."/post/list_category?msg=".urlencode(serialize($message)));
    }else{
        $message['msg'] = "Xóa danh mục bài viết thất bại";
        header('Location:'.BASE_URL."/post/list_category?msg=".urlencode(serialize($message)));

    }
}
public function edit_category($id){
    $table = "tbl_category_post";
    $cond = "id_category_post='$id'";
    $categorymodel = $this->load->model('categorymodel');
    $data['categorybyid'] = $categorymodel->categorybyid_post($table, $cond);
    $this->load->view('panel/header');
    $this->load->view('panel/menu');
    $this->load->view('panel/post/edit_category', $data);
    $this->load->view('panel/footer');
    }

    public function update_category_post($id) {
        $table = "tbl_category_post"; 
        $cond = "id_category_post='$id'";

        $title = $_POST['title_category_post'];
        $desc = $_POST['desc_category_post'];
        $data = array(
        'title_category_post' => $title, 
        'desc_category_post' => $desc
        );
        $categorymodel = $this->load->model('categorymodel');
        $result = $categorymodel->updatecategory_post($table, $data, $cond);
        if($result == 1){
            $message['msg'] = "Cập nhật danh mục bài viết thành công"; 
            header('Location:'.BASE_URL."/post/list_category?msg=".urlencode(serialize($message)));
        }else{
             $message['msg'] = "Cập nhật danh mục bài viết thất bại"; }
             header('Location:'.BASE_URL."/post/list_category?msg=".urlencode(serialize($message)));

            }
        }
    




