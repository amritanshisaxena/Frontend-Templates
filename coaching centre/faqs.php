<?php 
include('includes/header.php')
?>
<style>
    input {
        display: none;
    }
    
    label {
        display: block;
        padding: 22px 22px;
        margin: 0 0 1px 0;
        cursor: pointer;
        background: #b3c003;
        border-radius: 3px;
        color: #FFF;
        transition: ease .5s;
        position: relative;
        /* ADDING THIS IS REQUIRED */
    }
    
    label:hover {
        background: #3e4200;
    }
    
    label::after {
        content: '+';
        font-size: 22px;
        font-weight: bold;
        position: absolute;
        right: 10px;
        top: 2px;
    }
    
    input:checked+label::after {
        content: '-';
        right: 14px;
        top: 3px;
    }
    
    .content {
        background: #E2E5F6;
        padding: 10px 25px;
        border: 1px solid #A7A7A7;
        margin: 0 0 1px 0;
        border-radius: 3px;
    }
    
    input+label+.content {
        display: none;
    }
    
    input:checked+label+.content {
        display: block;
    }
</style>


<section style="background-image: url(./assets/images/background-faq.jpg);background-size: cover;">
    <div class=" display-2 " style="font-family: spray !important;text-align: center;"><i class="fa fa-star-half " style="color: rgb(0, 0, 0);"></i>Frequently Asked Questions<i class="fa fa-star-half  " style="-webkit-transform: scaleX(-1);
 transform: scaleX(-1);
        color: rgb(0, 0, 0);
        "></i></div><br>
    <div class="container" id="accordion">
        <input type="checkbox" id="title1" /><label for="title1">What is this about?</label>
        <div class="content">
            <p>Hello mam ! Our coaching is about nurturing young minds .It is starting from class 5th upto class 10th which is essentially the most important time for evolving a child's brain and stimulus. We work so your child can prosper .</p>
        </div><input type="checkbox" id="title2" /><label for="title2">How is it helpful for our child?</label>
        <div class="content">
            <p>Your content goes here.</p>
        </div><input type="checkbox" id="title3" /><label for="title3">How do you teach?</label>
        <div class="content">
            <p>Your content goes here.</p>
        </div>
        <input type="checkbox" id="title3" /><label for="title3">How do you take tests?</label>
        <div class="content">
            <p>Your content goes here.</p>
        </div><input type="checkbox" id="title3" /><label for="title3">What is the success?</label>
        <div class="content">
            <p>Your content goes here.</p>
        </div><input type="checkbox" id="title3" /><label for="title3">What is the fees?</label>
        <div class="content">
            <p>Your content goes here.</p>
        </div><input type="checkbox" id="title3" /><label for="title3">What is syllabus?</label>
        <div class="content">
            <p>Your content goes here.</p>
        </div><input type="checkbox" id="title3" /><label for="title3">What boards are taught?</label>
        <div class="content">
            <p>Your content goes here.</p>
        </div><input type="checkbox" id="title3" /><label for="title3">Special assisstance?</label>
        <div class="content">
            <p>Your content goes here.</p>
        </div><input type="checkbox" id="title3" /><label for="title3">How do you teach?</label>
        <div class="content">
            <p>Your content goes here.</p>
        </div><input type="checkbox" id="title3" /><label for="title3">How do you teach?</label>
        <div class="content">
            <p>Your content goes here.</p>
        </div><input type="checkbox" id="title3" /><label for="title3">How do you teach?</label>
        <div class="content">
            <p>Your content goes here.</p>
        </div>
    </div>
    </div>
    <br>
</section>
<?php 
include('includes/footer.php')
?>