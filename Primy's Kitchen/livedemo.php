<?php include './includes/header1.php'?>
<section class="bg-home" style="height: 300px;">
        <div class="container-fluid ">
            <center>
                <div class="startsearch text-center py-5 mt-0">
                    <h5>Order Food Online in Jhansi</h5>
                    <h1 class="d-none d-lg-block d-md-block">Order Food Online from Best & Nearby<br> Restaurants in Jhansi</h1>
                    <h5 class="d-block d-lg-none d-md-none">Order Food Online from Best & Nearby<br> Restaurants in Jhansi</h5>
            </center>
            <button type="button" class="btn btn-info mt-2 mb-5 demodiscoverbtn"><i class="fa fa-compass px-3" ></i>Discover Nearby Restaurants</button>

            </div>

        </div>
    </section>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item  ml-5"><a href="./index.php">Home</a></li>
            <li class="breadcrumb-item active " aria-current="page">Jhansi</li>
        </ol>
    </nav>
    <section style="padding: 40px 0 60px 0;overflow: hidden;">
        <div class="container sec2 ">
            <h2> Order Online for delivery, pick up or catering from 5 Jhansi restaurants</h2>
            <h3>5 Restaurants near Jhansi</h3>
            <hr>
            <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                <li class="nav-item active" role="presentation">
                    <a class="nav-link  demopill " id="pills-allcuisine-tab" data-toggle="pill" href="#pills-allcuisine" role="tab" aria-controls="pills-allcuisine" aria-selected="true">All Cuisines</a>
                </li>
                <li class="nav-item" role="presentation">
                    <a class="nav-link demopill" id="pills-pizza-tab" data-toggle="pill" href="#pills-pizza" role="tab" aria-controls="pills-pizza" aria-selected="false">Pizza</a>
                </li>
                <li class="nav-item" role="presentation">
                    <a class="nav-link demopill" id="pills-fastfood-tab" data-toggle="pill" href="#pills-fastfood" role="tab" aria-controls="pills-fastfood" aria-selected="false">Fast Food</a>
                </li>
                <li class="nav-item" role="presentation">
                    <a class="nav-link demopill" id="pills-chinese-tab" data-toggle="pill" href="#pills-chinese" role="tab" aria-controls="pills-chinese" aria-selected="false">Chinese</a>
                </li>
                <li class="nav-item" role="presentation">
                    <a class="nav-link demopill" id="pills-desert-tab" data-toggle="pill" href="#pills-desert" role="tab" aria-controls="pills-desert" aria-selected="false">Dessert</a>
                </li>
                <li class="nav-item" role="presentation">
                    <a class="nav-link demopill" id="pills-italian-tab" data-toggle="pill" href="#pills-italian" role="tab" aria-controls="pills-italian" aria-selected="false">Italian</a>
                </li>
                <li class="nav-item" role="presentation">
                    <a class="nav-link demopill" id="pills-more-tab" data-toggle="pill" href="#pills-more" role="tab" aria-controls="pills-more" aria-selected="false">More<i class="fa fa-caret-down" aria-hidden="true"></i></a>
                </li>
            </ul>

            <div class="row">
                <div class="col-md-2 d-block d-md-none d-lg-none" style="margin-top: 10px;">
                    <div class="text-center ">
                        <button type="button" class="btn btn-demo" data-toggle="modal" data-target="#myModal">
                            Filter BY
                        </button></div>
                    <div class="modal left fade " id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">

                                <div class="modal-header">
                                    <div class="input-group mb-3">
                                        <input type="text" class="form-control demopill" style="margin-right:0 ;" placeholder="Restaurant Cuisine,etc" aria-describedby="button-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-info in" type="button" id="button-addon2"><i class="fa fa-search" aria-hidden="true"></i></button>
                                        </div>
                                    </div>
                                </div>

                                <div class="modal-body">
                                    <ul>
                                        <a href="#">
                                            <li style="font-size: 18px;font-weight: bolder;">DELIVERY METHOD</li>
                                        </a>
                                        <a href="#">
                                            <li>ALL</li>
                                        </a>
                                        <a href="#">
                                            <li>DINE IN</li>
                                        </a>
                                        <a href="#">
                                            <li>TAKE AWAY/PICK UP</li>
                                        </a>
                                        <a href="#">
                                            <li>HOME DELIVERY</li>
                                        </a>
                                    </ul>
                                    <ul>
                                        <a href="#">
                                            <li style="font-size: 18px;font-weight: bolder;">SORT BY</li>
                                        </a>
                                        <a href="#">
                                            <li>RATINGS</li>
                                        </a>
                                        <a href="#">
                                            <li>MINIMUM ORDER AMOUNT</li>
                                        </a>
                                        <a href="#">
                                            <li>RECENTLY ADDED</li>
                                        </a>
                                        <a href="#">
                                            <li>DELIVERY FEES</li>
                                        </a>
                                        <a href="#">
                                            <li>FASTEST DELIVERY</li>
                                        </a>
                                    </ul>
                                    <ul>
                                        <a href="#">
                                            <li style="font-size: 18px;font-weight: bolder;">RESTAURANT TYPE</li>
                                        </a>
                                        <a href="#">
                                            <li>All</li>
                                        </a>
                                        <a href="#">
                                            <li>ONLINE MENU</li>
                                        </a>
                                        <a href="#">
                                            <li>ONLINE ORDERING</li>
                                        </a>

                                    </ul>
                                </div>

                            </div>
                            <!-- modal-content -->
                        </div>
                        <!-- modal-dialog -->
                    </div>
                </div>
                <div class="col-md-2 d-none d-md-block d-lg-block">
                    <div class="input-group mb-3 ">
                        <input type="text" class="form-control demopill" style="margin-right:0 ;" placeholder="Restaurant Cuisine,etc" aria-describedby="button-addon2">
                        <div class="input-group-append">
                            <button class="btn btn-info in" type="button" id="button-addon2"><i class="fa fa-search" aria-hidden="true"></i></button>
                        </div>
                    </div>
                    <div class="container sidebar " style="padding: 0;">
                        <ul>
                            <a href="#">
                                <li style="font-size: 18px;font-weight: bolder;">DELIVERY METHOD</li>
                            </a>
                            <a href="#">
                                <li>ALL</li>
                            </a>
                            <a href="#">
                                <li>DINE IN</li>
                            </a>
                            <a href="#">
                                <li>TAKE AWAY/PICK UP</li>
                            </a>
                            <a href="#">
                                <li>HOME DELIVERY</li>
                            </a>
                        </ul>
                        <ul>
                            <a href="#">
                                <li style="font-size: 18px;font-weight: bolder;">SORT BY</li>
                            </a>
                            <a href="#">
                                <li>RATINGS</li>
                            </a>
                            <a href="#">
                                <li>MINIMUM ORDER AMOUNT</li>
                            </a>
                            <a href="#">
                                <li>RECENTLY ADDED</li>
                            </a>
                            <a href="#">
                                <li>DELIVERY FEES</li>
                            </a>
                            <a href="#">
                                <li>FASTEST DELIVERY</li>
                            </a>
                        </ul>
                        <ul>
                            <a href="#">
                                <li style="font-size: 18px;font-weight: bolder;">RESTAURANT TYPE</li>
                            </a>
                            <a href="#">
                                <li>All</li>
                            </a>
                            <a href="#">
                                <li>ONLINE MENU</li>
                            </a>
                            <a href="#">
                                <li>ONLINE ORDERING</li>
                            </a>

                        </ul>
                    </div>
                </div>
                <div class="col-md-10">
                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-allcuisine" role="tabpanel" aria-labelledby="pills-allcuisine-tab">
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="card my-2 rest-link livecard">
                                            <span class="rating"><i class="fa fa-star" style="margin-right: 5px;" aria-hidden="true"></i>0</span>
                                            <a href="#"> <img src="./assets/images/2_2020-09-03_11-01-080.png" class="card-img-top" alt="pizza"></a>
                                            <div class="card-body rest-link">

                                                <a href="#">
                                                    <p class="card-text mb-3" style=>Pizza Feast</p>
                                                </a>
                                                <p> <i class="fa fa-cutlery" aria-hidden="true"></i>Pizza, Italian <br><br><i class="fa fa-map-marker   "></i> Jhansi</p>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="card my-2 rest-link livecard">
                                            <span class="rating"><i class="fa fa-star" style="margin-right: 5px;" aria-hidden="true"></i>0</span>
                                            <a href="#"> <img src="./assets/images/2_2020-09-03_11-01-084.png" class="card-img-top" alt="pizza"></a>
                                            <div class="card-body rest-link">

                                                <a href="#">
                                                    <p class="card-text mb-3" style=>Italy Station</p>
                                                </a>
                                                <p> <i class="fa fa-cutlery" aria-hidden="true"></i> Italian <br><br><i class="fa fa-map-marker   "></i> Jhansi</p>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="card my-2 rest-link livecard">
                                            <span class="rating"><i class="fa fa-star" style="margin-right: 5px;" aria-hidden="true"></i>0</span>
                                            <a href="#"> <img src="./assets/images/5_2020-10-15_17-21-151.png" class="card-img-top" alt="pizza"></a>
                                            <div class="card-body rest-link">

                                                <a href="#">
                                                    <p class="card-text mb-3" style=>China Valley</p>
                                                </a>
                                                <p> <i class="fa fa-cutlery" aria-hidden="true"></i> Chinese,Indian <br><br><i class="fa fa-map-marker   "></i> Jhansi</p>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="card my-2 rest-link livecard">
                                            <span class="rating"><i class="fa fa-star" style="margin-right: 5px;" aria-hidden="true"></i>0</span>
                                            <a href="#"> <img src="./assets/images/5_2020-10-15_17-21-153.png" class="card-img-top" alt="pizza"></a>
                                            <div class="card-body rest-link">

                                                <a href="#">
                                                    <p class="card-text mb-3" style=>Snacky Packy</p>
                                                </a>
                                                <p> <i class="fa fa-cutlery" aria-hidden="true"></i>Maggi,Noodles,Snacks,etc <br><br><i class="fa fa-map-marker   "></i> Jhansi</p>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="card my-2 rest-link livecard">
                                            <span class="rating"><i class="fa fa-star" style="margin-right: 5px;" aria-hidden="true"></i>0</span>
                                            <a href="#"> <img src="./assets/images/6_2020-10-15_17-21-550.png" class="card-img-top" alt="pizza"></a>
                                            <div class="card-body rest-link">

                                                <a href="#">
                                                    <p class="card-text mb-3" style=>Amul Parlour</p>
                                                </a>
                                                <p> <i class="fa fa-cutlery" aria-hidden="true"></i> Ice-cream,Shakes <br>
                                                    <br><i class="fa fa-map-marker   "></i>Jhansi</p>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="pills-pizza" role="tabpanel" aria-labelledby="pills-pizza-tab">
                            <div class="col-md-12"></div>
                            <div class="row">

                                <div class="col-md-4">
                                    <div class="card my-2 rest-link livecard">
                                        <span class="rating"><i class="fa fa-star" style="margin-right: 5px;" aria-hidden="true"></i>0</span>
                                        <a href="#"> <img src="./assets/images/2_2020-09-03_11-01-080.png" class="card-img-top" alt="pizza"></a>
                                        <div class="card-body rest-link">

                                            <a href="#">
                                                <p class="card-text mb-3" style=>Pizza Feast</p>
                                            </a>
                                            <p> <i class="fa fa-cutlery" aria-hidden="true"></i>Pizza, Italian <br><br><i class="fa fa-map-marker   "></i> Jhansi</p>

                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="card my-2 rest-link livecard">
                                        <span class="rating"><i class="fa fa-star" style="margin-right: 5px;" aria-hidden="true"></i>0</span>
                                        <a href="#"> <img src="./assets/images/2_2020-09-03_11-01-084.png" class="card-img-top" alt="pizza"></a>
                                        <div class="card-body rest-link">

                                            <a href="#">
                                                <p class="card-text mb-3" style=>Italy Station</p>
                                            </a>
                                            <p> <i class="fa fa-cutlery" aria-hidden="true"></i> Italian <br><br><i class="fa fa-map-marker   "></i> Jhansi</p>

                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="card my-2 rest-link livecard">
                                        <span class="rating"><i class="fa fa-star" style="margin-right: 5px;" aria-hidden="true"></i>0</span>
                                        <a href="#"> <img src="./assets/images/2_2020-09-03_11-01-081.png" class="card-img-top" alt="pizza"></a>
                                        <div class="card-body rest-link">

                                            <a href="#">
                                                <p class="card-text mb-3" style=>China Valley</p>
                                            </a>
                                            <p> <i class="fa fa-cutlery" aria-hidden="true"></i> Chinese,Indian <br><br><i class="fa fa-map-marker   "></i> Jhansi</p>

                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="card my-2 rest-link livecard">
                                        <span class="rating"><i class="fa fa-star" style="margin-right: 5px;" aria-hidden="true"></i>0</span>
                                        <a href="#"> <img src="./assets/images/2_2020-09-03_11-01-082.png" class="card-img-top" alt="pizza"></a>
                                        <div class="card-body rest-link">

                                            <a href="#">
                                                <p class="card-text mb-3" style=>Snacky Packy</p>
                                            </a>
                                            <p> <i class="fa fa-cutlery" aria-hidden="true"></i>Maggi,Noodles,Snacks,etc <br><br><i class="fa fa-map-marker   "></i> Jhansi</p>

                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="card my-2 rest-link livecard">
                                        <span class="rating"><i class="fa fa-star" style="margin-right: 5px;" aria-hidden="true"></i>0</span>
                                        <a href="#"> <img src="./assets/images/2_2020-09-03_11-01-083.png" class="card-img-top" alt="pizza"></a>
                                        <div class="card-body rest-link">

                                            <a href="#">
                                                <p class="card-text mb-3" style=>Amul Parlour</p>
                                            </a>
                                            <p> <i class="fa fa-cutlery" aria-hidden="true"></i> Ice-cream,Shakes <br>
                                                <br><i class="fa fa-map-marker   "></i>Jhansi</p>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="pills-fastfood" role="tabpanel" aria-labelledby="pills-fastfood-tab">...</div>
                </div>
            </div>
        </div>
        </div>
    </section>
    <?php include './includes/footer.php'?>