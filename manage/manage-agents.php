<?php
include '../database.php';
include 'sidebar.php';
include 'importent-header.php';
?>


<?php 
       
     

        if(isset($_POST['submit'])){  
           
           $agents_name = mysqli_real_escape_string($conn, $_POST['agents_name']);
           $agents_discription = mysqli_real_escape_string($conn, $_POST['agents_discription']);
           $agents_call_no = mysqli_real_escape_string($conn, $_POST['agents_call_no']);
           $agents_email_id = mysqli_real_escape_string($conn, $_POST['agents_email_id']);
        
         
        if ($_FILES['agents_image']['name'])
          {
              move_uploaded_file($_FILES['agents_image']['tmp_name'], "uploads/" . $_FILES['agents_image']['name']);
              $agents_image = "uploads/" . $_FILES['agents_image']['name'];
          }

          // insert qurey in datatable code

          $query = "INSERT INTO agents (agents_image,agents_name,agents_discription,agents_call_no,agents_email_id) 
          VALUES ('$agents_image','$agents_name','$agents_discription','$agents_call_no','$agents_email_id')";

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
              <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Section</span> Best Agents</h4>

              <!-- Basic Layout & Basic with Icons -->
              <div class="row">
                <!-- Basic Layout -->
                <div class="col-xxl">
                  <div class="card mb-4">
                    <div class="card-header d-flex align-items-center justify-content-between">
                      <h5 class="mb-0">Agents Details</h5>
                      
                    </div>
                    <div class="card-body">

                    <form method="POST" action="manage-agents.php" enctype="multipart/form-data">
                    
                    <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-default-name">Agents Image</label>
                          <div class="col-sm-10">
                            <input type="file" class="form-control" name="agents_image" id="" placeholder="Agents Image" />
                          </div>
                        </div>

                    <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-default-name">Agents Name</label>
                          <div class="col-sm-10">
                            <input type="text" class="form-control" name="agents_name" id="" placeholder="Full Name" />
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-default-name">About Agents </label>
                          <div class="col-sm-10">
                            <input type="text" class="form-control" name="agents_discription" id="" placeholder="About Agents" />
                          </div>
                        </div>

                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-default-name">Agent Email Id  </label>
                          <div class="col-sm-10">
                            <input type="email" class="form-control" name="agents_email_id" id="" placeholder="test@gmail.com" />
                          </div>
                        </div>
                      
                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-default-phone">Phone No</label>
                          <div class="col-sm-10">
                            <input
                              type="text"
                              name="agents_call_no"
                              id="basic-default-phone"
                              class="form-control phone-mask"
                              placeholder="658 799 8941"
                              />
                          </div>
                        </div>
                        <!-- <div class="row mb-3">
                        <button type="submit" class="btn btn-primary">Add Agents Profile</button>
                          
                        </div> -->
                        
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
                        <div class="row mb-3">
                        <button type="submit" class="btn btn-primary">add socials link</button>
                          
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
<?php include 'manage-footer.php'; ?>