<?php require "includes/header.php"; ?>

<!-- Heroes -->
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.104.2">
    <title>Heroes · Bootstrap v5.2</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/heroes/">
    <link href="./assets/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }

        .b-example-divider {
            height: 3rem;
            background-color: rgba(0, 0, 0, .1);
            border: solid rgba(0, 0, 0, .15);
            border-width: 1px 0;
            box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
        }

        .b-example-vr {
            flex-shrink: 0;
            width: 1.5rem;
            height: 100vh;
        }

        .bi {
            vertical-align: -.125em;
            fill: currentColor;
        }

        .nav-scroller {
            position: relative;
            z-index: 2;
            height: 2.75rem;
            overflow-y: hidden;
        }

        .nav-scroller .nav {
            display: flex;
            flex-wrap: nowrap;
            padding-bottom: 1rem;
            margin-top: -1px;
            overflow-x: auto;
            text-align: center;
            white-space: nowrap;
            -webkit-overflow-scrolling: touch;
        }
    </style>


    <!-- Custom styles for this template -->
    <link href="heroes.css" rel="stylesheet">
</head>

<body>

    <main>
        <h1 class="visually-hidden">Heroes examples</h1>

        <div class="px-4 py-5 my-5 text-center">
            <img class="d-block mx-auto mb-4" src="./assets/brand/bootstrap-logo.svg" alt="" width="72" height="57">
            <h1 class="display-5 fw-bold">Centered hero</h1>
            <div class="col-lg-6 mx-auto">
                <p class="lead mb-4">Quickly design and customize responsive mobile-first sites with Bootstrap, the world’s most popular front-end open source toolkit, featuring Sass variables and mixins, responsive grid system, extensive prebuilt components, and powerful JavaScript plugins.</p>
                <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
                    <a class="btn btn-primary btn-lg px-4 gap-3" href="./login.php">Login</a>
                    <a class="btn btn-outline-secondary btn-lg px-4" href="./register.php">Register</a>
                </div>
            </div>
        </div>

        <div class="b-example-divider"></div>

        <div class="px-4 pt-5 my-5 text-center border-bottom">
            <h1 class="display-4 fw-bold">Centered screenshot</h1>
            <div class="col-lg-6 mx-auto">
                <p class="lead mb-4">Quickly design and customize responsive mobile-first sites with Bootstrap, the world’s most popular front-end open source toolkit, featuring Sass variables and mixins, responsive grid system, extensive prebuilt components, and powerful JavaScript plugins.</p>
                <div class="d-grid gap-2 d-sm-flex justify-content-sm-center mb-5">
                    <a class="btn btn-primary btn-lg px-4 gap-3" href="./login.php">Login</a>
                    <a class="btn btn-outline-secondary btn-lg px-4" href="./register.php">Register</a>
                </div>
            </div>
            <div class="overflow-hidden" style="max-height: 30vh;">
                <div class="container px-5">
                    <img src="./assets/img/bootstrap-docs.png" class="img-fluid border rounded-3 shadow-lg mb-4" alt="Example image" width="700" height="500" loading="lazy">
                </div>
            </div>
        </div>

        <div class="b-example-divider"></div>

        <div class="container col-xxl-8 px-4 py-5">
            <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
                <div class="col-10 col-sm-8 col-lg-6">
                    <img src="./assets/img/bootstrap-themes.png" class="d-block mx-lg-auto img-fluid" alt="Bootstrap Themes" width="700" height="500" loading="lazy">
                </div>
                <div class="col-lg-6">
                    <h1 class="display-5 fw-bold lh-1 mb-3">Responsive left-aligned hero with image</h1>
                    <p class="lead">Quickly design and customize responsive mobile-first sites with Bootstrap, the world’s most popular front-end open source toolkit, featuring Sass variables and mixins, responsive grid system, extensive prebuilt components, and powerful JavaScript plugins.</p>
                    <div class="d-grid gap-2 d-md-flex justify-content-md-start">
                        <a class="btn btn-primary btn-lg px-4 gap-3" href="./login.php">Login</a>
                        <a class="btn btn-outline-secondary btn-lg px-4" href="./register.php">Register</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="b-example-divider"></div>



        <div class="container my-5">
            <div class="row p-4 pb-0 pe-lg-0 pt-lg-5 align-items-center rounded-3 border shadow-lg">
                <div class="col-lg-7 p-3 p-lg-5 pt-lg-3">
                    <h1 class="display-4 fw-bold lh-1">Border hero with cropped image and shadows</h1>
                    <p class="lead">Quickly design and customize responsive mobile-first sites with Bootstrap, the world’s most popular front-end open source toolkit, featuring Sass variables and mixins, responsive grid system, extensive prebuilt components, and powerful JavaScript plugins.</p>
                    <div class="d-grid gap-2 d-md-flex justify-content-md-start mb-4 mb-lg-3">
                        <a class="btn btn-primary btn-lg px-4 gap-3" href="./login.php">Login</a>
                        <a class="btn btn-outline-secondary btn-lg px-4" href="./register.php">Register</a>
                    </div>
                </div>
                <div class="col-lg-4 offset-lg-1 p-0 overflow-hidden shadow-lg">
                    <img class="rounded-lg-3" src="./assets/img/bootstrap-docs.png" alt="" width="720">
                </div>
            </div>
        </div>


        <div class="b-example-divider mb-0"></div>
    </main>


    <script src="./assets/dist/js/bootstrap.bundle.min.js"></script>


</body>

</html>

<!-- Heroes -->

<?php require "includes/footer.php"; ?>