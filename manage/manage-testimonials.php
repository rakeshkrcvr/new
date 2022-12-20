<?php
include '../database.php';
include 'sidebar.php';
include 'importent-header.php';
?>


<?php

if(isset($_POST['submit'])){

// craete a varible for you create batabase table row

$testimonials_text = mysqli_real_escape_string($conn, $_POST['testimonials_text']);
$testimonials_name = mysqli_real_escape_string($conn, $_POST['testimonials_name']);


if ($_FILES['testimonials_profile_image']['name'])
{
    move_uploaded_file($_FILES['testimonials_profile_image']['tmp_name'], "uploads/" . $_FILES['testimonials_profile_image']['name']);
    $testimonials_profile_image = "uploads/" . $_FILES['testimonials_profile_image']['name'];
}

if ($_FILES['testimonials_image']['name'])
{
    move_uploaded_file($_FILES['testimonials_image']['tmp_name'], "uploads/" . $_FILES['testimonials_image']['name']);
    $testimonials_image = "uploads/" . $_FILES['testimonials_image']['name'];
}

 // insert qurey in datatable code

 $query =  "INSERT INTO testimonials (testimonials_image,testimonials_text,testimonials_name,testimonials_profile_image) 
 VALUES ('$testimonials_image','$testimonials_text','$testimonials_name','$testimonials_profile_image')";

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
              <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Section</span> Testimonials</h4>

              <!-- Basic Layout & Basic with Icons -->
              <div class="row">
                <!-- Basic Layout -->
                <div class="col-xxl">
                  <div class="card mb-4">
                    <div class="card-header d-flex align-items-center justify-content-between">
                      <h5 class="mb-0">Testimonials Details</h5>
                      
                    </div>
                    <div class="card-body">
                  
                    <form method="POST" action="manage-testimonials.php" enctype="multipart/form-data">

                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-default-name">Testimonials Images</label>
                          <div class="col-sm-10">
                            <input type="file" class="form-control" name="testimonials_image" id="" placeholder="Testimonials Images" />
                          </div>
                        </div>
                      
                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-default-phone">Testimonials Text</label>
                          <div class="col-sm-10">
                            <input
                              type="text"
                              name="testimonials_text"
                              class="form-control phone-mask"
                              placeholder="Testimonials Text"
                              />
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-default-name">Testimonials Profile Images</label>
                          <div class="col-sm-10">
                            <input type="file" class="form-control" name="testimonials_profile_image" id="" placeholder="Testimonials Images" />
                          </div>
                        </div>


                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-default-phone">Testimonials Name</label>
                          <div class="col-sm-10">
                            <input
                              type="text"
                              name="testimonials_name"
                              class="form-control phone-mask"
                              placeholder="Text"
                              />
                          </div>
                        </div>
                       


                        
                        <div>

                       
                        <!-- <div>
                        <button type="submit" class="btn btn-primary">Add Testimonials</button>
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

       <?php include 'manage-footer-copyright.php';?>