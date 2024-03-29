<!DOCTYPE html>
<html lang="en">

<head>

    <title>DaBotics</title>
    <?php
    include 'Header.php'
    ?>
    <style>
        .img-fluid {
            max-width: 8rem;
            height: fit-content;
        }

        #hero {
            background-image: url(assets/img/BG/main.jpg);
            background-position: center;
            background-size: cover;
        }

        #popup {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }
    </style>
    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-7545298674584153" crossorigin="anonymous"></script>
</head>

<body>
    <!-- ======= Header ======= -->
    <?php
    include 'Navebar.php'
    ?>
    <!-- End Header -->


    <div id="simpleModal" class="modal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">

                <div class="modal-body">
                    <img src="assets/img/popup.png" width="100%" alt="">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" onclick="closemdl()" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary text-white" data-dismiss="modal"><a class="text-white" href="DemoRegister.php">Register Now</a></button>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        window.onload = function() {
            OpenBootstrapPopup();
        };

        function OpenBootstrapPopup() {
            $("#simpleModal").modal('show');
        }

        function closemdl() {
            $('#simpleModal').modal('hide');
        }
    </script>


    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex align-items-center">

        <div class="container">
            <div class="row">
                <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">
                    <h1>THE FUTURE OF MOBILITY IS HERE</h1>
                    <h2>Discover the Safest self-driving experience with Dabotics India pvt. ltd.</h2 </div>
                    <div class="d-flex justify-content-center justify-content-lg-start">
                        <a href="DemoRegister.php" class="btn-get-started scrollto">Get Demo</a>
                    </div>
                </div>

            </div>
        </div>

    </section><!-- End Hero -->

    <main id="main">
        <!-- ======= Services Section ======= -->
        <section id="services" class="services section-bg">
            <div class="container" data-aos="fade-up">
                <div class="section-title">
                    <h2>Services</h2>
                    <p>Its all began with a group of people who dreamt of starting something completely new.
                        Together ,
                        we
                        established Dabotics India , a company dedicated to finding cuting-edge solution and
                        providing
                        great
                        services.<br>
                        Our Product and Services were designed to satisfy all of our custumers, anytime, anywhere .
                        we
                        are
                        committed to customer satisfaction as our top priority. if you want to learn more about how
                        we
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

                    <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="200">
                        <div class="icon-box">
                            <div class="icon"><i class="bx bx-file"></i></div>
                            <h4><a href="ProjectAssistance.php">Project Assistance </a></h4>
                            <p>We will provide the best guidance in building project on their own ideas.</p>
                        </div>
                    </div>

                    <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-xl-0" data-aos="zoom-in" data-aos-delay="300">
                        <div class="icon-box">
                            <div class="icon"><i class="bx bx-tachometer"></i></div>
                            <h4><a href="LabSetup.php">Lab Setup</a></h4>
                            <p>DABOTICS serves as a platform for promotion of World class Innovation Hubs, by
                                ROBOTICS &
                                AI</p>
                        </div>
                    </div>
                    <div class="row mt-5" style="justify-content: center;">
                        <div class="col-xl-3 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                            <div class="icon-box">
                                <div class="icon"><i class="bx bxl-stack-overflow"></i></div>
                                <h4><a href="Webdevelopment.php">Web Development</a></h4>
                                <p>We will provide the best responsive website desgin with latest technologies that
                                    works across all the browsers.</p>
                            </div>
                        </div>

                        <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="200">
                            <div class="icon-box">
                                <div class="icon"><i class="bx bxl-digitalocean"></i></div>
                                <h4><a href="Digitalmarketing.php">Digital Marketing </a></h4>
                                <p>We provide Digital Marketing Solutions to make visit updates to every one of the
                                    channels
                                    of customer.</p>
                            </div>
                        </div>

                        <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-xl-0" data-aos="zoom-in" data-aos-delay="300">
                            <div class="icon-box">
                                <div class="icon"><i class="bx bxl-android"></i></div>
                                <h4><a href="Appdevelopment.php">App Development</a></h4>
                                <p>We're a preferred mobile app development company for startups and enterprises
                                    across
                                    the globe. </p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section><!-- End Services Sectin -->


        <div class="pricing" sty </section>
            <!-- ======= Frequently Asked Questions Section ======= -->
            <section id="faq" class="faq section-bg">
                <div class="container" data-aos="fade-up">

                    <div class="section-title">
                        <h2>Frequently Asked Questions</h2>
                    </div>

                    <div class="faq-list">
                        <ul>
                            <li data-aos="fade-up" data-aos-delay="100">
                                <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" class="collapse" data-bs-target="#faq-list-1">What is STEAM ? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                                <div id="faq-list-1" class="collapse show" data-bs-parent=".faq-list">
                                    <p>
                                        STEAM is a curriculum based on the idea of educating students in
                                        FIVE specific
                                        disciplines — Science, Technology, Engineering, Arts and Mathematics
                                        — in an
                                        interdisciplinary and applied approach. Rather than teach the four
                                        disciplines as
                                        separate and discrete subjects, STEAM integrates them into a
                                        cohesive learning
                                        paradigm based on real-world applications.
                                        What separates STEAM from the traditional science and math education
                                        is the blended
                                        learning environment and showing students how the scientific method
                                        can be applied
                                        to everyday life. It teaches students computational thinking and
                                        focuses on the real
                                        world applications of problem solving

                                    </p>
                                </div>
                            </li>

                            <li data-aos="fade-up" data-aos-delay="200">
                                <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-2" class="collapsed">Why is STEAM important at
                                    school level ?
                                    <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                                <div id="faq-list-2" class="collapse" data-bs-parent=".faq-list">
                                    <p>
                                        <b> Elementary school</b> — STEAM education focuses on the
                                        introductory level STEAM
                                        courses,
                                        as well as awareness of the STEAM fields. This initial step provides
                                        standards-based
                                        structured inquiry-based and real world problem-based learning,
                                        connecting all four
                                        of the STEAM subjects.
                                        <br>
                                        <br>
                                        <b> Middle school</b> — Student awareness of STEAM fields is still
                                        pursued, as well
                                        as the academic requirements of such fields. Student exploration of
                                        STEAM related
                                        careers begins at this level, particularly for underrepresented
                                        populations.
                                        <br>
                                        <br>
                                        <b>High school</b> — The program of study focuses on the application
                                        of the subjects
                                        in a challenging and rigorous manner. Courses and pathways are now
                                        available in
                                        STEAM fields and occupations, as well as preparation for
                                        post-secondary education.

                                    </p>
                                </div>
                            </li>

                            <li data-aos="fade-up" data-aos-delay="300">
                                <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-3" class="collapsed">Why does DABOTICS Stand
                                    for ? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                                <div id="faq-list-3" class="collapse" data-bs-parent=".faq-list">
                                    <p>
                                        DABOTICS INDIA , as the name suggests, Source of Knowledge exists to
                                        promote
                                        Robotics & STEAM experiences for kids. DABOTICS LAB , the Robotics
                                        Lab , will
                                        execute, support, train & develop teams, events, and educators
                                        helping more K-12
                                        students engage in hands on STEAM and IT experiences and will
                                        provide training in
                                        21st Century skills.
                                    </p>
                                </div>
                            </li>

                            <li data-aos="fade-up" data-aos-delay="400">
                                <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-4" class="collapsed">Why Should we join
                                    DABOTICS Club ?<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                                <div id="faq-list-4" class="collapse" data-bs-parent=".faq-list">
                                    <p>
                                        <b> 1.) MOTIVATES & INSPIRES</b><br>
                                        DALAB is a unique platform which motivates, inspires & engages
                                        students to
                                        experience a natural, practical, hands on & experiential learning.
                                        Students will
                                        learn Science, Technology, Engineering & Mathematics concepts in a
                                        fun loving &
                                        exciting way.
                                        <br>
                                        <br>
                                        <b>2.) AMAZING SUPPORT</b><br>
                                        Students will be supported by vast presentations with step by step
                                        demonstration of
                                        various projects students can execute. Students can interact with
                                        lot of robo
                                        enthusiasts & share their work & excitement.
                                        <br>
                                        <br>
                                        <b>3.) HIGHLY MODULAR</b><br>
                                        The kits are highly modular with different types of blocks. Students
                                        can create any
                                        kind of structure ranging from an astronaut to a spacestation, or a
                                        car to a
                                        wheelbot using solar cells and learn the technical aspects behind
                                        its working.
                                        <br>
                                        <br>
                                        <b>4.) ORGANISED LEARNING</b><br>
                                        The process of learning will inherently teach students the ability
                                        to think,
                                        brainstorm & plan their own work when working alone or in teams. The
                                        assessment
                                        systems will help students to identify their strengths & weakness.
                                        <br>
                                        <br>
                                        <b>5.) EASY TO UNDERSTAND</b><br>
                                        Build your robot with an easy to use environment which can be used
                                        by as young as 4
                                        year olds.

                                    </p>
                                </div>
                            </li>

                            <li data-aos="fade-up" data-aos-delay="500">
                                <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-5" class="collapsed">Do You Provide Franchisee
                                    opportunities ?
                                    <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                                <div id="faq-list-5" class="collapse" data-bs-parent=".faq-list">
                                    <p>
                                        Yes, Our AIM is to serve maximum number of students across the
                                        country. We have
                                        attractive franchisee options available with us. For more details
                                        kindly write to us
                                        at contact@dabotics.com
                                    </p>
                                </div>
                            </li>

                        </ul>
                    </div>

                </div>
            </section><!-- End Frequently Asked Questions Section -->
            <!-- My Google Ads Here Dont Touch This Code -->
            <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-7545298674584153" crossorigin="anonymous"></script>
            <!-- FirstAd -->
            <ins class="adsbygoogle" style="display:block" data-ad-client="ca-pub-7545298674584153" data-ad-slot="4270295808" data-ad-format="auto" data-full-width-responsive="true"></ins>
            <script>
                (adsbygoogle = window.adsbygoogle || []).push({});
            </script>
            <!-- My Google Ads Here Dont Touch This Code -->
            <!-- ======= Contact Section ======= -->
            <section id="contact" class="contact">
                <div class="container" data-aos="fade-up">

                    <div class="section-title">
                        <h2>Contact</h2>
                        <p>Need an expert ? You are more than welcomed to leave your contact info and we
                            will be in touch
                            shortly.</p>
                    </div>

                    <div class="row">

                        <div class="col-lg-5 d-flex align-items-stretch">
                            <div class="info">
                                <div class="address">
                                    <i class="bi bi-geo-alt"></i>
                                    <h4>Location:</h4>
                                    <p>DD Puram
                                        Bareilly,<br>Uttar Pradesh 243001<br>
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
                                    <p>0581-3585883, +91 8126664363</p>
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
            <!-- My Google Ads Here Dont Touch This Code -->
            <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-7545298674584153" crossorigin="anonymous"></script>
            <!-- FirstAd -->
            <ins class="adsbygoogle" style="display:block" data-ad-client="ca-pub-7545298674584153" data-ad-slot="4270295808" data-ad-format="auto" data-full-width-responsive="true"></ins>
            <script>
                (adsbygoogle = window.adsbygoogle || []).push({});
            </script>
            <!-- My Google Ads Here Dont Touch This Code -->
    </main><!-- End #main -->
    <div class="fixed-btn">
        <div class="pjcs3 pjcs5"><a class="pjcs5" href="https://api.whatsapp.com/send/?phone=+918126664363&text=Hi!%20I%20am%20interested%20in%20your%20services%20please%20contact%20me%20shortly."><svg xmlns="http://www.w3.org/2000/svg" width="45" height="45" fill="currentColor" class="bi bi-whatsapp" viewBox="0 0 16 16">
                    <path d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z" />
                </svg></a></div>
    </div>

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
                        <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                            <img src="assets/img/clients/client-4.png" class="img-fluid" alt="">
                        </div>
                        <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                            <img src="assets/img/clients/client-5.png" class="img-fluid" alt="">
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
                            DD Puram
                            Bareilly,<br>Uttar Pradesh 243001<br>
                            India <br> </p>
                        <strong>Phone:</strong> 0581-3585883, <br>+91 8126664363<br>
                        <strong>Email:</strong> contact@dabotics.com<br>

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
                            <li><i class="bx bx-chevron-right"></i> <a href="Workshop.php">Workshop</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="ProjectAssistance.php">Project
                                    Assistance</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="LabSetup.php">Lab Setup</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-3 col-md-6 footer-links">
                        <h4>Our Social Networks</h4>
                        <p>Feel Free To Contact Us By Social Networks</p>
                        <div class="social-links mt-3">

                            <a href="https://www.facebook.com/dabotics" class="facebook" target="0"><i class="bx bxl-facebook"></i></a>
                            <a href="https://www.instagram.com/dabotics/" class="instagram" target="0"><i class="bx bxl-instagram"></i></a>
                            <a href="https://wa.me/919368850126" class="google-plus" target="0"><i class="bx bxl-whatsapp"></i></a>
                            <a href="https://www.linkedin.com/company/dabotics-india-pvt-ltd/" class="linkedin" target="0"><i class="bx bxl-linkedin"></i></a>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="container footer-bottom clearfix">
            <div class="copyright">
                &copy; Copyright <strong><span>DaBotics</span></strong>. All Rights Reserved
            </div>

        </div>
    </footer><!-- End Footer -->

    <div id="preloader"></div>
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <!-- <script src="assets/vendor/php-email-form/validate.js"></script> -->
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>
    <!-- CArousel JS -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous">
    </script>


</body>

</html>