<?php
include '../database.php';
include 'sidebar.php';
include 'importent-header.php';
?>


<?php

if(isset($_POST['submit'])){

// craete a varible for you create batabase table row

$ser_heading = mysqli_real_escape_string($conn, $_POST['ser_heading']);
$ser_sub_heading = mysqli_real_escape_string($conn, $_POST['ser_sub_heading']);
$ser_content = mysqli_real_escape_string($conn, $_POST['ser_content']);
$btn_text = mysqli_real_escape_string($conn, $_POST['btn_text']);
$btn_link = mysqli_real_escape_string($conn, $_POST['btn_link']);

if ($_FILES['ser_icon']['name'])
{
    move_uploaded_file($_FILES['ser_icon']['tmp_name'], "uploads/" . $_FILES['ser_icon']['name']);
    $ser_icon = "uploads/" . $_FILES['ser_icon']['name'];
}

 // insert qurey in datatable code

 $query =  "INSERT INTO our_service (ser_heading,ser_sub_heading,ser_content,btn_text,btn_link,ser_icon) 
 VALUES ('$ser_heading','$ser_sub_heading','$ser_content','$btn_text','$btn_link','$ser_icon')";

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
              <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Section</span> Services</h4>

              <!-- Basic Layout & Basic with Icons -->
              <div class="row">
                <!-- Basic Layout -->
                <div class="col-xxl">
                  <div class="card mb-4">
                    <div class="card-header d-flex align-items-center justify-content-between">
                      <h5 class="mb-0">Servicess  Details</h5>
                      
                    </div>
                    <div class="card-body">
                      <form method="POST" action="manage-services.php" enctype="multipart/form-data">
                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-default-name">service iocn</label>
                          <div class="col-sm-10">
                            <input type="file" class="form-control" name="ser_icon" id="" placeholder="service iocn" />
                          </div>
                        </div>
                      
                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-default-phone">Service Heading</label>
                          <div class="col-sm-10">
                            <input
                              type="text"
                              name="ser_heading"
                              class="form-control phone-mask"
                              placeholder="Service Heading"
                              />
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-default-phone">Service Sub Heading</label>
                          <div class="col-sm-10">
                            <input
                              type="text"
                              name="ser_sub_heading"
                              class="form-control phone-mask"
                              placeholder="Service Sub Heading"
                              />
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-default-phone">Service Heading Content</label>
                          <div class="col-sm-10">
                            <input
                              type="text"
                              name="ser_content"
                              class="form-control phone-mask"
                              placeholder="Service Heading Content"
                              />
                          </div>
                        </div>
                        
                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-default-phone">Read more</label>
                          <div class="col-sm-10">
                            <input
                              type="text"
                              name="btn_text"
                              class="form-control phone-mask"
                              placeholder="Page URL "
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
                              placeholder="Page URL "
                              />
                          </div>
                        </div>
                        <!-- <div>
                        <button type="submit" class="btn btn-primary">Add Menu</button>
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

          <?php
          include 'manage-footer.php';
          ?>