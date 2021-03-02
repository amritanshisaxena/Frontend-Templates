<?php
include('includes/header.php');
?>
<style>
     body {
	 font-family: 'Source Sans Pro', Helvetica Neue, Helvetica, Arial, sans-serif;
	 font-size: 16px;
	 line-height: 1.75;
}
 #timeline {
	 display: flex;
	 background-color: #031625;
}
 #timeline:hover .tl-item {
	 width: 23.3333%;
}
 .tl-item {
	 transform: translate3d(0, 0, 0);
	 position: relative;
	 width: 25%;
	 height: 100vh;
	 min-height: 600px;
	 color: #fff;
	 overflow: hidden;
	 transition: width 0.5s ease;
}
 .tl-item:before, .tl-item:after {
	 transform: translate3d(0, 0, 0);
	 content: '';
	 position: absolute;
	 left: 0;
	 top: 0;
	 width: 100%;
	 height: 100%;
}
 .tl-item:after {
	 background: rgba(3, 22, 37, 0.85);
	 opacity: 1;
	 transition: opacity 0.5s ease;
}
 .tl-item:before {
	 background: linear-gradient(to bottom, rgba(0, 0, 0, 0) 0%, rgba(0, 0, 0, 1) 75%);
	 z-index: 1;
	 opacity: 0;
	 transform: translate3d(0, 0, 0) translateY(50%);
	 transition: opacity 0.5s ease, transform 0.5s ease;
}
 .tl-item:hover {
	 width: 30% !important;
}
 .tl-item:hover:after {
	 opacity: 0;
}
 .tl-item:hover:before {
	 opacity: 1;
	 transform: translate3d(0, 0, 0) translateY(0);
	 transition: opacity 1s ease, transform 1s ease 0.25s;
}
 .tl-item:hover .tl-content {
	 opacity: 1;
	 transform: translateY(0);
	 transition: all 0.75s ease 0.5s;
}
 .tl-item:hover .tl-bg {
	 filter: grayscale(0);
}
 .tl-content {
	 transform: translate3d(0, 0, 0) translateY(25px);
	 position: reltive;
	 z-index: 1;
	 text-align:center;	 margin: 0 1.618em;
	 top: 55%;
	opacity: 0;
}
 .tl-content h1 {
	 font-family: 'Pathway Gothic One', Helvetica Neue, Helvetica, Arial, sans-serif;
	 text-transform: uppercase;
	 color: #1779cf;
	 font-size: 1.44rem;
	 font-weight: normal;
}
 .tl-year {
	 position: absolute;
	 top: 50%;
	 left: 50%;
	 transform: translateX(-50%) translateY(-50%);
	 z-index: 1;
	 border-top: 1px solid #fff;
	 border-bottom: 1px solid #fff;
}
 .tl-year p {
	 font-family: 'Pathway Gothic One', Helvetica Neue, Helvetica, Arial, sans-serif;
	 font-size: 1.728rem;
     line-height: 0;
     margin-top: 1rem;
}
 .tl-bg {
	 transform: translate3d(0, 0, 0);
	 position: absolute;
	 width: 100%;
	 height: 100%;
	 top: 0;
	 left: 0;
	 background-size: cover;
	 background-position: center center;
	 transition: filter 0.5s ease;
	 filter: grayscale(100%);
}
</style>
<section>
    <div class="row" style="margin-left: 0;margin-right: 0;">
      <div class="col-md-6 col-xs-12"> 
    <img src="./assets/images/abtus.jpg" style="width: 100%;margin-top:5%;left:33px ;width: 100%;">
    </div>
    <div class="col-md-6 col-xs-12">
      <div class="card_item-wrapper" style="padding-top: 5% !important;padding-bottom: 4% ;">
        <h3  style="color: #192041;font-family: PT serif; font-weight: 600;">About Us</h3>
        <div class="card_item-divider"></div>
        <div class="card_item-content" style=" color: #0a0a0a;font-family: PT serif;font-size: 18px; font-weight: 500;margin-top: -1%;">
            Convent of Jesus and Mary, Waverley, was established on 18th September 1845, by the religious of Jesus and Mary. The school is a recognised Christian Minority Institution, affiliated to the CBSE.
            Situated at an elevation of 6,600 feet above sea level, this exclusive, all girls residential and day school, holds pride of place in the small hill station of Mussoorie, in the North Indian state of Uttarakhand.
            Nestled among pines and deodars, away from the hustle and bustle of city life, CJM Waverley, provides the perfect ambience for a child's all round development.
            Managed by the devoted and selfless Sisters of the Religious of Jesus and Mary, the school is home to 350 boarders and 250 day scholars from classes I to XII.
        </div>
    </div>
  </div>
    </div>
  </div>
  </section>
<section  style="background-color: #e1765e96;">
    <div class="container-fluid" style="background-image: url(./assets/images/books-2596809__340.webp);background-attachment: fixed;background-size:cover;background-repeat: no-repeat;height: 180px;">
        <h1 style="font-family:PT Serif ;padding-top: 5%;font-weight: 900;color: #ffffff;text-transform:uppercase;text-align:center;">Curriculum</h1>
    </div>
    <div class="container" >
        <img src="assets/images/cr.jpg" style="width:100%; margin-bottom: 20px; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.719), 0 8px 30px 0 rgba(0, 0, 0, 0.719);height: 90%; ">
    </div>
</section>
<section id="timeline">
    <div class="tl-item">
        
        <div class="tl-bg" style="background-image: url(./assets/images/bgtm1.jpg)"></div>
        
        <div class="tl-year">
        <p class="f2 heading--sanSerif">Infrastructure</p>
        </div>
    
        <div class="tl-content">
        <h1 class="f3 text--accent ttu">Lorem ipsum dolor sit</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit.</p>
        </div>
    
    </div>
    <div class="tl-item">
        
        <div class="tl-bg" style="background-image: url(./assets/images/campussc.jpg)"></div>
        
        <div class="tl-year">
        <p class="f2 heading--sanSerif">Library</p>
        </div>
    
        <div class="tl-content">
        <h1 class="f3 text--accent ttu">Vestibulum laoreet lorem</h1>
        <p>Suspendisse potenti. Sed sollicitudin eros lorem, eget accumsan risus dictum id. Maecenas dignissim ipsum vel mi rutrum egestas. Donec mauris nibh, facilisis ut hendrerit vel, fringilla sed felis. Morbi sed nisl et arcu.</p>
        </div>
    
    </div>
    <div class="tl-item">
        
        <div class="tl-bg" style="background-image: url(./assets/images/bgtm1.jpg)"></div>
        
        <div class="tl-year">
        <p class="f2 heading--sanSerif">Clubs</p>
        </div>
    
        <div class="tl-content">
        <h1 class="f3 text--accent ttu">Phasellus mauris elit</h1>
        <p>Mauris cursus magna at libero lobortis tempor. Suspendisse potenti. Aliquam interdum vulputate neque sit amet varius. Maecenas ac pulvinar nisi. Fusce vitae nunc ultrices, tristique dolor at, porttitor dolor. Etiam id cursus arcu, in dapibus nibh. Pellentesque non porta leo. Nulla eros odio, egestas quis efficitur vel, pretium sed.</p>
        </div>
    
    </div>
    <div class="tl-item">
        
        <div class="tl-bg" style="background-image: url(./assets/images/bgtm2.jpg)"></div>
        
        <div class="tl-year">
        <p class="f2 heading--sanSerif">Sports</p>
        </div>
    
        <div class="tl-content">
        <h1 class="f3 text--accent ttu">Mauris vitae nunc elem</h1>
        <p>Suspendisse ac mi at dolor sodales faucibus. Nunc sagittis ornare purus non euismod. Donec vestibulum efficitur tortor, eget efficitur enim facilisis consequat. Vivamus laoreet laoreet elit. Ut ut varius metus, bibendum imperdiet ex. Curabitur diam quam, blandit at risus nec, pulvinar porttitor lorem. Pellentesque dolor elit.</p>
        </div>
    
    </div>     
</section>
<button class="open-button" onclick="openForm()"><span class="fa fa-comment"></span> </button>
        
        <div class="chat-popup" id="myForm">
            <form action="/" class="form-container" style="background-color:black;">
            <h3 style="font-family: PT serif;font-weight: 800; color: cornsilk;"><span class="fa fa-user" style="display: inline-block;color:#fdc800;font-size: 36px;"></span>Principal Office</h3>
        
            <abel for="msg" style="text-align:center;color: darkgray;"><i>We make it simle and seamless for
                queries and people to talk to each
                other. Ask us anything.</i></label>
            <textarea placeholder="Type your message here" name="msg" required></textarea>
            <div class="modal-footer">
            <button type="button" class="btn cancel" onclick="closeForm()"><span class="fa fa-times-circle" style="color:whitesmoke;font-size: 34px;"></span></button>
            <button type="submit" class="btn"><span class="fa fa-paper-plane"  style="color:white;font-size: 34px;"></span></button>
            
            </div>
            </form>
        </div>
        <script>
        var scrollToTopBtn = document.getElementById("scrollToTopBtn");
        var rootElement = document.documentElement;
        
        function scrollToTop() {
            // Scroll to top logic
            rootElement.scrollTo({
            top: 0,
            behavior: "smooth"
            })
        }
        scrollToTopBtn.addEventListener("click", scrollToTop);
        </script>
        <script>
            function openForm() {
            document.getElementById("myForm").style.display = "block";
            }
            
            function closeForm() {
            document.getElementById("myForm").style.display = "none";
            }
            </script>
<?php
include('includes/footer.php');
?>