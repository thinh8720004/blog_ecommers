<?php
if (!empty($_GET['msg'])) {
    $msg = unserialize(urldecode($_GET['msg']));
    foreach ($msg as $key => $value) {
        if ($value == "Delete article successfully!") {
            echo '<div class="alert alert-success" id="success-alert">';
        } else if ($value == "Delete article failed!") {
            echo '<div class="alert alert-danger" id="danger-alert">';
        } else if ($value == "Update article successfully!") {
            echo '<div class="alert alert-success" id="success-alert">';
        } else if ($value == "Update article failed!") {
            echo '<div class="alert alert-danger" id="danger-alert">';
        }
        echo '<strong>' . $value . '</strong>';
        echo '</div>';
    }
}
?>

<style>
    h4 {
        text-align: center;
        padding: 10px;
    }

    .btn a {
        text-decoration: none;
        color: white;
    }

    .image {
        object-fit: cover;
        border-radius: 5%;
        box-shadow: 5px 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
    }
</style>

<h4>List Category</h4>

<table class="table table-striped">
    <thead>
        <tr>
            <th>Id Article</th>
            <th>Name Article</th>
            <th>Image Article</th>
            <th>Category Article</th>
            <th>Manager</th>
        </tr>
    </thead>

    <tbody>
        <?php
        $i = 0;
        foreach ($post as $key => $post) {
            $i++; ?>

            <tr>
                <td>
                    <?php echo $i ?>
                </td>
                <td>
                    <?php echo $post['title_post'] ?>
                </td>
                <td><img class="image"
                        src="<?php echo BASE_URL ?>public/uploads/post/imagepost/<?php echo $post['image_post'] ?>"
                        height="100px" width="100px"></td>
                <td>
                    <?php echo $post['id_category_post'] ?>
                </td>
                <td>
                    <button type="button" class="btn btn-danger"><a
                            href="<?php echo BASE_URL ?>post/deletePost/<?php echo $post['id_post'] ?>">Delete</button>
                    <button type="button" class="btn btn-warning"><a
                            href="<?php echo BASE_URL ?>post/editPost/<?php echo $post['id_post'] ?>">Update</a></button>
                </td>
            </tr>
            <?php
        } ?>
    </tbody>
</table>