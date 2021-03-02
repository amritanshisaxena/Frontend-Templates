
<?php
include('includes/header.php');
?>
<div class="container-fuild py-md-3 px-3">
    <div class="row">
        <div class="col-md-5 py-2 col-xs-12" style="padding-left: 9rem !important;">
            <div class="list-group">
                <a href="#" class="list-group-item list-group-item-action active" style="text-align: justify;font-size: 25px;font-family: sans-serif;">
                  CONNECT WITH US...
                </a>
                <a href="#" class="list-group-item list-group-item-action">
                    <p style="color: #192041;font-family:PT serif;font-size: 22px;font-weight: 600; ">
                        <span class="fa fa-map-marker" ></span> Address :</p>
                        <p style="color:black;font-family:PT serif;font-size: 18px;font-weight: 500;padding-left: 3%;">Jai Academy , Shivpuri Road, jhansi</p>
                    </a>
                <a href="#" class="list-group-item list-group-item-action">
                    <p style="color: #192041;font-family:PT serif;font-size: 22px;font-weight: 600; ">
                        <span class="fa fa-phone" ></span>Phone :</p>
                        <p style="color:black;font-family:PT serif;font-size: 18px;font-weight: 500;padding-left: 3%;"> +91 8636961754/701/703</p>
                    </a>
                <a href="#" class="list-group-item list-group-item-action">
                    <p style="color: #192041;font-family:PT serif;font-size: 22px;font-weight: 600; ">
                        <span class="fa fa-envelope" ></span> Email :</p>
                        <p style="color:black;font-family:PT serif;font-size: 18px;font-weight: 500;padding-left: 3%;">info@jaiacademy.in</p>
                    </a>
                <a href="#" class="list-group-item list-group-item-action">
                    <p style="color: #192041;font-family:PT serif;font-size: 22px;font-weight: 600; ">Find Us On</p>
                    <div class="main-social mt-2">
                        <span class="fa fa-facebook"></span>
                        <span class="fa fa-twitter"></span>
                        <span class="fa fa-instagram"></span>
                        <span class="fa fa-google plus"></span>
                        <span class="fa fa-linkedin"></span>
                    </div>
                 </a>
              </div>
        </div>
        <div class="col-md-7 py-3 mt-3 mb-3 col-xs-12" style="background-image: url(./assets/images/campussc.jpg);background-attachment: fixed;background-size:cover;background-position:right;background-repeat: no-repeat;">
            <form class="mt-2 py-3 px-5" style="font-family: cursive;font-weight: 600;font-size: 20px;">
                <div class="form-row" >
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
                  <label for="inputAddress">Address</label>
                  <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
                </div>
                <div class="form-row">
                  <div class="form-group col-md-6">
                    <label for="inputCity">City</label>
                    <input type="text" class="form-control" id="inputCity">
                  </div>
                  <div class="form-group col-md-4">
                    <label for="inputState">State</label>
                    <select id="inputState" class="form-control">
                      <option selected>Choose...</option>
                      <option>...</option>
                    </select>
                  </div>
                  <div class="form-group col-md-2">
                    <label for="inputZip">Zip</label>
                    <input type="text" class="form-control" id="inputZip">
                  </div>
                </div>
                <div class="form-group" style="font-size: 16px;">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="gridCheck">
                    <label class="form-check-label" for="gridCheck">
                      Check me out
                    </label>
                  </div>
                </div>
                <button type="submit" class="btn btn-warning" style="float: right;">Sign in</button>
              </form>

        </div>
    </div>
</div>
</section>
<div class="map d-none d-md-block d-lg-block">
    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14409.650095719127!2d78.5222939!3d25.4578972!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xc984ac37288822a1!2sJAI%20ACADEMY!5e0!3m2!1sen!2sin!4v1607671430093!5m2!1sen!2sin" width="1600" height="400" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
</div>
<div class="map d-block d-md-none d-lg-none">
    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14409.650095719127!2d78.5222939!3d25.4578972!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xc984ac37288822a1!2sJAI%20ACADEMY!5e0!3m2!1sen!2sin!4v1607673343236!5m2!1sen!2sin" width="360" height="400" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
</div>

<?php
include('includes/footer.php');
?>