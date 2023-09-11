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
        if ($value == "Added category successfully!") {
            echo '<div class="alert alert-success" id="success-alert">';
        }
        else if ($value == "Add category failed!") {
            echo '<div class="alert alert-danger" id="danger-alert">';
        }
            echo '<strong>' . $value . '</strong>';
            echo '</div>';
        } 
}
?>

<div class="container-form-add-category">
    <h4>Add new category</h4>
    <form action="<?php echo BASE_URL; ?>product/insertProduct" method="post">
        <div class="form-group">
            <label for="nameCategory">Name Category</label>
            <input type="text" class="form-control" placeholder="Enter name category" name="title_category_product">
        </div>
        <div class="form-group">
            <label for="describeCategory">Describe Category</label>
            <input type="text" class="form-control" placeholder="Enter describe category here ..." name="describe_category_product">
        </div>
        <div class="form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Check me out</label>
        </div>
        <button type="submit" class="btn btn-primary">Add new category</button>
    </form>
</div>