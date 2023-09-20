<?php
if (!empty($_GET['msg'])) {
    $msg = unserialize(urldecode($_GET['msg']));
    foreach ($msg as $key => $value) {
        if ($value == "Delete Category successfully!") {
            echo '<div class="alert alert-success" id="success-alert">';
        }
        else if ($value == "Delete Category failed!") {
            echo '<div class="alert alert-danger" id="danger-alert">';
        }
        else if ($value == "Update Category successfully!") {
            echo '<div class="alert alert-success" id="success-alert">';
        }
        else if ($value == "Update Category failed!") {
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
<h4>List Article Category</h4>

<table class="table table-striped">
    <thead>
        <tr>
            <th>Id</th>
            <th>Name Article Category</th>
            <th>Describe Article Category</th>
            <th>Manager</th>
        </tr>
    </thead>

    <tbody>
        <?php
        $i = 0;
        foreach($category as $key => $cate){
            $i++; ?>

    <tr>
        <td><?php echo $i ?></td>
        <td><?php echo $cate['title_category_post'] ?></td> 
        <td><?php echo $cate['desc_category_post'] ?></td>
        <td>
            <button type="button" class="btn btn-danger"><a href="<?php echo BASE_URL ?>post/deleteCategory/<?php echo $cate['id_category_post'] ?>">Delete</button> 
            <button type="button" class="btn btn-warning"><a href="<?php echo BASE_URL ?>post/editCategory/<?php echo $cate['id_category_post'] ?>">Update</a></button>
        </td>
    </tr>
<?php
} ?>
</tbody>
</table>