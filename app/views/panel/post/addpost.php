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
        if ($value == "Added article successfully!") {
            echo '<div class="alert alert-success" id="success-alert">';
        } else if ($value == "Add article failed!") {
            echo '<div class="alert alert-danger" id="danger-alert">';
        }
        else if ($value == "Update article successfully!") {
            echo '<div class="alert alert-success" id="success-alert">';
        }
        else if ($value == "Update article failed!") {
            echo '<div class="alert alert-danger" id="danger-alert">';
        }
        echo '<strong>' . $value . '</strong>';
        echo '</div>';
    }
}
?>

<div class="container-form-add-category">
    <h4>Add new Article</h4>
    <form action="<?php echo BASE_URL; ?>post/insertPost" method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label for="nameCategory">Name Article:</label>
            <input type="text" class="form-control" placeholder="Enter name category" name="title_post" required>
        </div>
        <div class="form-group">
            <label for="describeCategory">Image Article</label>
            <input type="file" class="form-control" name="image_post" required>
        </div>
        <div class="form-group">
            <label for="nameCategory">Describe Article:</label>
            <textarea type="text" class="form-control" placeholder="Enter describe article ..." name="content_post" required></textarea>
        </div>
        <div class="form-group">
        <label for="category">Article Category:</label>
            <select name="category_post" id="">
                <?php
                foreach ($category as $key => $cate) {
                ?>
                <option class="option" value="<?php echo $cate['id_category_post'] ?>">
            <?php echo $cate['title_category_post'] ?> </option>

                    <?php } ?>
            </select>
            </div>
        <div class="form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Check me out</label>
        </div>
        <button type="submit" class="btn btn-primary">Add new article</button>
    </form>
</div>

 