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
        if ($value == "Update product successfully!") {
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
    <?php
    foreach ($productbyid as $key => $pro) {
        ?>
        <h4>Update Product</h4>
        <form action="<?php echo BASE_URL; ?>product/updateProduct/<?php echo $pro['id_product']; ?>" method="post"
            enctype="multipart/form-data">
            <div class="form-group">
                <label for="nameCategory">Name Product</label>
                <input value="<?php echo $pro['title_product'] ?>" type="text" name="title_product" class="form-control"
                    required>
            </div>
            <div class="form-group">
                <label for="nameCategory">Image Product</label>
                <input type="file" name="image_product" class="form-control">
                <p> <img class="image"
                        src="<?php echo BASE_URL ?>public/uploads/product/imageproduct/<?php echo $pro['image_product'] ?>"
                        height="100px" width="100px"></p>
            </div>
            <div class="row g-3">
                <div class="col">
                    <label for="describeCategory">Price Product</label>
                    <input value="<?php echo $pro['price_product'] ?>" type="text" name="price_product" class="form-control"
                        required>
                </div>
                <div class="col">
                    <label for="describeCategory">Number of products</label>
                    <input value="<?php echo $pro['quantity_product'] ?>" type="text" name="quantity_product"
                        class="form-control" required>
                </div>
                <div class="col">
                    <label>Category Product :</label>
                    <select name="category_product" id="">
                        <?php
                        foreach ($category as $key => $cate) {
                            ?>
                            <option <?php
                            if ($cate['id_category_product'] == $pro['id_category_product']) {
                                echo 'selected';
                            }
                            ?> value="<?php echo $cate['id_category_product'] ?>">
                                <?php echo $cate['title_category_product'] ?>
                            </option>
                        <?php } ?>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <label for="describeCategory">Describe Product</label>
                <textarea id="editor1" type="text" name="desc_product" class="form-control"
                    required><?php echo $pro['desc_product']; ?></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Update product</button>
        </form>
    <?php } ?>
</div>