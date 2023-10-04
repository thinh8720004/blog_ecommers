<?php
if (!empty($_GET['msg'])) {
    $msg = unserialize(urldecode($_GET['msg']));
    foreach ($msg as $key => $value) {
        if ($value == "Delete category product successfully!") {
            echo '<div class="alert alert-success" id="success-alert">';
        } else if ($value == "Delete category product failed!") {
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
</style>

<h4>List Category Product</h4>

<table class="table table-striped">
    <thead>
        <tr>
            <th>Id</th>
            <th>Name Category Product</th>
            <th>Describe Category Product</th>
            <th>Manager</th>
        </tr>
    </thead>

    <tbody>
        <?php
        $i = 0;
        foreach ($category as $key => $cate) {
            $i++; ?>

            <tr>
                <td>
                    <?php echo $i ?>
                </td>
                <td>
                    <?php echo $cate['title_category_product'] ?>
                </td>
                <td>
                    <?php echo $cate['desc_category_product'] ?>
                </td>
                <td>
                    <button type="button" class="btn btn-danger"><a
                            href="<?php echo BASE_URL ?>product/deleteCategory/<?php echo $cate['id_category_product'] ?>">Delete</button>
                    <button type="button" class="btn btn-warning"><a
                            href="<?php echo BASE_URL ?>product/editCategory/<?php echo $cate['id_category_product'] ?>">Update</a></button>
                </td>
            </tr>
            <?php
        } ?>
    </tbody>
</table>