
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
        <h1>Thêm danh mục sản phẩm</h1>
        <form action="<?php echo BASE_URL ?>/product/insert_category" method="POST">
            <label for="email">Tên Danh Mục Sản Phẩm:</label>
            <input type="text" name="title_category_product" class="form-control" >
            
            <label for="pwd">Miêu Tả Danh Mục Sản Phẩm</label>
            <input type="text" name="desc_category_product" >

            <button type="submit">Thêm Danh Mục Sản Phẩm</button>
        </form>
    </div>
