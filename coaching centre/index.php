<?php
include('includes/header.php')
?>
<a style="position: fixed;top: 50%; z-index: 3;right:0%" href="#" data-toggle="modal" data-target="#exampleModal">
    <img src="./assets/images/subscribe.jpg">
</a>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenter" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content" style="background-color: rgba(1, 5, 253, 0.788)">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle" style="text-align: center;">Subscribe to our newsletter</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
<span aria-hidden="true">&times;</span>
</button>
            </div>
            <div class="modal-body">
                <input type="email" style="padding: 5 px " placeholder="abc@gmail.com">
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger">Submit</button>
            </div>
        </div>
    </div>
</div>
<div style=" background: url(./assets/images/timthumb.jpg); background-size: cover; background-repeat: no-repeat; background-position: center;">
    <div class="container" style="height: 600px;">
        <div class="row">
            <div class="offset-xl-1 col-xl-10 col-md-12 col-12 " style="padding-top: 150px; ">
                <div class="py-13 pt-lg-16 pb-lg-14 text-center text-light">
                    <h2 class="display-3 font-weight-bold d-none d-md-block d-lg-block mb-2 " style="color: rgb(255, 241, 113);  text-shadow: 4px 4px 4px blue;">
                        Join our Coaching Institute of like-minded Children </h2>
                    <h4 class="font-weight-bold d-block d-md-none d-lg-none mb-2 " style="color: rgb(255, 241, 113);  text-shadow: 4px 4px 4px blue;">
                        Join our Coaching Institute of like-minded Children </h4>
                    <br>
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-danger btn-lg" data-toggle="modal" data-target="#exampleModalCenter">
    Book A free class
  </button>

                    <!-- Modal -->
                    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered " role="document">
                            <div class="modal-content" style="background-color: rgba(255, 89, 89, 0.795);">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLongTitle" style="font-family: 'lucida handwriting'; text-align: center;">Book your free class<br>
                                        <p>Get ready to a whole new experience</p>Enter details</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
                                </div>
                                <div class="modal-body">
                                    <input type="text" class="form-control" id="basic-url" placeholder="Enter your Name" aria-describedby="basic-addon3"><br>
                                    <div class="input-group mb-3">
                                        <input type="text" class="form-control" placeholder="Enter your number" aria-label="Recipient's no." aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-outline-secondary btn-dark" type="button">Send OTP</button>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <input style="width: 100%;" type="email" class="form-control" id="basic-url" placeholder="Email address" aria-describedby="basic-addon3">

                                        </div>
                                        <div class="col-md-6">


                                            <select style="width: 100%;" name="state" id="state" class="form-control">
                    <option value="Andhra Pradesh">Andhra Pradesh</option>
                    <option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
                    <option value="Arunachal Pradesh">Arunachal Pradesh</option>
                    <option value="Assam">Assam</option>
                    <option value="Bihar">Bihar</option>
                    <option value="Chandigarh">Chandigarh</option>
                    <option value="Chhattisgarh">Chhattisgarh</option>
                    <option value="Dadar and Nagar Haveli">Dadar and Nagar Haveli</option>
                    <option value="Daman and Diu">Daman and Diu</option>
                    <option value="Delhi">Delhi</option>
                    <option value="Lakshadweep">Lakshadweep</option>
                    <option value="Puducherry">Puducherry</option>
                    <option value="Goa">Goa</option>
                    <option value="Gujarat">Gujarat</option>
                    <option value="Haryana">Haryana</option>
                    <option value="Himachal Pradesh">Himachal Pradesh</option>
                    <option value="Jammu and Kashmir">Jammu and Kashmir</option>
                    <option value="Jharkhand">Jharkhand</option>
                    <option value="Karnataka">Karnataka</option>
                    <option value="Kerala">Kerala</option>
                    <option value="Madhya Pradesh">Madhya Pradesh</option>
                    <option value="Maharashtra">Maharashtra</option>
                    <option value="Manipur">Manipur</option>
                    <option value="Meghalaya">Meghalaya</option>
                    <option value="Mizoram">Mizoram</option>
                    <option value="Nagaland">Nagaland</option>
                    <option value="Odisha">Odisha</option>
                    <option value="Punjab">Punjab</option>
                    <option value="Rajasthan">Rajasthan</option>
                    <option value="Sikkim">Sikkim</option>
                    <option value="Tamil Nadu">Tamil Nadu</option>
                    <option value="Telangana">Telangana</option>
                    <option value="Tripura">Tripura</option>
                    <option value="Uttar Pradesh">Uttar Pradesh</option>
                    <option value="Uttarakhand">Uttarakhand</option>
                    <option value="West Bengal">West Bengal</option>
                    </select>
                                        </div>
                                    </div>

                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-dark" style="width: 100%;">Schedule you free class</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<br>

<div class="container-fluid d-none d-md-block d-lg-block">
    <center>
        <h4 style="width: 50%; 
    text-align: center; 
    border-bottom: 2px solid rgb(95, 15, 15); 
    line-height: 0.1em;
    margin: 30px 0 20px;color: rgb(95, 15, 15);"> <span style="background:#fff; 
      padding:0 10px;">Learn New Skills</span></h4>
    </center>
</div><br>
<div class="container-fluid d-block d-md-none d-lg-none">
    <center>
        <h5 style="width: 50%; 
    text-align: center; 
    border-bottom: 1px solid rgb(95, 15, 15); 
    line-height: 0.1em;
    margin: 15px 0 10px;color: rgb(95, 15, 15);"> <span style="background:#fff; 
      padding:0 ;">Learn New Skills</span></h5>
    </center>
</div>
<section class="border" style="border-width: 2px ;border-color: black;padding: 10px;background-color: rgb(255, 92, 92);">
    <div class="container-fluid">
        <center>
            <div class="input-group mb-3" style="height: 50px;width: 65%;">
                <input type="text" class="form-control" placeholder="Courses for classes 5th to 10th" aria-label="courses" aria-describedby="basic-addon2">
                <div class="input-group-append">
                    <button class="btn  btn-info" type="button">Search Courses</button>
                </div>
            </div>
        </center><br>

        <div class="row" style=" color: rgb(0, 0, 0);text-align: center;font-family: 'Garamond',serif;font-size: 18px;font-weight:900;">
            <div class="col-md" style="text-align: center;">
                <p>
                    <h3>
                        5M+ </h3><br>
                    <h4>Students involved</h4>
                </p>
            </div>
            <div class="card_item-divider d-none d-md-block d-lg-block"></div>
            <div class="card_item d-block d-md-none d-lg-none"></div>

            <div class="col-md" style="text-align: center;">
                <p>
                    <h3>100+</h3>
                    <h4> <br> Online Available Courses</h4>
                </p>
            </div>
            <div class="card_item-divider d-none d-md-block d-lg-block"></div>
            <div class="card_item d-block d-md-none d-lg-none"></div>

            <div class="col-md" style="text-align: center;">
                <p>
                    <h3>1 Hr+</h3>
                    <h4> <br>Average time spent daily</h4>
                </p>
            </div>
            <div class="card_item-divider d-none d-md-block d-lg-block"></div>
            <div class="card_item d-block d-md-none d-lg-none"></div>

            <div class="col-md" style="text-align: center;">
                <p>
                    <h3>
                        50+</h3> <br>
                    <h4> Teachers Registered
                    </h4>
                </p>
            </div>
        </div>


    </div>
</section>
<div class="container-fluid d-none d-md-block d-lg-block">
    <center>
        <h4 style="width: 50%; 
    text-align: center; 
    border-bottom: 2px solid rgb(95, 15, 15); 
    line-height: 0.1em;
    margin: 30px 0 20px;color: rgb(95, 15, 15);"> <span style="background:#fff; 
      padding:0 10px;">Why Choose Us</span></h4>
    </center>
</div><br>
<div class="container-fluid d-block d-md-none d-lg-none">
    <center>
        <h5 style="width: 50%; 
    text-align: center; 
    border-bottom: 1px solid rgb(95, 15, 15); 
    line-height: 0.1em;
    margin: 15px 0 10px;color: rgb(95, 15, 15);"> <span style="background:#fff; 
      padding:0 ;">Why Choose Us</span></h5>
    </center>
</div>
<section class="">
    <div class="container">
        <div class="row">
            <div class="col-6">
            </div>
            <div class="col-6 text-right">
                <a class="btn btn-primary mb-3 mr-1" href="#carouselExampleIndicators2" role="button" data-slide="prev">
                    <i class="fa fa-arrow-left"></i>
                </a>
                <a class="btn btn-primary mb-3 " href="#carouselExampleIndicators2" role="button" data-slide="next">
                    <i class="fa fa-arrow-right"></i>
                </a>
            </div>
            <div class="col-12">
                <div id="carouselExampleIndicators2" class="carousel slide" data-ride="carousel">

                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="row">

                                <div class="col-md-4 mb-3">
                                    <div class="card" style="height: 400px;">
                                        <img class="img-fluid" style="width: 100%;height: 200px;" alt="100%x280" src="./assets/images/11-077c6f3400c687917157fe20503abe4b.png">
                                        <div class="card-body">
                                            <h4 class="card-title">Live & Interactive; Not Video </h4>
                                            <p class="card-text">Teacher is always present to ensure better learning for Class 5</p>

                                        </div>

                                    </div>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <div class="card" style="height: 400px;">
                                        <img class="img-fluid" style="width: 100%;height: 200px;" alt="100%x280" src="./assets/images/44-f9c9d8e0573a1912e8eef8f64031af23.png">
                                        <div class="card-body">
                                            <h4 class="card-title">Clear Doubts Instantly</h4>
                                            <p class="card-text">Expert guidance helps Class 5 students learn fater</p>

                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <div class="card" style="height: 400px;">
                                        <img class="img-fluid" style="width: 100%;height: 200px;" alt="100%x280" src="./assets/images/33-987eb175dabae5eae301291501910323.png">
                                        <div class="card-body">
                                            <h4 class="card-title">We are the Math Experts </h4>
                                            <p class="card-text">Expert faculty from IIT & Cambridge University</p>

                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="row">

                                <div class="col-md-4 mb-3">
                                    <div class="card" style="height: 400px;">
                                        <img class="img-fluid" style="width: 100%;height: 200px;" alt="100%x280" src="./assets/images/expression-2-745f81cd97b49c06156bf1782aefd3e9.png">
                                        <div class="card-body">
                                            <h4 class="card-title">Our method</h4>
                                            <p class="card-text">Learn the WHY not not the WHAT of math concepts</p>

                                        </div>

                                    </div>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <div class="card" style="height: 400px;">
                                        <img class="img-fluid" style="width: 100%;height: 200px;" alt="100%x280" src="./assets/images/group-icon-2-704a3119a87a67b2a211b31c610c9576.png">
                                        <div class="card-body">
                                            <h4 class="card-title">Smallest Batch Size</h4>
                                            <p class="card-text">For 5x more attention than in school</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <div class="card" style="height: 400px;">
                                        <img class="img-fluid" style="width: 100%;height: 200px;" alt="100%x280" src="./assets/images/66-9dc8d4c796de47f539003c18679f8fa3.png">
                                        <div class="card-body">
                                            <h4 class="card-title">Personalised for Everyone
                                            </h4>
                                            <p class="card-text">No two Class 5 students have the same coursework</p>

                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="row">

                                <div class="col-md-4 mb-3">
                                    <div class="card" style="height: 400px;">
                                        <img class="img-fluid" style="width: 100%;height: 200px;" alt="100%x280" src="./assets/images/concept-clarity.png">
                                        <div class="card-body">
                                            <h4 class="card-title">Conceptual clarity through visualisation</h4>
                                            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>

                                        </div>

                                    </div>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <div class="card" style="height: 400px;">
                                        <img class="img-fluid" style="width: 100%;height: 200px;" alt="100%x280" src="./assets/images/personalised-learning.png">
                                        <div class="card-body">
                                            <h4 class="card-title">Personalised learning programs
                                            </h4>
                                            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>

                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <div class="card" style="height: 400px;">
                                        <img class="img-fluid" style="width: 100%;height: 200px;" alt="100%x280" src="./assets/images/unmatched-attention.png">
                                        <div class="card-body">
                                            <h4 class="card-title">Unmatched attention</h4>
                                            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
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
</section>
<div class="container-fluid d-none d-md-block d-lg-block">
    <center>
        <h4 style="width: 50%; 
    text-align: center; 
    border-bottom: 2px solid rgb(95, 15, 15); 
    line-height: 0.1em;
    margin: 30px 0 20px;color: rgb(95, 15, 15);"> <span style="background:#fff; 
      padding:0 10px;">Our Students Have something to say</span></h4>
    </center>
</div><br>
<div class="container-fluid d-block d-md-none d-lg-none">
    <center>
        <h5 style="width: 50%; 
    text-align: center; 
    border-bottom: 1px solid rgb(95, 15, 15); 
    line-height: 0.1em;
    margin: 15px 0 10px;color: rgb(95, 15, 15);"> <span style="background:#fff; 
      padding:0 ;">Students</span></h5>
    </center>
</div>
<section>
    <div class="col-lg-10 offset-lg-1 pt-5 pb-5 " style="width: 100%;background-color: teal;color: yellow;">
        <div id="client-testimonial-carousel" class="carousel slide" data-ride="carousel" style="height:200px;width: 100%;">
            <div class="carousel-inner" role="listbox" style="width: 100%;">
                <div class="carousel-item active text-center p-4">
                    <blockquote class="blockquote text-center">
                        <p class="mb-0"><i class="fa fa-quote-left"></i> Everybody is a genius. But if you judge a fish by its ability to climb a tree, it will live its whole life believing that it is stupid.
                        </p>
                        <footer class="blockquote-footer" style="color: black;">Albert Einstein <cite title="Source Title">genius</cite></footer>
                        <p class="client-review-stars">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star-half-alt"></i>
                            <i class="fa fa-star"></i>
                        </p>
                    </blockquote>
                </div>
                <div class="carousel-item text-center p-4">
                    <blockquote class="blockquote text-center">
                        <p class="mb-0"><i class="fa fa-quote-left"></i> Imagination is more important than knowledge. Knowledge is limited. Imagination encircles the world.
                        </p>
                        <footer class="blockquote-footer" style="color: black;">Albert Einstein <cite title="Source Title">genius</cite></footer>
                        <p class="client-review-stars">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                        </p>
                    </blockquote>
                </div>
                <div class="carousel-item text-center p-4">
                    <blockquote class="blockquote text-center">
                        <p class="mb-0"><i class="fa fa-quote-left"></i> A person who never made a mistake never tried anything new.
                        </p>
                        <footer class="blockquote-footer" style="color: black;">Albert Einstein <cite title="Source Title">genius</cite></footer>
                        <p class="client-review-stars">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                        </p>
                    </blockquote>
                </div>
            </div>
            <ol class="carousel-indicators">
                <li data-target="#client-testimonial-carousel" data-slide-to="0" class="active"></li>
                <li data-target="#client-testimonial-carousel" data-slide-to="1"></li>
                <li data-target="#client-testimonial-carousel" data-slide-to="2"></li>
            </ol>
        </div>
    </div>

</section><br>
<?php
include('includes/footer.php')
?>