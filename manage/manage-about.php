<?php
include '../database.php';
include 'sidebar.php';
include 'importent-header.php';
?>


<?php

if(isset($_POST['submit'])){

// craete a varible for you create batabase table row

$about_heading = mysqli_real_escape_string($conn, $_POST['about_heading']);
$about_sub_heading = mysqli_real_escape_string($conn, $_POST['about_sub_heading']);
$about_content = mysqli_real_escape_string($conn, $_POST['about_content']);
$btn_text = mysqli_real_escape_string($conn, $_POST['btn_text']);
$btn_link = mysqli_real_escape_string($conn, $_POST['btn_link']);

if ($_FILES['about_image']['name'])
{
    move_uploaded_file($_FILES['about_image']['tmp_name'], "uploads/" . $_FILES['about_image']['name']);
    $about_image = "uploads/" . $_FILES['about_image']['name'];
}

 // insert qurey in datatable code

 $query =  "INSERT INTO about_us (about_heading,about_sub_heading,about_content,btn_text,btn_link,about_image) 
 VALUES ('$about_heading','$about_sub_heading','$about_content','$btn_text','$btn_link','$about_image')";

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
              <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Section</span> About</h4>

              <!-- Basic Layout & Basic with Icons -->
              <div class="row">
                <!-- Basic Layout -->
                <div class="col-xxl">
                  <div class="card mb-4">
                    <div class="card-header d-flex align-items-center justify-content-between">
                      <h5 class="mb-0">About  Details</h5>
                      
                    </div>
                    <div class="card-body">

                   

                      <form method="POST" action="manage-about.php" enctype="multipart/form-data">
                       
                      
                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-default-phone">About Us Heading</label>
                          <div class="col-sm-10">
                            <input
                              type="text"
                              class="form-control phone-mask"
                              placeholder="About Us Heading"
                              name="about_heading"
                              />
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-default-phone">About Sub Heading</label>
                          <div class="col-sm-10">
                            <input
                              type="text"
                              
                              class="form-control phone-mask"
                              placeholder="About Sub Heading"
                              name="about_sub_heading"
                              />
                          </div>
                        </div>

                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-default-phone">About Us Content</label>
                          <div class="col-sm-10">
                            <input
                              type="textarea"
                              name="about_content"
                              class="form-control phone-mask"
                              placeholder="About Us Content"
                              />
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-default-name">About Button Text</label>
                          <div class="col-sm-10">
                            <input type="text" class="form-control" name="btn_text" id="" placeholder="About button text" />
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-default-name">About Button  URL</label>
                          <div class="col-sm-10">
                            <input type="text" class="form-control" name="btn_link" id="" placeholder="about button URL " />
                          </div>
                        </div>

                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-default-name">About Images</label>
                          <div class="col-sm-10">
                            <input type="file" class="form-control" name="about_image" id="" placeholder="logo" />
                          </div>
                        </div>

                       
                        
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

           <?php include 'manage-footer.php' ?>