<?php
include 'database.php';
include 'header.php';
?>


<!-- ======= Intro Section ======= -->
<div class="intro intro-carousel swiper position-relative">
     <div class="swiper-wrapper">

      <?php
    $slider_query = "SELECT * FROM d_slider";
    $slider_result = mysqli_query($conn, $slider_query);
    while($r = mysqli_fetch_array($slider_result)){
       ?>

         <div class="swiper-slide carousel-item-a intro-item bg-image"
            style="background-image: url(./manage/<?php echo $r['slider']; ?>)">
            <div class="overlay overlay-a"></div>
            <div class="intro-content display-table">
                <div class="table-cell">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-8">
                                <div class="intro-body">
                                    <p class="intro-title-top"><?php echo $r['s_heading1']; ?></p>
                                    <h1 class="intro-title mb-4 ">
                                        <span class="color-b"><?php echo $r['s_heading2']; ?>
                                        </span><?php echo $r['s_heading3']; ?>
                                    </h1>
                                    <p class="intro-subtitle intro-price">
                                        <a href="<?php echo $r['s_btn_link']; ?>"><span
                                                class="price-a"><?php echo $r['s_btn_text']; ?></span></a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
     <?php
          }
             ?>
      </div>
    <div class="swiper-pagination"></div>
</div><!-- End Intro Section -->

<main id="main">



<?php 
include 'home-partial/about-partial.php';
include 'home-partial/service-partial.php';
include 'home-partial/property-list-partial.php';
include 'home-partial/best-agents-partial.php';
include 'home-partial/news-partial.php';
include 'home-partial/testimonials-partial.php';
?>

    <!--end white loop -->

   

    


</main><!-- End #main -->

<!-- ======= Footer ======= -->
<section class="section-footer">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-4">
                <div class="widget-a">
                    <div class="w-header-a">
                        <h3 class="w-title-a text-brand">EstateAgency</h3>
                    </div>
                    <div class="w-body-a">
                        <p class="w-text-a color-text-a">
                            Enim minim veniam quis nostrud exercitation ullamco laboris nisi ut aliquip exea commodo
                            consequat duis
                            sed aute irure.
                        </p>
                    </div>
                    <div class="w-footer-a">
                        <ul class="list-unstyled">
                            <li class="color-a">
                                <span class="color-text-a">Phone .</span> contact@example.com
                            </li>
                            <li class="color-a">
                                <span class="color-text-a">Email .</span> +54 356 945234
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-4 section-md-t3">
                <div class="widget-a">
                    <div class="w-header-a">
                        <h3 class="w-title-a text-brand">The Company</h3>
                    </div>
                    <div class="w-body-a">
                        <div class="w-body-a">
                            <ul class="list-unstyled">
                                <li class="item-list-a">
                                    <i class="bi bi-chevron-right"></i> <a href="#">Site Map</a>
                                </li>
                                <li class="item-list-a">
                                    <i class="bi bi-chevron-right"></i> <a href="#">Legal</a>
                                </li>
                                <li class="item-list-a">
                                    <i class="bi bi-chevron-right"></i> <a href="#">Agent Admin</a>
                                </li>
                                <li class="item-list-a">
                                    <i class="bi bi-chevron-right"></i> <a href="#">Careers</a>
                                </li>
                                <li class="item-list-a">
                                    <i class="bi bi-chevron-right"></i> <a href="#">Affiliate</a>
                                </li>
                                <li class="item-list-a">
                                    <i class="bi bi-chevron-right"></i> <a href="#">Privacy Policy</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-4 section-md-t3">
                <div class="widget-a">
                    <div class="w-header-a">
                        <h3 class="w-title-a text-brand">International sites</h3>
                    </div>
                    <div class="w-body-a">
                        <ul class="list-unstyled">
                            <li class="item-list-a">
                                <i class="bi bi-chevron-right"></i> <a href="#">Venezuela</a>
                            </li>
                            <li class="item-list-a">
                                <i class="bi bi-chevron-right"></i> <a href="#">China</a>
                            </li>
                            <li class="item-list-a">
                                <i class="bi bi-chevron-right"></i> <a href="#">Hong Kong</a>
                            </li>
                            <li class="item-list-a">
                                <i class="bi bi-chevron-right"></i> <a href="#">Argentina</a>
                            </li>
                            <li class="item-list-a">
                                <i class="bi bi-chevron-right"></i> <a href="#">Singapore</a>
                            </li>
                            <li class="item-list-a">
                                <i class="bi bi-chevron-right"></i> <a href="#">Philippines</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>




<?php
include 'footer.php';

?>