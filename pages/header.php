<?php
$navbars = [
    ['title' => 'Home', 'href' => 'home.php'],
    ['title' => 'About', 'href' => 'about.php'],
    ['title' => 'Services', 'href' => 'services.php'],
    ['title' => 'Contact', 'href' => 'https://wa.me/+923019115376?text=I want to contact with you through angvo.', 'target' => '_blank'],
    ['title' => 'Login', 'href' => 'login.php'],
    ['title' => 'Register', 'href' => 'register.php'],
];
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Angvo</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.0/css/all.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <link rel=icon type=image/png sizes=16x16 href=../images/small-icon.png>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    <style>
        .whatsapp {
            position: fixed;
            right: 2px;
            bottom: 7px;
            font-size: 40px;
            padding: 18px 20px 18px 20px;
            background: #0cff1f;
            border-radius: 80%;
            margin-right: 20px;
            margin-top: -90px;

        }

        .form-button {
            border: none;
            background: #fc5546;
            color: white;
            margin-left: -2px;
        }

        .text-justify {
            text-align: justify;
        }

        .line-height {
            line-height: 25pt;
        }

        .text-color {
            color: white;
        }

        .text-hover:hover {
            color: #fd7e14;
        }

        .card-icon {
            background: #f86e03;
            height: 70px;
            width: 70px;
            text-align: center;
            line-height: 70px;
            border-radius: 50%;
            font-size: 30px;
            color: #fff;
        }

        .header-icon {
            background-color: black;
            border-radius: 100%;
            padding: 10px;
            color: white;
        }

        .header-icon:hover {
            background: white;
            color: #ff5722;
        }

        .footer-icon {
            background-color: #14346b;
            border-radius: 20%;
            padding: 10px;
            color: #4a70b1;
        }

        .footer-icon:hover {
            background: #ff5722;
            color: white;
        }

        .footer-info {
            font-size: 30px;
            background: #14346b;
            padding: 20px 25px 20px 25px;
            color: #4a70b1;
            border-radius: 100%;
        }

        .footer-info:hover {
            background: #ff5722;
            color: white;
        }

        .btn-primary:hover,
        .btn-primary:focus,
        .btn-primary:active,
        .btn-primary.active,
        .open>.dropdown-toggle.btn-primary {
            color: #fff;
            background-color: #00b3db;
            border-color: #285e8e;
            /*set the color you want here*/
        }

        .footer-hover:hover .footer-info {
            background: white;
            color: #f86e03;
        }

        .card-icon:hover {
            background: white;
            color: #f86e03;
        }

        .btn-primary:hover,
        .btn-primary:focus,
        .btn-primary:active,
        .btn-primary.active,
        .open>.dropdown-toggle.btn-primary {
            color: #fff;
            background-color: #00b3db;
            border-color: #285e8e;
            /*set the color you want here*/
        }

        .toggle-btn {
            position: absolute;
            right: 0px;
            top: 16px;
        }

        .mobile-cart-icon {
            display: none;
        }

        .box {
            /*background: white;
            width: 100%;
            height: 300px;
            border-radius: 5%;*/
        }

        .hoverable:hover .card-icon {
            background: white;
            color: #f86e03;
        }

        .hoverable:hover {
            background: #f86e03;
            color: white !important;
            border: 1px solid #f86e03;
        }
        .font-size-13 {
            font-size: 13px;
        }

        @media (max-width:480px) {
            .icons {
                display: none !important;
            }

            .display-btn {
                display: none;
            }

            .logo-img {
                height: 45px;
            }

            .center {
                text-align: center;
            }

            .pad-top {
                padding-top: 20px;
            }

            .f-s {
                font-size: 19px;
            }

        }

        @media (max-width:768px) {
            .mobile-cart-icon {
                display: block;
                font-size: 36px;
                position: absolute;
                right: 74px;
                top: 7px;
            }
        }

        .facebook {
            padding-left: 13px;
            padding-right: 13px;
        }
    </style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.theme.min.css">
    <style type="text/css">
        .testimonial {
            border: 10px solid #662a66;
            padding: 40px 0 25px 0;
            margin: 50px;
            text-align: center;
            position: relative;
        }

        .testimonial:before {
            content: "\f10d";
            font-family: "Font Awesome 5 Free";
            width: 100px;
            height: 100px;
            line-height: 100px;
            background: #fff;
            margin: 0 auto;
            font-size: 70px;
            font-weight: 900;
            color: #f1971f;
            position: absolute;
            top: -60px;
            left: 0;
            right: 0;
        }

        .testimonial .title {
            padding: 7px 0;
            margin: 0 -30px 20px;
            border: 7px solid #fff;
            background: #e8326f;
            font-size: 22px;
            font-weight: 700;
            color: #fff;
            letter-spacing: 1px;
            text-transform: uppercase;
            position: relative;
        }

        .testimonial .title:before {
            content: "";
            border-top: 15px solid #662a66;
            border-left: 15px solid transparent;
            border-bottom: 15px solid transparent;
            position: absolute;
            bottom: -37px;
            left: 0;
        }

        .testimonial .title:after {
            content: "";
            border-top: 15px solid #662a66;
            border-right: 15px solid transparent;
            border-bottom: 15px solid transparent;
            position: absolute;
            bottom: -37px;
            right: 0;
        }

        .testimonial .post {
            display: inline-block;
            font-size: 14px;
            font-weight: 700;
            color: #fff;
            text-transform: capitalize;
        }

        .testimonial .description {
            padding: 0 20px;
            margin: 0;
            font-size: 15px;
            color: #6f6f6f;
            letter-spacing: 1px;
            line-height: 30px;
        }

        .owl-theme .owl-controls {
            margin-top: 0;
        }

        .owl-theme .owl-controls .owl-buttons div {
            display: inline-block;
            width: 40px;
            height: 40px;
            line-height: 35px;
            background: #f1971f;
            color: #fff;
            border-radius: 0;
            margin-right: 5px;
            opacity: 1;
        }

        .owl-prev:before,
        .owl-next:before {
            content: "\f060";
            font-family: "Font Awesome 5 Free";
            font-size: 20px;
            font-weight: 900;
        }

        .owl-next:before {
            content: "\f061";
        }

        @media only screen and (max-width: 990px) {
            .testimonial {
                margin: 30px;
            }
        }

        .hight-class {
            height: 310px !important;
        }
    </style>
    <div class="container-fluid p-0">
        <div class="col-md-12" style="background:#ff5722;">
            <div class="container p-2">
                <div class="row">
                    <div class="col-md-6 text-center">
                        <span class="text-white">Turning Brands into Amazon Best Sellers</span>
                    </div>
                    <div class="col-md-6 icons">
                        <a href="#" class="rounded-circle bg-primary"><i class="pull-right m-1 fa fa-instagram header-icon "></i></a>
                        <a href="#"><i class="pull-right m-1 fa fa-twitter header-icon"></i></a>
                        <a href="#"><i class="pull-right m-1 fa fa-facebook header-icon"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-12 sticky-top " style="background:white;">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <nav class="navbar navbar-expand-lg navbar-light">
                        <a href="#" class="navbar-brand">
                            <img class="logo-img" src="images/logo.png" alt="Logo" height="70">
                        </a>
                        <div class="container-fluid">
                            <button class="navbar-toggler toggle-btn" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <i class="fa fa-shopping-cart p-2 mobile-cart-icon"></i>
                            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                    <?php foreach ($navbars as $nav) { ?>
                                        <li class="nav-item"><a target="<?php echo $nav['target'] ?>" href="<?php echo $nav['href'] ?>" class="nav-link h4<?php echo $nav['class'] ?>"><?php echo $nav['title'] ?></a></li>
                                    <?php } ?>
                                    <a href="angvo-services.html" class="btn btn-primary hoverable display-btn ms-5">
                                        LET'S GET STARTED</a>
                                </ul>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>