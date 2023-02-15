<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Payment</title>
</head>
<!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.2/css/bootstrap.min.css" integrity="sha512-YSW8sJ0Mk9X7E42bTzTj8VvZQ0BhP30NkLoNVG6y/78GRyDD9RGhEkb6r/cNpZl25ByZAC5pMk5c3i5a5y5HXw==" crossorigin="anonymous" referrerpolicy="no-referrer" /> -->
<style>
    /* center the form */
    .form-container {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        width: 50rem;
    }
</style>

<body>
    <div class="container  form-container">
        <form>
            <div class="mb-3 ">
                <div class="lbl">
                    <label for="exampleInputEmail1" class="form-label">Pay using this QR</label>
                </div>
                <div class="img ">
                    <img src="Img.jpg" width="50%" alt="">
                    <label for="exampleInputEmail1" class="form-label">Pay 500/- Now</label>
                </div>
                <div class="lbl text-center">
                </div>
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Name</label>
                <input type="name" required class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Contact No</label>
                <input type="tel" required class="form-control" id="exampleInputPassword1">
            </div>

            <button type="submit" class="btn btn-primary" data-bs-toggle="modal"
                data-bs-target="#exampleModal">Continue</button>
        </form>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Success</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    You have successfully paid the ammount <br>
                    To complete your regitration please continue
                </div>
                <div class="modal-footer">
                    <a href="https://forms.gle/B5Yx2CJV9G1iWqAW7" class="btn btn-primary">Continue</a>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>


</body>

</html>