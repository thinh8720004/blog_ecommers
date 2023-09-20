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
        if ($value == "Added Category Product successfully!") {
            echo '<div class="alert alert-success" id="success-alert">';
        }
        else if ($value == "Add Category Product failed!") {
            echo '<div class="alert alert-danger" id="danger-alert">';
        }
            echo '<strong>' . $value . '</strong>';
            echo '</div>';
        } 
}
?>

<div class="container-form-add-category-product">
    <h4>Add New Article Category</h4>
    <form action="<?php echo BASE_URL; ?>product/insertCategory" method="post">
        <div class="form-group">
            <label for="nameCategory">Name Category Product</label>
            <input type="text" class="form-control" placeholder="Enter name category product" name="title_category_product" required>
        </div>
        <div class="form-group">
            <label for="describeCategory">Describe Category Product</label>
            <input type="textarea" class="form-control" placeholder="Enter describe category product here ..." name="describe_category_product" required>
        </div>
        <div class="form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Check me out</label>
        </div>
        <button type="submit" class="btn btn-primary">Add new article category</button>
    </form>
</div>