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






<?php
include 'footer.php';

?>