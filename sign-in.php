<?php

include './includes/kick-off.php';
include './includes/header.php';

?>

<style>
    section {
        display: block;
        unicode-bidi: isolate;
    }

    body {
        font-size: 13px;
        line-height: 1.8;
        color: #222;
        font-weight: 400;
        font-family: Poppins;
        background: #f8f9fa;
    }

    .sign-in {
        padding: 100px;
    }

    .signin-content {
        background: #fff;
        border-radius: 10px;
        box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
        display: flex;
        flex-wrap: wrap;
    }

    .signin-form {
        flex: 1;
        padding: 50px;
    }

    .signin-image {
        flex: 1;
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
        background: #f1f1f1;
        border-radius: 0 10px 10px 0;
    }

    .signin-image img {
        max-width: 100%;
        border-radius: 10px;
    }

    .signup-image-link {
        margin-top: 20px;
        color: #333;
        text-decoration: underline;
        font-weight: 600;
    }

    .signup-image-link:hover {
        color: #007bff;
    }

    .form-title {
        font-size: 24px;
        font-weight: 700;
        margin-bottom: 30px;
        margin-left: 225px;
    }

    .form-group {
        margin-bottom: 20px;
        position: relative;
    }

    .form-group label {
        position: absolute;
        top: 50%;
        left: 15px;
        transform: translateY(-50%);
        color: #999;
    }

    .form-group input {
        width: 100%;
        padding: 10px 10px 10px 40px;
        border: 1px solid #ddd;
        border-radius: 5px;
        font-size: 16px;
    }

    .form-group input:focus {
        border-color: #007bff;
        box-shadow: 0 0 5px rgba(0, 123, 255, 0.5);
    }

    .form-submit {
        width: 100%;
        padding: 10px;
        background-color: #007bff;
        border: none;
        border-radius: 5px;
        color: #fff;
        font-size: 16px;
        cursor: pointer;
    }

    .form-submit:hover {
        background-color: #007bff;
    }

    .agree-term {
        position: relative;
        margin-left: 250px;
        margin-top: 9px;
    }

    .label-agree-term {
        display: flex;
        align-items: center;
        font-size: 14px;
    }

    .label-agree-term input {
        margin-right: 10px;
    }

    .social-login {
        display: flex;
        justify-content: space-evenly;
        flex-direction: row;
    }

    .social-label {
        position: relative;
        margin-top: 25px;
        font-size: 18px;
    }

    .socials {
        list-style-type: none;
        display: flex;
        flex-direction: row;
        justify-content: space-evenly;
        gap: 15px;
        max-width: 100%;
        margin-top: 25px;
        padding: 5px;
    }

    .socials i {
        width: 24px;
        height: auto;
        font-size: 20px;
        margin-right: 50px;
    }
</style>

<body>
    <div class="sign-in">
        <div class="signin-content">
            <div class="signin-image">
                <figure>
                    <img src="./assets/images/benaja-germann-s31jlbIcp7E-unsplash.jpg" alt="sign up image" width="450px" height="400px">
                </figure>
                <a href="sign-up.php" class="signup-image-link">Create an accounnt</a>
            </div>
            <div class="signin-form">
                <h2 class="form-title">Sign In</h2>
                <form action="POST" class="register-form" id="login-form">
                    <div class="form-group">
                        <label for="your_name">

                        </label>
                        <input type="text" name="your_name" id="your_name" placeholder="Your name">
                    </div>
                    <div class="form-group">
                        <label for="your_password">

                        </label>
                        <input type="password" name="your_pass" id="your_pass" placeholder="Password">
                    </div>
                    <div class="form-group">
                        <input type="checkbox" name="remember-me" id="remember-me" class="agree-term">
                        <label for="remember-me" class="label-agree-term">
                            <span>
                                <span></span>
                            </span>
                            Remember Me
                        </label>
                    </div>
                    <div class="form-group form-button">
                        <input type="submit" name="signin" id="signin" class="form-submit" value="Log in">
                    </div>
                </form>
                <div class="social-login">
                    <span class="social-label">Or login with</span>
                    <ul class="socials">
                        <li>
                            <a href="#">
                                <i class="fa-brands fa-facebook"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fa-brands fa-twitter"></i>
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <i class="fa-brands fa-google"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>


    <?php
    include './includes/footer.php';
    ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>

</body>