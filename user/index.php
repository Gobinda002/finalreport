<?php
session_start();

// Check if the user is logged in
if (isset($_SESSION['username'])) {
    $username = $_SESSION['username'];
    echo"$username";
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NepTours</title>
    <link rel="stylesheet" href="public/CSS/index.css">
    <link rel="shortcut icon" href="data/logod.png" type="image/x-icon">

    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&family=Paytone+One&family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
</head>

<body>

    <!--**********  Navbar Section *********--->
    <header class="nav-section">
        <div class="nav ">
            <a href="#" class="logo">
                <img src="data/logod.png" alt="logo">
                NepTours
            </a>

            <ul class="navbar">
                <li><a href="#">home</a></li>
                <li><a href="#2">Packages</a></li>
                <li><a href="#3">Services</a></li>
                <li><a href="#4">Review</a></li>
                <li><a href="routes/contact.html">contact</a></li>
            </ul>

            
           
                <ul class="inout">
                    <li><a href="controller/login.php">Login</a></li>
                    <li><a href="controller/register.php">Signup</a></li>
                </ul>
           
           


        </div>
    </header>

    <!--**********  Home Section *********--->

    <section class="home container" id="home">
        
        <div class="con">
            <div class="home-text">
                <h1>AROUND THE WORLD </h1>
                <p>"TRAVELING-IT LEAVES YOU SPEECHLESS,<BR>THEN TURNS INTO A STORYTELLER"</BR></p>
            </div>


            <a href="routes/explore.html" class="hbutton">Explore More</a>



        </div>
    </section>


    <!-- ========= Most Popular Packages  ======== -->


    <section class="packages container" id="2">
        <h1 id="title">THE MOST POPULAR TOURS</h1>
        <h1 class="heading">
            <span>P</span>
            <span>a</span>
            <span>c</span>
            <span>k</span>
            <span>a</span>
            <span>g</span>
            <span>e</span>
            <span>s</span>
        </h1>

        <div class="allpack grid-layout">
            <div class="card">
                <div class="card-img">
                    <img src="Data/everest basecamp.jpg" alt="">
                </div>
                <div class="card-body">
                    <h1 class="card-title">everest base camp</h1>
                    <p>They call it the “steps to heaven” for a good reason. You will look at the scenery that's so
                        breathtakingly stunning and unlike any mountainous terrain that you have ever seen before
                        changing from lush green farmland, dense forest, and glistening blue fast-flowing rivers to the
                        barren land and glacial pools the higher you climb that you realize </p>
                    <a href="routes/packages/everest.html" id="see">
                        See More
                    </a>

                </div>

            </div>
            <div class="card">
                <div class="card-img">
                    <img src="Data/ebc.jpg" alt="" style="height: 100%;">
                </div>
                <div class="card-body">
                    <h1 class="card-title">aanapurna circuit trek</h1>
                    <p>This is one of the most popular treks in the world, famous for dramatic deep gorges, desolate
                        high mountain passes, fantastic viewpoints (Poon Hill), hot springs, Buddhist and Hindu temples,
                        delightful farming villages, and stunning views of Annapurna summits</p>
                    <a href="routes/packages/everest.html" id="see">
                        See More
                    </a>
                </div>

            </div>

            <div class="card">
                <div class="card-img">
                    <img src="Data/The_Muktinath_Temple.jpg" alt="">
                </div>

                <div class="card-body">
                    <h1 class="card-title"> muktinath</h1>

                    <p>Muktinath Temple holds immense spiritual significance for Hindus, as it is one of the 108 Divya
                        Desams or holy abodes of Lord Vishnu, the god of preservation. The temple is dedicated to Lord
                        Vishnu in the form of a Saligram, a sacred black stone that represents the deity</p>
                    <a href="routes/packages/everest.html" id="see">
                        See More
                    </a>
                </div>
            </div>

            <div class="card">
                <div class="card-img">
                    <img src="Data/Pathivara.jpg" alt="">
                </div>

                <div class="card-body">
                    <h1 class="card-title">pathivara tour</h1>
                    <p>Its a tour that leads you to one of the prominent Shakti Peeth of Pathibhara Devi, located at
                        3794m altitude above sea level. The Holy shrine of Pathibhara Bhagwati is the epitome of
                        religious tolerance among Nepalese as Pathibhara is equally venerated by Buddhist and Hindu
                        Devotees</p>
                    <a href="routes/packages/everest.html" id="see">
                        See More
                    </a>
                </div>

            </div>

            <div class="card">
                <div class="card-img">
                    <img src="Data/Pokhara.jpg" alt="">
                </div>
                <div class="card-body">
                    <h1 class="card-title">pokhara</h1>
                    <p>Pokhara is popular for its beautiful landscapes in and around. A valley surrounded by hills and
                        famous landmarks like Begnas Lake and Phewa Lake where the elevation suddenly changes taking you
                        to a hilltop like Sarangkot; ideal spot to observe the thirst healing sunrise falling on giant
                        Himalayan Ranges.</p>
                    <a href="routes/packages/everest.html" id="see">
                        See More
                    </a>
                </div>

            </div>
            <div class="card">
                <div class="card-img">
                    <img src="Data/lumbini.jpg" alt="" style="height: 100%;">
                </div>

                <div class="card-body">
                    <h1 class="card-title">lumbini</h1>
                    <p>Walk in the footsteps of Buddha as you explore the region where he spent his childhood as Prince
                        Siddhartha. The exact spot where Buddha was born is marked here in Lumbini and the site has
                        understandably become one of the world's most important holy sites.</p>
                    <a href="routes/packages/everest.html" id="see">
                        See More
                    </a>
                </div>

            </div>
        </div>
    </section>


    <!-- ******* Cateogry Section *********** --->

    <section class="cateogry container">
        <div class="cat-title">
            <h2>Start Your Vacation <br> with lots of Services !</h2>
        </div>
        <div class="row-item grid-layout">
            <a href="routes/treking.html" class="item">
                <img src="Data/hiking1.png" alt="Hiking" id="cat-pic">
                <h2>Hiking</h2>
            </a>
            <a href="routes/treking.html" class="item">
                <img src="Data/tours1.png" alt="Tours" id="cat-pic">
                <h2>Tours</h2>
            </a>
            <a href="routes/treking.html" class="item">
                <img src="Data/safari-removebg-preview.png" alt="Jungle Safari" id="cat-pic">
                <h2>Jungle Safari</h2>
            </a>
            <a href="routes/treking.html" class="item">
                <img src="Data/rafting-removebg-preview.png" alt="Rafting" id="cat-pic">
                <h2>Rafting</h2>
            </a>
        </div>
    </section>

    <!-- ******* Cateogry Section End *********** --->


    <!-- ******* Service Section *********** --->

    <section class="service container" id="3">
        <h1 class="heading">
            <span>S</span>
            <span>e</span>
            <span>r</span>
            <span>v</span>
            <span>i</span>
            <span>c</span>
            <span>e</span>
            <span>s</span>
        </h1>
        <div class="box-container grid-layout">
            <div class="box">
                <i class="fas fa-hotel"></i>
                <h3>Affordable Hotels</h3>
                <p>We have lots of Affordable Hotels For You All Over Nepal!! So What Are You Waiting For,Just Enjoy our
                    Life Without Spending Much.</p>
            </div>
            <div class="box">
                <i class="fa-solid fa-utensils"></i>
                <h3>Foods And Drinks</h3>
                <p>You Will Get All Kinds Of Food And Drinks At Very Reasonable Prices.</p>
            </div>
            <div class="box">.
                <i class="fa-solid fa-bullhorn"></i>
                <h3>safty guide</h3>
                <p>Travelling With Us Has Never Been Safer .we Always Ensure Our Customers Are Secure And Practice
                    Caution And Safeguarding Measures When Travelling.</p>
            </div>
            <div class="box">
                <img src="Data/lnmap.png" alt="">
                <h3>All Over Nepal</h3>
                <p>When It Comes To Destinations, The Limit Is Your Imagination As We Have Expanded Our Services To
                    Being Able To Visit Anywhere They Want In Nepal.</p>
            </div>
            <div class="box">
                <img src="Data/tii.png" alt="">
                <h3>Travel Insurance</h3>
                <p>We offer you the best possible protection if you have sudden, unexpected illness or injury while
                    travelling overseas. </p>
            </div>
            <div class="box">
                <img src="Data/expguide.png" alt="">
                <h3>Experinced Guide</h3>
                <p>Life Is Too Short To Not To Take The Opportunity Of Having An Adventure When It Comes Along And We
                    Can Gurantee You Will Never Regret Your Decision.</p>
            </div>

        </div>
    </section>

    <!-- ******* Service Section End *********** --->

    <!-- ******* Contact  Section *********** --->
    <section class="mixed" id="4">
        <div class="ro grid-layout">
            <div class="blo">
                <div class="head-title">
                    <h2 class="title__primary">
                        Intresting <span>Blogs</span>
                    </h2>
                    <div class="title-line">
                        <div class="tl-1"></div>
                        <div class="tl-2"></div>
                        <div class="tl-3"></div>
                    </div>
                </div>
                <!-- Swiper -->
                <div class="swiper mySwiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="collabe-bg "
                                style="background-image:url('https://www.attractivetravelnepal.com/wp-content/uploads/2024/01/Everest-Base-Camp-Heli-Tour-3-1.jpg')">
                            </div>
                            <div class="news-detail">
                                <h3>
                                    <a href="#">A
                                        Spectacular Everest Heli Tour Experience</a>
                                </h3>
                                <ul class="post-info">
                                    <li>
                                        <i class="far fa-clock"></i>
                                        Jan 21
                                    </li>
                                </ul>
                                <p>Welcome to an extraordinary adventure that transcends the boundaries travel..
                                </p>
                                <a href="#" class="blog-read">Read More</a>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="collabe-bg "
                                style="background-image:url('https://www.attractivetravelnepal.com/wp-content/uploads/2023/03/unique-cultura-experience.jpg')">
                            </div>
                            <div class="news-detail">
                                <h3>
                                    <a href="#">Unique
                                        Cultural Experiences of Nepal</a>
                                </h3>
                                <ul class="post-info">
                                    <li>
                                        <i class="far fa-clock"></i>
                                        Mar 26
                                    </li>
                                </ul>
                                <p>Nepal is a country that is blessed with unique cultural experiences that span back
                                    several centuries. It is....</p>
                                <a href="#" class="blog-read">Read More</a>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>


            <div class="testimonial-section">
                <div class="head-title">
                    <h2 class="title__primary">
                        Clients <span>Views</span>
                    </h2>
                    <div class="title-line">
                        <div class="tl-1"></div>
                        <div class="tl-2"></div>
                        <div class="tl-3"></div>
                    </div>
                </div>
                <div class="tour-reviews">
                    <div class="info">
                        <img alt="" class="logoc" src="Data/review.jpg">
                        <div class="info_name">Ram Krishna, USA</div>
                    </div>
                    <div class="content">
                        <h3 class="title">
                            <a href="#">Wonderful and informative Tour !</a>
                        </h3>
                        <div class="description">
                            <p>Prakash is extraordinary. We stopped over in Kathmandu on a trip around the world. We
                                took tours in many countries. We absolutely found Prakash to be one of the most
                                engaging tour guides we experienced in 19 countries. So much so, we are still in</p>
                        </div>
                        <div class="rating">
                            <a href="#" class="testi">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="tour-reviews">
                    <div class="info">
                        <img alt="" class="logoc" src="Data/review.jpg">
                        <div class="info_name">Shyam krishna ,USA</div>
                    </div>
                    <div class="content">
                        <h3 class="title">
                            <a href="#">Annapurna Base Camp (ABC) Trek</a>
                        </h3>
                        <div class="description">
                            <p>As an American who has trekked and climbed often in the Himalayas nothing has
                                compared to service, kindness, professionalism, helpfullness and caring that I have
                                always received from Mr. Prakash and his company Attractive Travels and Tours or
                                www.adventurenepaltrip.com on many of my trips to</p>
                        </div>
                        <div class="rating">
                            <a href="#" class="testi">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>

    <!-- ******* Footer  Section  *********** --->

    <footer>
        <div class="about">
            <div class="col">
                <h3>Neptours</h3>
                <p>Neptours: Your gateway to seamless travel. We curate unforgettable journeys, blending innovation with
                    a passion for exploration.
                </p>
            </div>
            <div class="col">
                <h3>Office</h3>
                <p>ABC Road</p>
                <p>Sinamangal 3, kathmandu</p>
                <p>Nepal</p>
                <p class="email-id">abc@gmail.com</p>
                <h4>+977 98********</h4>
            </div>
            <div class="col">
                <h3>Links</h3>
                <ul>
                    <li><a href="#home" style="color: #000;">Home</a></li>
                    <li><a href="#2" style="color: #000;">Packages</a></li>
                    <li><a href="#3" style="color: #000;">Services</a></li>
                    <li><a href="#4" style="color: #000;">Review</a></li>
                    <li><a href="../html files/contact.html" style="color: #000;">Contacts</a></li>

                </ul>
            </div>
            <div class="col">
                <h3>Follow us</h3>
                <div class="social">
                    <a href="https://www.facebook.com/"><i class="fa-brands fa-facebook"></i></a>
                    <a href="https://www.instagram.com/"><i class="fa-brands fa-instagram"></i></a>
                    <a href="https://www.whatsapp.com/"><i class="fa-brands fa-whatsapp"></i></a>
                    <a href="https://www.twitter.com/"><i class="fa-brands fa-twitter"></i></a>
                </div>
            </div>
        </div>
        <hr>
        <p class="copyright"> Copyright © 2012 - 2023 NepTours®. All rights reserved.</p>
    </footer>

    <!-- ******* Footer  Section End *********** --->

    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <script src="public/main.js"></script>
</body>

</html>