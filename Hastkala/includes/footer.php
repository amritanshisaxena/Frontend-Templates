  <section class="footer"> <output class="site-footer shadow-sm">
        <footer class="section-footer">
            <div class="container-fluid footer">
                <section class="footer-padd">
                    <div class="row">
                        <aside class="col-md-4">
                            <article class="mr-3"> <img src=".//assets/images/New Project (1).png" class="logo-footer">
                                <p class="mt-3 description">This culture-rich country has various ancient artisans and their handicraft products that are still hidden 
                                  from their original identity and escapes to get their really worth in not only urban but also, in the global market.</p>
                                <div> 
                                  <a class="btn btn-icon btn-light" title="Facebook"href="https://www.facebook.com/eCraftIndia/"><i class="fa fa-facebook-f"></i></a> 
                                  <a class="btn btn-icon btn-light" title="Instagram" href="https://www.instagram.com/gaatha.handicrafts/"><i class="fa fa-instagram"></i></a> 
                                  <a class="btn btn-icon btn-light" title="Youtube" href="https://youtube.com"><i class="fa fa-youtube"></i></a> 
                                  <a class="btn btn-icon btn-light" title="Twitter" href="https://twitter.com/?lang=en"><i class="fa fa-twitter"></i></a> 
                                </div>
                            </article>
                        </aside>
                        <aside class="col-sm-3 col-md-2">
                          <div class="footer-widget">
                          <div class="footer-widget-heading">
                            <h3>About Us</h3>
                          </div>
                            <ul class="list-unstyled">
                                <li> <a href="#">About us</a></li>
                                <li> <a href="#">Services</a></li>
                                <li> <a href="#">Terms & Condition</a></li>
                                <li> <a href="#">Our Blogs</a></li>
                            </ul></div>
                        </aside>
                        <aside class="col-sm-3 col-md-2">
                          <div class="footer-widget">
                            <div class="footer-widget-heading">
                              <h3>Services</h3>
                            </div>
                            <ul class="list-unstyled">
                                <li> <a href="#">Help center</a></li>
                                <li> <a href="#">Money refund</a></li>
                                <li> <a href="#">Terms and Policy</a></li>
                                <li> <a href="#">Open dispute</a></li>
                            </ul></div>
                        </aside>
                        <aside class="col-sm-3 col-md-2">
                            <div class="footer-widget">
                              <div class="footer-widget-heading">
                                <h3>For users</h3>
                              </div>
                            <ul class="list-unstyled">
                                <li> <a href="./login.php"> User Login </a></li>
                                <li> <a href="./create account.php"> User register </a></li>
                                <li> <a href="./userpanel_profile.php"> Account Setting </a></li>
                                <li> <a href="./userpanel_orders.php"> My Orders </a></li>
                            </ul>
                          </div>
                        </aside>
                        <aside class="col-sm-2 col-md-2">
                          <div class="footer-widget">
                            <div class="footer-widget-heading">
                              <h3>Our App</h3>
                            </div>
                            <a href="#" class="d-block mb-2">
                              <img class="img-responsive" src="https://res.cloudinary.com/dxfq3iotg/image/upload/v1574317087/AAA/appstore.png" height="40"></a> 
                              <a href="#" class="d-block mb-2">
                                <img class="img-responsive" src="https://res.cloudinary.com/dxfq3iotg/image/upload/v1574317110/AAA/playmarket.png" height="40"></a>
                                </div>
                        </aside>
                    </div>
                </section>
               
              </div>
          <div class="copyright-area">
            <div class="container">
              <div class="row">
                <div class="col-xl-6 col-lg-6 text-left">
                  <div class="copyright-text">
                    <p> © Hastkala All Rights Reserved</p>
                  </div>
                </div>
                <div class="col-xl-6 col-lg-6 d-none d-lg-block text-right">
                  <div class="footer-menu">
                    <ul>
                      <li><a href="#">Privacy &amp; Cookies</a></li>
                      <li><a href="#">Accessibility</a></li>
                      <li><a href="#">Policy</a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
          </footer>
        </output>
</section>
    
        <a href="#" id="toTopBtn" class="cd-top text-replace js-cd-top cd-top--is-visible cd-top--fade-out" data-abc="true"></a>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
                <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.js" integrity="sha512-gY25nC63ddE0LcLPhxUJGFxa2GoIyA5FLym4UJqHDEMHjp8RET6Zn/SHo1sltt3WuVtqfyxECP38/daUc/WVEA==" crossorigin="anonymous"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
        <script type="text/javascript" src="https://res.cloudinary.com/dxfq3iotg/raw/upload/v1565190285/Scripts/xzoom.min.js"></script>

        <script>
            $(".dropdown-menu .nav-link").hover(function() {
                $(this).tab('show');
            });
            var toggler = document.getElementsByClassName("caret");
            var i;

            for (i = 0; i < toggler.length; i++) {
                toggler[i].addEventListener("click", function() {
                    this.parentElement.querySelector(".nested").classList.toggle("active");
                    this.classList.toggle("caret-down");
                });
            }
            
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