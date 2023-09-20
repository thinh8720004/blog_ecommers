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
        if ($value == "Update article successfully!") {
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

<div class="container-form-update-article">
    <h4>Edit Article</h4>
    <?php
    foreach($postbyid as $key => $post) {
        ?> 
    <form action="<?php echo BASE_URL; ?>post/updatePost/<?php echo $post['id_post'] ?>" method="post">
        <div class="form-group">
            <label for="nameCategory">Name Article</label>
            <input type="text" class="form-control" value="<?php echo $post['title_post'] ?>" name="title_post">
        </div>
        <div class="form-group">
            <label for="iamgeArticle">Image Article</label>
            <input type="file" class="form-control">
            <p><img class="image" src="<?php echo BASE_URL?>public/uploads/post/imagepost/<?php echo $post['image_post'] ?>" height="100px" width="100px"></p>
        </div>
        <div class="form-group">
            <label for="describeArticle">Describe Article</label>
            <input type="textarea" class="form-control" value="<?php echo $post['content_post'] ?>" name="content_post">
        </div>
        <div class="form-group">
        <label for="category">Article Category:</label>
            <select name="category_post" id="">
                <?php
                foreach ($category as $key => $cate) {
                ?>
                <option <?php if($cate['id_category_post'] == $post['id_category_post']){ echo 'selected';}?>
                class="option" value="<?php echo $cate['id_category_post']?>">
                <?php echo $cate['title_category_post']?> </option>
                    <?php } ?>
            </select>
            </div>
        <div class="form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Check me out</label>
        </div>
        <button type="submit" class="btn btn-primary">Update Article</button>
    </form>
    <?php
    } ?>
</div>
