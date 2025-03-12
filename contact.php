<?php
include './includes/kick-off.php';
include './includes/header.php';
?>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap');
*{
    padding: 0;
    margin: 0;
    box-sizing: border-box;
    font-family: 'poppins',sans-serif;
}
.contact-form{
    position: relative;
    min-height: 100vh;
    z-index: 0;
    background-color: lightgrey ;
    padding: 30px;
    justify-content: center;
    display: grid;
    grid-template-rows: 1fr auto 1fr;
    align-items: center;
}
/* .container{
    max-width: 800px;
    margin-top: 0 auto;
} */
.contact-form h1{
    text-align: center;
    font-size: 2.5rem;
    font-weight: 400;
    color: rgb(56, 56, 206);
    font-family: 'poppins';
}
.contact-form h2{
    line-height: 40px;
    margin-bottom: 5px;
    font-size: 30px;
    font-weight: 500;
    color:  rgb(56, 56, 206);
    text-align: center;
}
.contact-form .main{
    position: relative;
    display: flex;
    margin: 30px 0;
}
.content{
    flex-basis: 50%;
    padding: 3em 3em;
    background: #fff;
    box-shadow: 2px 9px 49px -17px rgba(156, 39, 148, 0.1);
    border-top-left-radius: 8px;
    border-bottom-left-radius: 8px;
}
.form-img{
    flex-basis: 50%;
    background: #f0f4f8;
    background-size: cover;
    padding: 40px;
    border-top-right-radius: 8px;
    border-bottom-right-radius: 8px;
    align-items: center;
    display: grid;
}
.form-img img{
    max-width: 100%;
}
.btn,
button,
input{
    border-radius: 35px;
}
.btn:hover,
button:hover{
    color:white;
    transition: 0.5s ease;
}
.contact-form form{
    margin: 30px 0;
}
.contact-form input,
textarea{
    outline: none;
    margin-bottom: 15px;
    font-stretch: 16px;
    color: #999;
    padding: 14px 20px;
    width: 100%;
    display: inline-block;
    box-sizing: border-box;
    border: none;
    background: #fcfcfc;
    transition: 0.3s ease;
}
.contact-form input:focus{
    background: transparent;
    border: 1px solid rgb(56, 56, 206);
}
.contact-form button{
    font-size: 18px;
    color: #fff;
    width: 100%;
    background: rgb(56, 56, 206);
    font-weight: 600;
    transition: 0.3s ease;
    padding: 14px 15px;
    border: 1px solid #692;

}
@media(max-width:736px){
    .contact-form .main{
        flex-direction: column;
    }
    .contact-form form{
        margin-top: 30px;
        margin-bottom: 10px;

    }
    .form-img{
        border-radius: 0;
        border-bottom-left-radius: 8px;
        border-bottom-right-radius: 8px;
        order: 2;
    }
    .content{
        order: 1;
        border-top-left-radius: 8px;
        border-top-right-radius: 8px;
    }
}
</style>
<body>
    <div class="contact-form">
        <h1>Contact Us</h1>
        <div class="container">
            <div class="main">
                <div class="content">
                    <h2>Contact Us</h2>
                    <form action="#" method="post">
                        <input type="text" name="name" placeholder="Enter Your Name">
                      
                        <input type="email" name="name" placeholder="Enter Your Email">
                        <textarea name="message" placeholder="Your Message"></textarea>                   
             <button type="submit" class="btn">Send <i class="fas fa-paper-plane"></i></button>
                    </form>
                </div>
                <div class="form-img">
                    <img src="./assets/images/bg1.png" alt="">
                </div>
            </div>
        </div>
    </div> 
    <?php
        include './includes/footer.php'
    ?>
    <script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>
</body>