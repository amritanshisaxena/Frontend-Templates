<footer class="page-footer font-small " style="color: white;font-size: 18px; background-color:rgb(0, 0, 0);">

    <!-- Footer Links -->
    <div class="container text-center text-md-left" style="font-family: 'garamond',serif;">

        <!-- Grid row -->
        <div class="row">

            <!-- Grid column -->
            <div class="col-md-3 mx-auto">

                <!-- Links -->
                <h5 class="font-weight-bold text-uppercase mt-3 mb-4">Coaching Address</h5>

                <p>
                    Vit Vellore University<br> Vellore - 632 014<br> Tamilnadu, India<br> Tel: 91-416-2243091 / 93<br>

                </p>
            </div>
            <!-- Grid column -->

            <hr class="clearfix w-100 d-md-none">

            <!-- Grid column -->
            <div class="col-md-3 mx-auto">

                <!-- Links -->
                <h5 class="font-weight-bold text-uppercase mt-3 mb-4">Courses</h5>

                <ul class="list-unstyled">
                    <li>
                        <a style="font: 18px ;color:white;" href="#!">CBSE</a>
                    </li>
                    <li>
                        <a style="font: 18px;color:  white;" href="#!">ICSE</a>
                    </li>
                    <li>
                        <a style="font: 18px ;color:white;" href="#!">NCERT</a>
                    </li>
                    <li>
                        <a style="font: 18px;color: white;" href="#!">Classes 5th-10th</a>
                    </li>
                </ul>

            </div>
            <!-- Grid column -->

            <hr class="clearfix w-100 d-md-none">

            <!-- Grid column -->
            <div class="col-md-3 mx-auto">

                <!-- Links -->
                <h5 class="font-weight-bold text-uppercase mt-3 mb-4">Quick Links</h5>

                <ul class="list-unstyled">
                    <li>
                        <a style="font: 18px ;color:white;" href="#!">Exams</a>
                    </li>
                    <li>
                        <a style="font: 18px ;color:white;" href="#!">Resources</a>
                    </li>
                    <li>
                        <a style="font: 18px ;color:white;" href="#!">Company</a>
                    </li>
                    <li>
                        <a style="font: 18px ;color:white;" href="#!">Free Textbook Solution</a>
                    </li>
                    <li>
                        <a style="font: 18px ;color:white;" href="#!">State Boards</a>
                    </li>
                </ul>

            </div>
            <!-- Grid column -->

            <hr class="clearfix w-100 d-md-none">

            <!-- Grid column -->
            <div class="col-md-3 mx-auto">

                <!-- Links -->
                <h5 class="font-weight-bold text-uppercase mt-3 mb-4">Parents</h5>

                <ul class="list-unstyled">
                    <li>
                        <a style="font: 18px ;color:white;" href="#!">How to reach</a>
                    </li>
                    <li>
                        <a style="font: 18px ;color:white;" href="#!">Safety Guidelines</a>
                    </li>
                    <li>
                        <a style="font: 18px ;color:white;" href="#!">Parents Login</a>
                    </li>
                    <li>
                        <a style="font: 18px ;color:white;" href="faqs.php">FAQs</a>
                    </li>
                </ul>

            </div>
            <!-- Grid column -->
            <center>
                <a href="contactcoaching.php"><img src="./assets/images/Contacc-us-CTA-button.png" style="width: 30%;height: 100%;float: right;"></a>
            </center>
        </div>
        <!-- Grid row -->

    </div>
    <!-- Footer Links -->

    <!-- Copyright -->
    <div class="footer-copyright text-center py-3 ">

        © Copyright:
        <a href="#"> </a><br><br>
    </div>
    <!-- Copyright -->

</footer>
<button class="open-button" onclick="openForm() " data-toggle="button" aria-pressed="false" autocomplete="off"><img src="./assets/images/kissclipart-live-chat-logo-clipart-livechat-online-chat-logo-fb8f23d7f2eedfa2.jpg" style="height: 75px;width: 75px;border-radius: 100%;"></button>
<div class="chat-popup" id="myForm" style="display: none;">
    <form action="/action_page.php" class="form-container">
        <h1>Chat Assistent</h1>

        <textarea placeholder="Type message.." name="msg" required></textarea>

        <button type="submit" style="background-color: teal;" class="btn">Send</button>
        <button type="button" class="btn cancel" onclick="closeForm()">Close</button>

    </form>
</div>


<script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script>
    function openForm() {
        document.getElementById("myForm").style.display = "block";
    }

    function closeForm() {
        document.getElementById("myForm").style.display = "none";
    }
</script>
</body>

</html>