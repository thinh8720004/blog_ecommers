<section>
    <div class="bg_in">
        <div class="wrapper_all_main">
            <div class="wrapper_all_main_right">
                <!--breadcrumbs-->
                <div class="breadcrumbs">
                    <ol itemscope itemtype="http://schema.org/BreadcrumbList">
                        <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
                            <a itemprop="item" href=".">
                                <span itemprop="name">Home Page</span></a>
                            <meta itemprop="position" content="1" />
                        </li>
                        <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
                            <span itemprop="item">
                                <strong itemprop="name">
                                    All Post
                                </strong>
                            </span>
                            <meta itemprop="position" content="2" />
                        </li>
                    </ol>
                </div>
                <!--breadcrumbs-->
                <div class="content_page">
                    <div class="box-title">
                        <div class="title-bar">
                            <h1> All Post
                            </h1>
                        </div>
                    </div>
                    <div class="content_text">
                        <ul class="list_ul">
                            <?php
                            foreach ($list_post as $key => $post) {
                                ?>
                                <li class="lists">
                                    <div class="img-list">
                                        <a href="<?php echo BASE_URL ?>news/detailsNews/<?php echo $post['id_post'] ?>">
                                            <img src="<?php echo BASE_URL ?>public/uploads/post/imagepost/<?php echo $post['image_post']; ?>"
                                                alt="<?php echo $post['title_post']; ?>" class="img-list-in">
                                        </a>
                                    </div>
                                    <div class="content-list">
                                        <div class="content-list_inm">
                                            <div class="title-list">
                                                <h3>
                                                    <a
                                                        href="<?php echo BASE_URL ?>news/detailsNews/<?php echo $post['id_post'] ?>">
                                                        <?php echo $post['title_post']; ?>
                                                    </a>
                                                </h3>
                                                <p class="list-news-status-p">
                                                    <?php echo $post['content_post']; ?>
                                                </p>
                                            </div>
                                            <!-- -->
                                            <div class="xt"><a
                                                    href="<?php echo BASE_URL ?>news/detailsNews/<?php echo $post['id_post']; ?>">See
                                                    more >></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="clear"></div>
                                </li>
                                <?php
                            }
                            ?>
                        </ul>
                        <div class="clear"></div>
                        <div class="wp_page">
                            <div class="page">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="clear"></div>
        </div>
    </div>
</section>