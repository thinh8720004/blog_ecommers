
<style>
        /* Thêm một chút CSS để làm cho form trông tốt hơn */
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
if(isset($_GET['msg']) && !empty($_GET['msg'])){
    $msg = unserialize(urldecode($_GET['msg']));
 
        foreach ($msg as $key => $value){
            echo '<span style="color:blue; font-weight:bold">'.$value.'</span>';
        }
    
    }

?>
 <div class="container">
        <h1>Thêm danh mục bài viết</h1>
        <form action="<?php echo BASE_URL ?>/post/insert_category" method="POST">
            <label for="email">tên danh mục:</label>
            <input type="text" name="title_category_post" class="form-control" >
            
            <label for="pwd">Miêu tả danh mục</label>
            <input type="text" name="desc_category_post" >

            <button type="submit">Thêm Danh Mục</button>
        </form>
    </div>
<!-- 
di style "text-align: center;">Thêm danh mục bài viết /h)
<div class="col-md-6">
<form action="<?php echo BASE_URL ?>/product/insert_category" method="POST">
<div class="form-group">
elibel for "email">Tên danh mục /
<input type="text" name="title_category_product" class="form-control" >
</itiv>
<div class="form-group">
elibel for "pwd">Miêu tả danh mục</label>
<input type="text" name="desc_category_product" class="form-control">
</div>
Cotton type="submit" class="btn btn-default">Thêm danh mục /uttons
</form>
</div> -->