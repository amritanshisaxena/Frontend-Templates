<?php 
include('includes/header.php')
?>

<style>
    * {
        margin: 0;
        padding: 0;
    }
    
    .main {
        height: 100vh;
        margin-top: 75px;
        width: 100%;
        position: relative;
    }
    
    .d1 {
        position: absolute;
        background-image: url(./assets/images/kids.jpg);
        background-size: 2700px 1500px;
        height: 30vh;
        width: 15vw;
        background-position: -120px 35%;
        box-shadow: 0px 0px 25px rgba(0, 0, 0, 0.8);
        top: 35%;
        left: 10%;
        transform: translateY(-50%);
        z-index: 2;
        animation: dd1 10s 1, dd12 10s 1;
        animation-delay: 4s, 14s;
    }
    
    .d2 {
        position: absolute;
        background-image: url(./assets/images/kids.jpg);
        background-size: 2700px 1500px;
        height: 50vh;
        width: 25vw;
        background-position: -10vw 50%;
        left: 10vw;
        top: 30%;
        left: 25%;
        transform: translateY(-50%);
        z-index: 1;
        animation: dd2 10s 2;
        animation-delay: 4s;
    }
    
    .d3 {
        position: absolute;
        background-image: url(./assets/images/kids.jpg);
        background-size: 2700px 1500px;
        overflow: hidden;
        height: 75vh;
        width: 40vw;
        left: 25vw;
        box-shadow: 0px 0px 25px rgba(0, 0, 0, 0.8);
        background-position: -35vw 50%;
        top: 25%;
        left: 46%;
        transform: translateY(-50%);
        z-index: 3;
        animation: dd3 10s 2;
        animation-delay: 4s;
    }
    
    .d4 {
        position: absolute;
        overflow: hidden;
        background-image: url(./assets/images/kids.jpg);
        background-size: 2700px 1500px;
        height: 80vh;
        width: 25vw;
        left: 60vw;
        background-position: -70vw 50%;
        top: 6%;
        left: 75%;
        transform: translateY(-50%);
        z-index: 1;
        animation: dd4 10s 2;
        animation-delay: 4s;
    }
    
    @keyframes dd1 {
        0% {}
        50% {
            width: 95vw;
        }
    }
    
    @keyframes dd12 {
        0% {}
        50% {
            background-position: Calc(0vw - 40px) 50%;
        }
    }
    
    @keyframes dd2 {
        0% {}
        50% {
            background-position: Calc(-10vw - 40px) 50%;
        }
    }
    
    @keyframes dd3 {
        0% {}
        50% {
            background-position: Calc(-35vw - 40px) 50%;
        }
    }
    
    @keyframes dd4 {
        0% {}
        50% {
            background-position: Calc(-70vw - 40px) 50%;
        }
    }
    
    img.sticky {
        position: -webkit-sticky;
        position: sticky;
        top: 0;
        width: 200px;
    }
    
    section {
        font-family: 'Vidaloka', serif;
    }
    
    .bull {
        width: 100%;
        padding: 30px 0;
        position: relative;
        overflow: hidden;
        background: #6F8D8A;
    }
    
    .bull:before {
        content: "";
        position: absolute;
        width: 100%;
        height: 400px;
        background-color: lightskyblue;
        background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='4' height='4' viewBox='0 0 4 4'%3E%3Cpath fill='%23fab516' fill-opacity='1' d='M1 3h1v1H1V3zm2-2h1v1H3V1z'%3E%3C/path%3E%3C/svg%3E");
        z-index: 0;
        -webkit-transform: scale(2);
        -ms-transform: scale(2);
        transform: scale(2);
    }
    
    .card {
        position: absolute;
        top: 50%;
        left: 50%;
        width: 300px;
        height: 400px;
        margin: -150px;
        float: left;
        perspective: 700px;
        display: flex;
    }
    
    .content {
        position: absolute;
        width: 300px;
        height: 400px;
        box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
        transition: transform 1s;
        transform-style: preserve-3d;
    }
    
    .card:hover .content {
        transform: rotateY( 180deg);
        transition: transform 0.5s;
    }
    
    .front,
    .back {
        position: absolute;
        height: 400px;
        width: 300px;
        line-height: 300px;
        text-align: center;
        font-size: 20px;
        border-radius: 5px;
        backface-visibility: hidden;
        color: white;
    }
    
    .back {
        background: #03446A;
        color: white;
        transform: rotateY( 180deg);
    }
    .header{
        background-color:teal;
        color:teal;
    }
</style>

<section style="background-color: lightcoral;">
    <div class="display-3" style="padding-top: 9%;padding-left: 2% !important;font-weight: 700 !important;">Why Choose US?</div>

    <div class="container-fluid" style="height: 500px;">

        <div class="main" style="margin-right: 0%;">

            <div class="container">
                <br><br>
            </div>
            <div class="d1"></div>
            <div class="d2"></div>
            <div class="d3"></div>
            <div class="d4"></div>
        </div>
    </div>

</section>
<div class="bull"><br>
    <div class="container  " style="overflow: scroll;max-height: 400px;min-height: 200px;">
        <div class="row">
            <div class="col-md-12">
                <img class="sticky" src="./assets/images/BV-Acharya-6.png" alt="Avatar">
                <h2>Here are some words from our founder.</h2>
                <p><b>Its a great saying where there is education there is prosperity.</b></p>
                <p>
                    At 53, N.R. Narayana Murthy, chairman and CEO, Infosys Technologies (1998-99 sales: Rs 513 crore), heads India’s most successful Silicon Valley style start-up. Established in 1981 by seven professionals who pooled in their savings of Rs 10,000 (borrowed
                    from their wives), Infosys has set all kinds of records. It was the first company to institute a company wide, performance based Employee Stock Option Plan that cut right across the hierarchy. This year, it was the first India-registered
                    company to list on an American stock exchange (Nasdaq). On measures of transparency and corporate governance, Infosys is the epitome of the upright corporate citizen. To Murthy goes the credit for first having the vision to see the
                    opportunity in software, pick the right team and more significantly keep it together. The Infosys success is striking since all of its founders come from middle class backgrounds, had no backing of any business house but simply leveraged
                    their brainpower and sweat equity. This is a model for the new generation of Indian enterprises in the coming millennium. The fifth born of eight children, Murthy’s father was a modest school teacher in Mysore who could not afford
                    to send his son to iit. Today, his 7.7% stake in Infosys makes Murthy a very wealthy man, with an estimated networth of Rs 2,500 crore. Yet he continues to cling to his roots, staying in a house in the middle class area of Jayanagar
                    in Bangalore with his engineer wife Sudha and their two children, Akshata and Rohan. He was interviewed by Naazneen Karmali in Bangalore. What made you initially choose engineering as a career? My uncle was a civil servant and my father
                    was very keen that I take that up as a career but somehow it didn’t appeal to me. Those were the days when engineering was considered the in thing along with medicine. People didn’t think that being an economist or a social scientist
                    could be a productive career. I had got admission to the iit by passing the entrance exam with a fairly high rank and a scholarship. But the scholarship was to be disbursed at the end of the year. I remember talking to my father who
                    said that there was no way he could afford to pay since he was earning Rs 250 per month. He said: If you’re smart you can go to any college and be able to do something worthwhile. So I joined the local engineering college. Did you
                    have any role models who inspired you in your career? Those days our role models were our teachers, both in school and university. They taught us to be inquisitive and articulate. You have to imagine a lower middle class family in
                    a district headquarters in the ’60s. My father used to tell us about the importance of putting public good before private good; mother would talk about sacrifice and truth. Beyond the basic values of life they didn’t discuss too much
                    about our careers. My dream was to become a junior engineer in a hydroelectric power plant, Nehru’s temples of modern India. What appealed to me was that they were non-polluting and set in pristine surroundings. Also, being an electrical
                    engineer, there was this macho thing about building a big generator. But as a top-ranking student, people advised me to do my masters. It was not easy for people like us from a certain section of society that was considered already
                    advantaged to get a job in Karnataka because of the reservation system and so I postponed the career decision for two years by doing my masters. So you finally made it to IIT; what was that experience like? IIT Kanpur was in its halcyon
                    days. We had so many young professors who had done their Ph.Ds in the US and had come back to India. They were all in their 20s and 30s and full of energy and optimism. Also, under the Kanpur Indo-American programme, iit had links
                    with eight American universities like MIT, Berkeley, Purdue. What that meant was that when MIT got an IBM computer they sent one to Kanpur. We were introduced to computers – that wonder machine – and I was hooked. What prompted you
                    to opt for the unconventional job offer from IIM? The phase I enjoyed the most was my time at iim Ahmedabad where I took up a job as chief systems programmer. In those days there were few computer science graduates so we got five job
                    offers each. I had offers from hmt, ecil, Telco, Air India. The salary in those places was much higher than at the iim. But Prof. Krishnayya of iim who came to iit Kanpur talked to me for an hour about this great, modern mini- computer
                    that he was going to install and that iim would be the third business school in the world to install a time-sharing system after Harvard and Stanford. He also said that the atmosphere was collegial, we’d work 20 hours a day and learn
                    a lot. Taking this job at a salary of Rs 800 a month was the best decision of my life. I learnt so many things from Krishnayya. He is probably the person who influenced me the most. He taught us how important it is to aspire. We used
                    to work 20 hours a day; go home at 3 a.m. sometimes and be back at 7 a.m. There was so much opportunity to learn. We designed and implemented a basic interpreter for ecil. I learnt what it is to be an engineer. It isn’t theory but
                    application of the theory to solve problems and make a difference to society. You worked overseas early in your career. What did you learn from your stint abroad? My years in Paris were the most influential years of my life. I observed
                    how in a western country even the socialists understood that wealth has to be first created before it can be distributed. That there could only be a few leaders to create wealth. And that it’s the job of the government to create an
                    environment where it’s possible for people to create wealth. I realised that all this talk of socialism as practised in India was not meaningful. Our country treated communism as an ism that was completely disassociated from the reality
                    of the context. You cannot distribute poverty. My father always told us that India had a lot to learn from the West. Also, he was a great fan of classical music. On Sundays, air used to play music for an hour. One day I asked him:
                    why should I listen to this alien music? He said: What appeals to me is that in a symphony there are over 100 people, each of whom is a maestro, but they come together as a team to play according to a script under this conductor and
                    produce something divine. They prove that one plus one can be more than two. It’s a great example of teamwork.


                </p>
            </div>
        </div>
    </div>
</div>

<section style="background: linear-gradient(to bottom right,yellow,rgb(255, 255, 213)); height: 600px;">
    <br>
    <div class="container" style="z-index: 9999;">
        <div id="carouselExampleIndicators" style="width: 100%;" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="row">
                        <div class="col-md-4" style="width: 300px;height: 400px;">
                            <div class="card">
                                <div class="content">
                                    <div class="front">
                                        <img src="./assets/images/1547509820-Class_Tile.jpg" style="width: 100%;height: 400px;"> </div>
                                    <div class="back">
                                        <p style="color: white;"> JAne Doe HOD 9999999999 abc@gmail.com</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4" style="width: 300px;height: 400px;">
                            <div class="card">
                                <div class="content">
                                    <div class="front">
                                        <img src="./assets/images/closeup-portrait-of-handsome-unhappy-man-with-bad-mood-actors-portfolio-picture-emotion-and-feelings-studio-shot-isolated-on-gray-background-P99R99.jpg" style="width: 100%;height: 400px;">                                        </div>
                                    <div class="back">
                                        <p style="color: white;"> JAne Doe HOD 9999999999 abc@gmail.com</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4" style="width: 300px;height: 400px;">
                            <div class="card">
                                <div class="content">
                                    <div class="front">
                                        <img src="./assets/images/6c9c1beb3394114b9b42b9472975d641.jpg" style="width: 100%;height: 400px;"> </div>
                                    <div class="back">
                                        <p style="color: white;"> JAne Doe HOD 9999999999 abc@gmail.com</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="row">
                        <div class="col-md-4" style="width: 300px;height: 400px;">
                            <div class="card">
                                <div class="content">
                                    <div class="front">
                                        <img src="./assets/images/1547509820-Class_Tile.jpg" style="width: 100%;height: 400px;"> </div>
                                    <div class="back">
                                        <p style="color: white;"> JAne Doe HOD 9999999999 abc@gmail.com</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4" style="width: 300px;height: 400px;">
                            <div class="card">
                                <div class="content">
                                    <div class="front">
                                        <img src="./assets/images/1547509820-Class_Tile.jpg" style="width: 100%;height: 400px;"> </div>
                                    <div class="back">
                                        <p style="color: white;"> JAne Doe HOD 9999999999 abc@gmail.com</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4" style="width: 300px;height: 400px;">
                            <div class="card">
                                <div class="content">
                                    <div class="front">
                                        <img src="./assets/images/1547509820-Class_Tile.jpg" style="width: 100%;height: 400px;"> </div>
                                    <div class="back">
                                        <p style="color: white;"> JAne Doe HOD 9999999999 abc@gmail.com</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="row">
                        <div class="col-md-4" style="width: 300px;height: 400px;">
                            <div class="card">
                                <div class="content">
                                    <div class="front">
                                        <img src="./assets/images/1547509820-Class_Tile.jpg" style="width: 100%;height: 400px;"> </div>
                                    <div class="back">
                                        <p style="color: white;"> JAne Doe HOD 9999999999 abc@gmail.com</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4" style="width: 300px;height: 400px;">
                            <div class="card">
                                <div class="content">
                                    <div class="front">
                                        <img src="./assets/images/1547509820-Class_Tile.jpg" style="width: 100%;height: 400px;"> </div>
                                    <div class="back">
                                        <p style="color: white;"> JAne Doe HOD 9999999999 abc@gmail.com</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4" style="width: 300px;height: 400px;">
                            <div class="card">
                                <div class="content">
                                    <div class="front">
                                        <img src="./assets/images/1547509820-Class_Tile.jpg" style="width: 100%;height: 400px;"> </div>
                                    <div class="back">
                                        <p style="color: white;"> JAne Doe HOD 9999999999 abc@gmail.com</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
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
</section>
<?php 
include('includes/footer.php')
?>