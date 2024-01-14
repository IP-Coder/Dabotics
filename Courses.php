<!DOCTYPE html>
<html lang="en">

<head>
    <title>Courses</title>
    <?php
    include 'Header.php';
    $courses = [
        "Coding" => 24000,
        "Robotics" => 24000,
        "3D Printing" => 18000,
        "Aeromodelling" => 30000
    ];


    ?>
    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-7545298674584153" crossorigin="anonymous"></script>
</head>

<body>
    <!-- ======= Header ======= -->
    <?php
    include 'Navebar.php'
    ?>
    <!-- End Header -->
    <!-- ======= Pricing Section ======= -->
    <section id="pricing" class="pricing">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>Courses</h2>
                <p>A Top Online Course : you are about to embark on a journey of educational discovery , where you will
                    learn new skills and challenge your self. Take a look at all the relevant details about our online
                    course and get in touch if you have any questions.</p>
            </div>

            <div class="row ">

                <div class="col-lg-4 mt-4 " data-aos="fade-up" data-aos-delay="200">
                    <div class="box featured mt-4">
                        <h3>STEM</h3>
                        <h4><sup>₹
                            </sup>12000<span> </span></h4>
                        <h4><span>Course Duration:1 year</span></h4>

                        <ul>
                            <li><i class="bx bx-check"></i> Only 10 user will in batch.
                            </li>
                            <li><i class="bx bx-check"></i> Training by industry experts.
                            </li>
                            <li><i class="bx bx-check"></i> Grade 1st to 8th.
                            </li>
                            <li><i class="bx bx-check"></i> 10+ Industry project.</li>
                            <li><i class="bx bx-check"></i> Career oriented.
                            </li>
                        </ul>
                        <form>
                            <a href="DemoRegister.php" class="btn btn-primary">Enroll Now</a>
                        </form>
                    </div>
                </div>
                <?php
                foreach ($courses as $course => $price) {
                    echo '
                    <div class="col-lg-4 mt-4 " data-aos="fade-up" data-aos-delay="200">
                    <div class="box featured mt-4">
                        <h3>' . $course . '</h3>
                        <h4><sup>₹
                            </sup>' . $price . '<span> </span></h4>
                        <h4><span>Course Duration:1 year</span></h4>

                        <ul>
                            <li><i class="bx bx-check"></i> Only 10 user will in batch.
                            </li>
                            <li><i class="bx bx-check"></i> Training by industry experts.
                            </li>
                            <li><i class="bx bx-check"></i> Grade 4th to 12th.
                            </li>
                            <li><i class="bx bx-check"></i> 10+ Industry project.</li>
                            <li><i class="bx bx-check"></i> Career oriented.
                            </li>
                        </ul>
                        <form>
                            <a href="DemoRegister.php" class="btn btn-primary">Enroll Now</a>
                        </form>
                    </div>
                </div>';
                }
                ?>
            </div>

        </div>
    </section><!-- End Pricing Section -->

    <!-- ======= Footer ======= -->
    <?php
    include 'Footer.php'
    ?>
    <!-- End Footer -->
</body>

</html>