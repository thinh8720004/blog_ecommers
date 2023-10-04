<?php
if (!empty($_GET['msg'])) {
    $msg = unserialize(urldecode($_GET['msg']));
    foreach ($msg as $key => $value) {
        if ($value == "Delete product successfully!") {
            echo '<div class="alert alert-success" id="success-alert">';
        } else if ($value == "Delete product failed!") {
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

<h4>List Product</h4>
<table class="table table-striped">
    <thead>
        <tr>
            <th>Id</th>
            <th>Name Product</th>
            <th>Iamge Product</th>
            <th>Category Product</th>

            <th>Price</th>
            <th>Quantity</th>
            <th>Hot Product</th>

            <th>Describe</th>
            <th>Manager</th>
        </tr>
    </thead>

    <tbody>
        <?php
        $i = 0;
        foreach ($category as $key => $pro) {
            $i++;?>
            <tr>
                <td><?php echo $i ?></td>
                <td><?php echo $pro['title_product'] ?></td>
                <td><img class="image" src="<?php echo BASE_URL ?>public/uploads/product/imageproduct/<?php echo $pro['image_product'] ?>" height="100px" width="100px"></td>
                <td><?php echo $pro['title_category_product'] ?></td>
                <td>
                    <?php
                    echo is_numeric($pro['price_product']) ? number_format($pro['price_product'], 0, ',', '.') . 'đ' : '0đ';
                    ?>
                </td>
                <td><?php echo $pro['quantity_product'] ?></td>
                <td><?php if($pro['product_hot'] == 1) echo 'Yes';
                    else echo 'No'; ?></td>
                <td><?php echo $pro['desc_product'] ?></td>
                <td><button type="button" class="btn btn-danger"><a href="<?php echo BASE_URL ?>product/deleteProduct/<?php echo $pro['id_product'] ?>">Delete</button>
                    <button type="button" class="btn btn-warning"><a href="<?php echo BASE_URL ?>product/editProduct/<?php echo $pro['id_product'] ?>">Update</a></button>
                </td>

            </tr>
        <?php
        } ?>
    </tbody>
</table>