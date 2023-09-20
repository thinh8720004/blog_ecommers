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
            form-group {
                margin: 0 auto;
            }
        button {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        button {
            background-color: red;
            color: #fff;
            border: none;
            cursor: pointer;
        }

        button:hover {
            background-color: #0056b3;
        }
        textarea {
            width: 100%;
        }
        .btn-default {
            background-color: red;
        }

    
</style>
<?php
    if(isset($_GET['msg']) && !empty($_GET['msg'])){
        $msg = unserialize(urldecode($_GET['msg']));
     
            foreach ($msg as $key => $value){
                echo '<span style="color:blue; font-weight:bold">'.$value.'</span>';
            }
        
        }
    
    ?>

    <h3 style="text-align: center;">Cập nhật danh mục sản phẩm</h3>

<div class="col-md-6">
    <?php
    foreach($categorybyid as $key => $cate) {
        ?> 
        
    <form action="<?php echo BASE_URL ?>/product/update_category_product/<?php echo $cate['id_category_product'] ?>" method="POST"> 
        <div class="form-group">
            <label for="email">Tên danh mục</label>
            <input type="text" value="<?php echo $cate['title_category_product'] ?>" name="title_category_product" class=" form-control" >
        </div>

        <div class="form-group">
            <label for="pwd">Miêu tả danh mục</label>
            <input type="text" value="<?php echo $cate['desc_category_product'] ?>" name="desc_category_product" class=" form-control" >

</div>
            <button type="submit" class="btn btn-default"> Cập nhật danh mục sản phẩm</button>
</form>
<?php
} ?>
</div>