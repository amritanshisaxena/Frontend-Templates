<?php
include('includes/header.php');
?>
<section style="background-image: url(./assets/images/faqbg.jpg);background-attachment: fixed;background-size:contain;background-position:right;background-repeat: no-repeat;">
<div class="container wrap px-2">
    <div class="accordion">
        <div class="container-fluid col-xs-12 col-sm-12" style="padding-bottom: 0 !important;">
            <h1 id="sub-heading"><strong><cite title="Source Title">FAQ's</cite></strong></h1>
            <hr style="border-top: 2px solid #83202D;">
            </div>
        <div class="accordion_single" style="padding:15px;margin:7px 0;background-color: #fbfbfbea;">
            <input class="accordion__single__hidden" type="checkbox" id="question-one">
            <label class="accordion_ques" for="question-one" style="font-weight: 700;font-family: PT serif;position: relative;text-transform: uppercase;cursor: pointer;">
                What kind of parent involvement do you have at the school? 
            </label>
            <p class="accordion_ans">
                Under normal circumstances, our doors are always open to parents, and throughout the year parents will have the opportunity to join us for special events such as birthday/holiday celebrations and community/charity events. 
                However, given current circumstances, all school visits should be discussed with your school Director.		
            </p>
        </div>
        <div class="accordion_single" style="padding:15px;margin:5px 0;background-color: #fbfbfbea;border-radius: 10px;">
            <input class="accordion__single__hidden" type="checkbox" id="question-two">
            <label class="accordion_ques" for="question-two" style="font-weight: 700;font-family: PT serif;position: relative;text-transform: uppercase;cursor: pointer;">
                How will I know what happens during my child’s time at school?
            </label>
            <p class="accordion_ans">
                All our schools use KidReports, which is an online communication tool. Teachers update the app throughout the day to keep you informed of everything your child is doing and learning, 
                from meals to potty break to exceptional education, this app will give you real-time peace of mind.
            </p>
        </div>
        <div class="accordion_single" style="padding:15px;margin:5px 0;background-color: #fbfbfbea;border-radius: 10px;">
            <input class="accordion__single__hidden" type="checkbox" id="question-three">
            <label class="accordion_ques" for="question-three" style="font-weight: 700;font-family: PT serif;position: relative;text-transform: uppercase;cursor: pointer;">
                Do you have cameras in the classrooms so that I can see my child throughout the day?
            </label>
            <p class="accordion_ans">
                Not all schools have cameras in their classrooms, but for those that do they are monitored throughout the day and recordings are kept by our IT department. 
                Contact your local school to inquire about their camera set up.
            </p>
        </div>
        <div class="accordion_single" style="padding:15px;margin:5px 0;background-color: #fbfbfbea;border-radius: 10px;">
            <input class="accordion__single__hidden" type="checkbox" id="question-four">
            <label class="accordion_ques" for="question-four" style="font-weight: 700;font-family: PT serif;position: relative;text-transform: uppercase;cursor: pointer;">
                What if my child gets sick while at school?
            </label>
            <p class="accordion_ans">
                For their own health, and to reduce the spread of communicable illness, children will be sent home if they have any of the following symptoms:
                <br>
                > A temperature of 100.0 F<br>
                > Have vomited and have other symptoms or<br>
                > Have vomited more than once in a day<br>
                > Exhibiting symptoms of pinkeye<br>
                > Unusual spots or rashes<br>
                > Sore throat or trouble swallowing<br>
                > Infected skin patch(es)
            </p>
        </div>
        <div class="accordion_single" style="padding:15px;margin:5px 0;background-color: #fbfbfbea;border-radius: 10px;">
            <input class="accordion__single__hidden" type="checkbox" id="question-five">
            <label class="accordion_ques" for="question-five" style="font-weight: 700;font-family: PT serif;position: relative;text-transform: uppercase;cursor: pointer;">
                What are you doing to protect the health and safety of the children in your care during the global pandemic?
            </label>
            <p class="accordion_ans">
                We currently are not allowing parents or visitors inside of the building. Children are escorted to the front door where they have their temperature and wellness check done and 
                then taken to their classroom by a staff member. All children’s temperatures are then taken again in the middle of the day. 
                Staff members are mandated to wear masks upon entering the building and must leave them on throughout the day. 	
            </p>
        </div>
        <div class="accordion_single" style="padding:15px;margin:5px 0;background-color: #fbfbfbea;border-radius: 10px;">
            <input class="accordion__single__hidden" type="checkbox" id="question-six">
            <label class="accordion_ques" for="question-six" style="font-weight: 700;font-family: PT serif;position: relative;text-transform: uppercase;cursor: pointer;">
                What kind of curriculum do you use in your classrooms?
            </label>
            <p class="accordion_ans">
                Most of our schools use our Ascend Curriculum. Some locations also use Pinnacle, Abeka, High Reach, and/or The Creative Curriculum. 
                Contact your local school to inquire about their specific curriculum.
            </p>
        </div>
    </div>
</div>
</section>
<section>
    <div class="row"  >
      <div class="col-md-7 py-2" style="background-color:#e1755e;"><h3  style="color:#ffffff;font-family: PT serif;text-align:center;padding-top: 3%;">NEWSLETTER</h3>
        <div class="card_item-divider"></div>
        <h4 style="color:#ffffff;font-family: PT serif;text-align:center;margin-top: -3%;">Subcribe to get updated</h4>
      </div>
        <div class="col-md-5" style="background-color:ivory ;padding-top: 3%;">
        <center>
        <form action="#" class="subscribe" method="post">
          <input type="email" name="email" placeholder="Email" style="padding: 12px 20px;width: 75%;border-radius: 0.25rem;">
          <button style="border-radius: 30%;padding: 12px 20px;background-color: #fdc800;"><span class="fa fa-envelope-o" style="color: black;"></span></button>
        </form></a>
      </center>
    </div>
    </div>
  </section>
  <button class="open-button" onclick="openForm()"><span class="fa fa-comment"></span> </button>
  <div class="chat-popup" id="myForm">
        <form action="/" class="form-container" style="background-color:black;">
        <h3 style="font-family: PT serif;font-weight: 800; color: cornsilk;"><span class="fa fa-user" style="display: inline-block;color:#fdc800;font-size: 36px;"></span>Principal Office</h3>
    
        <label for="msg" style="text-align: center;color: darkgray;"><i>We make it simple and seamless for
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