
<style>
        /* Thêm một chút CSS để làm cho form trông tốt hơn */
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
        }
        
        .container1 {
            max-width: 70%;
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
            margin-top: 10px;
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
        textarea {
            width: 100%;
        }

        select {
            width: 60%;
            
display: block;
margin-bottom: 15px;
width: 100%;
padding: 10px;
border: 1px solid #ccc;
border-radius: 5px;
font-size: 14px;
}
span{
    text-align: center;
}
select {
height: 40px;
}
        .option{
            height: 310px;
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
 <div class="container1">
        <h1>Cập nhật sản phẩm</h1>
     <?php
        foreach ($productbyid as $key => $pro){
     ?>

     

<form action="<?php echo BASE_URL ?>/product/update_product/<?php echo $pro['id_product']?>" method="POST" enctype="multipart/form-data">

            <label >Tên sản phẩm :</label>
            <input value="<?php echo $pro['title_product']?>" type="text" name="title_product" class="form-control" >

            <label >Hình ảnh sản phẩm :</label>
            <input type="file" name="image_product" class="form-control" >
           <p> <img src="<?php echo BASE_URL?>/public/uploads/product/image_product/<?php echo $pro['image_product'] ?>" height="100px" width="100px"></p>
            <label >Giá sản phẩm :</label>
            <input value="<?php echo $pro['price_product']?>" type="text" name="price_product" class="form-control" >

            <label >Số lượng sản phẩm :</label>
            <input value="<?php echo $pro['quantity_product']?>" type="text" name="quantity_product" class="form-control" >
            
            <label>Miêu tả danh mục</label>
            <textarea name="desc_product" name="" id="" rows="5" colums="12"><?php echo $pro['price_product']?></textarea>

            <label >Danh mục sản phẩm :</label>
            <select name="category_product" id="">
                <?php 
                foreach ($category as $key => $cate) {
                    
                ?>
                <option  <?php 
                 if($cate['id_category_product'] == $pro['id_category_product']){ echo 'selected';}
                ?>
                value="<?php echo $cate['id_category_product']?>"><?php echo $cate['title_category_product'] ?></option>
            <?php }?>

            </select>
            <button type="submit">Cập nhật Sản Phẩm</button>
        </form>
        <?php }?>

    </div>
