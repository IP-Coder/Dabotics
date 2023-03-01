<!DOCTYPE html>
<html lang="en">

<head>
    <title>Courses</title>
    <?php
    include 'Header.php';
    $courses = [
        "Digital Marketing" => 6000,
        "Web Development" => 6000,
        "Data Science" => 6000,
        "Artificial Intelligence" => 6000,
        "Machine Learning" => 6000,
        "Graphic Design" => 6000,
        "Cybersecurity" => 6000,
        "Project Management" => 6000,
        "Cloud Computing" => 6000,
        "Full Stack Development" => 6000,
        "Blockchain Technology" => 6000,
        "Mobile App Development" => 6000,
        "Game Development" => 6000,
        "Business Analysis" => 6000,
        "Financial Management" => 6000,
        "Human Resource Management" => 6000,
        "Sales and Marketing" => 6000,
        "Customer Service" => 6000,
        "Supply Chain Management" => 6000,
        "Digital Photography" => 6000,
        "Content Writing" => 6000,
        "Video Editing" => 6000,
        "UI/UX Design" => 6000,
        "Data Analytics" => 6000,
        "Python Programming" => 6000,
        "C++ Programming" => 6000,
        "Java Programming" => 6000,
        "R Programming" => 6000,
        "C# Programming" => 6000,
        "SQL Database Management" => 6000
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
                <?php
                foreach ($courses as $course => $price) {
                    echo '
                    <div class="col-lg-4 mt-4 " data-aos="fade-up" data-aos-delay="200">
                    <div class="box featured mt-4">
                        <h3>' . $course . '</h3>
                        <h4><sup>₹
                            </sup>'.$price.'<span> </span></h4>
                        <h4><span>Course Duration:45 days</span></h4>

                        <ul>
                            <li><i class="bx bx-check"></i> Only 10 user will in batch.
                            </li>
                            <li><i class="bx bx-check"></i> Training by industry experts.
                            </li>
                            <li><i class="bx bx-check"></i> IIC And IIT Trainers.
                            </li>
                            <li><i class="bx bx-check"></i> 10+ Industry project.</li>
                            <li><i class="bx bx-check"></i> 100% job Assistance.
                            </li>
                        </ul>
                        <form>
                            <a href="Contactus.php" class="btn btn-primary">Enroll Now</a>
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