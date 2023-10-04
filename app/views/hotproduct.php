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
                    <span itemprop="name">Hot Product</span>
                    <meta itemprop="position" content="2" />
                </li>
            </ol>
        </div>
        <div class="module_pro_all">
            <div class="box-title">
                <div class="title-bar">
                    <h1>All Hot Product</h1>
                    <a class="read_more" href="<?php BASE_URL ?>index/category">
                        See more >>
                    </a>
                </div>
            </div>
            <div class="pro_all_gird">
                <div class="girds_all list_all_other_page ">
                    <?php
                    foreach ($hot_product as $value => $hot) {
                    ?>
                        <div class="grids">
                            <div class="grids_in">
                                <div class="content">
                                    <div class="img-right-pro">
                                        <a href="<?php BASE_URL ?>/index/category">
                                            <img class="lazy img-pro content-image" src="<?php echo BASE_URL ?>public/uploads/product/imageproduct/<?php echo $hot['image_product'] ?>"
                                             data-original="<?php echo $hot['image_product'] ?>" alt="<?php echo $hot['title_product'] ?>" />
                                        </a>
                                        <div class="content-overlay"></div>
                                        <div class="content-details fadeIn-top">
                                            <ul class="details-product-overlay">
                                                <?php
                                                echo $hot['desc_product'];
                                                ?>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="name-pro-right">
                                        <a href="<?php echo BASE_URL ?>products/productDetails/<?php echo $hot['id_product'] ?>">
                                            <h3> <?php
                                                    echo $hot['title_product'];
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
                                                echo number_format($hot['price_product'], 0, ',', '.') . 'đ';
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