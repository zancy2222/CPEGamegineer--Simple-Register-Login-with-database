<?php require_once "controllerUserData.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Signup Form</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="wrapper">
    <nav class="nav">
        <div class="nav-logo">
            <img src="images/logo.png" alt="Logo">
        </div>
        <div class="nav-button">
            <button class="btn white-btn" id="aboutBtn">About Us</button>
            <button class="btn white-btn" id="contactBtn">Contact Us</button>
        </div>
        <div class="nav-menu-btn">
            <i class="bx bx-menu" onclick="myMenuFunction()"></i>
        </div>
    </nav>
    <div class="container">
        <div class="row">
            <div class="col-md-4 offset-md-4 form">
                <form action="signup-user.php" method="POST" autocomplete="">
                    <h2 class="text-center">Signup Here</h2>
                    <p class="text-center">Input your credentials now</p>
                    <?php
                    if(count($errors) == 1){
                        ?>
                        <div class="alert alert-danger text-center">
                            <?php
                            foreach($errors as $showerror){
                                echo $showerror;
                            }
                            ?>
                        </div>
                        <?php
                    }elseif(count($errors) > 1){
                        ?>
                        <div class="alert alert-danger">
                            <?php
                            foreach($errors as $showerror){
                                ?>
                                <li><?php echo $showerror; ?></li>
                                <?php
                            }
                            ?>
                        </div>
                        <?php
                    }
                    ?>
                    <div class="form-group">
                        <input class="form-control" type="text" name="name" placeholder="Full Name" required value="<?php echo $name ?>">
                    </div>
                    <div class="form-group">
                        <input class="form-control" type="email" name="email" placeholder="Email Address" required value="<?php echo $email ?>">
                    </div>
                    <div class="form-group">
                        <input class="form-control" type="password" name="password" placeholder="Password" required>
                    </div>
                    <div class="form-group">
                        <input class="form-control" type="password" name="cpassword" placeholder="Confirm password" required>
                    </div>
                    <div class="form-group">
                        <input class="form-control button" type="submit" name="signup" value="Signup">
                    </div>
                    <div class="link login-link text-center">Have an acc already?<a href="login-user.php">Login here</a></div>
                </form>
            </div>
        </div>
    </div>


    
</body>
</html>

<!--Footer-->
<footer class="footer">
    <div class="footer-content">
        <div class="logo-holder">
        </div>
        <ul class="social-media">
            <li><a href="https://www.facebook.com/login"><i class="bx bxl-facebook"></i></a></li>
            <li><a href="https://twitter.com/login"><i class="bx bxl-twitter"></i></a></li>
            <li><a href="https://www.instagram.com/accounts/login/"><i class="bx bxl-instagram"></i></a></li>
            <li><a href="https://www.youtube.com/"><i class="bx bxl-youtube"></i></a></li>
            <li><a href="https://www.linkedin.com/"><i class="bx bxl-linkedin"></i></a></li>
        </ul>
    </div>
</footer>
