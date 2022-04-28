<?php session_start() ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Register Angvo</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel=icon type=image/png sizes=16x16 href=images/small-icon.png>
    <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
    <link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
    <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
    <link rel="stylesheet" type="text/css" href="css/util.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/sweetalert2@10.10.1/dist/sweetalert2.min.css'>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10.10.1/dist/sweetalert2.all.min.js"></script>
    <style>
        .wrap-login100 {
            padding: 33px 130px 33px 95px;
        }

        @media (max-width: 576px) {
            .wrap-login100 {
                padding: 12px 15px 33px;
            }
        }
    </style>
</head>

<body>

    <div class="limiter">
        <div class="container-login100">
            <div class="wrap-login100">
                <form class="account-form" method="POST" action="../php-controllers/register-server.php" style="width:100%;" enctype="multipart/form-data">
                    <input type="hidden" name=""> <span class="login100-form-title">
                        Angvo Register
                    </span>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="wrap-input100 validate-input">
                                <input class="input100 " type="text" name="first_name" placeholder="First Name" required autocomplete="off">
                                <span class="focus-input100"></span>
                                <span class="symbol-input100">
                                    <i class="fa fa-name" aria-hidden="true"></i>
                                </span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="wrap-input100 validate-input">
                                <input class="input100 " type="text" name="last_name" placeholder="Last Name" required autocomplete="off">
                                <span class="focus-input100"></span>
                                <span class="symbol-input100">
                                    <i class="fa fa-name" aria-hidden="true"></i>
                                </span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="wrap-input100 validate-input">
                                <input class="input100 " type="text" name="phone" placeholder="Phone" required autocomplete="off" value="">
                                <span class="focus-input100"></span>
                                <span class="symbol-input100">
                                    <i class="fa fa-phone" aria-hidden="true"></i>
                                </span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="wrap-input100 validate-input">
                                <input class="input100 " type="text" name="email" placeholder="Email" required autocomplete="off" value="">
                                <span class="focus-input100"></span>
                                <span class="symbol-input100">
                                    <i class="fa fa-envelope" aria-hidden="true"></i>
                                </span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="wrap-input100 validate-input">
                                <input class="input100" type="password" name="password" placeholder="Password" required="">
                                <span class="focus-input100"></span>
                                <span class="symbol-input100">
                                    <i class="fa fa-lock" aria-hidden="true"></i>
                                </span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="wrap-input100 validate-input">
                                <input class="input100" type="password" name="password_confirm" placeholder="Password Confirmation" required="">
                                <span class="focus-input100"></span>
                                <span class="symbol-input100">
                                    <i class="fa fa-lock" aria-hidden="true"></i>
                                </span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="text-center">
                                <input class="form-control" type="file" name="image" required>
                            </div>
                        </div>
                    </div>


                    <div class="container-login100-form-btn">
                        <a href=""><button type="submit" name="register" class="login100-form-btn" style="background-color: #ff5722;width: 265px;">
                                Register
                            </button></a>
                    </div>

                    <div class="text-center p-t-12">
                        <span class="txt1">
                            Already Member?
                        </span>
                        <a class="txt2" href="login.php">
                            Login
                        </a>
                    </div>

                    <!--   <div class="text-center p-t-136">
                        <a class="txt2" href="#">
                            Create your Account
                            <i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
                        </a>
                    </div> -->
                </form>
            </div>
        </div>
    </div>
    <script src="vendor/jquery/jquery-3.2.1.min.js"></script>
    <script src="vendor/bootstrap/js/popper.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="vendor/select2/select2.min.js"></script>
    <script src="vendor/tilt/tilt.jquery.min.js"></script>
    <script>
        $('.js-tilt').tilt({
            scale: 1.1
        })
    </script>
    <script src="js/main.js"></script>
    <script>
        var toastMixin = Swal.mixin({
            toast: true,
            icon: 'success',
            title: 'General Title',
            animation: false,
            position: 'top-right',
            showConfirmButton: false,
            timer: 3000,
            timerProgressBar: true,
            didOpen: (toast) => {
                toast.addEventListener('mouseenter', Swal.stopTimer)
                toast.addEventListener('mouseleave', Swal.resumeTimer)
            }
        });
        <?php if (isset($_SESSION['register'])) { ?>
            toastMixin.fire({
                animation: true,
                icon: 'success',
                title: ' <?= $_SESSION['register'] ?>'
            });
        <?php unset($_SESSION['register']);
        } ?>
        <?php if (isset($_SESSION['email_exist'])) { ?>
            toastMixin.fire({
                animation: true,
                icon: 'warning',
                title: ' <?= $_SESSION['email_exist'] ?>'
            });
        <?php unset($_SESSION['email_exist']);
        } ?>
    </script>
</body>

</html>