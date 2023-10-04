<section>
    <style>
        .title_login {}
    </style>
    <div class="bg_in">
        <?php
        if (!empty($_GET['msg'])) {
            $msg = unserialize(urldecode($_GET['msg']));
            foreach ($msg as $key => $value) {
                if ($value == "Add customer successfully!") {
                    echo '<div class="alert alert-success" id="success-alert">';
                } else if ($value == "Add customer failed!") {
                    echo '<div class="alert alert-danger" id="danger-alert">';
                }
                echo '<strong>' . $value . '</strong>';
                echo '</div>';
            }
        }
        ?>
        <div class="contact_form">
            <form action="<?php echo BASE_URL ?>/customer/insertLogin" method="POST">
                <div class="contact_left">
                    <h4 class="title_login">Customer registration</h4>
                    <div class="form_contact_in">
                        <div class="box_contact">
                            <form name="FormDatHang" method="post" action="gio-hang/">
                                <div class="content-box_contact">
                                    <div class="row">
                                        <div class="input">
                                            <label>First and last name: <span style="color:red;">*</span></label>
                                            <input type="text" name="txtFullName" required class="clsip">
                                        </div>
                                        <div class="clear"></div>
                                    </div>
                                    <!---row---->
                                    <div class="row">
                                        <div class="input">
                                            <label>Phone: <span style="color:red;">*</span></label>
                                            <input type="text" name="txtPhone" required
                                                onkeydown="return checkIt(event)" class="clsip">
                                        </div>
                                        <div class="clear"></div>
                                    </div>
                                    <!---row---->
                                    <div class="row">
                                        <div class="input">
                                            <label>Address: <span style="color:red;">*</span></label>
                                            <input type="text" name="txtAddress" required class="clsip">
                                        </div>
                                        <div class="clear"></div>
                                    </div>
                                    <!---row---->
                                    <div class="row">
                                        <div class="input">
                                            <label>Email: <span style="color:red;">*</span></label>
                                            <input type="text" name="txtEmail" required class="clsip">
                                        </div>
                                        <div class="clear"></div>
                                    </div>
                                    <!---row---->
                                    <div class="row">
                                        <div class="input">
                                            <label>Password: <span style="color:red;">*</span></label>
                                            <input type="password" name="txtPassword" required class="clsip">
                                        </div>
                                        <div class="clear"></div>
                                    </div>
                                    <!---row---->
                                    <div class="row btnclass">
                                        <div class="input ipmaxn ">
                                            <input type="submit" class="btn-gui" name="Register" id="frmSubmit"
                                                value="Register">
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
            </form>
            <form autocomplete="off" action="<?php echo BASE_URL ?>/customer/loginCustomer" method="POST">

                <div class="contact_right">
                    <h4 class="title_login">Customer login</h4>
                    <div class="form_contact_in">
                        <div class="box_contact">
                            <form name="FormDatHang" method="post" action="gio-hang/">
                                <div class="content-box_contact">

                                    <!---row---->

                                    <!---row---->

                                    <!---row---->
                                    <div class="row">
                                        <div class="input">
                                            <label>Email: <span style="color:red;">*</span></label>
                                            <input type="text" name="username" required class="clsip">
                                        </div>
                                        <div class="clear"></div>
                                    </div>
                                    <!---row---->
                                    <div class="row">
                                        <div class="input">
                                            <label>Password: <span style="color:red;">*</span></label>
                                            <input type="password" name="password" required class="clsip">
                                        </div>
                                        <div class="clear"></div>
                                    </div>
                                    <!---row---->

                                    <!---row---->
                                    <div class="row btnclass">
                                        <div class="input ipmaxn ">
                                            <input type="submit" class="btn-gui" name="frmSubmit" id="frmSubmit"
                                                value="Login">
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
            </form>
            <div class="clearfix"></div>
        </div>
        <div class="clearfix"></div>

    </div>
</section>