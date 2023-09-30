<?php
$name = 'The category has no news yet';

foreach ($post_by_id as $key => $post) {
    $name = $post['title_category_post'];
} ?>

<section>
    <div class="bg_in">
        <div class="wrapper_all_main">
            <div class="wrapper_all_main_right">
                <!--breadcrumbs-->
                <div class="breadcrumbs">
                    <ol itemscope itemtype="http://schema.org/BreadcrumbList">
                        <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
                            <a itemprop="item" href="<?php echo BASE_URL ?>">
                                <span itemprop="name">Home Page</span></a>
                            <meta itemprop="position" content="1" />
                        </li>
                        <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
                            <span itemprop="item">
                                <strong itemprop="name">
                                    <?php echo $name ?>

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
                            <?php
                            $name = 'The category has no news yet';

                            foreach ($post_by_id as $key => $post_name) {
                                $name = $post_name['title_category_post'];
                            } ?>
                            <h1>
                                <?php echo $name ?>
                            </h1>
                        </div>
                    </div>
                    <div class="content_text">
                        <ul class="list_ul">
                            <?php
                            foreach ($post_by_id as $key => $post) {
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
                                                        href="<?php echo BASE_URL ?>news/detailsNews/<?php $post['id_post'] ?>">
                                                        <?php echo $post['title_post']; ?>
                                                    </a>
                                                </h3>
                                                <p class="list-news-status-p">
                                                    <?php echo $post['content_post']; ?>
                                                </p>
                                            </div>
                                            <div class="content-list-in">
                                                <p><strong>
                                                        <?php echo $post['title_post']; ?>
                                                    </strong>
                                                    <?php echo $post['content_post']; ?>
                                                </p>
                                            </div>
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