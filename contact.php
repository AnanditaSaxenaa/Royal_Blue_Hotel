<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Royal Blue Hotel - Contact</title>
    <?php require 'in/links.php'; ?> 
    
</head>
<style>
    .pop:hover {
    border-top-color: #279e8c !important;
    transform: scale(1.03);
    transition: all 0.3s;
}


</style>

<body class="bg-light">

<!-- header -->
<?php require 'in/headers.php'; ?>

<div class="my-5 px-4">
    <h2 class="fw-bold h-font text-center">CONTACT US</h2>
    <div class="h-line bg-dark"></div>
    <p class="text-center mt-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis officiis illum accusamus est <br>accusantium laborum enim deserunt vero maxime voluptatem!</p>
</div>
<div class="container">
    <div class="row">
        <div class="col-lg-6 col-md-6 mb-5 px-4">
            <div class="bg-white rounded p-4 shadow ">
                <iframe class="w-100 rounded mb-4" height="320px" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d112333.78506310786!2d79.33953838305811!3d28.37605402279058!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39a007334d02998d%3A0x5b9d44cf31ee87f!2sBareilly%2C%20Uttar%20Pradesh!5e0!3m2!1sen!2sin!4v1721841975250!5m2!1sen!2sin"  loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                <h5>
                    Address
                </h5>


                <a href="https://maps.app.goo.gl/rxwzqr5XAyNxGpXU9" target="_blank" class="d-inline-block text-decoration-none text-dark">
                    <i class="bi bi-geo-alt-fill"></i>XYZ Bareilly, Uttar Pradesh
                </a>
                <h5 class="mt-4">Contact us</h5>
                <a href="tel: +917782356809" class="d-inline-block mb-2 text-dark text-decoration-none">
                    <i class="bi bi-telephone-fill"></i> +91 7782356809
                </a>
                <br>


                <a href="mailto: royalblue@gmail.com" class="d-inline-block mb-2 text-dark text-decoration-none">
                    <i class="bi bi-envelope-fill me-1"></i> royalblue@gmail.com
                </a>
                <br>

                <h5 class="mt-4">Follow us</h5>
                <a href="#" class="d-inline-block me-3 text-dark fs-5 me-2">
                <i class="bi bi-twitter me-1"></i>
                </a>
                

                <a href="#" class="d-inline-block me-3 text-dark fs-5 me-2">
                <i class="bi bi-facebook me-1"></i>
                </a>
                

                <a href="#" class="d-inline-block text-dark fs-5">
                <i class="bi bi-instagram me-1"></i>
                </a>
            
            </div>
        </div>
        <div class="col-lg-6 col-md-6 px-4">
            <div class="bg-white rounded p-4 shadow">
                <form>
                    <h5>Send us a message!</h5>
                    <div class="mt-3">
                        <label class="form-label" style="font-weight:500;">Name</label>
                        <input type="text" class="form-control shadow-none">
                    </div>
                    <div class="mt-3">
                        <label class="form-label" style="font-weight:500;">Email</label>
                        <input type="mail" class="form-control shadow-none">
                    </div>
                    <div class="mt-3">
                        <label class="form-label" style="font-weight:500;">Subject</label>
                        <input type="text" class="form-control shadow-none">
                    </div>
                    <div class="mt-3">
                        <label class="form-label" style="font-weight:500;">Message</label>
                        <textarea class="form-control shadow-none" rows="5" style="resize:none;"></textarea>
                    </div>
                    <button type="submit" class="btn text-white custom-bg mt-3 shadow-none">
                        Send
                    </button>
                </form>
            </div>
        </div>

    </div>
</div>

<!-- footer -->
<?php require 'in/footers.php' ?>;



</body>
</html>