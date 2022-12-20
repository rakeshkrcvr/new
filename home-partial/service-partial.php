 


 <!-- ======= Services Section ======= -->
 <section class="section-services section-t8">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="title-wrap d-flex justify-content-between">
                        <div class="title-box">

                        <?php
    $slider_query = "SELECT * FROM our_service";
    $slider_result = mysqli_query($conn, $slider_query);
    while($our_service = mysqli_fetch_array($slider_result)){
       ?>

                            <h2 class="title-a"><?php echo $our_service['ser_heading']?></h2>
                            <?php
    }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">

              <!-- ======= Start sql query run in index.php page  ======= -->
  <?php
    $slider_query = "SELECT * FROM our_service";
    $slider_result = mysqli_query($conn, $slider_query);
    while($our_service = mysqli_fetch_array($slider_result)){
       ?>
  <!-- ======= Start sql query run in index.php page  ======= -->
                <div class="col-md-4">
                    <div class="card-box-c foo">
                        <div class="card-header-c d-flex">
                            <div class="card-box-ico">
                                <span class="bi bi-cart"></span>
                            </div>
                            <div class="card-title-c align-self-center">
                                <h2 class="title-c"><?php echo $our_service['ser_sub_heading']?></h2>
                            </div>
                        </div>
                        <div class="card-body-c">
                            <p class="content-c">
                            <?php echo $our_service['ser_content']?>
                            </p>
                        </div>
                        <div class="card-footer-c">
                            <a href="<?php echo $our_service['ser_heading']?>" class="link-c link-icon"><?php echo $our_service['btn_text']?>
                                <span class="bi bi-chevron-right"></span>
                            </a>
                        </div>
                    </div>
                </div>

                <?php
                 }
?>

               
               
            </div>
        </div>
    </section>
    
      <!-- End Services Section -->
  



    <!--end white loop -->
    
   