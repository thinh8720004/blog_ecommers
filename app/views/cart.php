<section>
    <div class="bg_in">
        <div class="content_page cart_page">
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
                                Cart
                            </strong>
                        </span>
                        <meta itemprop="position" content="2" />
                    </li>
                </ol>
            </div>
            <div class="box-title">
                <div class="title-bar">
                    <h1>Your cart</h1>
                </div>
            </div>

            <div class="content_text">
                <div class="container_table">
                    <table class="table table-hover table-condensed">
                        <thead>
                            <tr class="tr tr_first">
                                <th>Image</th>
                                <th>Name Product</th>
                                <th>Price</th>
                                <th style="width:100px;">Quantity</th>
                                <th>Into Money</th>
                                <th style="width:50px; text-align:center;"></th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php
                                if (isset($_SESSION["shopping_cart"])) {
                                    $total = 0;
                                    ?>
                            <form action='<?php echo BASE_URL?>cart/updateCart' method="post">
                                <?php
                                    foreach ($_SESSION["shopping_cart"] as $key => $value) {
                                        $subIntoMoney = $value['quantity_product'] * $value['price_product'];
                                        $total += $subIntoMoney;
                                ?>
                                        <tr class="tr">
                                            <td data-th="Image">
                                                <div class="col_table_image col_table_hidden-xs">
                                                    <img src="<?php echo BASE_URL ?>public/uploads/product/imageproduct/<?php echo $value['image_product'] ?>" alt="<?php echo $value['title_product'] ?>" class="img-responsive" />
                                                </div>
                                            </td>
                                            <td data-th="Product">
                                                <div class="col_table_name">
                                                    <h4 class="nomargin"><?php echo $value['title_product'] ?></h4>
                                                </div>
                                            </td>
                                            <td data-th="Price"><span class="color_red font_money"><?php echo number_format($value['price_product'], 0, ',', '.') . 'đ' ?></span></td>
                                            <td data-th="Quantity">
                                                <div class="clear margintop5">
                                                    <div class="floatleft"><input type="number" class="inputsoluong" min="1" name="qty[<?php echo $value['id_product'] ?>]" value="<?php echo $value['quantity_product'] ?>"></div>
                                                    <div class="floatleft width50">
                                                        <button class="btn_df btn_table_td_rf_del btn-sm">
                                                            <i class="fa fa-refresh"></i></button>
                                                    </div>
                                                </div>
                                                <div class="clear"></div>
                                            </td>
                                            <td data-th="Into Money" class="text_center"><span class="color_red font_money"><?php echo number_format($subIntoMoney, 0, ',', '.') . 'đ' ?></span></td>
                                            <td class="actions aligncenter">             
                                                <button class="btn btn-danger" style="box-shadow: none;" type="submit" value="<?php echo $value['id_product'] ?>" name="delete_cart">Delete</button>

                                                <button class="btn btn-warning" style="box-shadow: none; margin-top: 5px;" type="submit" value="<?php echo $value['id_product'] ?>" name="update_cart">Update</button>
                                            </td>
                                        </tr>
                                <?php
                                    }                              
                                ?>
                            </form>
                            <tr>
                                <td colspan="7" class="textright_text">
                                    <div class="sum_price_all">
                                        <span class="text_price">Total payment amount</span>:
                                        <span class="text_price color_red"><?php echo number_format($total, 0, ',', '.') . 'đ' ?></span>
                                    </div>
                                </td>
                            </tr>
                            <?php 
                                }
                            ?>
                        </tbody>
                        <tfoot>
                            <tr class="tr_last">
                                <td colspan="7">
                                    <a href="<?php echo BASE_URL ?>" class="btn_df btn_table floatleft"><i class="fa fa-long-arrow-left"></i> Continue shopping</a>
                                    <div class="clear"></div>
                                </td>
                            </tr>
                        </tfoot>
                    </table>
                </div>
                <div class="contact_form">
                    <div class="contact_left">
                        <div class="ch-contacts-details">
                            <ul class="contact-list">
                                <li class="addr">
                                    <strong class="title">Address Us</strong>
                                    <p><em><strong>Interior Thinh Tu</strong></em><br />
                                    <p>Sales Center:</p>
                                    <p>Da Nang, Viet Nam</p>
                                    <p> Hotline: 0123 456 789 (zalo)</p>
                                    </p>
                                </li>
                            </ul>
                            <div class="hiring-box">
                                <strong class="title">Hello!</strong>
                                <p>If you have any questions, please send them to our email <strong>interiorthinhtu@gmail.com</strong> we will answer for you.</p>
                                <p><a href="." class="arrow-link"><i class="fa fa-long-arrow-left" aria-hidden="true"></i> Go back >> Home page</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="contact_right">
                        <div class="form_contact_in">
                            <div class="box_contact">
                                <form name="FormDatHang" method="post" action="gio-hang/">
                                    <div class="content-box_contact">
                                        <div class="row">
                                            <div class="input">
                                                <label>First and last name: <span style="color:red;">*</span></label>
                                                <input type="text" name="txtHoTen" required class="clsip">
                                            </div>
                                            <div class="clear"></div>
                                        </div>
                                        <!---row---->
                                        <div class="row">
                                            <div class="input">
                                                <label>Phone: <span style="color:red;">*</span></label>
                                                <input type="text" name="txtDienThoai" required onkeydown="return checkIt(event)" class="clsip">
                                            </div>
                                            <div class="clear"></div>
                                        </div>
                                        <!---row---->
                                        <div class="row">
                                            <div class="input">
                                                <label>Address: <span style="color:red;">*</span></label>
                                                <input type="text" name="txtDiaChi" required class="clsip">
                                            </div>
                                            <div class="clear"></div>
                                        </div>
                                        <!---row---->
                                        <div class="row">
                                            <div class="input">
                                                <label>Email: <span style="color:red;">*</span></label>
                                                <input type="text" name="txtEmail" onchange="return KiemTraEmail(this);" required class="clsip">
                                            </div>
                                            <div class="clear"></div>
                                        </div>
                                        <!---row---->
                                        <div class="row">
                                            <div class="input">
                                                <label>Content: <span style="color:red;">*</span></label>
                                                <textarea type="text" name="txtNoiDung" class="clsipa"></textarea>
                                            </div>
                                            <div class="clear"></div>
                                        </div>
                                        <!---row---->
                                        <div class="row btnclass">
                                            <div class="input ipmaxn ">
                                                <input type="submit" class="btn-gui" name="frmSubmit" id="frmSubmit" value="Submit order">
                                                <input type="reset" class="btn-gui" value="Retype">
                                            </div>
                                            <div class="clear"></div>
                                        </div>
                                        <!---row---->
                                        <div class="clear"></div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<div class="clear"></div>