<?php include './includes/placeorderheader.php'?>
<section class="placeordersection">
        <div class="container sec2 ">
            <div class="row">
                <div class="col-md-8">
                    <div class="detailsbox">
                        <div class="emailbox">
                            <span> <h3 style="display: inline;">Name</h3></span>
                            <span>  <h4 style="display: inline;">(abc@gmail.com)</h4></span>
                            <h6>you are securely logged in</h6>

                        </div>
                        <div class="deliverytypebox">
                            <div class="accordion" id="accordionExample">
                                <div class="card mt-3">
                                    <div class="card-header" id="headingOne">
                                        <h2 class="mb-0">
                                            <button class="btn  text-left accordionhead" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                        Selected Order Type : Delivery
                                                      </button>
                                        </h2>
                                    </div>
                                    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                                        <div class="card-body">
                                            <button type="button" class="btn btn-outline-info placeorderbuttons">Take Away/Pickup</button>
                                            <button type="button" class="btn btn-outline-info placeorderbuttons">Delivery</button>
                                            <button type="button" class="btn btn-outline-info placeorderbuttons ">Dine In</button>
                                            <div class="card deliverycard">
                                                <div class="card-body">
                                                    <h3 class="card-title">Delivery Address</h3>
                                                    <hr style="line-height: 2px;">
                                                    <p class="card-text">
                                                        <button type="button" class="btn btn-outline-info placeorderbuttons ">Add An Address</button>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card mt-3">
                                    <div class="card-header" id="headingTwo">
                                        <h2 class="mb-0">
                                            <button class="btn  text-left accordionhead" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                Selected Order Time : Now
                                                      </button>
                                        </h2>
                                    </div>
                                    <div id="collapseTwo" class="collapse show" aria-labelledby="headingTwo" data-parent="#accordionExample">
                                        <div class="card-body">
                                            <button type="button" class="btn btn-outline-info placeorderbuttons">Now</button>
                                            <button type="button" class="btn btn-outline-info placeorderbuttons ">Pre-Order</button>

                                        </div>
                                    </div>
                                </div>
                                <div class="card mt-3">
                                    <div class="card-header" id="headingThree">
                                        <h2 class="mb-0">
                                            <button class="btn  text-left accordionhead" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">

                                                Selected Payment Method : Cash 
                                                     </button>
                                        </h2>
                                    </div>
                                    <div id="collapseThree" class="collapse show" aria-labelledby="headingThree" data-parent="#accordionExample">
                                        <div class="card-body">
                                            <button type="button" class="btn btn-outline-info placeorderbuttons ">Cash On Delivery</button>
                                            <div class="cash text-center">
                                                <h4>Cash On Delivery</h4>
                                                <img src="./assets/images/cod.png" style="width: 100px;height: 100px;">
                                                <h6>Please keep exact change ready to avoid time delay.</h6>
                                                <input type="text" placeholder="Order Notes(optional)" style="width: 80%;">
                                                <button type="button" style="width: 80%;" class="btn btn-outline-info placeorderbuttons">Place Order(Rs.0)</button>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
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
                                                <input class="form-control" type="text" style="" placeholder="Coupon Code">
                                            </div>
                                            <div class="col-2"></div>
                                            <div class="col-4 text-right text-success">
                                                <button type="button" class="btn "><span>Apply</span></button>
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
    </section>
    <?php include './includes/footer-1.php'?>