   <?php include './includes/header-hotels.php'?>
   <section class="intro d-none d-lg-block d-md-block " style="background-image: url(./assets/images/bg-section.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-lg-2 col-xl-2 col-md-2">
                    <div class="logo">
                        <img src="assets/images/res-logo.jpg" alt="logo">
                    </div>
                </div>
                <div class="col-lg-6 hidden-xs">
                    <div class="heading-res">
                        <h4 class="title-font">Hotel Laxmi Food Inn &nbsp;
                            <br class="d-none d-xs-block">
                            <a href="#" class="btn rating">0 / 5</a>&nbsp;
                            <a href="#" class="btn open">Closed Now</a>
                        </h4>
                        <h6 class="">Restaurant in Surat &nbsp;
                            <i class="fa fa-circle" style="font-size: 8px;vertical-align: middle;"></i>
                            <span>Pizza,Sandwiches, Punjabi, Burgers, Salads</span>
                        </h6>
                    </div>
                    <div class="pb-2 mt-3">
                        <a href="#" class="btn-fc fav"><i class="fa fa-heart mr-2" style="color: red;"></i> <span id="wishText"> Add to favorites </span></a> &nbsp;
                        <a href="#" class="btn-fc fav"><i class="fa fa-star mr-2" style="color:rgb(226, 175, 47);font-size: 15px;"></i> Rate</a>
                    </div>
                    <div class="pd-bt mt-2">
                        <a href="./orderonline.php" class="btn ordermenu py-2 mt-2 ">Order Menu</a>&nbsp;
                        <a href="" class="btn ordermenu py-2 mt-2 ">See Menu</a>&nbsp;
                        <a href="" class="btn ordermenu py-2 mt-2 ">Reserve Table</a>&nbsp;
                        <br>
                    </div>
                    <br>
                    <div id="st-1">
                        <span class="fa fa-facebook st-btn" data-network="fb"></span>
                        <span class="fa fa-instagram st-btn" data-network="insta"></span>
                        <span class="fa fa-linkedin st-btn" data-network="link"></span>
                        <span class="fa fa-twitter st-btn" data-network="tw"></span>
                        <span class="fa fa-whatsapp st-btn" data-network="wt"></span>
                        <span class="fa fa-telegram st-btn" data-network="tele"></span>
                        <span class="fa fa-youtube st-btn" data-network="yt"></span>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-3 d-none d-lg-block d-md-block">
                    <label style="color: #0aa89e; margin-bottom:10px; border: 2px dashed; border-radius: 5px; font-size: 22px; font-weight: 700; padding: 5px 12px;">Scan &amp; Order</label>
                    <div id="qrcode" style="width: 100px; margin:0 8px;" class="hidden-xs hidden-sm"><canvas width="128" height="128" style="display: none;"></canvas>
                        <img alt="Scan me!" style="display: block;height:150px;max-width: 150%;" src="data:image/png;base64,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"></div>
                </div>
            </div>
        </div>
        <div class="corner-img about-corner d-none d-lg-block d-md-block">
            <img src="./assets/images/about-bg.png" alt="" style="width:100%;height:auto;">
        </div>
    </section>
    <section class="intro d-block d-lg-none d-md-none my-5" style="background-image: url(./assets/images/bg-section.jpg);">
        <div class="container mx-2">
            <div class="row">
                <div class="col-xs-2 col-sm-2 col-3">
                    <div class="logo">
                        <img src="assets/images/res-logo.jpg" alt="logo" style="height: auto;width: 100%;">
                    </div>
                </div>
                <div class="col-xs-6">
                    <div class="heading-res left">
                        <h3 class="title-font">Hotel Laxmi Food Inn &nbsp;
                            <br>
                            <a href="#" class="btn rating" style="float:left;">0 / 5</a>&nbsp;
                        </h3>

                    </div>
                </div>
            </div>
            <div class="row px-5">
                <div class="pb-2 mt-3">
                    <a href="#" class="btn-fc fav"><i class="fa fa-heart mr-2" style="color: red;"></i> <span id="wishText"> Add to favorites </span></a> &nbsp; </div>
            </div>
            <div class="row mt-2">
                <div class="pd-bt">
                    <a href="" class="btn ordermenu  mt-2 ">Order Menu</a>&nbsp;
                    <a href="" class="btn mt-2 ">See Menu</a>&nbsp;
                    <a href="" class="btn ordermenu  mt-2 ">Reserve Table</a>&nbsp;
                    <br>
                </div>
            </div>
        </div>
    </section>
    <section class="photo" style="background-image: url(./assets/images/bg-section.jpg);">
        <div class="container blocks">
            <div class=" photos-food text-center font-col" style="overflow: hidden;">
                Font Photos
            </div>
            <div class="row half-gutter text-center w-100">
                <div class="col-lg-2 col-md-4 col-sm-6 col-xs-6 col-6">
                    <div class="item-img" role="button" tabindex="0">
                        <img src="./assets/images/food-1.jfif" style="height: 150px;width: 180px;" alt="image" id="myImg">
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-6 col-xs-6 col-6">
                    <div class="item-img" role="button" tabindex="0">
                        <img src="./assets/images/food-2.jpg" style="height: 150px;width: 180px;" alt="image" id="myImg">
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-6 col-xs-6 col-6">
                    <div class="item-img" role="button" tabindex="0">
                        <img src="./assets/images/food-8.jpg" style="height: 150px;width: 180px;" alt="image" id="myImg">
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-6 col-xs-6 col-6">
                    <div class="item-img" role="button" tabindex="0">
                        <img src="./assets/images/food-4.jpg" style="height: 150px;width: 180px;" alt="image" id="myImg">
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-6 col-xs-6 col-6">
                    <div class="item-img" role="button" tabindex="0">
                        <img src="./assets/images/food-5.jpg" style="height: 150px;width: 180px;" alt="image" id="myImg">
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-6 col-xs-6 col-6">
                    <div class="item-img" role="button" tabindex="0">
                        <img src="./assets/images/food-6.jpg" style="height: 150px;width: 180px;" alt="image" id="myImg">
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-6 col-xs-6 col-6">
                    <div class="item-img" role="button" tabindex="0">
                        <img src="./assets/images/food-6.jpg" style="height: 150px;width: 180px;" alt="image" id="myImg">
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-6 col-xs-6 col-6">
                    <div class="item-img" role="button" tabindex="0">
                        <img src="./assets/images/food-5.jpg" style="height: 150px;width: 180px;" alt="image" id="myImg">
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-6 col-xs-6 col-6">
                    <div class="item-img" role="button" tabindex="0">
                        <img src="./assets/images/food-7.jpg" style="height: 150px;width: 180px;" alt="image" id="myImg">
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-6 col-xs-6 col-6">
                    <div class="item-img" role="button" tabindex="0">
                        <img src="./assets/images/food-3.jpg" style="height: 150px;width: 180px;" alt="image" id="myImg">
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-6 col-xs-6 col-6">
                    <div class="item-img" role="button" tabindex="0">
                        <img src="./assets/images/food-2.jpg" style="height: 150px;width: 180px;" alt="image" id="myImg">
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-6 col-xs-6 col-6">
                    <div class="item-img" role="button" tabindex="0">
                        <img src="./assets/images/food-1.jfif" style="height: 150px;width: 180px;" alt="image" id="myImg">
                    </div>
                </div>
            </div>
            <hr>
            <div class=" photos-food text-center font-col" style="overflow: hidden;margin-top: 40px !important;" id="myImg">
                Ambience Photos
            </div>
            <div class="row half-gutter text-center w-100">
                <div class="col-lg-2 col-md-4 col-sm-6 col-xs-6 col-6">
                    <div class="item-img" role="button" tabindex="0">
                        <img src="./assets/images/ambience-1.jpg" style="height: 150px;width: 180px;" alt="image" id="myImg">
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-6 col-xs-6 col-6">
                    <div class="item-img" role="button" tabindex="0">
                        <img src="./assets/images/ambience-2.jpg" style="height: 150px;width: 180px;" alt="image" id="myImg">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="photo" style="background-image: url(./assets/images/bg-section.jpg);">
        <div class="container blocks mb-9">
            <div class="mb-3 col-lg-12">
                <h3 class="text-captialize title-font">Hotel Laxmi Food Inn Menu</h3>
            </div>
            <div class="row half-gutter text-center w-100">
                <div class="col-lg-2 col-md-4 col-sm-6 col-xs-6 col-6">
                    <div class="item-imgm popimage" role="button" tabindex="0">
                        <img src="./assets/images/menu1.jpg" alt="image" style="height: 200px; width: 150px;" class="show_img" id="myImg">
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-6 col-xs-6 col-6">
                    <div class="item-imgm popimage" role="button" tabindex="0">
                        <img src="./assets/images/menu1.jpg" alt="image" style="height: 200px; width: 150px;" class="show_img" id="myImg">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="photo" style="background-image: url(./assets/images/bg-section.jpg);">
        <div class="container blocks mb-9">
            <div class="mb-3 col-lg-12">
                <h3 class="text-captialize title-font">Hotel Laxmi Food Inn Facilities</h3>
            </div>
            <div class="row half-gutter text-center w-100">
                <div class="col-lg-2 col-md-4 col-sm-6 col-xs-6 col-6">
                    <div class="feature-box p-3 text-center">
                        <span class="fa fa-cutlery margin-15px-bottom feature-icon"></span>
                        <h5 style="font-weight: 500;">Banquet Hall</h5>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-6 col-xs-6 col-6">
                    <div class="feature-box p-3 text-center">
                        <span class="fa fa-window-maximize margin-15px-bottom feature-icon"></span>
                        <h5 style="font-weight: 500;">Air Condition</h5>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-6 col-xs-6 col-6">
                    <div class="feature-box p-3 text-center">
                        <span class="fa fa-database margin-15px-bottom feature-icon"></span>
                        <h5 style="font-weight: 500;">Restroom</h5>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-6 col-xs-6 col-6">
                    <div class="feature-box p-3 text-center">
                        <span class="fa fa-paypal margin-15px-bottom feature-icon"></span>
                        <h5 style="font-weight: 500;">E-Payment </h5>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="photo" style="background-image: url(./assets/images/bg-form.jpg); background-repeat: no-repeat;background-attachment: fixed;background-size:cover;">
        <div class="container mt-3" style="background:transparent">
            <div class="col-lg-12 col-xs-12">
                <h1 class="font-col" style="text-align: center;font-weight: 800;">RESTAURANT QUERY</h1>
            </div>
            <div class="row">
                <div class="col-md-12 px-3 mt-3 col-xs-12">
                    <form class="mt-2 py-3 px-5" style="font-weight: 600;font-size: 20px;color:#fff ">
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="inputEmail4">Email</label>
                                <input type="email" class="form-control" id="inputEmail4" placeholder="Email">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputPassword4">Password</label>
                                <input type="password" class="form-control" id="inputPassword4" placeholder="Password">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputAddress">Query</label>
                            <input type="textarea" class="form-control" id="inputAddress" placeholder="">
                        </div>
                        <div class="form-group" style="font-size: 16px;">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="gridCheck">
                                <label class="form-check-label" for="gridCheck">
                  Check me out
                </label>
                            </div>
                        </div>
                        <button type="submit" class="btn bg-pri" style="color:#fff">Send Query</button>
                    </form>

                </div>
            </div>
        </div>
        </div>
    </section>
    <?php include './includes/footer-1.php' ?>