<style>
    h4 {
        text-align: center;
        padding: 10px;
    }

    .form-group {
        padding: 5px 0;
    }

    .form-group label {
        padding: 10px 0;
        font-size: large;
    }

    .form-check {
        padding-top: 10px;
    }
    
    p {
        padding-top: 10px;
    }

    .image {
        object-fit: cover;
        border-radius: 5%;
        box-shadow: 5px 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
    }
</style>

<?php
if (!empty($_GET['msg'])) {
    $msg = unserialize(urldecode($_GET['msg']));
    foreach ($msg as $key => $value) {
        if ($value == "Update category product successfully!") {
            echo '<div class="alert alert-success" id="success-alert">';
        }
        else if ($value == "Update category product failed!") {
            echo '<div class="alert alert-danger" id="danger-alert">';
        }
            echo '<strong>' . $value . '</strong>';
            echo '</div>';
        } 
}
?>

<div class="container-form-update-article">
    <h4>Edit Category Product</h4>
    <?php
    foreach($categorybyid as $key => $cate) {
        ?> 
    <form action="<?php echo BASE_URL ?>/product/updateCategoryProduct/<?php echo $cate['id_category_product'] ?>" method="post">
        <div class="form-group">
            <label for="nameCategory">Name Category Product</label>
            <input type="text" value="<?php echo $cate['title_category_product'] ?>" name="title_category_product" class=" form-control" >
        </div>
        <div class="form-group">
            <label for="describeArticle">Describe Category Product</label>
            <textarea type="text" value="<?php echo $cate['desc_category_product'] ?>" name="desc_category_product" class=" form-control" ></textarea>
        </div>
        <div class="form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Check me out</label>
        </div>
        <button type="submit" class="btn btn-primary">Update Category Product</button>
    </form>
    <?php
    } ?>
</div>


    