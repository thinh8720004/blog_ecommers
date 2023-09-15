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

            // post
            public function add_post() {

                $this->load->view('panel/header');
                $this->load->view('panel/menu');

                $postmodel = $this->load->model('postmodel');
                $table = "tbl_category_post"; 
                $data['category'] = $postmodel->category_post($table);
        
                $this->load->view('panel/post/add_post',$data);
                $this->load->view('panel/footer');
            }

            public function insert_post(){
                $title = $_POST['title_post']; 
                $content =  $_POST['content_post'];
                $image = $_FILES['image_post']['name'];
            if (isset($_FILES['image_post']) && $_FILES['image_post']['error'] === UPLOAD_ERR_OK) {
              $image = $_FILES['image_post']['name'];
              $image_tmp = $_FILES['image_post']['tmp_name'];
              $target_directory = "public/uploads/post/image_post"; // Đường dẫn đến thư mục mục tiêu
              if (!is_dir($target_directory)) {
                  mkdir($target_directory, 0777, true); // Tạo thư mục và tạo các thư mục cha nếu chưa tồn tại
              }
              move_uploaded_file($image_tmp, $target_directory . "/" . $image);
            } else {
              echo "Vui lòng chọn một tệp hình ảnh để tải lên.";
            }
            
            
            
                $category = $_POST['category_post'] ;
            
                  $table = 'tbl_post';
            
                $data = array(
             'title_post' => $title, 
             'content_post'  => $content, 
             'image_post' => $image,
             'id_category_post'  => $category
            );
                $postmodel = $this->load->model('postmodel'); 
                $result =  $postmodel->insertpost($table, $data);
                if($result==1){
                  // move_uploaded_file($tmp_image,$path_upload);
                  $message['msg'] = "Thêm bài viết thành công"; 
                  header('Location:'.BASE_URL."/post/add_post?msg=".urlencode(serialize($message)));
                }else {
                  $message['msg'] = "Thêm bài viết thất bại"; 
                  header('Location:'.BASE_URL."/post/add_post?msg=".urlencode(serialize($message)));
                }
              }
              // public function delete_product($id){ 
              //   $table = "tbl_product"; 
              //   $cond = "id_product='$id'"; 
              //   $categorymodel = $this->load->model('categorymodel');
              //   $result = $categorymodel->deleteproduct($table, $cond); 
              //   if($result ==1){
              //   $message['msg'] = "Xóa sản phẩm thành công" ; 
              //   header('Location:'.BASE_URL."/post/list_product?msg=".urlencode(serialize($message)));
              //   }else{
              //   $message['msg']= "Xóa sản phẩm thất bại";
              //   header('Location:'.BASE_URL."/product/list_product?msg=".urlencode(serialize($message)));
            
              //   }
              // }
              public function list_post(){
                $this->load->view('panel/header'); 
                $this->load->view('panel/menu');
                $table_post = "tbl_post";
                $table_category = "tbl_category_post";
            
                $postmodel = $this->load->model('postmodel');
                $data['post'] = $postmodel->post($table_post,$table_category);
            
                $this->load->view('panel/post/list_post', $data);
                $this->load->view('panel/footer');
                }

                public function delete_post($id) {
                    $table_post = "tbl_post";
                    $cond = "id_post = '$id'";
                    $postmodel = $this->load->model('postmodel');
                    $result = $postmodel->datelepost($table_post, $cond); 
                    if($result ==1){
                    $message['msg'] = "Xóa bài viết thành công" ; 
                    header('Location:'.BASE_URL."/post/list_post?msg=".urlencode(serialize($message)));
                
                    }else{
                    $message['msg']= "Xóa bài viết thất bại";
                    header('Location:'.BASE_URL."/post/list_post?msg=".urlencode(serialize($message)));
                
                    }
                }
                public function edit_post($id) {

                    $this->load->view('panel/header');
                    $this->load->view('panel/menu');
                     
                    $postmodel = $this->load->model('postmodel');
                    $table = "tbl_category_post";
                    $table_post = "tbl_post";
                    $cond = "id_post = '$id'";


                    $data['category'] = $postmodel->category_post($table);
                    $data['postbyid'] = $postmodel->postbyid($table_post,$cond);

            
                    $this->load->view('panel/post/edit_post',$data);
                    $this->load->view('panel/footer');
                }
 
                
                public function update_post($id) {

                    $table = 'tbl_post';
                    $cond = "id_post = '$id'";
                    $postmodel = $this->load->model('postmodel');

                    $title = $_POST['title_post']; 
                    $content =  $_POST['content_post'];
                    $image = $_FILES['image_post']['name'];
                    $category = $_POST['category_post'] ;

                if (isset($_FILES['image_post']) && $_FILES['image_post']['error'] === UPLOAD_ERR_OK) {
                  $image = $_FILES['image_post']['name'];
                  $image_tmp = $_FILES['image_post']['tmp_name'];
                  $target_directory = "public/uploads/post/image_post"; // Đường dẫn đến thư mục mục tiêu
                  if (!is_dir($target_directory)) {
                      mkdir($target_directory, 0777, true); // Tạo thư mục và tạo các thư mục cha nếu chưa tồn tại
                  }
                  move_uploaded_file($image_tmp, $target_directory . "/" . $image);
                } else {
                  echo "Vui lòng chọn một tệp hình ảnh để tải lên.";
                }
                if($image) {
                    $data['postbyid'] = $postmodel->postbyid($table,$cond);
                    unlink("public/uploads/post/image_post/" . $data['postbyid'][0]['image_post']);
                    $data = array(
                        'title_post' => $title, 
                        'content_post'  => $content, 
                        'image_post' => $image,
                        'id_category_post'  => $category
                       );
                //   move_uploaded_file($image_tmp, $target_directory . "/" . $image);

                }else {
                    $data = array(
                        'title_post' => $title, 
                        'content_post'  => $content, 
                        // 'image_post' => $image,
                        'id_category_post'  => $category
                       );
                }
                

                    $result =  $postmodel->updatepost($table, $data,$cond);
                    if($result==1){
                      // move_uploaded_file($tmp_image,$path_upload);
                      $message['msg'] = "Cập nhật viết thành công"; 
                      header('Location:'.BASE_URL."/post/add_post?msg=".urlencode(serialize($message)));
                    }else {
                      $message['msg'] = "cập nhật viết thất bại"; 
                      header('Location:'.BASE_URL."/post/add_post?msg=".urlencode(serialize($message)));
                    }
                  }





                }


    




