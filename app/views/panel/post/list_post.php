<style>
   td a {
        text-decoration: nones;
    }
</style>

<h3 style="text-align: center;">Liệt kê bài viết</h3>
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
            <th>Id Bài viết</th>
            <th>Tên Bài Viết</th>
            <th>Hình Ảnh Bài Viết</th>
            <th>Danh Mục Bài Viết</th>
            <th>Quản lý</th>
        </tr>
    </thead>

    <tbody>
        <?php
        $i = 0;
        foreach($post as $key => $post){
            $i++; ?>

    <tr>
        <td><?php echo $i ?></td>
        <td><?php echo $post['title_post'] ?></td> 
        <td><img src="<?php echo BASE_URL?>/public/uploads/post/image_post/<?php echo $post['image_post'] ?>" height="100px" width="100px"></td> 
        <td><?php echo $post['title_category_post'] ?></td> 
        <td><a style="text-decoration: none;color:red;"href="<?php echo BASE_URL ?>/post/delete_post/<?php echo $post['id_post'] ?>">Xóa</> || 
        <a style="text-decoration: none; color:red;"href="<?php echo BASE_URL ?>/post/edit_post/<?php echo $post['id_post'] ?>">Cập nhật</a></td>
    </tr>
<?php
} ?>
</tbody>
</table>