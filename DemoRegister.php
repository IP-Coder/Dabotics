<!DOCTYPE html>
<html lang="en">

<head>
    <title>Registration Form</title>
    <?php
    include 'Header.php'
    ?>
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
</style>

<body class="d-flex flex-column min-vh-100">
    <!-- ======= Header ======= -->
    <?php
    include 'Navebar.php'
    ?>
    <!-- End Header -->
    <!-- ======= Form Section ======= -->
    <section id="services" class="forms" style="margin-top: 60px;">
        <div class="container">
            <h1 class=" text-center ">RAGISTRATION FORM</h1>

        </div>
        <div class="container my-5">
            <form class="row g-3" action="Success.php" method="POST">
                <div class="col-md-6">
                    <label for="name" class="form-label">Name <sup style="color: red;"> *</sup></label>
                    <input type="text" name="name" required class="form-control" id="name">
                </div>
                <div class="col-md-6">
                    <label for="email" class="form-label">Email Address <sup style="color: red;">*</sup></label>
                    <input type="email" name="email" required class="form-control" id="email">
                </div>
                <div class="col-md-6">
                    <label for="school" class="form-label">School <sup style="color: red;">*</sup></label>
                    <input type="text" name="school" required class="form-control" id="school">
                </div>
                <div class="col-md-6">
                    <label for="course" class="form-label">Our Courses<sup style="color: red;">*</sup></label>
                    <select name="course" id="course" class="form-select">
                        <option value="">-- Select One --</option>
                        <option value="STEM">STEM</option>
                        <option value="Coding">Coding</option>
                        <option value="Robotics">Robotics</option>
                        <option value="3D printing">3D Printing</option>
                        <option value="Aeromodelling">Aeromodelling</option>
                        <option value="Aeromodelling">Summer Camp</option>
                    </select>
                </div>
                <div class="col-md-6">
                    <label for="grade" class="form-label">Grade <sup style="color: red;">*</sup></label>
                    <select name="grade" id="grade" class="form-select">
                        <option value="">-- Select One --</option>
                        <option value="1st to 3rd">1st to 3rd</option>
                        <option value="4th to 6th">4th to 6th</option>
                        <option value="7th to 9th">7th to 9th</option>
                        <option value="10th to 12th">10th to 12th</option>
                    </select>
                </div>
                <div class="col-md-6">
                    <label for="demo_mode" class="form-label">Demo Mode <sup style="color: red;">*</sup></label>
                    <select name="demo_mode" id="demo_mode" class="form-select">
                        <option value="">-- Select One --</option>
                        <option value="Offline">Offline</option>
                        <option value="Online">Online</option>
                    </select>
                </div>
                <div class="col-6">
                    <label for="phone" class="form-label">Phone Number <sup style="color: red;"> *</sup></label>
                    <input type="tel" name="phone" pattern="[0-9]{10}" required class="form-control" id="phone" placeholder="9874****21">
                </div>
                <div class="col-md-6">
                    <label for="dob" class="form-label">Date Of Birth <sup style="color: red;">*</sup></label>
                    <input type="text" name="dob" required class="form-control" id="dob">
                </div>
                <div class="col-md-12">
                    <label for="inputAddress" class="form-label">Address <sup style="color: red;">*</sup>
                    </label>
                    <input type="text" name="address" required class="form-control" id="inputAddress">
                </div>
                <div class="col-md-6">
                    <label for="inputState" class="form-label">State <sup style="color: red;">*</sup>
                    </label>
                    <input type="text" name="state" required class="form-control" id="inputState">
                </div>
                <div class="col-md-6">
                    <label for="inputCity" class="form-label">City <sup style="color: red;">*</sup>
                    </label>
                    <input type="text" name="city" required class="form-control" id="inputCity">
                </div>
                <div class="col-md-12">
                    <label for="inputQuery" class="form-label">Any query <sup style="color: red;">*</sup>
                    </label>
                    <input type="text" name="query" required class="form-control" id="inputQuery">
                </div>
                <div class="text-center ">
                    <button class="btn1" type="submit">Register Here</button>
                </div>

            </form>
        </div>
    </section>
    <!-- ======= Footer ======= -->
    <?php
    include 'Footer.php'
    ?>
    <!-- End Footer -->

</body>

</html>