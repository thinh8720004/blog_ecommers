<?php
$categoryModel = new CategoryModel();

$productCount = $categoryModel->getProductCount('tab_product');

?>
<style>
    #pagination {
        display: flex;
        justify-content: center;
        align-items: center;
    }
</style>

<section>
    <div class="bg_in">
        <div class="breadcrumbs">
            <ol itemscope itemtype="http://schema.org/BreadcrumbList">
                <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
                    <a itemprop="item" href=".">
                        <span itemprop="name">Home page</span></a>
                    <meta itemprop="position" content="1" />
                </li>
                <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
                    <a itemprop="item" href="<?php BASE_URL ?>index/category">
                        <span itemprop="name">All Product</span></a>
                    <meta itemprop="position" content="2" />
                </li>
            </ol>
        </div>
        <div class="module_pro_all">
            <div class="box-title">
                <div class="title-bar">
                    <h1>ALL PRODUCT</h1>

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
                    $i = 1;
                    foreach ($list_product as $value => $product) {
                        $i++;
                        ?>
                        <form action="<?php echo BASE_URL ?>cart/addCart" method="POST">

                            <input type="hidden" value="<?php echo $product['id_product'] ?>" name="id_product">
                            <input type="hidden" value="<?php echo $product['title_product'] ?>" name="title_product">
                            <input type="hidden" value="<?php echo $product['image_product'] ?>" name="image_product">
                            <input type="hidden" value="<?php echo $product['price_product'] ?>" name="price_product">
                            <input type="hidden" value="1" name="quantity_product">
                            <div class="grids grids_list_product">
                                <div class="grids_in">
                                    <div class="content">
                                        <div class="img-right-pro">
                                            <a
                                                href="<?php echo BASE_URL ?>products/productDetails/<?php echo $product['id_product'] ?>">
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
                                            <input type="submit" style="box-shadow: none;" class="btn btn-info"
                                                value="Order">
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
                    <div class="clear"></div>
                </div>

                <!-- pagination -->
                <?php
                $categoryModel = new CategoryModel();
                $all_product = $categoryModel->getProductCount('tab_product');
                $product_page = ceil($all_product / 20);
                ?>
                <nav aria-label="..." id="pagination">
                    <ul class="pagination">
                        <li class="page-item"><a class="page-link"
                                href="<?php echo BASE_URL; ?>products/categoryAll<?php echo '?page=1' ?>">Previous</a>
                        </li>
                        <?php
                        for ($j = 1; $j <= $product_page; $j++) {
                            ?>
                            <li class="page-item"><a class="page-link"
                                    href="<?php echo BASE_URL; ?>products/categoryAll<?php echo '?page=' . $j ?>">
                                    <?php echo $j ?>
                                </a></li>
                            <?php
                        }
                        ?>
                        <li class="page-item"><a class="page-link"
                                href="<?php echo BASE_URL; ?>products/categoryAll<?php echo '?page=' . $product_page ?>">Last</a>
                        </li>
                    </ul>
                </nav>
                <div class="clear"></div>
            </div>
            <div class="clear"></div>
        </div>

</section>