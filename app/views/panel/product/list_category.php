<style>
   td a {
        text-decoration: nones;
    }
</style>

<h3 style="text-align: center;">Liệt Kê Danh Mục Sản Phẩm</h3>


<table class="table table-striped">
    <thead>
        <tr>
            <th>Id</th>
            <th>Tên danh mục</th>
            <th>Mô tả</th>
            <th>Quản lý</th>
        </tr>
    </thead>

    <tbody>
        <?php
        $i = 0;
        foreach($category as $key => $cate){
            $i++; ?>

    <tr>
        <td><?php echo $i ?></td>
        <td><?php echo $cate['title_category_product'] ?></td> 
        <td><?php echo $cate['desc_category_product'] ?></td>
        <td><a style="text-decoration: none;color:red;"href="<?php echo BASE_URL ?>/product/delete_category/<?php echo $cate['id_category_product'] ?>">Xóa</> || 
        <a style="text-decoration: none; color:red;"href="<?php echo BASE_URL ?>/product/edit_category/<?php echo $cate['id_category_product'] ?>">Cập nhật</a></td>
    </tr>
<?php
} ?>
</tbody>
</table>