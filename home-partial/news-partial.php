<!-- ======= Latest News Section ======= -->
<section class="section-news section-t8">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="title-wrap d-flex justify-content-between">
                        <div class="title-box">
                            <h2 class="title-a">Latest News</h2>
                        </div>
                        <div class="title-link">
                            <a href="blog-grid.php">All News
                                <span class="bi bi-chevron-right"></span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div id="news-carousel" class="swiper">
                <div class="swiper-wrapper">

                <?php
    $latest_news_query = "SELECT * FROM latest_news";
    $latest_news_result = mysqli_query($conn, $latest_news_query);
    while($latest_news = mysqli_fetch_array($latest_news_result)){
       ?>

                    <div class="carousel-item-c swiper-slide">
                        <div class="card-box-b card-shadow news-box">
                            <div class="img-box-b">
                                <img src="manage/<?php echo $latest_news['news_image']; ?>" alt="" class="img-b img-fluid">
                            </div>
                            <div class="card-overlay">
                                <div class="card-header-b">
                                    <div class="card-category-b">
                                        <a href="<?php echo $latest_news['btn_link']; ?>" class="category-b"><?php echo $latest_news['news_category']; ?></a>
                                    </div>
                                    <div class="card-title-b">
                                        <h2 class="title-2">
                                            <a href="blog-single.php"><?php echo $latest_news['news_name']; ?>
                                                <br> auther : <?php echo $latest_news['news_author']; ?>	</a>
                                        </h2>
                                    </div>
                                    <div class="card-date">
                                        <span class="date-b"><?php echo $latest_news['news_time']; ?></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- End carousel item -->

                    <?php
    }
                    ?>

                    
                </div>
            </div>

            <div class="news-carousel-pagination carousel-pagination"></div>
        </div>
    </section><!-- End Latest News Section -->