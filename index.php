<!DOCTYPE html>
<html lang="en">

<head>

    <title>DaBotics</title>
    <?php
    include 'Header.php'
    ?>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <script>
    $(document).ready(function() {
        $("#myModal").modal('show');
    });
    </script>
</head>
<style>
.btn1 {
    background: #47b2e4;
    border: 0;
    padding: 12px 34px;
    color: #fff;
    transition: 0.4s;
    border-radius: 50px;
}

.team .member .pic {
    overflow: hidden;
    height: 150px;
    width: 200px;


}

.img-fluid {
    max-width: 150px;
    height: 150px;
}
</style>

<body>
    <div id="myModal" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header " style="flex-direction:column">
                    <h1 class="text-center">Yey!</h1><br>
                    <h5 class="modal-title text-center ">Join Demo Sessions By
                        <br>DABOTICS
                    </h5>
                    <div class="mt-5 text-center"><a class="btn1" href="WebdevSession.php">Web Development</a>

                    </div>
                    <div class="mt-5 text-center"><a class="btn1" href="AiMl.php">Ai / ML with python</a>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ======= Header ======= -->
    <?php
    include 'Navebar.php'
    ?>
    <!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex align-items-center">

        <div class="container">
            <div class="row">
                <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1"
                    data-aos="fade-up" data-aos-delay="200">
                    <h1>THE FUTURE OF MOBILITY IS HERE</h1>
                    <h2>Discover the Safest self-driving experience with Dabotics India Pvt. Ltd.</h2>
                    <div class="d-flex justify-content-center justify-content-lg-start">
                        <a href="#about" class="btn-get-started scrollto">Get Started</a>
                    </div>
                </div>
                <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="200">
                    <img src="assets/img/hero-img.png" class="img-fluid animated" alt="">
                </div>
            </div>
        </div>

    </section><!-- End Hero -->

    <main id="main">

        <!-- ======= Why Us Section ======= -->
        <!--<section id="why-us" class="why-us section-bg" style="padding-top:0; padding-bottom: 3rem;">-->
        <!--    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">-->
        <!--        <div class="carousel-inner">-->
        <!--            <div class="carousel-item active">-->
        <!--                <img src="https://source.unsplash.com/3000x1000/?AI,Robotics" class="d-block w-100" alt="...">-->
        <!--            </div>-->
        <!--            <div class="carousel-item">-->
        <!--                <img src="https://source.unsplash.com/3000x1000/?Machine,Workshops" class="d-block w-100"-->
        <!--                    alt="...">-->
        <!--            </div>-->
        <!--            <div class="carousel-item">-->
        <!--                <img src="https://source.unsplash.com/3000x1000/?MachineLearning,Education"-->
        <!--                    class="d-block w-100" alt="...">-->
        <!--            </div>-->

        <!-- Tring  -->

        <!--            <div class="row">-->
        <!--                <div class="col croslbtn">-->
        <!--                    <div class="buttonsof_mine">-->
        <!--                        <h4>Upcomming Events</h4>-->
        <!--                        <a href="">Click Here</a>-->
        <!--                    </div>-->
        <!--                </div>-->
        <!--                <div class="col croslbtn">-->
        <!--                    <div class="buttonsof_mine">-->
        <!--                        <h4>Certificate Verification</h4>-->
        <!--                        <a href="">Click here</a>-->
        <!--                    </div>-->
        <!--                </div>-->
        <!--            </div>-->
        <!--        </div>-->
        <!--        <button class="carousel-control-prev" type="button" data-target="#carouselExampleControls"-->
        <!--            data-slide="prev">-->
        <!--            <span class="carousel-control-prev-icon" aria-hidden="true"></span>-->
        <!--            <span class="sr-only">Previous</span>-->
        <!--        </button>-->
        <!--        <button class="carousel-control-next" type="button" data-target="#carouselExampleControls"-->
        <!--            data-slide="next">-->
        <!--            <span class="carousel-control-next-icon" aria-hidden="true"></span>-->
        <!--            <span class="sr-only">Next</span>-->
        <!--        </button>-->
        <!--    </div>-->
        <!--</section><!-- End Why Us Section -->

        <!-- ======= Services Section ======= -->
        <section id="services" class="services section-bg">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Services</h2>
                    <p>Its all began with a group of people who dreamt of starting something completely new. Together ,
                        we
                        established Dabotics India , a company dedicated to finding cuting-edge solution and providing
                        great
                        services.<br>
                        Our Product and Services were designed to satisfy all of our custumers, anytime, anywhere . we
                        are
                        committed to customer satisfaction as our top priority. if you want to learn more about how we
                        do
                        business, give us a call today.</p>
                </div>

                <div class="row" style="justify-content: center;">
                    <div class="col-xl-3 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                        <div class="icon-box">
                            <div class="icon"><i class="bx bxl-dribbble"></i></div>
                            <h4><a href="Workshop.php">Workshop</a></h4>
                            <p>We will provide the best guidance in building a career road map according to the
                                candidate's dream job.</p>
                        </div>
                    </div>

                    <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in"
                        data-aos-delay="200">
                        <div class="icon-box">
                            <div class="icon"><i class="bx bx-file"></i></div>
                            <h4><a href="ProjectAssistance.php">Project Assistance </a></h4>
                            <p>We will provide the best guidance in building project on their own ideas.</p>
                        </div>
                    </div>

                    <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-xl-0" data-aos="zoom-in"
                        data-aos-delay="300">
                        <div class="icon-box">
                            <div class="icon"><i class="bx bx-tachometer"></i></div>
                            <h4><a href="LabSetup.php">Lab Setup</a></h4>
                            <p>DABOTICS serves as a platform for promotion of World class Innovation Hubs, by ROBOTICS &
                                AI</p>
                        </div>
                    </div>

                </div>
            </div>
        </section><!-- End Services Sectin -->

        <!-- ======= Team Section ======= -->
        <section id="team" class="team section-bg">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Team</h2>
                    <p>We continuously bulding a great team to teach you in a great manner.<br>Feel free to get
                        connected with our team</p>
                </div>

                <div class="row">

                    <div class="col-lg-6">
                        <div class="member d-flex align-items-start" data-aos="zoom-in" data-aos-delay="100">
                            <div class="pic"><img src="assets/img/team/team-1.png" class="img-fluid" alt=""></div>
                            <div class="member-info">
                                <h4>Sachin Shrivastava</h4>
                                <span>Founder</span>
                                <p>Don't stop Chasing your Dreams ,Beacause Dream Do Come True</p>
                                <div class="social">
                                    <a href=""><i class="ri-twitter-fill"></i></a>
                                    <a href=""><i class="ri-facebook-fill"></i></a>
                                    <a href=""><i class="ri-instagram-fill"></i></a>
                                    <a href=""> <i class="ri-linkedin-box-fill" target="_blank"></i> </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 mt-4 mt-lg-0">
                        <div class="member d-flex align-items-start" data-aos="zoom-in" data-aos-delay="200">
                            <div class="pic"><img src="assets/img/team/team-2.png" class="img-fluid" alt=""></div>
                            <div class="member-info">
                                <h4>Pranjal Shrivastava</h4>
                                <h6>From Invertis University</h6>
                                <span>Co-Founder</span>
                                <p>Believe In Working Not In Thinking</p>
                                <div class="social">
                                    <a href=""><i class="ri-twitter-fill"></i></a>
                                    <a href=""><i class="ri-facebook-fill"></i></a>
                                    <a href="https://www.instagram.com/pranjal.9.0.4.4/" target="_blank"><i class="ri-instagram-fill"></i></a>
                                    <a href="https://www.linkedin.com/in/devilcoder/" target="_blank"> <i class="ri-linkedin-box-fill"></i> </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mt-5">

                    <div class="col-lg-6">
                        <div class="member d-flex align-items-start" data-aos="zoom-in" data-aos-delay="100">
                            <div class="pic"><img src="assets/img/team/team-3.png" class="img-fluid" alt=""></div>
                            <div class="member-info">
                                <h4>Suraj Kumar</h4>
                                <h6>From Chandigarh University</h6>
                                <span>SDE, Python Trainer</span>
                                <p>Addition of small steps let you closer to yous goal</p>
                                <div class="social">
                                    <a href=""><i class="ri-twitter-fill"></i></a>
                                    <a href=""><i class="ri-facebook-fill"></i></a>
                                    <a href="https://www.instagram.com/surajsinhar7/" target="_blank"><i class="ri-instagram-fill"></i></a>
                                    <a href="https://www.linkedin.com/in/suraj-kumar-1a525a1a7/" target="_blank"> <i class="ri-linkedin-box-fill"></i> </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="member d-flex align-items-start" data-aos="zoom-in" data-aos-delay="100">
                            <div class="pic"><img src="assets/img/team/team-4.png" class="img-fluid" alt=""></div>
                            <div class="member-info">
                                <h4>Er. Prakhar Sarswat</h4>
<<<<<<< HEAD
                                <!-- <h6>From Samsung Electronics</h6> -->
=======
                           <h6>From Samsung Electronics</h6>
>>>>>>> 03a72d5af035a956158cece4900b22995f248894
                                <span>CTO</span>
                                <p>Don't stop Chasing your Dreams ,Beacause Dream Do Come True</p>
                                <div class="social">
                                    <a href=""><i class="ri-twitter-fill"></i></a>
                                    <a href=""><i class="ri-facebook-fill"></i></a>
                                    <a href=""><i class="ri-instagram-fill"></i></a>
                                    <a href="https://www.linkedin.com/in/prakharsarswat/" target="_blank"> <i class="ri-linkedin-box-fill"></i> </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row mt-5">

                    <div class="col-lg-6">
                        <div class="member d-flex align-items-start" data-aos="zoom-in" data-aos-delay="100">
                            <div class="pic"><img src="assets/img/team/team-5.png" class="img-fluid" alt=""></div>
                            <div class="member-info">
                                <h4>Krishna Gupta</h4>
                                <!-- <h6>From Chandigarh University</h6> -->
                                <span>Managing Director at Dabotics India Pvt. Ltd</span>
                                <p>Addition of small steps let you closer to yous goal</p>
                                <div class="social">
                                    <a href=""><i class="ri-twitter-fill"></i></a>
                                    <a href=""><i class="ri-facebook-fill"></i></a>
                                    <a href="https://www.instagram.com/surajsinhar7/" target="_blank"><i class="ri-instagram-fill"></i></a>
                                    <a href="https://www.linkedin.com/in/krishna-gupta-8416a9242/" target="_blank"> <i class="ri-linkedin-box-fill"></i> </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section><!-- End Team Section -->

        <!-- ======= Pricing Section ======= -->
        <section id="pricing" class="pricing">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Courses</h2>
                    <p>A Top Online Course : you are about to embark on a journey of educational discovery , where you
                        will learn new skills and challenge your self. Take a look at all the relevant details about our
                        online course and get in touch if you have any questions.</p>
                </div>

                <div class="row">

                    <div class="col-lg-4 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="200">
                        <div class="box featured">
                            <h3>Python</h3>
                            <h4><sup>₹
                                </sup>10000<span> </span></h4>
                            <h4><span>Course Duration:45 days</span></h4>

                            <ul>
                                <li><i class="bx bx-check"></i> Only 15 users will in batch .
                                </li>
                                <li><i class="bx bx-check"></i>Training by industry experts.
                                </li>
                                <li><i class="bx bx-check"></i> IIT'S and NIT'S trainers
                                </li>
                                <li><i class="bx bx-check"></i> 15+ projects.</li>
                                <li><i class="bx bx-check"></i> 100% job Assistance.</li>
                            </ul>
                            <a href="https://www.payumoney.com/paybypayumoney/#/B63C3AC7E4EAE26C12B4E0C5806280BF"
                                class="buy-btn">Enroll Now</a>
                        </div>
                    </div>
                    <div class="col-lg-4 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="200">
                        <div class="box featured">
                            <h3>AI With Python</h3>
                            <h4><sup>₹
                                </sup>15000/-<span> </span></h4>
                            <h4><span>Course Duration:60 days</span></h4>

                            <ul>
                                <li><i class="bx bx-check"></i> Only 10 user will in batch.
                                </li>
                                <li><i class="bx bx-check"></i> Training by industry experts.
                                </li>
                                <li><i class="bx bx-check"></i> IISC And IIT'S Trainers.
                                </li>
                                <li><i class="bx bx-check"></i> 10+ Al project.</li>
                                <li><i class="bx bx-check"></i> 100% job Assistance.
                                </li>
                            </ul>
                            <a href="#" class="buy-btn">Enroll Now</a>
                        </div>
                    </div>
                    <div class="col-lg-4 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="200">
                        <div class="box featured">
                            <h3>Robotics</h3>
                            <h4><sup>₹
                                </sup>10000/-<span> </span></h4>
                            <h4><span>Course Duration:60 days</span></h4>

                            <ul>
                                <li><i class="bx bx-check"></i>Only 10 user will in batch.
                                </li>
                                <li><i class="bx bx-check"></i>Training by industry experts.
                                </li>
                                <li><i class="bx bx-check"></i>Hardware kits .
                                </li>
                                <li><i class="bx bx-check"></i>Practical knowledge.
                                </li>
                                <li><i class="bx bx-check"></i>IISC And IIT'S Trainers.
                                </li>
                                <li><i class="bx bx-check"></i>100% job Assistance.
                                </li>
                            </ul>
                            <a href="#" class="buy-btn">Enroll Now</a>
                        </div>
                    </div>

                </div>
                <div style="text-align: center; margin-top:4%">
                    <a href="Courses.php" class="buy-btn">View More</a>

                </div>
            </div>
        </section><!-- End Pricing Section -->

        <!-- ======= Frequently Asked Questions Section ======= -->
        <section id="faq" class="faq section-bg">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Frequently Asked Questions</h2>
                </div>

                <div class="faq-list">
                    <ul>
                        <li data-aos="fade-up" data-aos-delay="100">
                            <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" class="collapse"
                                data-bs-target="#faq-list-1">What is STEAM ? <i
                                    class="bx bx-chevron-down icon-show"></i><i
                                    class="bx bx-chevron-up icon-close"></i></a>
                            <div id="faq-list-1" class="collapse show" data-bs-parent=".faq-list">
                                <p>
                                    STEAM is a curriculum based on the idea of educating students in FIVE specific
                                    disciplines — Science, Technology, Engineering, Arts and Mathematics — in an
                                    interdisciplinary and applied approach. Rather than teach the four disciplines as
                                    separate and discrete subjects, STEAM integrates them into a cohesive learning
                                    paradigm based on real-world applications.
                                    What separates STEAM from the traditional science and math education is the blended
                                    learning environment and showing students how the scientific method can be applied
                                    to everyday life. It teaches students computational thinking and focuses on the real
                                    world applications of problem solving

                                </p>
                            </div>
                        </li>

                        <li data-aos="fade-up" data-aos-delay="200">
                            <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse"
                                data-bs-target="#faq-list-2" class="collapsed">Why is STEAM important at school level ?
                                <i class="bx bx-chevron-down icon-show"></i><i
                                    class="bx bx-chevron-up icon-close"></i></a>
                            <div id="faq-list-2" class="collapse" data-bs-parent=".faq-list">
                                <p>
                                    <b> Elementary school</b> — STEAM education focuses on the introductory level STEAM
                                    courses,
                                    as well as awareness of the STEAM fields. This initial step provides standards-based
                                    structured inquiry-based and real world problem-based learning, connecting all four
                                    of the STEAM subjects.
                                    <br>
                                    <br>
                                    <b> Middle school</b> — Student awareness of STEAM fields is still pursued, as well
                                    as the academic requirements of such fields. Student exploration of STEAM related
                                    careers begins at this level, particularly for underrepresented populations.
                                    <br>
                                    <br>
                                    <b>High school</b> — The program of study focuses on the application of the subjects
                                    in a challenging and rigorous manner. Courses and pathways are now available in
                                    STEAM fields and occupations, as well as preparation for post-secondary education.

                                </p>
                            </div>
                        </li>

                        <li data-aos="fade-up" data-aos-delay="300">
                            <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse"
                                data-bs-target="#faq-list-3" class="collapsed">Why does DABOTICS Stand for ? <i
                                    class="bx bx-chevron-down icon-show"></i><i
                                    class="bx bx-chevron-up icon-close"></i></a>
                            <div id="faq-list-3" class="collapse" data-bs-parent=".faq-list">
                                <p>
                                    DABOTICS INDIA , as the name suggests, Source of Knowledge exists to promote
                                    Robotics & STEAM experiences for kids. DABOTICS LAB , the Robotics Lab , will
                                    execute, support, train & develop teams, events, and educators helping more K-12
                                    students engage in hands on STEAM and IT experiences and will provide training in
                                    21st Century skills.
                                </p>
                            </div>
                        </li>

                        <li data-aos="fade-up" data-aos-delay="400">
                            <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse"
                                data-bs-target="#faq-list-4" class="collapsed">Why Should we join DABOTICS Club ?<i
                                    class="bx bx-chevron-down icon-show"></i><i
                                    class="bx bx-chevron-up icon-close"></i></a>
                            <div id="faq-list-4" class="collapse" data-bs-parent=".faq-list">
                                <p>
                                    <b> 1.) MOTIVATES & INSPIRES</b><br>
                                    WISLAB is a unique platform which motivates, inspires & engages students to
                                    experience a natural, practical, hands on & experiential learning. Students will
                                    learn Science, Technology, Engineering & Mathematics concepts in a fun loving &
                                    exciting way.
                                    <br>
                                    <br>
                                    <b>2.) AMAZING SUPPORT</b><br>
                                    Students will be supported by vast presentations with step by step demonstration of
                                    various projects students can execute. Students can interact with lot of robo
                                    enthusiasts & share their work & excitement.
                                    <br>
                                    <br>
                                    <b>3.) HIGHLY MODULAR</b><br>
                                    The kits are highly modular with different types of blocks. Students can create any
                                    kind of structure ranging from an astronaut to a spacestation, or a car to a
                                    wheelbot using solar cells and learn the technical aspects behind its working.
                                    <br>
                                    <br>
                                    <b>4.) ORGANISED LEARNING</b><br>
                                    The process of learning will inherently teach students the ability to think,
                                    brainstorm & plan their own work when working alone or in teams. The assessment
                                    systems will help students to identify their strengths & weakness.
                                    <br>
                                    <br>
                                    <b>5.) EASY TO UNDERSTAND</b><br>
                                    Build your robot with an easy to use environment which can be used by as young as 4
                                    year olds.

                                </p>
                            </div>
                        </li>

                        <li data-aos="fade-up" data-aos-delay="500">
                            <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse"
                                data-bs-target="#faq-list-5" class="collapsed">Do You Provide Franchisee opportunities ?
                                <i class="bx bx-chevron-down icon-show"></i><i
                                    class="bx bx-chevron-up icon-close"></i></a>
                            <div id="faq-list-5" class="collapse" data-bs-parent=".faq-list">
                                <p>
                                    Yes, Our AIM is to serve maximum number of students across the country. We have
                                    attractive franchisee options available with us. For more details kindly write to us
                                    at contact@dabotics.com
                                </p>
                            </div>
                        </li>

                    </ul>
                </div>

            </div>
        </section><!-- End Frequently Asked Questions Section -->

        <!-- ======= Contact Section ======= -->
        <section id="contact" class="contact">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Contact</h2>
                    <p>Need an expert ? You are more than welcomed to leave your contact info and we will be in touch
                        shortly.</p>
                </div>

                <div class="row">

                    <div class="col-lg-5 d-flex align-items-stretch">
                        <div class="info">
                            <div class="address">
                                <i class="bi bi-geo-alt"></i>
                                <h4>Location:</h4>
                                <p>C-99 SECOND FLOOR SECTOR- 2 <br>
                                    NOIDA UTTAR PRADESH<br>
                                    India <br> </p>
                            </div>

                            <div class="email">
                                <i class="bi bi-envelope"></i>
                                <h4>Email:</h4>
                                <p>contact@dabotics.com</p>
                            </div>

                            <div class="phone">
                                <i class="bi bi-phone"></i>
                                <h4>Call:</h4>
                                <p>+91 8936938690, +91 9368850126</p>
                            </div>
                            <img src="assets/img/contact.png" alt="">
                        </div>
                    </div>

                    <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
                        <form action="COnus.php" method="post" role="form" class="php-email-form">
                            <div class="row">
                                <div class="form-group col-md-6">
                                    <label for="name">Your Name</label>
                                    <input type="text" name="name" class="form-control" id="name" required>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="name">Your Email</label>
                                    <input type="email" class="form-control" name="email" id="email" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="name">Subject</label>
                                <input type="text" class="form-control" name="subject" id="subject" required>
                            </div>
                            <div class="form-group">
                                <label for="name">Message</label>
                                <textarea class="form-control" name="message" rows="10" required></textarea>
                            </div>
                            <div class="text-center"><button type="submit">Send Message</button></div>
                        </form>
                    </div>

                </div>

            </div>
        </section>
        <!-- End Contact Section -->

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer">

        <div class="footer-newsletter">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-6">
                        <h4>Our Clients</h4>
                    </div>
                    <div class="row justify-content-center" data-aos="zoom-in">

                        <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                            <img src="assets/img/clients/client-1.png" class="img-fluid" alt="">
                        </div>

                        <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                            <img src="assets/img/clients/client-2.png" class="img-fluid" alt="">
                        </div>

                        <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                            <img src="assets/img/clients/client-3.png" class="img-fluid" alt="">
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <div class="footer-top">
            <div class="container">
                <div class="row">

                    <div class="col-lg-3 col-md-6 footer-contact">
                        <h3>DaBotics</h3>
                        <p>
                            C-99 SECOND FLOOR SECTOR- 2 <br>
                            NOIDA UTTAR PRADESH<br>
                            India <br>
                            <strong>Phone:</strong> +91 8936938690, <br>+91 9368850126<br>
                            <strong>Email:</strong> contact@dabotics.com<br>
                        </p>
                    </div>

                    <div class="col-lg-3 col-md-6 footer-links">
                        <h4>Useful Links</h4>
                        <ul>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="About.php">About us</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="Service.php">Services</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-3 col-md-6 footer-links">
                        <h4>Our Services</h4>
                        <ul>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Web Design</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Web Development</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Project Development</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">AI/ML Projects</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Logo Design</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-3 col-md-6 footer-links">
                        <h4>Our Social Networks</h4>
                        <p>Feel Free To Contact Us By Social Networks</p>
                        <div class="social-links mt-3">
                            <a href="https://twitter.com/Pranjal05327999" class="twitter" target="0"><i
                                    class="bx bxl-twitter"></i></a>
                            <a href="https://www.facebook.com/profile.php?id=100004455497438" class="facebook"
                                target="0"><i class="bx bxl-facebook"></i></a>
                            <a href="https://www.instagram.com/goddevil_eye/?hl=en" class="instagram" target="0"><i
                                    class="bx bxl-instagram"></i></a>
                            <a href="https://wa.me/917388476701" class="google-plus" target="0"><i
                                    class="bx bxl-whatsapp"></i></a>
                            <a href="https://www.linkedin.com/in/DaBotics/" class="linkedin" target="0"><i
                                    class="bx bxl-linkedin"></i></a>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="container footer-bottom clearfix">
            <div class="copyright">
                &copy; Copyright <strong><span>DaBotics</span></strong>. All Rights Reserved
            </div>
            <div class="credits">
                A Unit Of<a href=" "> DAVINCI AUTOMATIONS</a>
            </div>
        </div>
    </footer><!-- End Footer -->

    <div id="preloader"></div>
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <!-- <script src="assets/vendor/php-email-form/validate.js"></script> -->
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>
    <!-- CArousel JS -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous">
    </script>


</body>

</html>
