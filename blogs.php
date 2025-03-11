<?php
include './includes/kick-off.php';
include './includes/header.php';
?>
<style>
    #blog-container .post .post-img{
        overflow: hidden;
        cursor: pointer;
    }

    #blog-container .post img{
        transition: 0.3s ease;
    }

    #blog-container .post:hover img{
        transform: scale(1.3) rotate(-10deg);
        opacity: 0.8;
    }

    #blog-container .post h3{
        transition: 0.3s ease;
        cursor: pointer;
    }

    #blog-container .post:hover h3{
        color: rgb(54, 54, 189)
    }

    .footer {
      border-top: 1px solid #ccc;
      padding: 2rem 0;
      font-size: 0.9rem;
      color: #777;
    }
  </style>
  <body>

<section id="blogs" class="pt-5 mt-5 container">
    <h2 class="font-weight-bold pt-5">Blogs</h2>
</section>

<section id="blog-container" class="container pt-5" >
    <div class="row">
        <div class="post col-lg-6 col-md-6 col-12 pb-5">
            <div class="post-img">
                <img class="img-fuild w-100" src="./assets/images/blog-6.jpeg" alt="">
            </div>
            <h3 class="text-center font-weight-normal pt3">Seamlessly blending technology and design—so you can move through your day, your way.</h3>
            <p class="text-center">Jan 1, 2025</p>
        </div>
        <div class="post col-lg-6 col-md-6 col-12 pb-5">
            <div class="post-img">
                <img class="img-fuild w-100" src="./assets/images/blog-3.jpg" alt="">
            </div>
            <h3 class="text-center font-weight-normal pt3">Crafted with precision, designed for those who appreciate the beauty of every tick.</h3>
            <p class="text-center">Jan 31, 2025</p>
        </div>
        <div class="post col-lg-6 col-md-6 col-12 pb-5">
            <div class="post-img">
                <img class="img-fuild w-100" src="./assets/images/blog-7.jpeg" alt="">
            </div>
            <h3 class="text-center font-weight-normal pt3">Experience craftsmanship that transcends time, with luxury you can feel at every glance.</h3>
            <p class="text-center">Jan 10, 2025</p>
        </div>
        <div class="post col-lg-6 col-md-6 col-12 pb-5">
            <div class="post-img">
                <img class="img-fuild w-100" src="./assets/images/blog-8.jpg" alt="">
            </div>
            <h3 class="text-center font-weight-normal pt3">A masterpiece on your wrist, made for those who never settle for ordinary.</h3>
            <p class="text-center">Jan 2, 2025</p>
        </div>

        <div class=" col-lg-12 col-md-12 col-12 pb-5">
            <div>
                <img class="img-fuild w-100" src="./assets/images/blog-4.webp" alt="">
            </div>
        </div>

        <div class="post col-lg-4 col-md-6 col-12 pb-5">
            <div class="post-img">
                <img class="img-fuild w-100" src="./assets/images/blog-9.webp" alt="">
            </div>
            <h4 class=" font-weight-normal pt3">Where Precision Meets Style.</h4>
        </div>
        <div class="post col-lg-4 col-md-6 col-12 pb-5">
            <div class="post-img">
                <img class="img-fuild w-100" src="./assets/images/blog-10.jpg" alt="">
            </div>
            <h4 class=" font-weight-normal pt3">Smarter Time, Sleeker Style.</h4>
        </div>
        <div class="post col-lg-4 col-md-6 col-12 pb-5">
            <div class="post-img">
                <img class="img-fuild w-100" src="./assets/images/blog-11.avif" alt="">
            </div>
            <h4 class=" font-weight-normal pt3">Wear Time Like a Masterpiece</h4>
        </div>
    </div>
</section>
<?php
    include './includes/footer.php'
?>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>