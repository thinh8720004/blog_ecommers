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

    .col {
        padding: 10px;
    }
</style>

<?php
if (!empty($_GET['msg'])) {
    $msg = unserialize(urldecode($_GET['msg']));
    foreach ($msg as $key => $value) {
        if ($value == "Added product successfully!") {
            echo '<div class="alert alert-success" id="success-alert">';
        } else if ($value == "Add product failed!") {
            echo '<div class="alert alert-danger" id="danger-alert">';
        }
        else if ($value == "Update product successfully!") {
            echo '<div class="alert alert-success" id="success-alert">';
        } else if ($value == "Update product failed!") {
            echo '<div class="alert alert-danger" id="danger-alert">';
        }
        echo '<strong>' . $value . '</strong>';
        echo '</div>';
    }
}
?>

<div class="container-form-add-product">
    <h4>Add new Product</h4>
    <form action="<?php echo BASE_URL; ?>product/insertProduct" method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label for="nameCategory">Name Product</label>
            <input type="text" class="form-control" placeholder="Enter name product" name="title_product" required>
        </div>
        <div class="form-group">
            <label for="nameCategory">Image Product</label>
            <input type="file" class="form-control" name="image_product" required>
        </div>
        <div class="row g-2">
            <div class="col">
                <label for="describeCategory">Price Product</label>
                <input type="text" class="form-control" placeholder="Enter price product " name="price_product" required>
            </div>
            <div class="col">
                <label for="describeCategory">Number of products</label>
                <input type="text" class="form-control" placeholder="Enter the number of products" name="quantity_product" required>
            </div>            
        </div>
        <div class="row g-2">
        <div class="col">
                <label>Hot Product :</label>
                <select name="product_hot" id="">                   
                    <option class="option" value="0">No</option>
                    <option class="option" value="1">Yes</option>
                </select>
            </div>
            <div class="col">
                <label>Category Product :</label>
                <select name="id_category_product" id="">
                    <?php
                    foreach ($category as $key => $cate) {
                        ?>
                        <option class="option" value="<?php echo $cate['id_category_product'] ?>">
                            <?php echo $cate['title_category_product']; ?>
                        </option>
                    <?php } ?>
                </select>
            </div>
        <div class="form-group">
            <label for="describeCategory">Describe Product</label>
            <textarea type="text" class="form-control" placeholder="Enter describe product here ..." name="desc_product"
                required></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Add new product</button>
    </form>
</div>