
  <!-- ======= Start sql query run in index.php page  ======= -->
<?php
    $slider_query = "SELECT * FROM about_us";
    $slider_result = mysqli_query($conn, $slider_query);
    while($about = mysqli_fetch_array($slider_result)){
       ?>
  <!-- ======= Start sql query run in index.php page  ======= -->
        

   <!-- ======= Start About Section ======= -->
    <section class="section-services section-t8">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="title-wrap d-flex justify-content-between">
                        <div class="title-box">
                            <h2 class="title-a"><?php echo $about['about_heading']; ?></h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="card-box-c foo">
                        <div class="card-header-c d-flex">
                            
                            <div class="">
                                <h2><?php echo $about['about_sub_heading']; ?></h2>
                            </div>
                        </div>
                        <div class="card-body-c">
                            <p class="content-c">
                                <?php echo $about['about_content']; ?>
                            </p>
                        </div>
                        <div class="card-footer-c">
                            <a href="<?php echo $about['btn_link']; ?>" class="link-c link-icon">
                            <?php echo $about['btn_text']?><span class="bi bi-chevron-right"></span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about-image">
                    <img src="manage/<?php echo $about['about_image']; ?>" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End About Us Section -->
    <?php
                 }
?>



    <!--end white loop -->

   
