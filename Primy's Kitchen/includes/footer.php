<footer class="page-footer font-small  " style="color: white;font-size: 18px; background-color:#2e2e2ef5;">
        <div class="container text-center text-md-left" style="font-family: 'garamond',serif;">
            <div class="row">
                <div class="col-md-3 mx-auto">
                    <h5 class="font-weight-bold text-uppercase mt-3 mb-4"><img src="./assets/images/New Project.png" style="width: 200px;background-color: transparent;"></h5>
                    <ul class="list-unstyled">
                        <li>
                            <a style="font: 18px ;color:white;" href="#!">ABOUT US</a>
                        </li>
                        <li>
                            <a style="font: 18px;color:  white;" href="#!">WHAT WE DO</a>
                        </li>
                        <li>
                            <a style="font: 18px ;color:white;" href="#!">WORK WITH US</a>
                        </li>
                        <li>
                            <a style="font: 18px;color: white;" href="#!">TESTIMONIALS</a>
                        </li>
                    </ul>

                </div>
                <div class="col-md-3 mx-auto">
                    <h5 class="font-weight-bold text-uppercase mt-3 mb-4">Restaurant Address</h5>
                    <p>
                        Vit Vellore University<br> Vellore - 632 014<br> Tamilnadu, India<br> Tel: 91-416-2243091 / 93<br>
                    </p>
                </div>
                <hr class="clearfix w-100 d-md-none">

                <hr class="clearfix w-100 d-md-none">
                <div class="col-md-3 mx-auto">
                    <h5 class="font-weight-bold text-uppercase mt-3 mb-4">Social Media Links</h5>
                    <a href="#"><i class="fa fa-facebook-square" style="color: white;font-size:20px;" aria-hidden="true"></i></a>
                    <a href="#"> <i class="fa fa-instagram" style="color: white;font-size:20px;" aria-hidden="true"></i></a>
                    <a href="#"><i class="fa fa-linkedin-square" style="color: white;font-size:20px;" aria-hidden="true"></i></a>
                    <a href="#"> <i class="fa fa-twitter-square" style="color: white;font-size:20px;" aria-hidden="true"></i></a>
                    <a href="#"> <i class="fa fa-google-plus" style="color: white;font-size:20px;" aria-hidden="true"></i></a>
                    <a href="#"> <i class="fa fa-pinterest" style="color: white;font-size:20px;" aria-hidden="true"></i></a>

                </div>
                <hr class="clearfix w-100 d-md-none">
                <div class="col-md-3 mx-auto">
                    <h5 class="font-weight-bold text-uppercase mt-3 mb-4">Other Links</h5>
                    <ul class="list-unstyled">
                        <li>
                            <a style="font: 18px ;color:white;" href="#!">FAQs</a>
                        </li>
                        <li>
                            <a style="font: 18px ;color:white;" href="#!">Safety Guidelines</a>
                        </li>
                        <li>
                            <a style="font: 18px ;color:white;" href="#!">Policy</a>
                        </li>
                        <li>
                            <a style="font: 18px ;color:white;" href="#!">Blogs </a>
                        </li>
                    </ul>

                </div>
            </div>
        </div>
        <div class="footer-copyright text-center position-sticky  " style="background-color: black;">

            © Copyright: PRIMY'S KITCHEN
            <a href="#"> </a><br><br>
        </div>
    </footer>


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js " integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj " crossorigin="anonymous "></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js " integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN " crossorigin="anonymous "></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js " integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s " crossorigin="anonymous "></script>
    <script>
        $('body').css('padding-top', $('.navbar').outerHeight() + 'px')
        if ($('.smart-scroll').length > 0) {
            var last_scroll_top = 0;
            $(window).on('scroll', function() {
                scroll_top = $(this).scrollTop();
                if (scroll_top <
                    last_scroll_top) {
                    $('.smart-scroll').removeClass('scrolled-down').addClass('scrolled-up');
                } else {
                    $('.smart-scroll').removeClass('scrolled-up').addClass('scrolled-down');
                }
                last_scroll_top = scroll_top;
            });
        }
    </script>
</body>

</html>