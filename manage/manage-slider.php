<?php
include '../database.php';
include 'sidebar.php';
include 'importent-css.php';
include 'importent-header.php';
?>



<?php

            // table database name 

            if(isset($_POST['submit']))
            {
                // $slider = mysqli_real_escape_string($conn, $_POST['slider']);
                $s_heading1 = mysqli_real_escape_string($conn, $_POST['s_heading1']);
                $s_heading2 = mysqli_real_escape_string($conn, $_POST['s_heading2']);
                $s_heading3 = mysqli_real_escape_string($conn, $_POST['s_heading3']);
                $s_btn_text = mysqli_real_escape_string($conn, $_POST['s_btn_text']);
                $s_btn_link = mysqli_real_escape_string($conn, $_POST['s_btn_link']);
                
                if ($_FILES['slider']['name'])
                {
                    move_uploaded_file($_FILES['slider']['tmp_name'], "uploads/" . $_FILES['slider']['name']);
                    $slider_des = "uploads/" . $_FILES['slider']['name'];
                }

            // insert qurey in datatable code

                $query = "INSERT INTO d_slider (s_heading1,s_heading2,s_heading3,s_btn_text,s_btn_link,slider) VALUES ('$s_heading1','$s_heading2', '$s_heading3', '$s_btn_text','$s_btn_link','$slider_des')";

                $query_run = mysqli_query($conn, $query);
                if($query_run)
                {
                    echo "inserted"; 
                    exit(0);
                }
                else
                {
                    echo "insert Failed";
                    exit(0);
                }
            }

            ?>








<!-- Content wrapper -->
<div class="content-wrapper">
    <!-- Content -->

    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Section</span> Sliders</h4>

        <!-- Basic Layout & Basic with Icons -->
        <div class="row">
            <!-- Basic Layout -->
            <div class="col-xxl">
                <div class="card mb-4">
                    <div class="card-header d-flex align-items-center justify-content-between">
                        <h5 class="mb-0">Slider Details</h5>

                    </div>
                    <div class="card-body">
                        <form method="POST" action="manage-slider.php" enctype="multipart/form-data">
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="basic-default-name">Slide
                                    Images</label>
                                <div class="col-sm-10">
                                    <input type="file" class="form-control" name="slider" id="" placeholder="slider" />
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="basic-default-phone">First
                                    Heading</label>
                                <div class="col-sm-10">
                                    <input type="text" name="s_heading1" class="form-control phone-mask"
                                        placeholder="first heading" />
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="basic-default-phone">Secend
                                    Heading</label>
                                <div class="col-sm-10">
                                    <input type="text" name="s_heading2" class="form-control phone-mask"
                                        placeholder="Secend Heading" />
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="basic-default-phone">Three
                                    Heading</label>
                                <div class="col-sm-10">
                                    <input type="text" name="s_heading3" class="form-control phone-mask"
                                        placeholder="Three Heading" />
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="basic-default-phone">Button
                                    Text</label>
                                <div class="col-sm-10">
                                    <input type="text" name="s_btn_text" class="form-control phone-mask"
                                        placeholder="btn text" />
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="basic-default-phone">Button
                                    Link</label>
                                <div class="col-sm-10">
                                    <input type="text" name="s_btn_link" class="form-control phone-mask"
                                        placeholder="btn URL" />
                                </div>
                            </div>


                            <div>
                                <!-- <button type="submit" name="add_slider" class="btn btn-primary">Add
                                                    slider</button> -->
                                <div>

                                    <div class="row justify-content-end">
                                        <div class="col-sm-10">
                                            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                                        </div>
                                    </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <?php include 'manage-footer.php'; ?>