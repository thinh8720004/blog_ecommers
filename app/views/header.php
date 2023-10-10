<!DOCTYPE html>
<html lang="en-CA">

<head>
    <title>Interior Thinh Tu</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta http-equiv="cleartype" content="on" />
    <link rel="icon" href="template/Default/img/favicon.ico" type="image/x-icon" />
    <meta name="Description" content="" />
    <meta name="Keywords" content="" />
    <!--rieng-->
    <meta property="og:url" content="<?php
    $actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
    echo $actual_link; ?>" />
    <meta property="og:type" content="article" />
    <meta property="og:title" content="<?php echo $this->title ?>" />
    <meta property="og:description" content="<?php echo $this->desc ?>" />
    <meta property="og:image" content="<?php echo $this->image ?>" />
    <!--rieng-->
    <!--tkw-->
    <meta vary="User-Agent" />
    <meta name="geo.region" content="VN-SG" />
    <meta name="geo.placename" content="Da Nang City" />
    <meta name="geo.position" content="10.823099;106.629664" />
    <meta name="ICBM" content="10.823099, 106.629664" />
    <link rel="icon" type="image/png" href="template/Default/img/favicon.png">
    <!--tkw-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
        integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="<?php echo BASE_URL ?>public/css/style.css">
    <link rel="stylesheet" type="text/css" href="<?php echo BASE_URL ?>/public/css/style.css">
    <link rel="stylesheet" type="text/css" href="<?php echo BASE_URL ?>/public/css/owl.carousel.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo BASE_URL ?>/public/css/owl.theme.default.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo BASE_URL ?>/public/css/product.css">
    <link rel="stylesheet" href="<?php echo BASE_URL ?>/public/css/font-awesome.min.css" type="text/css" />
</head>

<body>
    <header>
        <div class="info_top">
            <div class="bg_in">
                <p class="p_infor">
                    <span><i class="fa fa-envelope-o" aria-hidden="true"></i>Email: interiorthinhtu@gmail.com</span>
                    <span><i class="fa fa-phone" aria-hidden="true"></i> Hotline: 0123-456-789</span>
                </p>
            </div>
        </div>
        <div class="header_top_menu">
            <div class="header_top_menu_all">
                <div class="header_top">
                    <div class="bg_in">
                        <div class="logo">
                            <a href="<?php echo BASE_URL ?>"><img
                                    src="<?php echo BASE_URL ?>public/images/logohere.jpeg" width="250" height="100"
                                    alt="logohere.jpeg" /></a>
                        </div>
                        <nav class="menu_top">
                            <form class="search_form" method="GET" action="<?php echo BASE_URL; ?>products/search">
                                <input class="searchTerm" name="search"
                                    placeholder="Enter the word you want to search..." />
                                <button class="searchButton" type="submit">
                                    <i class="fa fa-search" aria-hidden="true"></i>
                                </button>
                            </form>
                        </nav>
                        <div class="cart_wrapper">
                            <div class="cols_50">
                                <div class="hot_line_top">
                                    <span><b>Headquarters</b></span>
                                    <br />
                                    <span class="red">Da Nang</span>
                                </div>
                            </div>
                            <div class="cols_50">
                                <div class="hot_line_top">
                                    <span><b>Branch offices</b></span>
                                    <br />
                                    <span class="red">Da Nang</span>
                                </div>
                            </div>
                            <div class="clear"></div>
                        </div>
                        <div class="clear"></div>
                    </div>
                </div>
            </div>
            <div class="btn_menu_search">
                <div class="bg_in">
                    <div class="table_row_search">
                        <div class="menu_top_cate">
                            <div class="">
                                <div class="menu" id="menu_cate">
                                    <div class="menu_left">
                                        <i class="fa fa-bars" aria-hidden="true"></i> Category Product
                                    </div>
                                    <div class="cate_pro">
                                        <div id='cssmenu_flyout' class="display_destop_menu">
                                            <ul>
                                                <?php foreach ($category as $key => $cate) {
                                                    ?>
                                                    <li class='active has-sub'>
                                                        <a
                                                            href='<?php echo BASE_URL; ?>products/category/<?php echo $cate['id_category_product'] ?>'>
                                                            <span>
                                                                <?php echo $cate['title_category_product'] ?>
                                                            </span></a>
                                                    </li>
                                                    <?php
                                                }
                                                ?>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="search_top">
                            <div id='cssmenu'>
                                <ul>
                                    <li class='active'><a href='<?php echo BASE_URL; ?>'>Home page</a></li>
                                    <li class=''><a href='<?php echo BASE_URL; ?>contact'>Introduce</a></li>
                                    <li class=''>

                                        <a href='<?php echo BASE_URL; ?>products/categoryAll'>Product</a>
                                        <ul>

                                            <?php foreach ($category as $key => $cate) {
                                                ?>
                                                <li>
                                                    <a
                                                        href='<?php echo BASE_URL; ?>products/category/<?php echo $cate['id_category_product'] ?>'>
                                                        <span>
                                                            <?php echo $cate['title_category_product'] ?>
                                                        </span></a>
                                                </li>
                                                <?php
                                            }
                                            ?>

                                        </ul>

                                    </li>

                                    <li class=''><a href='<?php echo BASE_URL ?>/news/newsAll'>News</a>
                                        <ul>
                                            <?php foreach ($category_post as $key => $cate_post) {
                                                ?>

                                                <li>
                                                    <a
                                                        href='<?php echo BASE_URL; ?>news/category/<?php echo $cate_post['id_category_post'] ?>'><span>
                                                            <?php echo $cate_post['title_category_post'] ?>
                                                        </span></a>
                                                </li>
                                                <?php
                                            }
                                            ?>

                                        </ul>
                                    </li>
                                    <li class=''><a href='<?php echo BASE_URL ?>cart'>Cart</a></li>
                                    <li class=''><a href='<?php echo BASE_URL ?>index/contact'>Contact</a></li>
                                    <?php
                                    if (Session::get('customer') == true) {
                                        ?>
                                        <li class=''><a href='<?php echo BASE_URL ?>/customer/logout'>Logout</a></li>
                                        <li class=''><a href='<?php echo BASE_URL ?>'><i class="fa fa-user"
                                                    aria-hidden="true">
                                                    <?php ?>
                                                </i>
                                            </a></li>


                                        <?php

                                    } else {
                                        ?>
                                        <li class=''><a href='<?php echo BASE_URL ?>/customer/login'>Login</a></li>

                                        <?php
                                    }
                                    ?>
                                </ul>
                            </div>
                        </div>
                        <div class="clear"></div>
                    </div>
                </div>
                <div class="clear"></div>
            </div>
        </div>
    </header>
    <div class="clear"></div>