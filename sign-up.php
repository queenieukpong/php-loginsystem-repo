<?php
include("include/config.php");
if (isset($_POST['email'])) {
    $email = $_POST["email"];
    $firstname = $_POST["firstname"];
    $surname = $_POST["surname"];
    $password = $_POST["password"];
    $confirm_password = $_POST["confirm_password"];

    if ($password == $confirm_password) {
        $encrypted_password = hash('md5', $password);
        $sql = "insert into users (email, firstname, surname, password) values ('$email', '$firstname', '$surname', '$encrypted_password')";
        mysqli_query($conn, $sql) or die("Data Not Saved!");
        echo "<p style='color:green;text-align:center;'>User Account Created Successfully</p>";
    } else {
        echo "<p style ='color:red;text-align:center;'>
        Please re-confirm your password </p>";
    }
}
?>


<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="">
    <meta name="author" content="">

    <title>AGIT CodeWorks - Sign Up Page</title>


    <link rel="preconnect" href="https://fonts.googleapis.com">

    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;300;400;700;900&display=swap" rel="stylesheet">

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-icons.css" rel="stylesheet">

    <link rel="stylesheet" href="css/slick.css" />

    <link href="css/tooplate-little-fashion.css" rel="stylesheet">


</head>

<body>

    <section class="preloader">
        <div class="spinner">
            <span class="sk-inner-circle"></span>
        </div>
    </section>

    <main>

        <section class="sign-in-form section-padding">
            <div class="container">
                <div class="row">

                    <div class="col-lg-8 mx-auto col-12">

                        <h1 class="hero-title text-center mb-5">Sign Up</h1>

                        <div class="row">
                            <div class="col-lg-8 col-11 mx-auto">
                                <form role="form" method="post">

                                    <div class="form-floating">
                                        <input type="email" name="email" id="email" pattern="[^ @]*@[^ @]*" class="form-control" placeholder="Email address" required>

                                        <label for="email">Email address</label>
                                    </div>

                                    <div class="form-floating my-4">
                                        <input type="text" name="firstname" id="firstname" class="form-control" placeholder="Firstname" required>

                                        <label for="firstname">Firstname</label>

                                    </div>

                                    <div class="form-floating my-4">
                                        <input type="text" name="surname" id="surname" class="form-control" placeholder="Surname" required>

                                        <label for="surname">Surname</label>

                                    </div>

                                    <div class="form-floating my-4">
                                        <input type="password" name="password" id="password" pattern="[0-9a-zA-Z]{4,10}" class="form-control" placeholder="Password" required>

                                        <label for="password">Password</label>

                                    </div>

                                    <div class="form-floating">
                                        <input type="password" name="confirm_password" id="confirm_password" pattern="[0-9a-zA-Z]{4,10}" class="form-control" placeholder="Password" required>

                                        <label for="confirm_password">Password Confirmation</label>
                                    </div>

                                    <button type="submit" class="btn custom-btn form-control mt-4 mb-3">
                                        Create account
                                    </button>

                                    <p class="text-center">Already have an account? Please <a href="sign-in.php">Sign In</a></p>

                                </form>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </section>

    </main>

    <footer class="site-footer">
        <div class="container">
            <div class="row">

                <div class="col-lg-3 col-10 me-auto mb-4">
                    <h4 class="text-white mb-3"><a href="index.php">AGIT</a> CodeWorks</h4>
                    <p class="copyright-text text-muted mt-lg-5 mb-4 mb-lg-0">Copyright © 2022 <strong>AGIT CodeWorks</strong></p>
                    <br>
                    <p class="copyright-text">Designed by <a href="https://www.agitsolutionsng.com/" target="_blank">Tooplate</a></p>
                </div>

                <div class="col-lg-5 col-8">
                    <h5 class="text-white mb-3">Sitemap</h5>

                    <ul class="footer-menu d-flex flex-wrap">
                        <li class="footer-menu-item"><a href="about.php" class="footer-menu-link">Story</a></li>

                        <li class="footer-menu-item"><a href="#" class="footer-menu-link">Products</a></li>

                        <li class="footer-menu-item"><a href="#" class="footer-menu-link">Privacy policy</a></li>

                        <li class="footer-menu-item"><a href="#" class="footer-menu-link">FAQs</a></li>

                        <li class="footer-menu-item"><a href="#" class="footer-menu-link">Contact</a></li>
                    </ul>
                </div>

                <div class="col-lg-3 col-4">
                    <h5 class="text-white mb-3">Social</h5>

                    <ul class="social-icon">

                        <li><a href="#" class="social-icon-link bi-youtube"></a></li>

                        <li><a href="#" class="social-icon-link bi-whatsapp"></a></li>

                        <li><a href="#" class="social-icon-link bi-instagram"></a></li>

                        <li><a href="#" class="social-icon-link bi-skype"></a></li>
                    </ul>
                </div>

            </div>
        </div>
    </footer>

    <!-- JAVASCRIPT FILES -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/Headroom.js"></script>
    <script src="js/jQuery.headroom.js"></script>
    <script src="js/slick.min.js"></script>
    <script src="js/custom.js"></script>

</body>

</html>