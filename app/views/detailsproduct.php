<?php
foreach ($details_product as $key => $value) {
    $name_product = $value['title_product'];
    $name_category_product = $value['title_category_product'];
    $id_cate = $value['id_category_product'];
}
?>

<section>
    <?php
    foreach ($details_product as $key => $details) {
    ?>
        <form action="<?php echo BASE_URL ?>cart/addCart" method="POST">

            <input type="hidden" value="<?php echo $details['id_product'] ?>" name="id_product">
            <input type="hidden" value="<?php echo $details['title_product'] ?>" name="title_product">
            <input type="hidden" value="<?php echo $details['image_product'] ?>" name="image_product">
            <input type="hidden" value="<?php echo $details['price_product'] ?>" name="price_product">
            <input type="hidden" value="1" name="quantity_product">

        <div class="bg_in">
            <div class="wrapper_all_main">
                <div class="wrapper_all_main_right no-padding-left" style="width:100%;">

                    <div class="breadcrumbs">
                        <ol itemscope itemtype="http://schema.org/BreadcrumbList">
                            <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
                                <a itemprop="item" href="<?php echo BASE_URL; ?>">
                                    <span itemprop="name">Home Page</span></a>
                                <meta itemprop="position" content="1" />
                            </li>
                            <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
                                <a itemprop="item" href="<?php echo BASE_URL; ?>products/category/<?php echo $id_cate ?>">
                                    <span itemprop="name">
                                        <?php echo $name_category_product ?>

                                    </span></a>
                                <meta itemprop="position" content="2" />
                            </li>
                            <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
                                <span itemprop="item">
                                    <strong itemprop="name">
                                        <?php echo $name_product ?>
                                    </strong>
                                </span>
                                <meta itemprop="position" content="3" />
                            </li>
                        </ol>
                    </div>
                    <div class="content_page">
                        <div class="content-right-items margin0">
                            <div class="title-pro-des-ct">
                                <h1>
                                    <?php echo $name_product ?>

                                </h1>
                            </div>
                            <div class="slider-galery ">
                                <div id="sync1" class="owl-carousel owl-theme">

                                    <div class="item">

                                        <img src="<?php echo BASE_URL ?>/public/uploads/product/imageproduct/<?php echo $details['image_product'] ?>" width="100%">
                                    </div>
                                </div>

                                <div id="sync2" class="owl-carousel owl-theme">
                                    <div class="item">
                                        <img src="<?php echo BASE_URL ?>/public/uploads/product/imageproduct/<?php echo $details['image_product'] ?>" width="100%">
                                    </div>
                                </div>
                            </div>
                            <div class="content-des-pro">
                                <div class="content-des-pro_in">
                                    <div class="pro-des-sum">
                                        <div class="price">
                                            <p class="code_skin" style="margin-bottom:10px">
                                                <span>ID Product: <a href="chitietsp.php">CRW-W06</a> | Brand: <a href="">Comrack</a></span>
                                            </p>
                                            <div class="status_pro">
                                                <span><b>Status:</b> Còn hàng</span>
                                            </div>
                                            <div class="status_pro"><span><b>Origin:</b> Việt Nam</span></div>
                                        </div>
                                        <div class="color_price">
                                            <span class="title_price bg_green">New Price</span>
                                            <?php echo number_format($details['price_product'], 0, ',', '.') ?>
                                            <span>đ</span>.
                                            (GIÁ CHƯA VAT)
                                            <div class="clear"></div>
                                        </div>
                                        <div class="color_price">
                                            <span class="title_price">Old Price</span>
                                            <del>18,360,000 <span>vnđ</span></del>
                                        </div>
                                    </div>
                                    <div class="clear"></div>
                                </div>
                                <div class="content-pro-des">
                                    <!-- mô tả -->
                                    <div class="content_des">
                                        <?php echo $details['desc_product'] ?>
                                    </div>
                                </div>
                                <div class="ct">
                                    <div class="number_price">
                                        <div class="custom pull-left">
                                            <button onclick="var result = document.getElementById('qty'); var qty = result.value; if( !isNaN( qty ) &amp;&amp; qty > 0 ) result.value--;return false;" class="reduced items-count" type="button">-</button>
                                            <input type="text" class="input-text qty" title="Qty" value="1" maxlength="12" id="qty" name="qty">
                                            <button onclick="var result = document.getElementById('qty'); var qty = result.value; if( !isNaN( qty )) result.value++;return false;" class="increase items-count" type="button">+</button>
                                            <div class="clear"></div>
                                        </div>
                                        <div class="clear"></div>
                                    </div>
                                    <div class="wp_a">
                                        <button type="submit" class="btn btn-success" style="font-weight: bold; font-size: 18px;"><span>Order</span></button>
                                        <button type="button" class="btn btn-danger" style="font-weight: bold; font-size: 18px;">Call Now</button>
                                        <p style="padding-top: 10px;">
                                        <div class="fb-share-button" data-href="<?php
                                            $actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
                                            echo $actual_link; ?>" data-layout="button_count" data-size="small">
                                            <a target="_blank" href="<?php echo $actual_link ?>&amp;src=sdkpreparse" class="fb-xfbml-parse-ignore">Chia sẻ</a>
                                        </div>
                                        </p>
                                        <div class="clear"></div>
                                    </div>
                                    <div class="clear"></div>
                                </div>
                                <!--  <div class="conten-infor-pro">
                              <p><img alt="phone icon thietbivanphong123.com" src="/data/upload/home-ico.png" style="height:16px; width:16px" />&nbsp;Địa chỉ : 439/4/20 KP1,Phường Tân Thới Hiệp,Quận 12,TPHCM</p>
                              
                              <p><img alt="phone icon thietbivanphong123.com" src="/data/upload/Phone-icon-thietbivanphong123.png" style="height:16px; width:16px" />&nbsp;0932 023 992</p>
                              
                              <p><img alt="person icon thietbivanphong123" src="/data/upload/person-icon.gif" style="height:16px; width:16px" />&nbsp;Mr Quang: 090 66 99 038 &nbsp; &nbsp; &nbsp; &nbsp; <img alt="person icon thietbivanphong123" src="/data/upload/person-icon.gif" style="height:16px; width:16px" />&nbsp;Mr Duy: 0938 62 69 60</p>
                              
                              <p><img alt="person icon thietbivanphong123" src="/data/upload/person-icon.gif" style="height:16px; width:16px" />&nbsp;Ms Huyền: 0888 039 123 &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<img alt="person icon thietbivanphong123" src="/data/upload/person-icon.gif" style="height:16px; width:16px" />&nbsp;Ms Ngọc: 090 247 0070</p>
                              
                              <p><img alt="clock icon thietbivanphong123.com" src="/data/upload/clock-icon.png" style="height:16px; width:16px" />&nbsp;Thời gian:Từ 8h - 17h30 thứ 2 đến thứ 6. T7&nbsp;từ 8h - 12h00</p>
                              
                              </div> -->
                                <div class="tags_products prodcut_detail">
                                    <div class="tab_link">
                                        <h3 class="title_tab_link">TAGS: </h3>
                                        <div class="content_tab_link"> <a href="tag/"></a></div>
                                    </div>
                                </div>
                            </div>
                            <div class="content-des-pro-suport">
                                <div class="box-setup">
                                    <div class="title-setup">
                                        <i class="fa fa-tasks" aria-hidden="true"></i> Service &amp; Attention
                                    </div>
                                    <div class="info-setup">
                                        <div class="row-setup">
                                            <p style="text-align:justify">Please contact sales staff at the following Hotline phone number:</p>
                                            <p><span style="color:#d50100">0123 456 789</span>&nbsp; for more details about Product accessories.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="info-prod prod-price freeship">
                                    <span class="title">
                                        <p>
                                            You will receive free delivery within the inner city area of ​​Da NangNang City when purchasing this product.
                                        </p>
                                    </span>
                                    <span class="row more"><a href="" title="">See more</a>
                                    </span>
                                </div>
                                <div class="bx-contact">
                                    <span class="title-cnt">Do you need support?</span>
                                    <p>Have a chat with us: </p>

                                    <p><img alt="icon skype " src="<?php echo BASE_URL ?>/public/images/icon skype.png" style="height:24px; width:24px" />&nbsp;<a href="skype:quangtran.123corp?chat">thietbivanphong.com</a></p>
                                    <p><img alt="icon skype " src="<?php echo BASE_URL ?>/public/images/icon skype.png" style="height:24px; width:24px" />&nbsp;<a href="skype:quangtran.123corp?chat">thietbivanphong.com</a></p>
                                    <p><img alt="icon skype " src="<?php echo BASE_URL ?>/public/images/icon skype.png" style="height:24px; width:24px" />&nbsp;<a href="skype:quangtran.123corp?chat">thietbivanphong.com</a></p>
                                    <!--<div class="sup-item item1">
                                 <div>
                                 
                                  <span class="title-support">Chat với chúng tôi:</span>
                                 
                                  <div class="icon-support">
                                 
                                    <span class="icon-chat">
                                 
                                    <a href="." target="_blank" title="Chat We">
                                 
                                      <img src="template/Default/img/skp.png" height="30" style="float:left; margin-right:5px;"/>  Mr.Quang
                                 
                                    </a></span>
                                 
                                 
                                 
                                  </div>
                                 
                                 </div>
                                 
                                 </div>
                                 
                                 <div class="sup-item item2">
                                 
                                 Góp ý, khiếu nại: (8h00 - 17h30)
                                 
                                 <span class="sub-item hanoi row"><i class="fa fa-caret-right fa-lg"></i>TP HCM:
                                 
                                 <span class="phone-number"><a href="tel:0906699 038">090 66 99 038</a></span>
                                 
                                 </span>
                                 
                                 <span class="sub-item hcm row"><i class="fa fa-caret-right fa-lg"></i>TP HCM: <span class="phone-number"><a href="tel:0909802038" >0909 80 20 38</a></span></span>
                                 
                                 </div>
                                 
                                 <div class="sup-item item3">Email: 
                                 
                                 <a class="email-text" href="mailto:thietbivanphong.123corp@gmail.com" title="Email hỗ trợ"><font color="#0092db">thietbivanphong.123corp@gmail.com</font></a></div>
                                 
                                 -->
                                </div>
                            </div>
                            <div class="clear"></div>
                        </div>
                    </div>
                </div>
                <div class="wrapper_all_main_right">

                    <div class="clear"></div>


                    <div class="clear"></div>
                    <div class="dmsub">
                        <div class="tags_products desktop">
                            <div class="tab_link">
                                <h3 class="title_tab_link">TAGS: </h3>
                                <div class="content_tab_link">
                                    <a href="tag/">Sản phẩm nội thất</a>
                                    <a href="tag/">Sản phẩm nội thất</a>
                                    <a href="tag/">Sản phẩm nội thất</a>
                                    <a href="tag/">Sản phẩm nội thất</a>

                                </div>
                            </div>
                        </div>
                    </div>
    </form>
                <?php
            }
                ?>
                <!-- <div class="content-brank">
                     <p><strong>Apple </strong>tự hảo<strong>&nbsp;</strong>là thương hiệu Việt Nam về sản phẩm tủ rack 19", tủ cửa lưới, tủ treo tường, bảo vệ thiết bị mạng an toàn, dễ dàng quản lý và vận hành.</p>
                  </div> -->
                <div class="module_pro_all">
                    <div class="box-title">
                        <div class="title-bar">
                            <h3>Related ProductProduct</h3>
                        </div>
                    </div>
                    <div class="pro_all_gird">
                        <div class="girds_all list_all_other_page ">
                            <?php foreach ($related as $key => $relate) {
                                # code...
                            ?>
                                <div class="grids">
                                    <div class="grids_in">
                                        <div class="content">
                                            <div class="img-right-pro">

                                                <a href="sanpham.php">

                                                    <img class="lazy img-pro content-image" src="<?php echo BASE_URL ?>/public/uploads/product/imageproduct /<?php echo $relate['image_product'] ?>" data-original="<?php echo BASE_URL ?>/public/uploads/product/imageproduct /<?php echo $relate['image_product'] ?>" alt="<?php echo $relate['title_product'] ?>" />
                                                </a>

                                                <div class="content-overlay"></div>
                                                <div class="content-details fadeIn-top">
                                                    <?php echo $relate['desc_product'] ?>
                                                </div>
                                            </div>
                                            <div class="name-pro-right">
                                                <a href="<?php echo BASE_URL ?>products/productDetails/<?php echo $relate['id_product'] ?>">
                                                    <?php echo $relate['title_product'] ?>
                                                    <h3></h3>
                                                </a>
                                            </div>
                                            <div class="add_card">
                                                <input type="submit" style="box-shadow: none;" class="btn btn-info" value="Order">
                                            </div>
                                            <div class="price_old_new">
                                                <div class="price">
                                                    <span class="news_price">
                                                        <?php
                                                        echo number_format($relate['price_product'], 0, ',', '.') . 'đ';
                                                        ?>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php } ?>
                            <div class="clear"></div>
                        </div>
                        <div class="clear"></div>
                    </div>
                    <div class="clear"></div>
                </div>
                </div>

                <!--end:left-->
                <div class="clear"></div>
            </div>
            <div class="clear"></div>
        </div>

        <script>
            jQuery(document).ready(function() {



                var div_fixed = jQuery('.product_detail_info').offset().top;

                jQuery(window).scroll(function() {

                    if (jQuery(window).scrollTop() > div_fixed) {

                        jQuery('.tabs-animation').addClass('fix_top');

                    } else {

                        jQuery('.tabs-animation').removeClass('fix_top');

                    }

                });

                jQuery(window).load(function() {

                    if (jQuery(window).scrollTop() > div_fixed) {

                        jQuery('.tabs-animation').addClass('fix_top');

                    }

                });

            });
        </script>
</section>