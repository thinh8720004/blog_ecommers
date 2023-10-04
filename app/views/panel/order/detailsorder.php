<style>
    #section {
        margin-bottom: 100px;
    }

    #progressbar-1 {
        color: #455A64;
    }

    #progressbar-1 li {
        list-style-type: none;
        font-size: 13px;
        width: 33.33%;
        float: left;
        position: relative;
    }

    #progressbar-1 #step1:before {
        content: "1";
        color: #fff;
        width: 29px;
        margin-left: 22px;
        padding-left: 11px;
    }

    #progressbar-1 #step2:before {
        content: "2";
        color: #fff;
        width: 29px;
    }

    #progressbar-1 #step3:before {
        content: "3";
        color: #fff;
        width: 29px;
        margin-right: 22px;
        text-align: center;
    }

    #progressbar-1 li:before {
        line-height: 29px;
        display: block;
        font-size: 12px;
        background: #455A64;
        border-radius: 50%;
        margin: auto;
    }

    #progressbar-1 li:after {
        content: '';
        width: 121%;
        height: 2px;
        background: #455A64;
        position: absolute;
        left: 0%;
        right: 0%;
        top: 15px;
        z-index: -1;
    }

    #progressbar-1 li:nth-child(2):after {
        left: 50%
    }

    #progressbar-1 li:nth-child(1):after {
        left: 25%;
        width: 121%
    }

    #progressbar-1 li:nth-child(3):after {
        left: 25%;
        width: 50%;
    }

    #progressbar-1 li.active:before,
    #progressbar-1 li.active:after {
        background: #1266f1;
    }

    .card-stepper {
        z-index: 0
    }

    #image {
        object-fit: cover;
        border-radius: 5%;
        box-shadow: 5px 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
    }

    .col-md-10 {
        flex: 0 0 auto;
        width: 100%;
    }
</style>

<section class="vh-100 gradient-custom-2" id="section">
    <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-md-10 col-lg-8 col-xl-6">

                <div class="card card-stepper" style="border-radius: 16px;">

                    <div class="card-header p-4">
                        <div class="d-flex justify-content-between align-items-center">
                            <div>                              
                                <?php
                                foreach ($details_info as $key => $info) {
                                ?>
                                    <p class="text-muted mb-2"> Details Order: <span class="fw-bold text-body"><?php echo $info['code_order'] ?></span></p>
                                    <div class="d-flex flex-row mb-4 pb-2">
                                        <div class="flex-fill">
                                            <p class="bold">Name Customer: <span class="fw-bold text-body"><?php echo $info['name'] ?></span></p>
                                            <p class="text-muted">Phone: <span class="fw-bold text-body"><?php echo $info['phone'] ?></span></p>
                                            <p class="text-muted">Address: <span class="fw-bold text-body"><?php echo $info['address'] ?></span></p>
                                            <p class="text-muted">Email: <span class="fw-bold text-body"><?php echo $info['email'] ?></span></p>
                                            <p class="text-muted">Note: <span class="fw-bold text-body"><?php echo $info['content'] ?></span></p>
                                        </div>
                                    </div>
                                <?php
                                }
                                ?>
                            </div>

                        </div>
                    </div>
                    <div class="card-body p-4">
                        <?php
                        $total = 0;
                        foreach ($details_orders as $key => $details) {
                            $total += $details['price_product'] * $details['quantity_product'];
                        ?>
                            <div class="d-flex flex-row mb-4 pb-2">
                                <div class="flex-fill">
                                    <h5 class="bold">Name Product: <?php echo $details['title_product'] ?></h5>
                                    <p class="text-muted">Quantity: <?php echo $details['quantity_product'] ?></p>
                                    <h6 class="mb-3"> <?php echo number_format($details['price_product'], 0, ',', '.') . 'đ/1' ?></h6>
                                    <h5 class="mb-3"> The total amount: <?php echo number_format($details['price_product'] * $details['quantity_product'], 0, ',', '.') . 'đ' ?></h5>
                                    <p class="text-muted">Time Order: <span class="text-body"><?php echo $details['date_order'] ?></span></p>
                                </div>
                                <div>
                                    <img class="align-self-center img-fluid" id="image" src="<?php echo BASE_URL ?>public/uploads/product/imageproduct/<?php echo $details['image_product'] ?>" width="250">
                                </div>
                            </div>
                        <?php
                        }
                        ?>

                        <ul id="progressbar-1" class="mx-0 mt-0 mb-5 px-0 pt-0 pb-4">
                            <li class="step0 active" id="step1"><span style="margin-left: 22px; margin-top: 12px;">PLACED</span></li>
                            <li class="step0 active text-center" id="step2"><span>SHIPPED</span></li>
                            <li class="step0 text-muted text-end" id="step3"><span style="margin-right: 22px;">DELIVERED</span></li>
                        </ul>
                    </div>
                    <div class="card-footer p-4">
                        <h6 class="text-muted mb-2"> Total amount: <span class="fw-bold text-body"><?php echo number_format($total, 0, ',', '.') . 'đ' ?></span></h6>
                        <button type="submit" class="btn btn-warning"><a style="text-decoration: none; color: black;" href="<?php echo BASE_URL ?>order/orderConfirm/<?php echo $details['code_order'] ?>">Processed</a></button>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>