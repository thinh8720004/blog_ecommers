<section>
    <div class="bg_in">
        <div class="module_pro_all">
            <div class="box-title">
                <div class="title-bar">
                    <h1>HOT PRODUCT</h1>
                    <a class="read_more" href="<?php echo BASE_URL?>products/hotProduct">
                        See more
                    </a>
                </div>
            </div>
            <div class="pro_all_gird">
                <div class="girds_all list_all_other_page ">
                <?php
                    foreach ($product_home as $value => $product) {
                        if ($product['product_hot'] == 1) {
                    ?>
                    <form action="<?php BASE_URL ?>cart/addCart" method="POST">

                    <input type="hidden" value="<?php echo $product['id_product'] ?>" name="id_product">
                    <input type="hidden" value="<?php echo $product['title_product'] ?>" name="title_product">
                    <input type="hidden" value="<?php echo $product['image_product'] ?>" name="image_product">
                    <input type="hidden" value="<?php echo $product['price_product'] ?>" name="price_product">
                    <input type="hidden" value="1" name="quantity_product">
                        
                        <div class="grids">
                            <div class="grids_in">
                                <div class="content">
                                    <div class="img-right-pro">
                                        <a href="<?php BASE_URL ?>/index/category">
                                            <img class="lazy img-pro content-image" src="<?php echo BASE_URL ?>public/uploads/product/imageproduct/<?php echo $product['image_product'] ?>" data-original="<?php echo $product['image_product'] ?>" alt="<?php echo $product['title_product'] ?>" />
                                        </a>
                                        <div class="content-overlay"></div>
                                        <div class="content-details fadeIn-top">
                                            <ul class="details-product-overlay">
                                                <?php
                                                echo $product['desc_product'];
                                                ?>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="name-pro-right">
                                        <a href="<?php echo BASE_URL ?>products/productDetails/<?php echo $product['id_product'] ?>">
                                            <h3> <?php
                                                    echo $product['title_product'];
                                                    ?>
                                            </h3>
                                        </a>
                                    </div>
                                    <div class="add_card">
                                    <input type="submit" style="box-shadow: none;" class="btn btn-info" value="Order">
                                        
                                    </div>
                                    <div class="price_old_new">
                                        <div class="price">
                                            <span class="news_price">
                                                <?php
                                                echo number_format($product['price_product'], 0, ',', '.') . 'đ';
                                                ?>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        </form>
                    <?php
                        }
                    }
                    ?>               
                    <div class="clear"></div>
                </div>
                <div class="clear"></div>
            </div>
            <div class="clear"></div>
        </div>
        
        <?php
            foreach ($category as $value => $cate) {            
        ?>

        <div class="module_pro_all">
            <div class="box-title">
                <div class="title-bar">
                    <h1><?php echo $cate['title_category_product'] ?></h1>
                    <a class="read_more" href="<?php echo BASE_URL?>products/category/<?php echo $cate['id_category_product']?>">
                        See more
                    </a>
                </div>
            </div>
            <div class="pro_all_gird">
                <div class="girds_all list_all_other_page ">
                    <?php 
                        foreach ($product_home as $key => $pro_cate) {
                            if ($cate['id_category_product'] == $pro_cate['id_category_product']) {
                    ?>                    
                        <div class="grids">
                            <div class="grids_in">
                                <div class="content">
                                    <div class="img-right-pro">
                                        <a href="<?php BASE_URL ?>/index/category">
                                            <img class="lazy img-pro content-image" src="<?php echo BASE_URL ?>public/uploads/product/imageproduct/<?php echo $pro_cate['image_product'] ?>" data-original="<?php echo $pro_cate['image_product'] ?>" alt="<?php echo $pro_cate['title_product'] ?>" />
                                        </a>
                                        <div class="content-overlay"></div>
                                        <div class="content-details fadeIn-top">
                                            <ul class="details-product-overlay">
                                                <?php
                                                echo $pro_cate['desc_product'];
                                                ?>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="name-pro-right">
                                        <a href="<?php echo BASE_URL ?>products/productDetails/<?php echo $pro_cate['id_product'] ?>">
                                            <h3> <?php
                                                    echo $pro_cate['title_product'];
                                                    ?>
                                            </h3>
                                        </a>
                                    </div>
                                    <div class="add_card">
                                    <input type="submit" style="box-shadow: none;" class="btn btn-info" value="Order">
                                        
                                    </div>
                                    <div class="price_old_new">
                                        <div class="price">
                                            <span class="news_price">
                                                <?php
                                                echo number_format($pro_cate['price_product'], 0, ',', '.') . 'đ';
                                                ?>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>                               
                    <?php
                        }
                    }
                    ?>
                        <div class="clear"></div>
                </div>
                <div class="clear"></div>
            </div>
            <div class="clear"></div>
        </div>
        <?php
            }
        ?>
</section>
<!--end:body-->
<div class="clear"></div>
