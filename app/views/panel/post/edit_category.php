<style>
         body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
        }
        
        .container {
            max-width: 100%;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        h1 {
            text-align: center;
        }

        label {
            display: block;
            margin-bottom: 10px;
        }

        input[type="text"],
        button {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        button {
            background-color: #007bff;
            color: #fff;
            border: none;
            cursor: pointer;
        }

        button:hover {
            background-color: #0056b3;
        }
</style>
<?php
    if(empty($_GET['msg'])){ 
        $msg = unserialize(urldecode($_GET['msg']));
foreach ($msg as $key => $value){
echo '<span style="color: blue; font-weight:bold">'.$value. '</span>';
}
    }
    ?>

    <h3 style="text-align: center;">Cập nhật danh mục Bài viết</h3>

<div class="col-md-6">
    <?php
    foreach($categorybyid as $key => $cate) {
        ?> 
        
    <form action="<?php echo BASE_URL ?>/post/update_category_post/<?php echo $cate['id_category_post'] ?>" method="POST"> 
        <div class="form-group">
            <label for="email">Tên danh mục</label>
            <input type="text" value="<?php echo $cate['title_category_post'] ?>" name="title_category_post" class=" form-control" >
        </div>

        <div class="form-group">
            <label for="pwd">Miêu tả danh mục</label>
            <textarea name="desc_category_post" style="resize: none;" rows="5" class="form-control">
            <?php echo $cate['desc_category_post'] ?></textarea>
</div>
            <button type="submit" class="btn btn-default"> Cập nhật danh mục</button>
</form>
<?php
} ?>
</div>