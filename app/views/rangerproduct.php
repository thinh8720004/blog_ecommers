<section>
    <div class="bg_in">
        <?php

        if (isset($_GET['price-range'])) {
            $price_range = $_GET['price-range'];

            switch ($price_range) {
                case 'duoi2tr':
                    $name = "Sản Phẩm Dưới 2 Triệu";

                    break;
                case '2-4tr':
                    $name = "Sản Phẩm Từ 2 Triệu Đến 4 Triệu ";

                    break;
                case '4-10tr':
                    $name = "Sản Phẩm Từ 4 Triệu Đến 10 Triệu ";

                    break;
                case '10-20tr':
                    // $min_price = "10000000";
                    // $max_price = "20000000";
                    $name = "Sản Phẩm Từ 10 Triệu Đến 20 Triệu ";

                    break;
                case '20tr':
                    $name = "Sản Phẩm Trên 20 Triệu";

                    break;
                default:
                    // Xử lý mặc định nếu không có lựa chọn hợp lệ
                    break;
            }
        }
        ?>
        \

        <div class="module_pro_all">

            <div class="box-title">

                <form id="myForm" class="search_price" method="GET" action="<?php echo BASE_URL ?>products/ranger">
                    <select class="select-css" id="price-range" name="price-range" style="width: 200px;
                    margin_left:20%;">
                        <option value="">Chọn Mức Giá</option>

                        <option value="duoi2tr">Dưới 2 Triệu</option>
                        <option value="2-4tr">2-4 Triệu</option>
                        <option value="4-10tr">4-10 Triệu</option>
                        <option value="10-20tr">10-20 Triệu</option>
                        <option value="20tr">Từ 20 Triệu</option>
                    </select>
                </form>
                <div class="title-bar">
                    <h1>
                        <?php
                        echo $name ?>
                    </h1>



                </div>
                <style>
                    .title-bar {
                        width: 50%;
                    }

                    .select-css {
                        width: 60px;
                        float: right;
                        display: block;
                        font-size: 16px;
                        font-family: sans-serif;
                        font-weight: 700;
                        color: #444;
                        line-height: 1.3;
                        padding: .6em 1.4em .5em .8em;
                        width: 40%;
                        max-width: 100%;
                        box-sizing: border-box;
                        margin: 0;
                        border: 1px solid #aaa;
                        box-shadow: 0 1px 0 1px rgba(0, 0, 0, .04);
                        border-radius: .5em;
                        -moz-appearance: none;
                        -webkit-appearance: none;
                        appearance: none;
                        background-color: #fff;
                        background-image: url('data:image/svg+xml;charset=US-ASCII,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%22292.4%22%20height%3D%22292.4%22%3E%3Cpath%20fill%3D%22%23007CB2%22%20d%3D%22M287%2069.4a17.6%2017.6%200%200%200-13-5.4H18.4c-5%200-9.3%201.8-12.9%205.4A17.6%2017.6%200%200%200%200%2082.2c0%205%201.8%209.3%205.4%2012.9l128%20127.9c3.6%203.6%207.8%205.4%2012.8%205.4s9.2-1.8%2012.8-5.4L287%2095c3.5-3.5%205.4-7.8%205.4-12.8%200-5-1.9-9.2-5.5-12.8z%22%2F%3E%3C%2Fsvg%3E'),
                            linear-gradient(to bottom, #ffffff 0%, #e5e5e5 100%);
                        background-repeat: no-repeat, repeat;
                        background-position: right .7em top 50%, 0 0;
                        background-size: .65em auto, 100%;
                    }

                    .select-css::-ms-expand {
                        display: none;
                    }

                    .select-css:hover {
                        border-color: #888;
                    }

                    .select-css:focus {
                        border-color: #aaa;
                        box-shadow: 0 0 1px 3px rgba(59, 153, 252, .7);
                        box-shadow: 0 0 0 3px -moz-mac-focusring;
                        color: #222;
                        outline: none;
                    }

                    .select-css option {
                        font-weight: normal;
                    }

                    .search_price {
                        /* float: right; */
                    }
                </style>

                <script>
                    document.getElementById("price-range").addEventListener("change", function () {
                        document.forms["myForm"].submit(); // Tự động gửi biểu mẫu khi có sự thay đổi
                    });
                </script>

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
        <script>
            // JavaScript để thêm chức năng hiển thị các mức giá khi người dùng nhấn vào "Lựa chọn theo giá"
            const showPriceOptionsButton = document.getElementById('showPriceOptions');
            const priceOptions = document.getElementById('priceOptions');

            showPriceOptionsButton.addEventListener('click', function () {
                priceOptions.classList.toggle('visible');
            });
        </script>

</section>