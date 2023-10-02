<?php
$name = 'The category has no product yet';

foreach ($category_by_id as $key => $pro) {
    $name = $pro['title_category_product'];
}

?>
<section>
    <div class="bg_in">
        <div class="breadcrumbs">
            <ol itemscope itemtype="http://schema.org/BreadcrumbList">
                <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
                    <a itemprop="item" href="<?php echo BASE_URL ?>">
                        <span itemprop="name">Home page</span></a>
                    <meta itemprop="position" content="1" />
                </li>
                <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
                    <a itemprop="item" href="<?php BASE_URL ?>">
                        <span itemprop="name">
                            <?php echo $name ?>
                        </span></a>
                    <meta itemprop="position" content="2" />
                </li>
            </ol>
        </div>
        <div class="module_pro_all">
            <div class="box-title">
                <div class="title-bar">
                    <h1>Category:<?php echo $name ?></h1>
                </div>
            </div>
            <div class="pro_all_gird">
                <div class="girds_all list_all_other_page ">
                    <?php
                    foreach ($category_by_id as $key => $product) {
                        ?>
                        <form action="<?php echo BASE_URL ?>cart/addCart" method="POST">

                            <input type="hidden" value="<?php echo $product['id_product'] ?>" name="id_product">
                            <input type="hidden" value="<?php echo $product['title_product'] ?>" name="title_product">
                            <input type="hidden" value="<?php echo $product['image_product'] ?>" name="image_product">
                            <input type="hidden" value="<?php echo $product['price_product'] ?>" name="price_product">
                            <input type="hidden" value="1" name="quantity_product">
                        <div class="grids">
                            <div class="grids_in">
                                <div class="content">
                                    <div class="img-right-pro">
                                        <a
                                            href="<?php echo BASE_URL ?>/products/productDetails/<?php echo $product['id_product'] ?>">
                                            <img class="lazy img-pro content-image"
                                                src="<?php echo BASE_URL ?>public/uploads/product/imageproduct/<?php echo $product['image_product'] ?>"
                                                data-original="<?php echo $product['image_product'] ?>"
                                                alt="<?php echo $product['title_product'] ?>">
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
                    ?>
                </div>

                <div class="clear"></div>

                <div class="clear"></div>
            </div>
            <div class="clear"></div>
        </div>
</section>