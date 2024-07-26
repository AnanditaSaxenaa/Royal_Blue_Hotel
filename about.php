<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Royal Blue Hotel - About</title>
    <?php require 'in/links.php'; ?> 
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
</head>
<style>
    .box:hover{
        border-top-color: var(--teal) !important;
    }
</style>

<body class="bg-light">

<!-- header -->
<?php require 'in/headers.php'; ?>

<div class="my-5 px-4">
    <h2 class="fw-bold h-font text-center">ABOUT US</h2>
    <div class="h-line bg-dark"></div>
    <p class="text-center mt-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis officiis illum accusamus est <br>accusantium laborum enim deserunt vero maxime voluptatem!</p>
</div>
<div class="container">
    <div class="row justify-content-between align-items-center">
        <div class="col-lg-6 col-md-5 mb-4 order-lg-1 order-md-1 order-2">
            <h3 class="mb-3">Lorem ipsum dolor sit.</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi, illo? Voluptates rem magni sequi ratione.</p>
        </div>
        <div class="col-lg-5 col-md-5 mb-4 order-lg-2 order-md-2 order-1">
            <img src="about/about.jpg" class="w-100">
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6 mb-4 px-4">
                <div class="bg-white shadow rounded p-4 border-top border-4 text-center box">
                    <img src="about/hotel.svg" width="70px">
                    <h4 class="mt-3">100+ ROOMS</h4>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-4 px-4">
                <div class="bg-white shadow rounded p-4 border-top border-4 text-center box">
                    <img src="about/customers.svg" width="70px">
                    <h4 class="mt-3">200+ CUSTOMERS</h4>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-4 px-4">
                <div class="bg-white shadow rounded p-4 border-top border-4 text-center box">
                    <img src="about/rating.svg" width="70px">
                    <h4 class="mt-3">150+ ROOMS</h4>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-4 px-4">
                <div class="bg-white shadow rounded p-4 border-top border-4 text-center box">
                    <img src="about/staff.svg" width="70px">
                    <h4 class="mt-3">200+ STAFFS</h4>
                </div>
            </div>
        </div>
    </div>
</div>

<h3 class="my-5 fw-bold h-font text-center">MANAGEMENT TEAM</h3>
<div class="container px-4">
    <div class="swiper mySwiper">
        <div class="swiper-wrapper mb-5">
        <div class="swiper-slide bg-white text-center overflow-hidden rounded">
            <img src="about/IMG_17352.jpg" class="w-100">
            <h5 class="mt-2">Random Name</h5>
        </div>
        <div class="swiper-slide bg-white text-center overflow-hidden rounded">
            <img src="about/IMG_17352.jpg" class="w-100">
            <h5 class="mt-2">Random Name</h5>
        </div>
        <div class="swiper-slide bg-white text-center overflow-hidden rounded">
            <img src="about/IMG_17352.jpg" class="w-100">
            <h5 class="mt-2">Random Name</h5>
        </div>
        <div class="swiper-slide bg-white text-center overflow-hidden rounded">
            <img src="about/IMG_17352.jpg" class="w-100">
            <h5 class="mt-2">Random Name</h5>
        </div>
        <div class="swiper-slide bg-white text-center overflow-hidden rounded">
            <img src="about/IMG_17352.jpg" class="w-100">
            <h5 class="mt-2">Random Name</h5>
        </div>
        <div class="swiper-slide bg-white text-center overflow-hidden rounded">
            <img src="about/IMG_17352.jpg" class="w-100">
            <h5 class="mt-2">Random Name</h5>
        </div>
        <div class="swiper-slide bg-white text-center overflow-hidden rounded">
            <img src="about/IMG_17352.jpg" class="w-100">
            <h5 class="mt-2">Random Name</h5>
        </div>
        <div class="swiper-slide bg-white text-center overflow-hidden rounded">
            <img src="about/IMG_17352.jpg" class="w-100">
            <h5 class="mt-2">Random Name</h5>
        </div>
        <div class="swiper-slide bg-white text-center overflow-hidden rounded">
            <img src="about/IMG_17352.jpg" class="w-100">
            <h5 class="mt-2">Random Name</h5>
        </div>
        <div class="swiper-slide bg-white text-center overflow-hidden rounded">
            <img src="about/IMG_17352.jpg" class="w-100">
            <h5 class="mt-2">Random Name</h5>
        </div>
        </div>
        <div class="swiper-pagination"></div>
    </div>
</div>

<!-- footer -->
<?php require 'in/footers.php' ?>;
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script>
    var swiper = new Swiper(".mySwiper", {
      
      pagination: {
        el: ".swiper-pagination",
        dynamicBullets: true,
      },
      spaceBetween:40,
      breakpoints: {
        320: {
            slidesPerView: 1,
        },
        640: {
            slidesPerView: 1,
        },
        768: {
            slidesPerView: 2,
        },
        1024: {
            slidesPerView: 3,
        }
    }
    });
</script>


</body>
</html>