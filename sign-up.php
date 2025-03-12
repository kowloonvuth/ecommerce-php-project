<?php

include './includes/kick-off.php';
include './includes/header.php';

require_once('./function/signup.php');
if (isset($_POST) && count($_POST) > 0) {
    $Response = signup($_POST);
}
?>

<style>
    body {
        font-size: 13px;
        line-height: 1.8;
        color: #222;
        font-weight: 400;
        font-family: Poppins;
        background-color: #f8f9fa;
    }

    .signup {
        padding: 100px 0;
    }

    .signup-content {
        background: #fff;
        border-radius: 10px;
        box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
        display: flex;
        flex-wrap: wrap;
    }

    .signup-form {
        flex: 1;
        padding: 50px;
    }

    .signup-image {
        flex: 1;
        display: flex;
        align-items: center;
        justify-content: center;
        flex-direction: column;
        background: #f1f1f1;
        border-radius: 0 10px 10px 0;
    }

    .signup-image img {
        max-width: 100%;
        border-radius: 10px;
    }

    .signup-image-link {
        margin-top: 20px;
        margin-left: 225px;
        color: #333;
        text-decoration: underline;
        font-weight: 600;
    }

    .signup-image-link:hover {
        color: #007bff;
    }

    .title-term {
        margin-left: 50px;
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
        background-color: #0056b3;
    }

    .agree-term {
        position: relative;
        margin-left: -200px;
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

    .term-service {
        color: #007bff;
        text-decoration: none;
    }

    .term-service:hover {
        text-decoration: underline;
    }
</style>

<body>
    <section class="signup">
        <div class="container">
            <div class="signup-content">
                <div class="signup-form">
                    <h2 class="form-title">Sign up</h2>
                    <?php if (isset($Response['error'])): ?>
                        <div class="alert alert-danger alert-dismissable mb-3">
                            <b>Oop</b>, <?php echo $Response['error']; ?>
                        </div>
                    <?php endif; ?>
                    <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>" class="register-form" id="register-form">
                        <div class="form-group">
                            <label for="first-name">
                                <i class="fa-solid fa-user"></i>
                            </label>
                            <input type="text" name="first-name" id="first-name" placeholder="Your First Name">
                            <?php if (isset($Response['first_name']) && !empty($Response['first_name'])): ?>
                                <small class="alert alert-danger alert-dismissable">
                                    <?php echo $Response['first_name']; ?>
                                </small>
                            <?php endif; ?>
                        </div>
                        <div class="form-group">
                            <label for="last-name">
                                <i class="fa-solid fa-user"></i>
                            </label>
                            <input type="text" name="last-name" id="last-name" placeholder="Your Last Name">
                            <?php if (isset($Response['last_name']) && !empty($Response['last_name'])): ?>
                                <small class="alert alert-danger alert-dismissable">
                                    <?php echo $Response['last_name']; ?>
                                </small>
                            <?php endif; ?>
                        </div>
                        <div class="form-group">
                            <label for="email">
                                <i class="fa-solid fa-envelope"></i>
                            </label>
                            <input type="text" name="email" id="email" placeholder="Your Email">
                            <?php if (isset($Response['email']) && !empty($Response['email'])): ?>
                                <small class="alert alert-danger alert-dismissable">
                                    <?php echo $Response['email']; ?>
                                </small>
                            <?php endif; ?>
                        </div>
                        <div class="form-group">
                            <label for="pass">
                                <i class="fa-solid fa-lock"></i>
                            </label>
                            <input type="password" name="pass" id="pass" placeholder="Password">
                            <?php if (isset($Response['password']) && !empty($Response['password'])): ?>
                                <small class="alert alert-danger alert-dismissable">
                                    <?php echo $Response['password']; ?>
                                </small>
                            <?php endif; ?>
                        </div>
                        <div class="form-group">
                            <input type="checkbox" class="agree-term" form="agree-term" id="agree-term" name="agree-term" value="1">
                            <label for="agree-term" class="title-term">
                                I agree all statements in
                                <a href="#" class="term-service">Terms of service</a>
                            </label>
                            <?php if (isset($Response['agree-term']) || !empty($Response['agree-term'])): ?>
                                <small class="alert alert-danger alert-dimissabl">
                                    <?php echo $Response['agree-term']; ?>
                                </small>
                            <?php endif; ?>
                        </div>
                        <div class="form-group form-button">
                            <input type="submit" name="signup" id="signup" class="form-submit" value="Register">
                        </div>
                        <a href="sign-in.php" class="signup-image-link">I am already member</a>
                    </form>
                </div>
                <div class="signup-image">
                    <figure>
                        <img src="./assets/images/benaja-germann-s31jlbIcp7E-unsplash.jpg" alt="sign up image" width="450px" height="400px">
                    </figure>
                </div>
            </div>
        </div>
    </section>
    <div class="container-fluid">
        <hr class="m-0">
    </div>

    <?php
    include './includes/footer.php';
    ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>
</body>