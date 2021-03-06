<?php include './includes/header.php'?>
<section class="index-section mb-5" style="color: #5fbeaa !important; background-color: #313a43 !important;">
        <div class="page-content">
            <div class="mb-1 text-center">
                <h1 class="font-weight-bold">CREATE ACCOUNT</h1>
            </div>
        </div>

    </section>
    <section>
        <div class="container-fluid ">
            <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-6 bg-light p-5">
                    <div class="row">
                        <div class="col-md-3"></div>
                        <div class="form-group col-md-6">
                            <label class="form-label col-label" for="old_pass">First Name</label>
                            <input class="field__input" type="text" name="old_pass" placeholder="" id="old_pass">
                        </div>
                        <div class="col-md-3"></div>
                        <div class="col-md-3"></div>
                        <div class="form-group col-md-6">
                            <label class="form-label col-label" for="new_pass">Last Name</label>
                            <input class="field__input" type="text" name="new_pass" placeholder="" id="new_pass">
                        </div>
                        <div class="col-md-3"></div>
                        <div class="col-md-3"></div>
                        <div class="form-group col-md-6">
                            <label class="form-label col-label my-3" for="emailaddress_personal;">Email Address</label>
                            <input class="field__input" type="text" name="emailaddress_personal;" placeholder="joe.black@gmail.com" id="emailaddress_personal;">
                        </div>
                        <div class="col-md-3"></div>
                        <div class="col-md-3"></div>
                        <div class="form-group col-md-6">
                            <label class="form-label col-label" for="chk_new_pass">Password </label>
                            <input class="field__input" type="text" name="chk_new_pass" placeholder="" id="chk_new_pass">
                        </div>
                        <div class="col-md-3"></div>

                    </div>
                    <div class="form-group text-center">
                        <a href="./login.php" class="btn btn-outline-dark" type="submit">Create</a>
                    </div>
                </div>
                <div class="col-md-3"></div>
            </div>
        </div>
    </section>
    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>


<?php include './includes/footer.php'?>