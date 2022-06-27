<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css">

    <title>Course page</title>
    <?php
        include 'Header.php'
    ?>
</head>

<body>

    <?php
        include 'Navebar.php'
    ?>
    <!-- End Header -->

    <section class="course_page">
        <div class="containermycourse">
            <div class="row">
                <div class="col-8">
                    <iframe width="658" height="340"
                        src="https://www.youtube-nocookie.com/embed/videoseries?list=PLUUcdkdEx1CAbsd1Lkk4YUPDaXNbwCAjv"
                        title="YouTube video player" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen></iframe>
                </div>

                <div  class="col-4 scrollable" data-bs-spy="scroll" data-bs-target=".navbar" data-bs-offset="50" >
                    <div class="card vid_playlist" style="width: 18rem;">
                        <div class="card-body">
                            <!-- <h5 class="card-title">Special title treatment</h5> -->
                            <img src="assets/img/Python-language1.png" alt="" width="256" height="100">
                            
                            <a href="#" class="btn btn-primary">Play</a>
                        </div>
                    </div>

                    <div class="card vid_playlist" style="width: 18rem;">
                        <div class="card-body">
                            <!-- <h5 class="card-title">Special title treatment</h5> -->
                            <img src="assets/img/Python-language1.png" alt="" width="256" height="100">
                            
                            <a href="#" class="btn btn-primary">Play</a>
                        </div>
                    </div>

                    <div class="card vid_playlist" style="width: 18rem;">
                        <div class="card-body">
                            <!-- <h5 class="card-title">Special title treatment</h5> -->
                            <img src="assets/img/Python-language1.png" alt="" width="256" height="100">
                            <a href="#" class="btn btn-primary">Play</a>
                        </div>
                    </div>

                    <div class="card vid_playlist" style="width: 18rem;">
                        <div class="card-body">
                            <!-- <h5 class="card-title">Special title treatment</h5> -->
                            <img src="assets/img/Python-language1.png" alt="" width="256" height="100">
                            
                            <a href="#" class="btn btn-primary">Play</a>
                        </div>
                    </div>

                    <div class="card vid_playlist" style="width: 18rem;">
                        <div class="card-body">
                            <!-- <h5 class="card-title">Special title treatment</h5> -->
                            <img src="assets/img/Python-language1.png" alt="" width="256" height="100">
                            
                            <a href="#" class="btn btn-primary">Play</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Header END NAVBAR -->

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
</body>

</html>