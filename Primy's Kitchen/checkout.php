<?php include './includes/header-checkout.php'?>
<section class="checkout page-content1">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 col-xl-8" style="background-color:rgba(32, 178, 171, 0.527);margin-bottom:15px">
                    <div class="row main-content bg-success text-center">
                        <div class="col-md-4 text-center company__info">
                            <span class="company__logo"><h2><span class="fa fa-cutlery"></span></h2>
                            </span>
                            <h4 class="company_title">PRIMY'S KITCHEN</h4>
                        </div>

                        <div class="col-md-8 col-xs-12 col-sm-12 login_form ">
                            <div class="container-fluid">
                                <div class="col-lg-12 col-xs-12 mt-1">
                                    <h2 class="font-col" style="text-align: center;font-weight: 600;font-family: 'Oswald',sans-serif;">USER LOGIN</h2>
                                </div>
                                <div class="row">
                                    <form action="placeorder.php" class="form-group">
                                        <div class="row">
                                            <input type="text" name="username" id="username" class="form__input" placeholder="Username">
                                        </div>
                                        <div class="row">
                                            <input type="password" name="password" id="password" class="form__input" placeholder="Password">
                                        </div>
                                        <div class="row">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="gridCheck">
                                                <label class="form-check-label" for="gridCheck">
                                                  Remember Me!
                                                </label>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <button type="submit" class="submit btn">Login</button>
                                        </div>
                                    </form>
                                </div>
                                <div class="row">
                                    <p class="px-5">Don't have an account? <a href="#" data-toggle="modal" data-target="#exampleModal">Register Here</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="scrollbar" class="col-lg-3 col-xl-4">
                    <nav class="stick" style="height:auto; width: 252.25px;">
                        <div id="panel-cart">
                            <div class="panel-cart-container">
                                <div class="panel-cart-title">
                                    <h5 class="mb-0 cart-title">Your Cart</h5>
                                </div>
                                <div class="panel-cart-content">
                                    <div class="cart-summary">
                                        <div class="row">
                                            <div class="col-7 text-muted">Item total</div>
                                            <div class="col-5 text-right price"><strong>Rs.0.00</strong></div>
                                        </div>
                                        <div class="row">
                                            <div class="col-7 text-muted">Delivery Charge</div>
                                            <div class="col-5 text-right price"><strong>Rs.0.00</strong></div>
                                        </div>
                                        <hr class="hr hr-sm">
                                        <div class="row coupon">
                                            <div class="col-6">
                                                <input class="form-control" type="text" placeholder="Coupon Code">
                                            </div>
                                            <div class="col-2"></div>
                                            <div class="col-4 text-right text-success">
                                                <button type="button" class="btn btn-block btn1"><span>Apply</span></button>
                                            </div>
                                        </div>
                                        <hr class="hr hr-sm">
                                        <div class="row">
                                            <div class="col-7 text-lg text-muted">Total:</div>
                                            <div class="col-5 text-lg text-right price"><strong>Rs.0.00</strong></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    </nav>
                    </div>
                </div>
            </div>
    </section>


    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content" style="width: 135%;background-color:rgba(32, 178, 171, 0.918);">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
                </div>
                <div class="modal-body align-items-center">
                    <div class="row main-content bg-success text-center">
                        <div class="col-md-4 text-center company__info">
                            <span class="company__logo"><h2><span class="fa fa-cutlery"></span></h2>
                            </span>
                            <h4 class="company_title">PRIMY'S KITCHEN</h4>
                        </div>
                        <div class="col-md-8 col-xs-12 col-sm-12 login_form ">
                            <div class="container-fluid">
                                <div class="col-lg-12 col-xs-12 mt-1">
                                    <h2 class="font-col" style="text-align: center;font-weight: 600;font-family: 'Oswald',sans-serif;">REGISTER</h2>
                                </div>
                                <div class="row">
                                    <form control="" class="form-group">
                                        <div class="row">
                                            <input type="text" name="name" id="name" class="form__input" placeholder="Enter Name">
                                        </div>
                                        <div class="row">
                                            <input type="email" name="password" id="" class="form__input" placeholder="Enter Email">
                                        </div>
                                        <div class="row">
                                            <input type="submit" value="REGISTER" class="submit btn">
                                        </div>
                                        <div class="row">
                                            <p class="act-link"><a href="#">Resend Activation Link !</a></p>
                                        </div>
                                    </form>
                                </div>
                                <div class="row">
                                    <p class="px-5">Already a Member? <a href="./checkout.php">Login Now</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <?php include './includes/footer-1.php'?>