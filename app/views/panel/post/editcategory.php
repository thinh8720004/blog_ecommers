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
</style>

<?php
if (!empty($_GET['msg'])) {
    $msg = unserialize(urldecode($_GET['msg']));
    foreach ($msg as $key => $value) {
        if ($value == "Update article category successfully!") {
            echo '<div class="alert alert-success" id="success-alert">';
        }
        else if ($value == "Update article category failed!") {
            echo '<div class="alert alert-danger" id="danger-alert">';
        }
            echo '<strong>' . $value . '</strong>';
            echo '</div>';
        } 
}
?>

<div class="container-form-update-category">
    <h4>Update Article Category</h4>
    <?php
    foreach($categorybyid as $key => $cate) {
        ?> 
    <form action="<?php echo BASE_URL; ?>post/updateCategory/<?php echo $cate['id_category_post'] ?>" method="post">
        <div class="form-group">
            <label for="nameCategory">Name Article Category</label>
            <input type="text" class="form-control" value="<?php echo $cate['title_category_post'] ?>" name="title_category_post">
        </div>
        <div class="form-group">
            <label for="describeCategory">Describe Article Category</label>
            <input type="textarea" class="form-control" value="<?php echo $cate['desc_category_post'] ?>" name="desc_category_post">
        </div>
        <div class="form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Check me out</label>
        </div>
        <button type="submit" class="btn btn-primary">Update article category</button>
    </form>
    <?php
    } ?>
</div>

   