<?php
include '../database.php';
include 'sidebar.php';
include 'importent-css.php';
include 'importent-header.php';
?>



<?php

if(isset($_POST['submit'])){

// craete a varible for you create batabase table row

$footer_heading = mysqli_real_escape_string($conn, $_POST['footer_heading']);
$footer_text = mysqli_real_escape_string($conn, $_POST['footer_text']);
$footer_email = mysqli_real_escape_string($conn, $_POST['footer_email']);
$footer_mobile = mysqli_real_escape_string($conn, $_POST['footer_mobile']);


// if ($_FILES['testimonials_image']['name'])
// {
//     move_uploaded_file($_FILES['testimonials_image']['tmp_name'], "uploads/" . $_FILES['testimonials_image']['name']);
//     $testimonials_image = "uploads/" . $_FILES['testimonials_image']['name'];
// }

 // insert qurey in datatable code

 $query =  "INSERT INTO footer (footer_heading ,footer_text,footer_email,footer_mobile) 
 VALUES ('$footer_heading','$footer_text','$footer_email','$footer_mobile')";

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
              <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Section</span> Footer</h4>

              <!-- Basic Layout & Basic with Icons -->
              <div class="row">
                <!-- Basic Layout -->
                <div class="col-xxl">
                  <div class="card mb-4">
                    <div class="card-header d-flex align-items-center justify-content-between">
                      <h5 class="mb-0">Footer Details </h5>
                      
                    </div>
                    <div class="card-body">
                      <form method="POST" action="manage-footer.php" enctype="multipart/form-data">
                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-default-name">Campany name </label>
                          <div class="col-sm-10">
                            <input type="text" class="form-control" name="footer_heading" id="" placeholder="Campany name " />
                          </div>
                        </div>

                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-default-name">Campany About </label>
                          <div class="col-sm-10">
                            <input type="text" class="form-control" name="footer_text" id="" placeholder="Campany About " />
                          </div>
                        </div>
                      
                        
                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-default-phone">Email Id</label>
                          <div class="col-sm-10">
                            <input
                              type="email"
                              name="footer_email"
                              id="basic-default-phone"
                              class="form-control phone-mask"
                              placeholder="Email ID"
                              />
                          </div>
                        </div>

                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-default-phone">Phone No</label>
                          <div class="col-sm-10">
                            <input
                              type="tel"
                              name="footer_mobile"
                              id="basic-default-phone"
                              class="form-control phone-mask"
                              placeholder="658 799 8941"
                              />
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
                <!-- Basic with Icons -->
                <div class="col-xxl">
                  <div class="card mb-4">
                    <div class="card-header d-flex align-items-center justify-content-between">
                      <h5 class="mb-0">Basic Social Media Icons</h5>
                      
                    </div>
                    <div class="card-body">
                      <form>
                        <div class="row mb-3">
                          <label class="col-sm-3 col-form-label" for="basic-icon-default-fullname">facebook</label>
                          <div class="col-sm-9">
                            <div class="input-group input-group-merge">
                              <span id="basic-icon-default-fullname2" class="input-group-text"
                                ><i class="bx bx-user"></i
                              ></span>
                              <input
                                type="text"
                                class="form-control"
                                id="basic-icon-default-fullname"
                                placeholder="John Doe"
                                aria-label="John Doe"
                                aria-describedby="basic-icon-default-fullname2"
                              />
                            </div>
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-3 col-form-label" for="basic-icon-default-fullname">facebook</label>
                          <div class="col-sm-9">
                            <div class="input-group input-group-merge">
                              <span id="basic-icon-default-fullname2" class="input-group-text"
                                ><i class="bx bx-user"></i
                              ></span>
                              <input
                                type="text"
                                class="form-control"
                                id="basic-icon-default-fullname"
                                placeholder="John Doe"
                                aria-label="John Doe"
                                aria-describedby="basic-icon-default-fullname2"
                              />
                            </div>
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-3 col-form-label" for="basic-icon-default-fullname">facebook</label>
                          <div class="col-sm-9">
                            <div class="input-group input-group-merge">
                              <span id="basic-icon-default-fullname2" class="input-group-text"
                                ><i class="bx bx-user"></i
                              ></span>
                              <input
                                type="text"
                                class="form-control"
                                id="basic-icon-default-fullname"
                                placeholder="John Doe"
                                aria-label="John Doe"
                                aria-describedby="basic-icon-default-fullname2"
                              />
                            </div>
                          </div>
                        </div>
                    
                       
                       
                        <div class="row justify-content-end">
                          <div class="col-sm-9">
                            <button type="submit" class="btn btn-primary">Submit</button>
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