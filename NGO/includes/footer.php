<div class="modal fade donate-now " id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title pl-lg-4" style="color: whitesmoke;">Make a Donation</h3>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button> </div>

                <div class="modal-body">
                    <div class="container">
                        <ul style="list-style-type: none;color: whitesmoke;">
                            <li> <label for="payment-type">Payment type</label>
                                <li>
                                    <input type="radio" name="online" id="" autocomplete="off" checked> One Time
                                    <input type="radio" name="COD" id="" autocomplete="off"> Recurring
                                </li>
                                <li> <label for="">I want to donate for</label></li>
                                <li> <select name="" id=""><option value="australia">Australia</option>
                            <option value="canada">Canada</option>
                            <option value="usa">USA</option>
                         </select></li>
                                <li> <label for="">Currency</label></li>
                                <li> <select name="" id=""><option value="australia">$</option>
                            <option value="canada">Rs.</option>
                            <option value="usa">euro</option>
                         </select></li>
                                <li> <label for="">How much amount?</label></li>
                                <li> <select name="" id=""><option value="australia">20</option>
                            <option value="canada">50</option>
                            <option value="usa">100</option>
                         </select></li>
                        </ul>
                        <button type="submit" id="signin" class="btn btn-outline-light w-75 text-lg-center ml-lg-4 my-lg-3">Submit</button>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade donate-now " id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog ">
            <div class="modal-content">
                <div class="modal-header">

                    <h3 class="modal-title pl-lg-4" style="color: whitesmoke;">Make Payment</h3>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button> </div>

                <div class="modal-body">
                    <div class="container text-white">
                        <div class="row">
                            <div class="col-lg-6 ">
                                <div class="card owlcard" style="width: 700px;
                                height: 500px;">
                                    <div class="card-header owlcard">
                                        <div class=" shadow-sm pt-4 pl-2 pr-2 pb-2">
                                            <!-- Credit card form tabs -->
                                            <ul role="tablist" class="nav bg-light nav-pills rounded nav-fill mb-3">
                                                <li class="nav-item">
                                                    <a data-toggle="pill" href="#credit-card" class="nav-link active "> <i class="fa fa-credit-card mr-2"></i> Credit Card </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a data-toggle="pill" href="#paypal" class="nav-link "> <i class="fa fa-paypal mr-2"></i> Paypal </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a data-toggle="pill" href="#net-banking" class="nav-link "> <i class="fa fa-mobile mr-2"></i> Net Banking </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <!-- End -->
                                        <!-- Credit card form content -->
                                        <div class="tab-content">
                                            <!-- credit card info-->
                                            <div id="credit-card" class="tab-pane fade show active pt-3">
                                                <form role="form">
                                                    <div class="form-group"> <label for="username">
                                                    <h6>Card Owner</h6>
                                                </label> <input type="text" name="username" placeholder="Card Owner Name" required class="form-control "> </div>
                                                    <div class="form-group"> <label for="cardNumber">
                                                    <h6>Card number</h6>
                                                </label>
                                                        <div class="input-group"> <input type="text" name="cardNumber" placeholder="Valid card number" class="form-control " required>
                                                            <div class="input-group-append"> <span class="input-group-text text-muted"> <i class="fa fa-cc-visa mx-1"></i> <i class="fa fa-cc-mastercard mx-1"></i> <i class="fa fa-cc-amex mx-1"></i> </span> </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-sm-8">
                                                            <div class="form-group"> <label><span class="hidden-xs">
                                                                <h6>Expiration Date</h6>
                                                            </span></label>
                                                                <div class="input-group"> <input type="number" placeholder="MM" name="" class="form-control" required> <input type="number" placeholder="YY" name="" class="form-control" required> </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <div class="form-group mb-4"> <label data-toggle="tooltip" title="Three digit CV code on the back of your card">
                                                            <h6>CVV <i class="fa fa-question-circle d-inline"></i></h6>
                                                        </label> <input type="text" required class="form-control"> </div>
                                                        </div>
                                                    </div>
                                                    <div class="card-footer"> <button type="button" class="subscribe btn btn-outline-light btn-block shadow-sm"> Confirm Payment </button>
                                                </form>
                                                </div>
                                            </div>
                                            <!-- End -->
                                            <!-- Paypal info -->
                                            <div id="paypal" class="tab-pane fade pt-3">
                                                <h6 class="pb-2">Select your paypal account type</h6>
                                                <div class="form-group "> <label class="radio-inline"> <input type="radio" name="optradio" checked> Domestic </label> <label class="radio-inline"> <input type="radio" name="optradio" class="ml-5">International </label></div>
                                                <p> <button type="button" class="btn btn-outline-light "><i class="fa fa-paypal mr-2"></i> Log into my Paypal</button> </p>
                                            </div>
                                            <!-- End -->
                                            <!-- bank transfer info -->
                                            <div id="net-banking" class="tab-pane fade pt-3">
                                                <div class="form-group "> <label for="Select Your Bank">
                                            <h6>Select your Bank</h6>
                                        </label> <select class="form-control" id="ccmonth">
                                            <option value="" selected disabled>--Please select your Bank--</option>
                                            <option>Bank 1</option>
                                            <option>Bank 2</option>
                                            <option>Bank 3</option>
                                            <option>Bank 4</option>
                                            <option>Bank 5</option>
                                            <option>Bank 6</option>
                                            <option>Bank 7</option>
                                            <option>Bank 8</option>
                                            <option>Bank 9</option>
                                            <option>Bank 10</option>
                                        </select> </div>
                                                <div class="form-group">
                                                    <p> <button type="button" class="btn btn-outline-light"><i class="fa fa-mobile-alt mr-2"></i> Proceed Pyment</button> </p>
                                                </div>
                                            </div>
                                            <!-- End -->
                                            <!-- End -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <footer class="mainfooter" role="contentinfo">
        <div class="footer-middle">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-6">
                        <!--Column1-->
                        <div class="footer-pad">
                            <h4>Hope NGO</h4>
                            <ul class="list-unstyled">
                                <li>
                                    <a href="#">Address - Lorem ipsum dolor sit amet consect etur adi pisicing elit sed.</a>
                                </li>
                                <hr style="  border-top: 1px solid red; ">
                                <li><a href="#"><i class="fa fa-phone" aria-hidden="true"></i> 666 888 0000</a></li>
                                <li><a href="#"><i class="fa fa-envelope" aria-hidden="true"></i> needhelp@azino.com</a></li>
                                <li><a href="#"><i class="fa fa-map-marker" aria-hidden="true"></i> 88 Broklyn Golden Street, USA</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <!--Column1-->
                        <div class="footer-pad">
                            <h4>Explore</h4>
                            <ul class="list-unstyled">
                                <li><a href="#">Our Causes</a></li>
                                <li><a href="#">Accessibility</a></li>
                                <li><a href="#">Disclaimer</a></li>
                                <li><a href="#">Privacy Policy</a></li>
                                <li><a href="#">FAQs</a></li>
                                <li><a href="#">New Campaign</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <!--Column1-->
                        <div class="footer-pad">
                            <h4>Quick Links</h4>
                            <ul class="list-unstyled">
                                <li><a href="index.php">Home</a></li>
                                <li><a href="aboutus.php">About Us</a></li>
                                <li><a href="timeline.php">Timeline</a></li>
                                <li><a href="fundraiser.php">Fundraiser</a></li>
                                <li><a data-toggle="modal" data-target="#myModal1">Donate Now</a></li>

                            </ul>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <h4>Follow Us</h4>
                        <ul class="social-network social-circle">
                            <li><a href="#" class="icoFacebook" title="Facebook"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#" class="icoLinkedin" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
                            <li><a href="#" class="icoLinkedin" title="Linkedin"><i class="fa fa-instagram"></i></a></li>
                            <li><a href="#" class="icoLinkedin" title="Linkedin"><i class="fa fa-google-plus"></i></a></li>


                        </ul>
                        <div class="input-group mt-5">
                            <input type="email" id="mce-EMAIL" data-height="34px" class="form-control input-sm" placeholder="Your Email" name="EMAIL" value="" style="height: 34px;">
                            <span class="input-group-btn">
                              <button type="submit" class="btn btn-theme-colored btn-xs " data-height="34px" style="height: 34px;">Subscribe</button>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 copy">
                        <p class="text-center">&copy; Copyright 2014 -HOPE NGO. All rights reserved.</p>
                    </div>
                </div>


            </div>
        </div>
    </footer>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js " integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj " crossorigin="anonymous "></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js " integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN " crossorigin="anonymous "></script>
    <script src="https://code.jquery.com/jquery-1.9.1.js" integrity="sha256-e9gNBsAcA0DBuRWbm0oZfbiCyhjLrI6bmqAl5o+ZjUA=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js " integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s " crossorigin="anonymous "></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.js"></script>

       <script>            
        //set button id on click to hide first modal
        $("#signin").on("click", function() {
            $('#myModal1').modal('hide');
        });
        //trigger next modal
        $("#signin").on("click", function() {
            $('#myModal2').modal('show');
        });
        $(function() {
            $('[data-toggle="tooltip"]').tooltip()
        })
 var scrolled = 0;
        $(document).ready(function() {
            $("#downClick").on("click", function() {
                scrolled = scrolled + 100;

                $(".bulletin").animate({
                    scrollTop: scrolled
                });
            });
            $("#upClick").on("click", function() {
                scrolled = scrolled - 100;
                $(".bulletin").animate({
                    scrollTop: scrolled
                });

            });

        });
        $(document).ready(function() {
            $(window).scroll(function() {
                if ($(this).scrollTop() > 20) {
                    $('#toTopBtn').fadeIn();
                } else {
                    $('#toTopBtn').fadeOut();
                }
            });

            $('#toTopBtn').click(function() {
                $("html, body").animate({
                    scrollTop: 0
                }, 1000);
                return false;
            });
        });
    </script>

</body>

</html>