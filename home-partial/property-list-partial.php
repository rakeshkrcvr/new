

    <!-- ======= Latest Properties Section ======= -->
    <section class="section-property section-t8" id="Latest_Properties">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="title-wrap d-flex justify-content-between">
                        <div class="title-box">
                            <h2 class="title-a">Latest Properties</h2>
                        </div>
                        <div class="title-link">
                            <a href="property-grid.php">All Property
                                <span class="bi bi-chevron-right"></span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div id="property-carousel" class="swiper">
                <div class="swiper-wrapper">

                <?php
    $property_list_query = "SELECT * FROM property_list";
    $property_list_result = mysqli_query($conn, $property_list_query);
    while($property_list = mysqli_fetch_array($property_list_result)){
       ?>

                    <div class="carousel-item-b swiper-slide">
                        <div class="card-box-a card-shadow">
                            <div class="img-box-a">
                                <img src="manage/<?php echo $property_list['pro_images']?>" alt="" class="img-a img-fluid">
                            </div>
                            <div class="card-overlay">
                                <div class="card-overlay-a-content">
                                    <div class="card-header-a">
                                        <h2 class="card-title-a">
                                            <a href="property-single.php">
                                             <?php echo $property_list['property_name']; ?>
                                            </a>
                                        </h2>
                                    </div>
                                    <div class="card-body-a">
                                        <div class="price-box d-flex">
                                            <span class="price-a">rent | AED <?php echo $property_list['property_price']?></span>
                                        </div>
                                        <a href="<?php echo $property_list['btn_link']?><" class="link-a">
                                        <?php echo $property_list['btn_text']?><
                                            <span class="bi bi-chevron-right"></span>
                                        </a>
                                    </div>
                                    <div class="card-footer-a">
                                        <ul class="card-info d-flex justify-content-around">
                                            <li>
                                                <h4 class="card-info-title">Area</h4>
                                                <span> <?php echo $property_list['property_area']?><
                                                    <sup>2</sup>
                                                </span>
                                            </li>
                                            <li>
                                                <h4 class="card-info-title">Beds</h4>
                                                <span> <?php echo $property_list['property_beds']?><</span>
                                            </li>
                                            <li>
                                                <h4 class="card-info-title">Baths</h4>
                                                <span> <?php echo $property_list['property_baths']?><</span>
                                            </li>
                                            <li>
                                                <h4 class="card-info-title">Parking</h4>
                                                <span> <?php echo $property_list['property_parking']?><</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- End carousel item -->


                    <?php
    }
                    ?>

                    <div class="carousel-item-b swiper-slide">
                        <div class="card-box-a card-shadow">
                            <div class="img-box-a">
                                <img src="assets/img/property-3.jpg" alt="" class="img-a img-fluid">
                            </div>
                            <div class="card-overlay">
                                <div class="card-overlay-a-content">
                                    <div class="card-header-a">
                                        <h2 class="card-title-a">
                                            <a href="property-single.php">157 West
                                                <br /> Central Park</a>
                                        </h2>
                                    </div>
                                    <div class="card-body-a">
                                        <div class="price-box d-flex">
                                            <span class="price-a">rent | $ 12.000</span>
                                        </div>
                                        <a href="property-single.php" class="link-a">Click here to view
                                            <span class="bi bi-chevron-right"></span>
                                        </a>
                                    </div>
                                    <div class="card-footer-a">
                                        <ul class="card-info d-flex justify-content-around">
                                            <li>
                                                <h4 class="card-info-title">Area</h4>
                                                <span>340m
                                                    <sup>2</sup>
                                                </span>
                                            </li>
                                            <li>
                                                <h4 class="card-info-title">Beds</h4>
                                                <span>2</span>
                                            </li>
                                            <li>
                                                <h4 class="card-info-title">Baths</h4>
                                                <span>4</span>
                                            </li>
                                            <li>
                                                <h4 class="card-info-title">Garages</h4>
                                                <span>1</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- End carousel item -->

                    <div class="carousel-item-b swiper-slide">
                        <div class="card-box-a card-shadow">
                            <div class="img-box-a">
                                <img src="assets/img/property-7.jpg" alt="" class="img-a img-fluid">
                            </div>
                            <div class="card-overlay">
                                <div class="card-overlay-a-content">
                                    <div class="card-header-a">
                                        <h2 class="card-title-a">
                                            <a href="property-single.php">245 Azabu
                                                <br /> Nishi Park let</a>
                                        </h2>
                                    </div>
                                    <div class="card-body-a">
                                        <div class="price-box d-flex">
                                            <span class="price-a">rent | $ 12.000</span>
                                        </div>
                                        <a href="property-single.php" class="link-a">Click here to view
                                            <span class="bi bi-chevron-right"></span>
                                        </a>
                                    </div>
                                    <div class="card-footer-a">
                                        <ul class="card-info d-flex justify-content-around">
                                            <li>
                                                <h4 class="card-info-title">Area</h4>
                                                <span>340m
                                                    <sup>2</sup>
                                                </span>
                                            </li>
                                            <li>
                                                <h4 class="card-info-title">Beds</h4>
                                                <span>2</span>
                                            </li>
                                            <li>
                                                <h4 class="card-info-title">Baths</h4>
                                                <span>4</span>
                                            </li>
                                            <li>
                                                <h4 class="card-info-title">Garages</h4>
                                                <span>1</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- End carousel item -->

                    <div class="carousel-item-b swiper-slide">
                        <div class="card-box-a card-shadow">
                            <div class="img-box-a">
                                <img src="assets/img/property-10.jpg" alt="" class="img-a img-fluid">
                            </div>
                            <div class="card-overlay">
                                <div class="card-overlay-a-content">
                                    <div class="card-header-a">
                                        <h2 class="card-title-a">
                                            <a href="property-single.php">204 Montal
                                                <br /> South Bela Two</a>
                                        </h2>
                                    </div>
                                    <div class="card-body-a">
                                        <div class="price-box d-flex">
                                            <span class="price-a">rent | $ 12.000</span>
                                        </div>
                                        <a href="property-single.php" class="link-a">Click here to view
                                            <span class="bi bi-chevron-right"></span>
                                        </a>
                                    </div>
                                    <div class="card-footer-a">
                                        <ul class="card-info d-flex justify-content-around">
                                            <li>
                                                <h4 class="card-info-title">Area</h4>
                                                <span>340m
                                                    <sup>2</sup>
                                                </span>
                                            </li>
                                            <li>
                                                <h4 class="card-info-title">Beds</h4>
                                                <span>2</span>
                                            </li>
                                            <li>
                                                <h4 class="card-info-title">Baths</h4>
                                                <span>4</span>
                                            </li>
                                            <li>
                                                <h4 class="card-info-title">Garages</h4>
                                                <span>1</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- End carousel item -->
                </div>
            </div>
            <div class="propery-carousel-pagination carousel-pagination"></div>

        </div>
    </section><!-- End Latest Properties Section -->