
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
        <h1>Chỉnh sửa Bài Viết</h1>
        <?php
        foreach($postbyid as $key => $post){
        ?>
        <form action="<?php echo BASE_URL ?>/post/update_post/<?php echo $post['id_post'] ?>" method="POST" enctype="multipart/form-data">
            <label >Tên Bài Viết :</label>
            <input value="<?php echo $post['title_post'] ?>" type="text" name="title_post" class="form-control" >

            <label >Hình Bài Viết :</label>
            <input type="file" name="image_post" class="form-control" >
            <p> <img src="<?php echo BASE_URL?>/public/uploads/post/image_post/<?php echo $post['image_post'] ?>" height="100px" width="100px"></p>

            <label>Chi Tiết Bài Viết</label>
            <textarea name="content_post" name="" id="" rows="5" colums="12">
            <?php echo $post['content_post'] ?>
            </textarea>

            <label >Danh Mục Bài Viết :</label>
            <select name="category_post" id="">
                <?php 
                foreach ($category as $key => $cate) {
                    
                ?>
                <option <?php if($cate['id_category_post'] == $post['id_category_post']){ echo 'selected';}?>
                class="option" value="<?php echo $cate['id_category_post']?>">
            <?php echo $cate['title_category_post']?> </option>

                    <?php }?>
            </select>
            <button name="updatepost" type="submit">Cập Nhật Bài Viết</button>
        </form>
        <?php
        }?>
    </div>
