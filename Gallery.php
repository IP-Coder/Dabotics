<!DOCTYPE html>
<html lang="en">

<head>

    <title>Gallery</title>
    <?php
    include 'Header.php'
    ?>
    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-7545298674584153"
        crossorigin="anonymous"></script>
</head>

<body>
    <!-- ======= Header ======= -->
    <?php
    include 'Navebar.php'
    ?>
    <!-- End Header -->
    <!-- ======= Services Section ======= -->
    <section class="gallery">
        <div class="row r">
            <?php
            $directory = "assets/img/Gallery";
            $images = glob($directory . "/*.jpg");

            foreach ($images as $image) {
                echo  '<div class="vh-50 col-md-4 border border-info" >
                <img class="mw-100  p-2"  src="' . $image . '" alt="">
            </div>';
            } ?>
        </div>
    </section>
    <!-- ======= Footer ======= -->
    <?php
    include 'Footer.php'
    ?>
    <!-- End Footer -->

</body>

</html>