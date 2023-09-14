<style>
   td a {
        text-decoration: nones;
    }
</style>

<h3 style="text-align: center;">Liệt kê sản phẩm</h3>
<?php
if(isset($_GET['msg']) && !empty($_GET['msg'])){
    $msg = unserialize(urldecode($_GET['msg']));
 
        foreach ($msg as $key => $value){
            echo '<span style="color:blue; font-weight:bold">'.$value.'</span>';
        }
    
    }

?>

<table class="table table-striped">
    <thead>
        <tr>
            <th>Id Sản Phẩm</th>
            <th>Tên Sản Phẩm</th>
            <th>Hình ảnh Sản Phẩm</th>
            <th>Danh Mục Sản Phẩm</th>

            <th>Giá Sản Phẩm</th>
            <th>Số lượng</th>

            <th>Mô tả</th>
            <th>Quản lý</th>
        </tr>
    </thead>

    <tbody>
        <?php
        $i = 0;
        foreach($category as $key => $pro){
            $i++; ?>

    <tr>
        <td><?php echo $i ?></td>
        <td><?php echo $pro['title_product'] ?></td> 
        <td><img src="<?php echo BASE_URL?>/public/uploads/product/image_product/<?php echo $pro['image_product'] ?>" height="100px" width="100px"></td> 
                <td><?php echo $pro['title_category_product'] ?></td> 

        <td>

    <?php
    echo is_numeric($pro['price_product']) ? number_format($pro['price_product'], 0, ',', '.') . 'đ' : '0đ';
    ?>
        </td>
        <td><?php echo $pro['quantity_product'] ?></td> 
        <td><?php echo $pro['desc_product'] ?></td>
        <td><a style="text-decoration: none;color:red;"href="<?php echo BASE_URL ?>/product/delete_product/<?php echo $pro['id_product'] ?>">Xóa</> || 
        <a style="text-decoration: none; color:red;"href="<?php echo BASE_URL ?>/product/edit_product/<?php echo $pro['id_product'] ?>">Cập nhật</a></td>
    </tr>
<?php
} ?>
</tbody>
</table>