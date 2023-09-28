<section>
    <div class="bg_in">
        <div class="module_pro_all">
            <div class="box-title">
                <div class="title-bar">
                    <h1>HOT PRODUCT</h1>
                    <a class="read_more" href="sanpham.php">
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
                                        <!-- sửa giỏ hàng -->
                                        <a onclick="return giohang(579);">
                                            <i class="fa fa-shopping-cart" aria-hidden="true"></i> Order
                                        </a>
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
        <div class="module_pro_all">
            <div class="box-title">
                <div class="title-bar">
                    <h1>Macbook mới</h1>
                    <a class="read_more" href="sanpham.php">
                        Xem thêm
                    </a>
                </div>
            </div>
            <div class="pro_all_gird">
                <div class="girds_all list_all_other_page ">
                    <div class="grids">
                        <div class="grids_in">
                            <div class="content">
                                <div class="img-right-pro">

                                    <a href="sanpham.php">
                                        <img class="lazy img-pro content-image" src="<?php echo BASE_URL ?>public/images/mac.jpg" data-original="<?php echo BASE_URL ?>public/images/mac.jpg" alt="Máy in Canon MF229DW" />
                                    </a>

                                    <div class="content-overlay"></div>
                                    <div class="content-details fadeIn-top">
                                        <ul class="details-product-overlay">
                                            <li>Màn hình : Super Amoled 4.5k</li>
                                            <li>Độ phân giải : 2K+(1440x3040)</li>
                                            <li>Ram : 8GB</li>
                                            <li>CPU : Android 9.0</li>
                                            <li>GPU : Mali-G76 MP12</li>
                                            <li>SSD : 512MB</li>

                                        </ul>

                                    </div>
                                </div>
                                <div class="name-pro-right">
                                    <a href="chitietsp.php">
                                        <h3>Iphone X 64GB</h3>
                                    </a>
                                </div>
                                <div class="add_card">
                                    <a onclick="return giohang(579);">
                                        <i class="fa fa-shopping-cart" aria-hidden="true"></i> Đặt hàng
                                    </a>
                                </div>
                                <div class="price_old_new">
                                    <div class="price">
                                        <span class="news_price">17.800.000đ </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="grids">
                        <div class="grids_in">
                            <div class="content">
                                <div class="img-right-pro">

                                    <a href="sanpham.php">
                                        <img class="lazy img-pro content-image" src="<?php echo BASE_URL ?>public/images/mac.jpg" data-original="<?php echo BASE_URL ?>public/images/mac.jpg" alt="Máy in Canon MF229DW" />
                                    </a>

                                    <div class="content-overlay"></div>
                                    <div class="content-details fadeIn-top">
                                        <ul class="details-product-overlay">
                                            <li>Màn hình : Super Amoled 4.5k</li>
                                            <li>Độ phân giải : 2K+(1440x3040)</li>
                                            <li>Ram : 8GB</li>
                                            <li>CPU : Android 9.0</li>
                                            <li>GPU : Mali-G76 MP12</li>
                                            <li>SSD : 512MB</li>

                                        </ul>

                                    </div>
                                </div>
                                <div class="name-pro-right">
                                    <a href="chitietsp.php">
                                        <h3>Iphone X 64GB</h3>
                                    </a>
                                </div>
                                <div class="add_card">
                                    <a onclick="return giohang(579);">
                                        <i class="fa fa-shopping-cart" aria-hidden="true"></i> Đặt hàng
                                    </a>
                                </div>
                                <div class="price_old_new">
                                    <div class="price">
                                        <span class="news_price">17.800.000đ </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="grids">
                        <div class="grids_in">
                            <div class="content">
                                <div class="img-right-pro">

                                    <a href="sanpham.php">
                                        <img class="lazy img-pro content-image" src="<?php echo BASE_URL ?>public/images/mac.jpg" data-original="<?php echo BASE_URL ?>public/images/mac.jpg" alt="Máy in Canon MF229DW" />
                                    </a>

                                    <div class="content-overlay"></div>
                                    <div class="content-details fadeIn-top">
                                        <ul class="details-product-overlay">
                                            <li>Màn hình : Super Amoled 4.5k</li>
                                            <li>Độ phân giải : 2K+(1440x3040)</li>
                                            <li>Ram : 8GB</li>
                                            <li>CPU : Android 9.0</li>
                                            <li>GPU : Mali-G76 MP12</li>
                                            <li>SSD : 512MB</li>

                                        </ul>

                                    </div>
                                </div>
                                <div class="name-pro-right">
                                    <a href="chitietsp.php">
                                        <h3>Iphone X 64GB</h3>
                                    </a>
                                </div>
                                <div class="add_card">
                                    <a onclick="return giohang(579);">
                                        <i class="fa fa-shopping-cart" aria-hidden="true"></i> Đặt hàng
                                    </a>
                                </div>
                                <div class="price_old_new">
                                    <div class="price">
                                        <span class="news_price">17.800.000đ </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="grids">
                        <div class="grids_in">
                            <div class="content">
                                <div class="img-right-pro">

                                    <a href="sanpham.php">
                                        <img class="lazy img-pro content-image" src="<?php echo BASE_URL ?>public/images/mac.jpg" data-original="<?php echo BASE_URL ?>public/images/mac.jpg" alt="Máy in Canon MF229DW" />
                                    </a>

                                    <div class="content-overlay"></div>
                                    <div class="content-details fadeIn-top">
                                        <ul class="details-product-overlay">
                                            <li>Màn hình : Super Amoled 4.5k</li>
                                            <li>Độ phân giải : 2K+(1440x3040)</li>
                                            <li>Ram : 8GB</li>
                                            <li>CPU : Android 9.0</li>
                                            <li>GPU : Mali-G76 MP12</li>
                                            <li>SSD : 512MB</li>

                                        </ul>

                                    </div>
                                </div>
                                <div class="name-pro-right">
                                    <a href="chitietsp.php">
                                        <h3>Iphone X 64GB</h3>
                                    </a>
                                </div>
                                <div class="add_card">
                                    <a onclick="return giohang(579);">
                                        <i class="fa fa-shopping-cart" aria-hidden="true"></i> Đặt hàng
                                    </a>
                                </div>
                                <div class="price_old_new">
                                    <div class="price">
                                        <span class="news_price">17.800.000đ </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="grids">
                        <div class="grids_in">
                            <div class="content">
                                <div class="img-right-pro">

                                    <a href="sanpham.php">
                                        <img class="lazy img-pro content-image" src="<?php echo BASE_URL ?>public/images/mac.jpg" data-original="<?php echo BASE_URL ?>public/images/mac.jpg" alt="Máy in Canon MF229DW" />
                                    </a>

                                    <div class="content-overlay"></div>
                                    <div class="content-details fadeIn-top">
                                        <ul class="details-product-overlay">
                                            <li>Màn hình : Super Amoled 4.5k</li>
                                            <li>Độ phân giải : 2K+(1440x3040)</li>
                                            <li>Ram : 8GB</li>
                                            <li>CPU : Android 9.0</li>
                                            <li>GPU : Mali-G76 MP12</li>
                                            <li>SSD : 512MB</li>

                                        </ul>

                                    </div>
                                </div>
                                <div class="name-pro-right">
                                    <a href="chitietsp.php">
                                        <h3>Iphone X 64GB</h3>
                                    </a>
                                </div>
                                <div class="add_card">
                                    <a onclick="return giohang(579);">
                                        <i class="fa fa-shopping-cart" aria-hidden="true"></i> Đặt hàng
                                    </a>
                                </div>
                                <div class="price_old_new">
                                    <div class="price">
                                        <span class="news_price">17.800.000đ </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="clear"></div>
                </div>
                <div class="clear"></div>
            </div>
            <div class="clear"></div>
        </div>
        <div class="module_pro_all">
            <div class="box-title">
                <div class="title-bar">
                    <h1>Phụ kiện</h1>
                    <a class="read_more" href="sanpham.php">
                        Xem thêm
                    </a>
                </div>
            </div>
            <div class="pro_all_gird">
                <div class="girds_all list_all_other_page ">
                    <div class="grids">
                        <div class="grids_in">
                            <div class="img-right-pro">
                                <a href="sanpham.php">
                                    <img class="lazy img-pro" src="<?php echo BASE_URL ?>public/images/phukien.jpg" data-original="<?php echo BASE_URL ?>public/images/phukien.jpg" alt="Máy in Canon MF229DW" />
                                </a>
                            </div>
                            <div class="name-pro-right">
                                <a href="chitietsp.php">
                                    <h3>Bàn phím chơi gane 7 màu</h3>
                                </a>
                            </div>
                            <div class="add_card">
                                <a onclick="return giohang(579);">
                                    <i class="fa fa-shopping-cart" aria-hidden="true"></i> Đặt hàng
                                </a>
                            </div>
                            <div class="price_old_new">
                                <div class="price">
                                    <span class="news_price">800.000đ </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="grids">
                        <div class="grids_in">
                            <div class="img-right-pro">
                                <a href="sanpham.php">
                                    <img class="lazy img-pro" src="<?php echo BASE_URL ?>public/images/phukien.jpg" data-original="<?php echo BASE_URL ?>public/images/phukien.jpg" alt="Máy in Canon MF229DW" />
                                </a>
                            </div>
                            <div class="name-pro-right">
                                <a href="chitietsp.php">
                                    <h3>Bàn phím chơi gane 7 màu</h3>
                                </a>
                            </div>
                            <div class="add_card">
                                <a onclick="return giohang(579);">
                                    <i class="fa fa-shopping-cart" aria-hidden="true"></i> Đặt hàng
                                </a>
                            </div>
                            <div class="price_old_new">
                                <div class="price">
                                    <span class="news_price">800.000đ </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="grids">
                        <div class="grids_in">
                            <div class="img-right-pro">
                                <a href="sanpham.php">
                                    <img class="lazy img-pro" src="<?php echo BASE_URL ?>public/images/phukien.jpg" data-original="<?php echo BASE_URL ?>public/images/phukien.jpg" alt="Máy in Canon MF229DW" />
                                </a>
                            </div>
                            <div class="name-pro-right">
                                <a href="chitietsp.php">
                                    <h3>Bàn phím chơi gane 7 màu</h3>
                                </a>
                            </div>
                            <div class="add_card">
                                <a onclick="return giohang(579);">
                                    <i class="fa fa-shopping-cart" aria-hidden="true"></i> Đặt hàng
                                </a>
                            </div>
                            <div class="price_old_new">
                                <div class="price">
                                    <span class="news_price">800.000đ </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="grids">
                        <div class="grids_in">
                            <div class="img-right-pro">
                                <a href="sanpham.php">
                                    <img class="lazy img-pro" src="<?php echo BASE_URL ?>public/images/phukien.jpg" data-original="<?php echo BASE_URL ?>public/images/phukien.jpg" alt="Máy in Canon MF229DW" />
                                </a>
                            </div>
                            <div class="name-pro-right">
                                <a href="chitietsp.php">
                                    <h3>Bàn phím chơi gane 7 màu</h3>
                                </a>
                            </div>
                            <div class="add_card">
                                <a onclick="return giohang(579);">
                                    <i class="fa fa-shopping-cart" aria-hidden="true"></i> Đặt hàng
                                </a>
                            </div>
                            <div class="price_old_new">
                                <div class="price">
                                    <span class="news_price">800.000đ </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="grids">
                        <div class="grids_in">
                            <div class="img-right-pro">
                                <a href="sanpham.php">
                                    <img class="lazy img-pro" src="<?php echo BASE_URL ?>public/images/phukien.jpg" data-original="<?php echo BASE_URL ?>public/images/phukien.jpg" alt="Máy in Canon MF229DW" />
                                </a>
                            </div>
                            <div class="name-pro-right">
                                <a href="chitietsp.php">
                                    <h3>Bàn phím chơi gane 7 màu</h3>
                                </a>
                            </div>
                            <div class="add_card">
                                <a onclick="return giohang(579);">
                                    <i class="fa fa-shopping-cart" aria-hidden="true"></i> Đặt hàng
                                </a>
                            </div>
                            <div class="price_old_new">
                                <div class="price">
                                    <span class="news_price">800.000đ </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="clear"></div>
                </div>
                <div class="clear"></div>
            </div>
            <div class="clear"></div>
        </div>

</section>
<!--end:body-->
<div class="clear"></div>
