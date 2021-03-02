<?php include './includes/header.php'?>
<div class="banner">
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="./assets/images/christmas-Desk-11-dec-2020.webp" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="./assets/images/BirthdayCakes-1-dec-2020.webp" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="./assets/images/New-Year-Desk-21-dec-2020.webp" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="./assets/images/PersonalisedBestsellers-1-dec-2020.webp" class="d-block w-100" alt="...">
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
    <div class="quick-search d-none d-md-block d-lg-block">
      <form id="quick-search-form" autocomplete="off">
        <h3 class="quick-search-title">Gift Finder</h3>
        <div class="sec occassions-input">
          <input type="hidden" id="occassionsinput">
          <span class="inputs-sec" id="occassions">Occasion<span class="placeholders">Birthday, Anniversary,
              etc.</span></span>
        </div>
        <div class="sec gift-input">
          <input type="hidden" id="gifttypeinput">
          <span class="inputs-sec" id="gift-type">Gift Type<span class="placeholders">Flowers, Cakes, Plants,
              etc.</span></span>
        </div>
        <div class="sec submit">
          <button type="button" id="quick-search-btn">Find Gifts</button>
        </div>
      </form>
    </div>
  </div>
  <div class="page-content">
    <div class="wrap">
      <div class="mt-1">
        <div class="row scroll-row">
          <div class="col-md-1 col-lg-1 menu1">
            <figure>
              <img src="./assets/images/x-mas.PNG">
              <figcaption>Christmas</figcaption>
            </figure>
          </div>
          <div class="col-md-1 col-lg-1 menu1">
            <figure>
              <img src="./assets/images/newyear.PNG">
              <figcaption>New<span>&nbsp;</span>Year</figcaption>
            </figure>
          </div>
          <div class="col-md-1 col-lg-1 menu1">
            <figure>
              <img src="./assets/images/bdaycake.PNG">
              <figcaption>Birthday</figcaption>
            </figure>
          </div>
          <div class="col-md-1 col-lg-1 menu1">
            <figure>
              <img src="./assets/images/flowers.PNG">
              <figcaption>Flowers</figcaption>
            </figure>
          </div>
          <div class="col-md-1 col-lg-1 menu1">
            <figure>
              <img src="./assets/images/jwellery.PNG">
              <figcaption>Rings</figcaption>
            </figure>
          </div>
          <div class="col-md-1 col-lg-1 menu1">
            <figure>
              <img src="./assets/images/anniversay.PNG">
              <figcaption>Anniversary</figcaption>
            </figure>
          </div>
          <div class="col-md-1 col-lg-1 menu1">
            <figure>
              <img src="./assets/images/gift.PNG">
              <figcaption>New<span>&nbsp;</span>Arrived</figcaption>
            </figure>
          </div>
          <div class="col-md-1 col-lg-1 menu1">
            <figure>
              <img src="./assets/images/plants.PNG">
              <figcaption>Plants</figcaption>
            </figure>
          </div>
          <div class="col-md-1 col-lg-1 menu1">
            <figure>
              <img src="./assets/images/global.PNG">
              <figcaption>Global</figcaption>
            </figure>
          </div>
        </div>
        <div class="heading">
          <h1 class="maintitle"><span class="highlight">Fresh Flowers</span> &amp; Perfect Gifts for all Occasions</h1>
          <p class="mainsubtitle"><span class="highlight">3 Hour Delivery</span> &amp; Free Shipping in India. 50,346
            Gift Ideas for your Beloved</p>
        </div>

        <section class="categories">
          <div class="category-title">Shop By Bestseller Categories
            <a href="#" class="view-all">View All</a>
          </div>
          <div class="row">
            <div class="col-md-3 mb-2">
              <div class="card who_view">
                <div class="card-body">
                  <img src="./assets/images/sale_christmas.webp" class="card-img-top img-fluid" alt="christmas">
                  <figcaption>
                    <span class="p_name1">Christmas</span>
                  </figcaption>
                </div>
              </div>
            </div>
            <div class="col-md-3 mb-2">
              <div class="card who_view">
                <div class="card-body">
                  <img src="./assets/images/sale_newyear.webp" class="card-img-top img-fluid" alt="christmas">
                  <figcaption>
                    <span class="p_name1">New Year</span>
                  </figcaption>
                </div>
              </div>
            </div>
            <div class="col-md-3 mb-2">
              <div class="card who_view">
                <div class="card-body">
                  <img src="./assets/images/sale_flowers.webp" class="card-img-top img-fluid" alt="christmas">
                  <figcaption>
                    <span class="p_name1">Flowers</span>
                  </figcaption>
                </div>
              </div>
            </div>
            <div class="col-md-3 mb-2">
              <div class="card who_view">
                <div class="card-body">
                  <img src="./assets/images/sale_international.webp" class="card-img-top img-fluid" alt="christmas">
                  <figcaption>
                    <span class="p_name1">Birthday</span>
                  </figcaption>
                </div>
              </div>
            </div>
            <div class="col-md-3 mb-2">
              <div class="card who_view">
                <div class="card-body">
                  <img src="./assets/images/sale_cake.webp" class="card-img-top img-fluid" alt="christmas">
                  <figcaption>
                    <span class="p_name1"><a href="pro_category.php" style="color:black;"> Cakes</a></span>
                  </figcaption>
                </div>
              </div>
            </div>
            <div class="col-md-3 mb-2">
              <div class="card who_view">
                <div class="card-body">
                  <img src="./assets/images/sale_plants.webp" class="card-img-top img-fluid" alt="christmas">
                  <figcaption>
                    <span class="p_name1"><a>Plants</a></span>
                  </figcaption>
                </div>
              </div>
            </div>
            <div class="col-md-3 mb-2">
              <div class="card who_view">
                <div class="card-body">
                  <img src="./assets/images/sale_couple.webp" class="card-img-top img-fluid" alt="christmas">
                  <figcaption>
                    <span class="p_name1">Personalized</span>
                  </figcaption>
                </div>
              </div>
            </div>
            <div class="col-md-3 mb-2">
              <div class="card who_view">
                <div class="card-body">
                  <img src="./assets/images/sale_celebrity.webp" class="card-img-top img-fluid" alt="christmas">
                  <figcaption>
                    <span class="p_name1">Celebrity</span>
                  </figcaption>
                </div>
              </div>
            </div>
          </div>
      </div>
      </section>
      <div class="offer-banners">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
          </ol>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="./assets/images/Desk-HDFC1-10-dec-2020.webp" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
              <img src="./assets/images/Airtel-Desk7-27-nov-2020.webp" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
              <img src="./assets/images/safety-banner1-12-may-2020.webp" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
              <img src="./assets/images/Mobikwik-Desk6-17-dec-2020.webp" class="d-block w-100" alt="...">
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>
      <section class="categories pb-3">
        <div class="container-fluid">
          <div class="category-title">Premium Gifts
          </div>
          <div class="row">
            <div class="col-md-2">
              <div class="card who_view">
                <div class="card-body">
                  <img src="./assets/images/premium_cakes.webp" class="card-img-top img-fluid" alt="christmas">
                  <figcaption>
                    <span class="p_name1">Flowers</span>
                  </figcaption>
                </div>
              </div>
            </div>
            <div class="col-md-2">
              <div class="card who_view">
                <div class="card-body">
                  <img src="./assets/images/premium_flowers.webp" class="card-img-top img-fluid" alt="christmas">
                  <figcaption>
                    <span class="p_name1">Cakes</span>
                  </figcaption>
                </div>
              </div>
            </div>
            <div class="col-md-2">
              <div class="card who_view">
                <div class="card-body">
                  <img src="./assets/images/plants_premuim.webp" class="card-img-top img-fluid" alt="christmas">
                  <figcaption>
                    <span class="p_name1">Plants</span>
                  </figcaption>
                </div>
              </div>
            </div>
            <div class="col-md-2">
              <div class="card who_view">
                <div class="card-body">
                  <img src="./assets/images/gifts_premium.webp" class="card-img-top img-fluid" alt="christmas">
                  <figcaption>
                    <span class="p_name1">Gifts</span>
                  </figcaption>
                </div>
              </div>
            </div>
            <div class="col-md-2">
              <div class="card who_view">
                <div class="card-body">
                  <img src="./assets/images/personalised-gifts.webp" class="card-img-top img-fluid" alt="christmas">
                  <figcaption>
                    <span class="p_name1">Anniversary</span>
                  </figcaption>
                </div>
              </div>
            </div>
            <div class="col-md-2">
              <div class="card who_view">
                <div class="card-body">
                  <img src="./assets/images/sale_international.webp" class="card-img-top img-fluid" alt="christmas">
                  <figcaption>
                    <span class="p_name1">Baloons</span>
                  </figcaption>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="categories py-3">
        <div class="container-fluid">
          <div class="category-title text-center">Online Cake Delivery
          </div>
          <div class="row">
            <div class="col-md-6 col-lg-6">
              <div class="single_category">
                <img src="assets/images/All-Cakes Desk-25-sept-2020.jpg" class="img-fluid">
                <div class="desc-cat">
                  <h4>All Cakes</h4>
                  <p>Create Sweet Moments with 5000+ Delicious Cakes</p>
                </div>
              </div>
              <div class="single_category">
                <img src="./assets/images/Blackforest Desk-25-sept-2020.jpg" class="img-fluid">
                <div class="desc-cat">
                  <h4>Blackforest Cakes</h4>
                  <p>Cake Flavour that's liked a lot</p>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-lg-6">
              <div class="single_category">
                <img src="assets/images/Chocolate Desk-25-sept-2020.jpg" class="img-fluid">
                <div class="desc-cat">
                  <h4>Chocolate Cakes</h4>
                  <p>All-Time Classic Everyone's Favourite</p>
                </div>
              </div>
              <div class="single_category">
                <img src="assets/images/Pineapple Desk-25-sept-2020.jpg" class="img-fluid">
                <div class="desc-cat">
                  <h4>Pineapple Cakes</h4>
                  <p>Simple Yet Powerful Flavour</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="categories reminder pb-3 "  style="background-image: url('./assets/images/rememberbg.jpg');background-size:contain;background-repeat: repeat;">
        <div class="row"  style="background:transparent">
          <div class="col-lg-12 col-xs-12 mt-3">
            <h2 class="font-col ml6">
              <span class="text-wrapper">
                <span class="letters" style="color:rgb(233, 37, 66);">Reminder to your loved one's birthday</span>
              </span></h2>
        </div>
        </div>
        <div class="container-box">
          <form class="form-inline mt-3">
            <label class="label-font" for="email">Email</label> 
            <input type="email" class="form-control" id="email" placeholder="Enter Mail">  
            <label class="label-font" for="Name">Username</label> 
            <input type="text" name="username" id="username" class="form-control"  placeholder="Username"> 
            <label class="label-font" for="email">Phone Number</label> 
            <input type="text" class="form-control" id="email" placeholder="Enter Phone Number"> 
            <!--<label class="label-font" for="Name">Loved One's Name</label> 
            <input type="text" name="username" id="username" class="form-control"  placeholder="Name"> --> 
            <label class="label-font" for="email">Birth-Date</label> 
            <input type="date" class="form-control" id="email" placeholder="Enter DOB">  
            
          </form>
        </div>
        
        <button type="submit" class="btn btn-remind mt-3">Remind Me</button>
      </section>
    </div>
  </div>
  <?php include './includes/footer.php'?>