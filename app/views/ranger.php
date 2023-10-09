<section>
    <div class="bg_in">
        <?php

        if (isset($_GET['duoi2tr'])) {
            $name = "Sản Phẩm Dưới 2 Triệu";
        }
        if (isset($_GET['2-4tr'])) {
            $name = "Sản Phẩm Từ 2 Triệu Đến 4 Triệu ";

        }
        if (isset($_GET['4-10tr'])) {
            $name = "Sản Phẩm Từ 4 Triệu Đến 10 Triệu ";

        }
        if (isset($_GET['10-20tr'])) {
            $name = "Sản Phẩm Từ 10 Triệu Đến 20 Triệu ";

        }
        if (isset($_GET['20tr'])) {
            $name = "Sản Phẩm Trên 20 Triệu";

        }
        ?>
        <div class="module_pro_all">
            <div class="box-title">
                <style>
                    /* CSS cho nút */
                    .search_price button {
                        padding: 10px 20px;
                        background-color: #007BFF;
                        /* Màu nền */
                        color: #fff;
                        /* Màu chữ */
                        border: none;
                        border-radius: 5px;
                        cursor: pointer;
                        transition: background-color 0.3s, color 0.3s;
                        /* Hiệu ứng chuyển màu nền và chữ */
                        margin-right: 10px;
                    }

                    /* CSS khi hover */
                    .search_price button:hover {
                        background-color: #0056b3;
                        /* Màu nền khi hover */
                    }

                    /* CSS cho nút cuối cùng, để loại bỏ margin-right */
                    .search_price button:last-child {
                        margin-right: 0;
                    }

                    .title-bar {
                        display: flex;
                        /* Sử dụng display flex để các phần tử nằm cùng một hàng */
                        align-items: center;
                        /* Canh giữa theo chiều dọc */
                        justify-content: space-between;
                        /* Các phần tử con tự căn đều trên hàng ngang */
                    }

                    .title-bar h1 {
                        margin: 0;
                        width: 40;
                        /* Loại bỏ margin mặc định */
                    }

                    .search_price {
                        display: flex;
                        /* Sử dụng display flex để các nút nằm cùng một hàng */
                    }

                    .search_price button {
                        margin-right: 10px;
                        /* Khoảng cách giữa các nút */

                    }
                </style>

                <div class="title-bar">
                    <h1>
                        <?php
                        echo $name ?>
                    </h1>
                    <form class="search_price" method="GET" action="<?php echo BASE_URL ?>products/ranger">
                        <button type="submit" name="duoi2tr">Dưới 2
                            Triệu</button>
                        <button type="submit" name="2-4tr">2-4
                            Triệu</button>
                        <button type="submit" name="4-10tr">4-10
                            Triệu</button>
                        <button type="submit" name="10-20tr">10-20
                            Triệu</button>
                        <button type="submit" name="20tr">Từ 20
                            Triệu</button>
                    </form>
                </div>


            </div>
            <div class="pro_all_gird">
                <style>
                    .grids_list_product {
                        height: auto;
                    }
                </style>
                <div class="girds_all list_all_other_page ">
                    <?php
                    foreach ($list_product as $value => $product) {
                        ?>
                        <div class="grids grids_list_product">
                            <div class="grids_in">
                                <div class="content">
                                    <div class="img-right-pro">
                                        <a href="<?php BASE_URL ?>/index/category">
                                            <img class="lazy img-pro content-image"
                                                src="<?php echo BASE_URL ?>public/uploads/product/imageproduct/<?php echo $product['image_product'] ?>"
                                                data-original="<?php echo $product['image_product'] ?>"
                                                alt="<?php echo $product['title_product'] ?>" />
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
                                        <a
                                            href="<?php echo BASE_URL ?>products/productDetails/<?php echo $product['id_product'] ?>">
                                            <h3>
                                                <?php
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
                    ?>
                    <div class="clear"></div>
                </div>
                <div class="clear"></div>
            </div>
            <div class="clear"></div>
        </div>

</section>