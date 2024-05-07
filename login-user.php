<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap');

*{  
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Poppins', sans-serif;
}

body {
    background: url("images/1.jpg");
    background-size: cover; 
    background-repeat: no-repeat;
    background-attachment: fixed;
    overflow: hidden;
    z-index: 0;
}

.nav-button {
    margin-right: 50px; 
    margin-left: auto; 
}
.wrapper {
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 110vh;
    background: rgba(39, 39, 39, 0.4);
    position: relative;
    z-index: 1;
    overflow: visible; 
}

.nav{
    position: fixed;
    top: 0;
    display: flex;
    justify-content: space-around;
    width: 100%;
    height: 100px;
    line-height: 100px;
    background: linear-gradient(rgba(39,39,39, 0.6), transparent);
    z-index: 100;
}


.nav-logo {
    width: 80px; 
    height: auto; 
    margin-left: 20px; 
    margin-top: 20px;
}

.nav-logo img {
    width: 100%;
    height: auto; 
}

.nav-logo p{
    color: white;
    font-size: 25px;
    font-weight: 600;
}

.nav-menu ul{
    display: flex;
}

.nav-menu ul li{
    list-style-type: none;
}

.nav-menu ul li .link{
    text-decoration: none;
    font-weight: 500;
    color: #fff;
    padding-bottom: 15px;
    margin: 0 25px;
}

.link:hover, .active{
    border-bottom: 2px solid #fff;
}

.nav-button .btn{
    width: 130px;
    height: 40px;
    font-weight: 500;
    background: rgba(255, 255, 255, 0.4);
    border: none;
    border-radius: 30px;
    cursor: pointer;
    transition: .3s ease;
}

.btn:hover{
    background: rgba(255, 255, 255, 0.3);
}

.btn.white-btn{
    background: rgba(255, 255, 255, 0.7);
}
.btn.btn.white-btn:hover{
    background: rgba(255, 255, 255, 0.5);
}
.nav-menu-btn{
    display: none;
}

.form-box{
    position: relative;
    display: flex;
    align-items: center;
    justify-content: center;
    width: 512px;
    height: 420px;
    overflow: hidden;
    z-index: 2;
}

.login-container{
    position: absolute;
    left: 4px;
    width: 500px;
    display: flex;
    flex-direction: column;
    transition: .5s ease-in-out;
}

.register-container{
    position: absolute;
    right: -520px; 
    width: 500px;
    display: flex;
    flex-direction: column;
    transition: .5s ease-in-out;
}

.top span{
    color: #fff;
    font-size: small;
    padding: 10px 0;
    display: flex;
    justify-content: center;
}

.top span a{
    font-weight: 500;
    color: #fff;
    margin-left: 5px;
}

header{
    color: #fff;
    font-size: 30px;
    text-align: center;
    padding: 10px 0 30px 0;
}

.two-forms{
    display: flex;
    gap: 10px;
    margin-bottom: 0px;
}

.two-forms .input-box {
    flex: 1; 
}

.two-forms .input-box:first-child {
    margin-right: 0px;
}

.input-field{
    font-size: 15px;
    background: rgba(255, 255, 255, 0.2);
    color: #fff;
    height: 50px;
    width: 100%;
    padding: 0 10px 0 45px;
    border: none;
    border-radius: 30px;
    outline: none;
    transition: .2s ease;
}

.input-field:hover, .input-field:focus{
    background: rgba(255, 255, 255, 0.25);
}

::-webkit-input-placeholder{
    color: #fff;
}

.input-box i{
    position: relative;
    top: -35px;
    left: 17px;
    color: #fff;
}

.submit{
    font-size: 15px;
    font-weight: 500;
    color: black;
    height: 45px;
    width: 100%;
    border: none;
    border-radius: 30px;
    outline: none;
    background: rgba(255, 255, 255, 0.7);
    cursor: pointer;
    transition: .3s ease-in-out;
}

.submit:hover{
    background: rgba(255, 255, 255, 0.5);
    box-shadow: 1px 5px 7px 1px rgba(0, 0, 0, 0.2);
}
.text-container {
    text-align: center;
    margin-top: 20px; 
}

.input-text {
    color: #fff;
    font-size: small;
}

.input-text a {
    font-weight: 500;
    color: #fff;
}

.input-text a:hover {
    text-decoration: underline;
}


.submit:hover{
    background: rgba(255, 255, 255, 0.5);
    box-shadow: 1px 5px 7px 1px rgba(0, 0, 0, 0.2);
}

.two-col {
    display: flex;
    justify-content: space-between;
    align-items: center;
    color: #fff;
    font-size: small;
    margin-top: 10px;
}

.two-col .one {
    display: flex;
    gap: 5px;
    align-items: center;
}

.two-col .one label {
    margin-right: 5px;
}

.two-col .two {
    display: flex;
    align-items: center; 
}

.two-col .two a {
    text-decoration: none;
    color: #fff;
    font-size: small;
}

.two-col .two a:hover {
    text-decoration: underline;
}

footer {
    position: fixed;
    bottom: 0;
    width: 100%;
    background-color: rgba(39, 39, 39, 0.6);
    padding: 10px 0;
    text-align: center;
    z-index: 100;
}
.footer {
    position: fixed;
    bottom: 0;
    width: 100%;
    background-color: rgba(39, 39, 39, 0.6);
    padding: 10px 0;
    text-align: center;
    z-index: 100;
}

.logo-holder {
    float: left;
    margin-left: 20px; 
}

.social-media {
    list-style-type: none;
    margin: 0;
    padding: 0;
    display: inline-block;
}

.social-media li {
    display: inline-block;
    margin: 0 15px;
}

.social-media li:not(:last-child) {
    margin-right: 15px; 
}

.social-media a {
    color: white;
    font-size: 20px;
    text-decoration: none;
    transition: color 0.3s;
}

.social-media a:hover {
    color: #ccc;
}


.footer-content {
    max-width: 1200px;
    margin: 0 auto;
}


@media only screen and (max-width: 786px){
    .nav-button{
        display: none;
    }
    .nav-menu.responsive{
        top: 100px;
    }
    .nav-menu{
        position: absolute;
        top: -800px;
        display: flex;
        justify-content: center;
        background: rgba(255, 255, 255, 0.2);
        width: 100%;
        height: 90vh;
        backdrop-filter: blur(20px);
        transition: .3s;
    }
    .nav-menu ul{
        flex-direction: column;
        text-align: center;
    }
    .nav-menu-btn{
        display: block;
    }
    .nav-menu-btn i{
        font-size: 25px;
        color: #fff;
        padding: 10px;
        background: rgba(255, 255, 255, 0.2);
        border-radius: 50%;
        cursor: pointer;
        transition: .3s;
    }
    .nav-menu-btn i:hover{
        background: rgba(255, 255, 255, 0.15);
    }
}
@media only screen and (max-width: 540px) {
    .wrapper{
        min-height: 100vh;
    }
    .form-box{
        width: 100%;
        height: 500px;
    }
    .register-container, .login-container{
        width: 100%;
        padding: 0 20px;
    }
    .register-container .two-forms{
        flex-direction: column;
        gap: 0;
    }
}
    </style>
    <title>CPE GAMEGINEER</title>
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

    <!-- Form box -->    
    <div class="form-box">
        
    <form action="login_process.php" method="post" style="margin-bottom: 90%;">
    <!-- Login Form -->
    <div class="login-container" id="login">
        <header>Login</header>
        <div class="input-box">
            <input type="text" class="input-field" placeholder="Email" name="email">
            <i class="bx bx-envelope"></i>
        </div>
        <div class="input-box">
            <input type="password" class="input-field" placeholder="Password" name="password">
            <i class="bx bx-lock-alt"></i>
        </div>
        <div class="input-box">
            <input type="submit" class="submit" value="Sign In">
        </div>
        <div class="text-container">
            <div class="input-text">Don't have an account? <a href="#" onclick="register()">Sign Up</a></div>
        </div>
        <div class="two-col">
            <div class="one">
                <input type="checkbox" id="login-check">
                <label for="login-check"> Verify Human </label>
            </div>
            <div class="two">
                <label>Forgot Password? <a href="#" onclick=""></a></label>
            </div>
        </div>
    </div>
</form>



        <form action="register_process.php" method="post" style="margin-bottom: 90%;">
    <!-- Registration Form -->
    <div class="register-container" id="register">
    <header>Sign up</header>
        <div class="two-forms">
            <div class="input-box">
                <input type="text" class="input-field" placeholder="First name" name="first_name">
                <i class="bx bx-user"></i>
            </div>
            <div class="input-box">
                <input type="text" class="input-field" placeholder="Last name" name="last_name">
                <i class="bx bx-user"></i>
            </div>
        </div>
        <div class="two-forms">
            <div class="input-box">
                <input type="text" class="input-field" placeholder="Email" id="email" name="email">
                <i class="bx bx-envelope"></i>
            </div>
            <div class="input-box">
                <input type="text" class="input-field" placeholder="Confirm Email" id="confirm-email" name="confirm_email">
                <i class="bx bx-envelope"></i>
            </div>
        </div>
        <div class="two-forms">
            <div class="input-box">
                <input type="password" class="input-field" placeholder="Password" id="password" name="password">
                <i class="bx bx-lock-alt"></i>
            </div>
            <div class="input-box">
                <input type="password" class="input-field" placeholder="Confirm Password" id="confirm-password" name="confirm_password">
                <i class="bx bx-lock-alt"></i>
            </div>
        </div>
        <div class="input-box">
            <input type="submit" class="submit" value="Register">
        </div>
        <div class="text-container">
            <div class="input-text">Have an account? <a href="#" onclick="login()">Login</a></div>
        </div>    
        <div class="two-col">
            <div class="one">
                <input type="checkbox" id="register-check">
                <label for="register-check"> Verify Human</label>
            </div>
            <div class="two">
                <label>Terms & Conditions <a href="#" onclick=""></a></label>
            </div>
        </div>
    </div>
</form>

    </div>
</div> 


<!-- Terms And Conditions-->
<div id="terms-modal" class="modal">
    <div class="modal-content">
      <span class="close">&times;</span>
      <h2>Terms & Conditions</h2>
      <p>
        By accessing and using this website, you accept and agree to be bound by the following terms and conditions:
      </p>
      <ol>
        <li>This website is for informational purposes only.</li>
        <li>We reserve the right to modify or terminate the service at any time without notice.</li>
        <li>Your use of the service is at your sole risk.</li>
        <li>We do not warrant that the service will be uninterrupted, timely, secure, or error-free.</li>
        <li>We reserve the right to refuse service to anyone for any reason at any time.</li>
      </ol>
      <p>Please read these terms and conditions carefully. If you do not agree to these terms and conditions, you should not use this website.</p>
      <button id="agree-btn">Agree</button>
    </div>
  </div>
  

<!--Footer-->
<footer>
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

<!--JavaScript-->


<script>
   function myMenuFunction() {
    var i = document.getElementById("navMenu");
    if(i.className === "nav-menu") {
        i.className += " responsive";
    } else {
        i.className = "nav-menu";
    }
   }

document.addEventListener("DOMContentLoaded", function() {
    var aboutLink = document.querySelector(".link:not(.active)");
    var aboutInfo = document.getElementById("about-info");

    aboutLink.addEventListener("click", function(event) {
        event.preventDefault();
        toggleInfo(aboutInfo);
    });

    function toggleInfo(infoSection) {
        var sections = document.querySelectorAll(".info-section");
        sections.forEach(function(section) {
            if (section === infoSection) {
                section.classList.toggle("show");
            } else {
                section.classList.remove("show");
            }
        });
    }

    function goToHome() {
        window.location.href = "index.html";
    }


});
function login() {
    var x = document.getElementById("login");
    var y = document.getElementById("register");
    var a = document.getElementById("loginBtn");
    var b = document.getElementById("registerBtn");

    x.style.left = "4px";
    y.style.right = "-520px";
    a.classList.add("white-btn");
    b.classList.remove("white-btn");
    x.style.opacity = 1;
    y.style.opacity = 0;
}

function register() {
    var x = document.getElementById("login");
    var y = document.getElementById("register");
    var a = document.getElementById("loginBtn");
    var b = document.getElementById("registerBtn");

    x.style.left = "-510px";
    y.style.right = "5px";
    a.classList.remove("white-btn");
    b.classList.add("white-btn");
    x.style.opacity = 0;
    y.style.opacity = 1;
}

function validateRegistration() {
    var password = document.getElementById("password").value;
    var confirmPassword = document.getElementById("confirm-password").value;
    var email = document.getElementById("email").value;
    var confirmEmail = document.getElementById("confirm-email").value;

    if (password !== confirmPassword) {
        alert("Passwords do not match");
        return false;
    }

    if (email !== confirmEmail) {
        alert("Emails do not match");
        return false;
    }

    return true;

/*Terms and Conditions  */
    document.addEventListener("DOMContentLoaded", function() {
  var modal = document.getElementById("terms-modal");
  var closeBtn = document.querySelector(".close");
  var agreeBtn = document.getElementById("agree-btn");

  function openModal() {
    modal.style.display = "block";
  }

  function closeModal() {
    modal.style.display = "none";
  }
  document.getElementById("terms-link").addEventListener("click", openModal);
  closeBtn.addEventListener("click", closeModal);

  window.addEventListener("click", function(event) {
    if (event.target == modal) {
      closeModal();
    }
  });

 
  agreeBtn.addEventListener("click", function() {
    // Add logic here to handle the agreement action
    closeModal(); 
  });
});




}

</script>

</body>
</html>
