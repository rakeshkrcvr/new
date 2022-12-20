<?php
include '../database.php';
include 'sidebar.php';
include 'importent-header.php';
?>


<?php

if(isset($_POST['submit'])){

// craete a varible for you create batabase table row

// $news_image = mysqli_real_escape_string($conn, $_POST['news_image']);
$news_category = mysqli_real_escape_string($conn, $_POST['news_category']);
$news_author = mysqli_real_escape_string($conn, $_POST['news_author']);
$news_name = mysqli_real_escape_string($conn, $_POST['news_name']);
$news_time = mysqli_real_escape_string($conn, $_POST['news_time']);
$btn_link = mysqli_real_escape_string($conn, $_POST['btn_link']);


if ($_FILES['news_image']['name'])
{
    move_uploaded_file($_FILES['news_image']['tmp_name'], "uploads/" . $_FILES['news_image']['name']);
    $news_image_des = "uploads/" . $_FILES['news_image']['name'];
}

 // insert qurey in datatable code

 $query =  "INSERT INTO latest_news (news_category,news_author,news_name,news_time,btn_link,news_image) 
 VALUES ('$news_category','$news_author','$news_name','$news_time','$btn_link','$news_image_des')";




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
              <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Section</span> Latest News</h4>

              <!-- Basic Layout & Basic with Icons -->
              <div class="row">
                <!-- Basic Layout -->
                <div class="col-xxl">
                  <div class="card mb-4">
                    <div class="card-header d-flex align-items-center justify-content-between">
                      <h5 class="mb-0">Servicess  Details</h5>
                      
                    </div>
                    <div class="card-body">
                      
                    <form method="POST" action="manage-news.php" enctype="multipart/form-data">

                    <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-default-name">News Post Images</label>
                          <div class="col-sm-10">
                            <input type="file" class="form-control" name="news_image" id="" placeholder="logo" />
                          </div>
                        </div>
                      
                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-default-phone">Category</label>
                          <div class="col-sm-10">
                            <input
                              type="text"
                              name="news_category"
                              class="form-control phone-mask"
                              placeholder="Text"
                              />
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-default-phone">Author:</label>
                          <div class="col-sm-10">
                            <input
                              type="text"
                              name="news_author"
                              class="form-control phone-mask"
                              placeholder="Morgan Jimenez:"
                              />
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-default-phone">News Name</label>
                          <div class="col-sm-10">
                            <input
                              type="text"
                              name="news_name"
                              class="form-control phone-mask"
                              placeholder="Text"
                              />
                          </div>
                        </div>
                        
                        
                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-default-phone">Date & Time</label>
                          <div class="col-sm-10">
                            <input
                              type="date"
                              name="news_time"
                              class="form-control phone-mask"
                              placeholder="Date & Time"
                              />
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-default-phone">Button URL</label>
                          <div class="col-sm-10">
                            <input
                              type="text"
                              name="btn_link"
                              class="form-control phone-mask"
                              placeholder="Button URL"
                              />
                          </div>
                        </div>

                        
                        <div>

                       
                        <!-- <div>
                        <button type="submit" class="btn btn-primary">Add News</button>
                        <div> -->
                        
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
            <!-- / Content -->

     <?php include 'manage-footer-copyright.php' ?>