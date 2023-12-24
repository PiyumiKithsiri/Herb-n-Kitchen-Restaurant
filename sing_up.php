<?php
 session_start();
 require_once("connection.php");

?>

<!DOCTYPE html>
<html>
    <script src="https://kit.fontawesome.com/66aa7c98b3.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./social-media-icons.css">
    

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: "Lucida Sans", "Lucida Sans Regular", "Lucida Grande",
          "Lucida Sans Unicode", Geneva, Verdana, sans-serif;
      }
      
      body {
        width: 100%;
        padding: 1rem;
        height: 100vh;
        display: flex;
        justify-content: center;
        align-items: center;
      }

      #img2{
        position: absolute;
        filter: blur(2.5px);
      }
      
      main {
        display: flex;
        align-items: center;
        flex-direction: column;
        max-width: 35rem;
        border-radius: 10px;
        background: rgba(0, 0, 0, 0.5);
        box-shadow: 0 15px 30px rgba(0, 0, 0, 0.6);
        padding: 2rem;
        font-size: 1rem;
        margin-block: 1rem;
        height: 35rem;
        overflow: hidden;
        position: relative;
      }
      
      .button-box {
        position: relative;
        background-color: #141e30;
        width: auto;
        border-radius: 2.5rem;
        margin-block: 0.5rem 3.5rem;
        z-index: 1;
      }
      
      .toggle-btn {
        display: inline-block;
        color: rgb(255, 255, 255);
        font-size: 1.1rem;
        font-weight: bold;
        letter-spacing: 1px;
        background: transparent;
        border: none;
        padding: 0.6rem 1.5rem;
        cursor: pointer;
        border-radius: 2.5rem;
        z-index: 1;
      }
      
      .btn-active-back {
        background: linear-gradient(to right, #e5c10b, #00aab3);
        width: 50%;
        border-radius: 2.5rem;
        height: 100%;
        position: absolute;
        left: 0px;
        z-index: -1;
        transition: 0.5s left linear;
      }
      
      .form-box {
        width: 100%;
        position: relative;
      }
      
      form {
        width: 100%;
        position: absolute;
        transition: left 0.5s linear;
      }
      
      .login-form {
        left: 0px;
      }
      
      .register-form {
        left: 115%;
      }
      
      .input-box {
        display: flex;
        flex-direction: column;
        font-size: 1rem;
        margin-bottom: 2.5rem;
        position: relative;
      }
      
      .input-box input {
        width: 100%;
        padding: 0.4rem 0.2rem;
        font-size: inherit;
        color: #fff;
        outline: none;
        border: none;
        background: transparent;
        border-bottom: 1px solid #fff;
        font-family: inherit;
      }
      
      .input-box label {
        color: #fff;
        position: absolute;
        top: 30%;
        pointer-events: none;
        transition: 0.5s;
      }
      
      .input-box input:focus + label,
      .input-box input:valid + label {
        top: -20px;
        color: #f4ec03;
        font-size: 12px;
        background-color: #243b55;
        padding: 2px 5px;
      }
      
      .check-box {
        display: flex;
        align-items: center;
      }
      
      input[type="checkbox"] {
        appearance: none;
        height: 0.75rem;
        width: 0.75rem;
        background-color: rgb(184, 184, 184);
        display: grid;
        place-items: center;
        cursor: pointer;
      }
      
      input[type="checkbox"]::after {
        content: "";
        transform: scale(0);
        transition: 0.2s transform ease-in-out;
        transform-origin: bottom left;
        clip-path: polygon(14% 44%, 0 65%, 50% 100%, 100% 16%, 80% 0%, 43% 62%);
      }
      
      input[type="checkbox"]:checked::after {
        content: "";
        background-color: #f4ec03;
        width: 0.7rem;
        height: 0.7rem;
        transform: scale(1);
      }
      
      input[type="checkbox"]:checked {
        background-color: rgba(106, 106, 106, 0.5);
        box-shadow: 0 0 10px #1b1b1b;
      }
      
      input[type="checkbox"] + label {
        color: rgb(193, 193, 193);
        font-size: 0.9rem;
        padding-left: 0.6rem;
        cursor: pointer;
      }
      
      .check-box span {
        color: rgb(193, 193, 193);
        font-size: 0.9rem;
        position: absolute;
        right: 0px;
        cursor: pointer;
      }
      
      .submit-button {
        position: relative;
        display: block;
        margin: 0 auto;
        padding: 0.6rem 1.2rem;
        color: #f4e403;
        font-size: 1rem;
        font-weight: bold;
        text-transform: uppercase;
        overflow: hidden;
        border: none;
        transition: 0.5s;
        margin-top: 2rem;
        letter-spacing: 2px;
        background-color: rgb(45, 45, 45);
      }
      
      .submit-button:hover {
        background: #f4e403;
        color: #000000;
        border-radius: 5px;
        box-shadow: 0 0 25px #f4e403;
      }
      
      .submit-button span {
        position: absolute;
        display: block;
      }
      
      .submit-button span:nth-child(1) {
        top: 0;
        left: -100%;
        width: 100%;
        height: 2px;
        background: linear-gradient(to right, transparent, #03e9f4);
        animation: btn-anim1 1s linear infinite;
      }
      
      @keyframes btn-anim1 {
        0% {
          left: -100%;
        }
      
        50%,
        100% {
          left: 100%;
        }
      }
      
      .submit-button span:nth-child(2) {
        top: -100%;
        right: 0;
        width: 2px;
        height: 100%;
        background: linear-gradient(to bottom, transparent, #03e9f4);
        animation: btn-anim2 1s linear infinite 0.25s;
      }
      
      @keyframes btn-anim2 {
        0% {
          top: -100%;
        }
      
        50%,
        100% {
          top: 100%;
        }
      }
      
      .submit-button span:nth-child(3) {
        bottom: 0;
        height: 2px;
        width: 100%;
        right: -100%;
        background: linear-gradient(to left, transparent, #03e9f4);
        animation: btn-anim3 1s linear infinite 0.5s;
      }
      
      @keyframes btn-anim3 {
        0% {
          right: -100%;
        }
      
        50%,
        100% {
          right: 100%;
        }
      }
      
      .submit-button span:nth-child(4) {
        bottom: -100%;
        left: 0;
        width: 2px;
        height: 100%;
        background: linear-gradient(to top, transparent, #03e9f4);
        animation: btn-anim4 1s linear infinite 0.75s;
      }
      
      @keyframes btn-anim4 {
        0% {
          bottom: -100%;
        }
      
        50%,
        100% {
          bottom: 100%;
        }
      }
      
      .other-options {
        position: absolute;
        bottom: 1rem;
      }
      
      .another-option {
        color: #fff;
        text-align: center;
        font-weight: bold;
        background-color: #ffd5002c;
        border-radius: 50%;
        padding: 5px;
        width: 30px;
        margin-inline: auto;
        margin-bottom: 65px;
      }
      
      .social-menu ul{
        position: absolute;
        left: 50%;
        padding-bottom: 70px;
        margin: 0;
        transform: translate(-50%, -50%);
        display: flex;
    }
    
    .social-menu ul li{
        list-style: none;
        margin: 0 15px;
    }
    
    .social-menu ul li .fab{
        font-size: 30px;
        line-height: 60px;
        transition: .3s;
        color: #000;
    }
    
    .social-menu ul li .fab:hover{
        color: #fff;
    }
    
    .social-menu ul li a{
        position: relative;
        display: block;
        width: 60px;
        height: 60px;
        border-radius: 50%;
        background-color: #fff;
        text-align: center;
        transition: .6s;
        box-shadow: 0 5px 4px rgba(0,0,0,.5);
    }
    
    .social-menu ul li a:hover{
        transform: translate(0, -10%);
    }
    
    .social-menu ul li:nth-child(1) a:hover{
        background-color: rgba(5, 59, 237, 0.829);
    }
    .social-menu ul li:nth-child(2) a:hover{
        background-color: #E4405F;
    }
    .social-menu ul li:nth-child(3) a:hover{
        background-color: #0077b5;
    }
    .social-menu ul li:nth-child(4) a:hover{
        background-color: #ff0000;
    }
      
</style>
<body>

    <head>
        <title>LogIn Form</title>
      
        
      </head>
      
      <body>
        <img id="img2" src="https://hotelxtoronto.com/_novaimg/4372385-1437955_0_428_4096_2048_2200_1100.rc.jpg">
        <main>
            
          <div class="button-box">
            <div class="btn-active-back"></div>
            <button class="toggle-btn login-btn">&nbsp;&nbsp;Login</button>
            <button class="toggle-btn register-btn">&nbsp;&nbsp;Register</button>
          </div>
          <div class="form-box">
            <form class="login-form" action="code2.php" method="POST">
              <div class="input-box">
                <input type="text" name="username" id="username" required />
                <label for="username">Username</label>
              </div>
              <div class="input-box">
                <input type="password" name="password" id="password" required />
                <label for="password">Password</label>
              </div>
              <div class="check-box">
                <input type="checkbox" id="login-checkbox" />
                <label for="login-checkbox">Remember me</label>
                <span>Forgot password?</span>
              </div>
              <button class="submit-button" name="login">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                Login
              </button>
            </form>
            <form class="register-form" action="code1.php" method="POST">
              <div class="input-box">
                <input type="text" id="username2" name="username"  required />
                <label for="username2">Username</label>
              </div>
              <div class="input-box">
                <input type="email" id="email" name="email" required />
                <label for="email">Email</label>
              </div>
              <div class="input-box">
                <input type="password" id="password2" name="password" required />
                <label for="password2">Password</label>
              </div>
              <div class="input-box">
                <input type="password" id="password2" name="cpassword" required />
                <label for="password2">Confirm Password</label>
              </div>
              <button class="submit-button" name="signup">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                Register
              </button>
            </form>
          </div>
          <div class="other-options">
            <div class="social-menu">
                <ul>
                    <li><a href="https://www.facebook.com/" target="blank"><i class="fab fa-facebook"></i></i></a></li>
                    <li><a href="https://www.instagram.com/accounts/login/" target="blank"><i class="fab fa-instagram"></i></a></li>
                    <li><a href="https://www.linkedin.com/feed/" target="blank"><i class="fab fa-linkedin-in"></i></a></li>
                    <li><a href="https://www.youtube.com/"><i class="fab fa-youtube" target="blank"></i></a></li>
                </ul>
            </div>
          </div>
        </main>
      </body>
      


    <script>
        const login = document.querySelector(".login-btn");
        const register = document.querySelector(".register-btn");
        const loginForm = document.querySelector(".login-form");
        const registerForm = document.querySelector(".register-form");
        const btnActiveBack = document.querySelector(".btn-active-back");

        login.addEventListener("click", () => {
        btnActiveBack.style.left = "0px";
        registerForm.style.left = "115%";
        loginForm.style.left = "0px";
        });

        register.addEventListener("click", () => {
        btnActiveBack.style.left = "50%";
        registerForm.style.left = "0px";
        loginForm.style.left = "-115%";
        });

    </script>
</body>
</html>