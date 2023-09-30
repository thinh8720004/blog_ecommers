<?php
class post extends Dcontrollers
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
        $this->load->view('panel/post/addcategory');
        $this->load->view('panel/footer');
    }
    public function insertCategory()
    {
        $title = $_POST['title_category_post'];
        $desc = $_POST['desc_category_post'];
        $table = 'tab_category_post';
        $data = array(
            'title_category_post' => $title,
            'desc_category_post' => $desc
        );
        $categorymodel = $this->load->model('categorymodel');
        $result = $categorymodel->insertCategoryPost($table, $data);
        if ($result == 1) {
            $message['msg'] = "Added Category successfully!";
            header('Location:' . BASE_URL . "post/addcategory?msg=" . urlencode(serialize($message)));
        } else {
            $message['msg'] = "Add Category failed!";
            header('Location:' . BASE_URL . "post/addcategory?msg=" . urlencode(serialize($message)));
        }
    }

    public function listCategory()
    {
        $this->load->view('panel/header');
        $this->load->view('panel/menu');

        $table = "tab_category_post";

        $categorymodel = $this->load->model('categorymodel');
        $data['category'] = $categorymodel->postCategory($table);

        $this->load->view('panel/post/listcategory', $data);
        $this->load->view('panel/footer');
    }

    public function deleteCategory($id)
    {
        $table = "tab_category_post";
        $cond = "id_category_post='$id'";
        $categorymodel = $this->load->model('categorymodel');
        $result = $categorymodel->deleteCategoryPost($table, $cond);
        if ($result == 1) {
            $message['msg'] = "Delete Category successfully!";
            header('Location:' . BASE_URL . "post/listcategory?msg=" . urlencode(serialize($message)));
        } else {
            $message['msg'] = "Delete Category failed!";
            header('Location:' . BASE_URL . "post/listcategory?msg=" . urlencode(serialize($message)));
        }
    }
    public function editCategory($id)
    {
        $table = "tab_category_post";
        $cond = "id_category_post='$id'";
        $categorymodel = $this->load->model('categorymodel');
        $data['categorybyid'] = $categorymodel->categoryByIDPost($table, $cond);
        $this->load->view('panel/header');
        $this->load->view('panel/menu');
        $this->load->view('panel/post/editcategory', $data);
        $this->load->view('panel/footer');
    }

    public function updateCategory($id)
    {
        $table = "tab_category_post";
        $cond = "id_category_post='$id'";

        $title = $_POST['title_category_post'];
        $desc = $_POST['desc_category_post'];

        $data = array(
            'title_category_post' => $title,
            'desc_category_post' => $desc
        );
        $categorymodel = $this->load->model('categorymodel');
        $result = $categorymodel->updateCategory($table, $data, $cond);

        if ($result == 1) {
            $message['msg'] = "Update article category successfully!";
            header('Location:' . BASE_URL . "post/addcategory?msg=" . urlencode(serialize($message)));
        } else {
            $message['msg'] = "Update article category failed!";
            header('Location:' . BASE_URL . "post/addcategory?msg=" . urlencode(serialize($message)));
        }
    }


    public function updateCategoryPost($id)
    {
        $table = "tab_category_post";
        $cond = "id_category_post='$id'";

        $title = $_POST['title_category_post'];
        $desc = $_POST['desc_category_post'];
        $data = array(
            'title_category_post' => $title,
            'desc_category_post' => $desc
        );
        $categorymodel = $this->load->model('categorymodel');
        $result = $categorymodel->updateCategoryPost($table, $data, $cond);
        if ($result == 1) {
            $message['msg'] = "Update article successfully!";
            header('Location:' . BASE_URL . "post/editcategory?msg=" . urlencode(serialize($message)));
        } else {
            $message['msg'] = "Update article failed!";
        }
        header('Location:' . BASE_URL . "post/editcategory?msg=" . urlencode(serialize($message)));
    }

    // post
    public function addPost()
    {
        $this->load->view('panel/header');
        $this->load->view('panel/menu');

        $postmodel = $this->load->model('postmodel');
        $table = "tab_category_post";
        $data['category'] = $postmodel->categoryPost($table);

        $this->load->view('panel/post/addpost', $data);
        $this->load->view('panel/footer');
    }

    public function insertPost()
    {
        $title = $_POST['title_post'];
        $content = $_POST['content_post'];
        $image = $_FILES['image_post']['name'];
        if (isset($_FILES['image_post']) && $_FILES['image_post']['error'] === UPLOAD_ERR_OK) {
            $image = $_FILES['image_post']['name'];
            $image_tmp = $_FILES['image_post']['tmp_name'];
            $target_directory = "public/uploads/post/imagepost"; // Đường dẫn đến thư mục mục tiêu
            if (!is_dir($target_directory)) {
                mkdir($target_directory, 0777, true); // Tạo thư mục và tạo các thư mục cha nếu chưa tồn tại
            }
            move_uploaded_file($image_tmp, $target_directory . "/" . $image);
        } else {
            echo "Vui lòng chọn một tệp hình ảnh để tải lên.";
        }

        $category = $_POST['category_post'];

        $table = 'tab_post';

        $data = array(
            'title_post' => $title,
            'content_post' => $content,
            'image_post' => $image,
            'id_category_post' => $category
        );
        $postmodel = $this->load->model('postmodel');
        $result = $postmodel->insertPost($table, $data);
        if ($result == 1) {
            // move_uploaded_file($tmp_image,$path_upload);
            $message['msg'] = "Added article successfully!";
            header('Location:' . BASE_URL . "post/addpost?msg=" . urlencode(serialize($message)));
        } else {
            $message['msg'] = "Add article failed!";
            header('Location:' . BASE_URL . "post/addpost?msg=" . urlencode(serialize($message)));
        }
    }

    public function listPost()
    {
        $this->load->view('panel/header');
        $this->load->view('panel/menu');
        $table_post = "tab_post";
        $table_category = "tab_category_post";

        $postmodel = $this->load->model('postmodel');
        $data['post'] = $postmodel->post($table_post, $table_category);

        $this->load->view('panel/post/listpost', $data);
        $this->load->view('panel/footer');
    }

    public function deletePost($id)
    {
        $table_post = "tab_post";
        $cond = "id_post = '$id'";
        $postmodel = $this->load->model('postmodel');
        $result = $postmodel->deletePost($table_post, $cond);
        if ($result == 1) {
            $message['msg'] = "Delete article successfully!";
            header('Location:' . BASE_URL . "post/listpost?msg=" . urlencode(serialize($message)));
        } else {
            $message['msg'] = "Delete article failed!";
            header('Location:' . BASE_URL . "post/listpost?msg=" . urlencode(serialize($message)));
        }
    }
    public function editPost($id)
    {
        $this->load->view('panel/header');
        $this->load->view('panel/menu');

        $postmodel = $this->load->model('postmodel');
        $table = "tab_category_post";
        $table_post = "tab_post";
        $cond = "id_post = '$id'";

        $data['category'] = $postmodel->categoryPost($table);
        $data['postbyid'] = $postmodel->postByID($table_post, $cond);

        $this->load->view('panel/post/editpost', $data);
        $this->load->view('panel/footer');
    }


    public function updatePost($id)
    {
        $table = 'tab_post';
        $cond = "id_post = '$id'";
        $postmodel = $this->load->model('postmodel');

        $title = $_POST['title_post'];
        $content = $_POST['content_post'];
        $image = $_FILES['image_post']['name'];
        $category = $_POST['category_post'];

        if (isset($_FILES['image_post']) && $_FILES['image_post']['error'] === UPLOAD_ERR_OK) {
            $image = $_FILES['image_post']['name'];
            $image_tmp = $_FILES['image_post']['tmp_name'];
            $target_directory = "public/uploads/post/imagepost"; // Đường dẫn đến thư mục mục tiêu
            if (!is_dir($target_directory)) {
                mkdir($target_directory, 0777, true); // Tạo thư mục và tạo các thư mục cha nếu chưa tồn tại
            }
            move_uploaded_file($image_tmp, $target_directory . "/" . $image);
        } else {
            echo "Vui lòng chọn một tệp hình ảnh để tải lên.";
        }
        if ($image) {
            $data['postbyid'] = $postmodel->postByID($table, $cond);
            unlink("public/uploads/post/imagepost/" . $data['postbyid'][0]['image_post']);
            $data = array(
                'title_post' => $title,
                'content_post' => $content,
                'image_post' => $image,
                'id_category_post' => $category
            );
            //   move_uploaded_file($image_tmp, $target_directory . "/" . $image);

        } else {
            $data = array(
                'title_post' => $title,
                'content_post' => $content,
                // 'image_post' => $image,
                'id_category_post' => $category
            );
        }

        $result = $postmodel->updatePost($table, $data, $cond);
        if ($result == 1) {
            // move_uploaded_file($tmp_image,$path_upload);
            $message['msg'] = "Update article successfully!";
            header('Location:' . BASE_URL . "post/addpost?msg=" . urlencode(serialize($message)));
        } else {
            $message['msg'] = "Update article failed!";
            header('Location:' . BASE_URL . "post/addpost?msg=" . urlencode(serialize($message)));
        }
    }
}