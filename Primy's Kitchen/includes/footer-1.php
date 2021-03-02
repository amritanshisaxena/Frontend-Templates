<footer class="bg-black d-none d-md-block d-lg-block fixed-bottom" data-scroll-index="7" data-overlay-dark="0">
        <div class="footer-bottom py-3 bg-black border-top border-color-light-white">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 xs-text-center xs-margin-10px-bottom">
                        <span class="font-size15 letter-spacing-1 text-medium-gray">© 2020 - <a href="" class="font-size15 letter-spacing-1" target="_BLANK">PRIMY'S KITCHEN. All rights reserved.</a></span>
                        <a href="" target="_BLANK"></a>
                    </div>
                    <a href="" target="_BLANK">
                    </a>
                    <div class="col-md-6 text-right xs-text-center">
                        <a href="" target="_BLANK">
                        </a>
                        <div class="footer-social">
                            <a href="" target="_BLANK"><i class="fa fa-facebook-f"></i></a>
                            <a href="" target="_BLANK"><i class="fa fa-twitter"></i></a>
                            <a href="" target="_BLANK"><i class="fa fa-instagram"></i></a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </footer>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-latest.js"></script>
    <script>
        (function($) {
            $(document).ready(function() {
                $(window).scroll(function() {
                    if ($(this).scrollTop() > 100) {
                        $('#first').fadeIn();
                        $('#second').fadeOut();
                    } else {
                        $('#first').fadeOut();
                        $('#second').fadeIn();
                    }
                });
            });
        })(jQuery);
    </script>
</body>

</html>