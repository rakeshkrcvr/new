<?php
include '../database.php';
include 'sidebar.php';
include 'importent-header.php';
?>

<?php 
       
     

        if(isset($_POST['submit'])){  

          //  $property_images = mysqli_real_escape_string($conn, $_POST['property_images']);
           $property_name = mysqli_real_escape_string($conn, $_POST['property_name']);
           $property_location = mysqli_real_escape_string($conn, $_POST['property_location']);
           $property_type = mysqli_real_escape_string($conn, $_POST['property_type']);
           $property_rent_buy = mysqli_real_escape_string($conn, $_POST['property_rent_buy']);
           $property_price = mysqli_real_escape_string($conn, $_POST['property_price']);
           $property_discription = mysqli_real_escape_string($conn, $_POST['property_discription']);
           $btn_text = mysqli_real_escape_string($conn, $_POST['btn_text']);
           $btn_link = mysqli_real_escape_string($conn, $_POST['btn_link']);
           $property_area = mysqli_real_escape_string($conn, $_POST['property_area']);
           $property_beds = mysqli_real_escape_string($conn, $_POST['property_beds']);
           $property_baths = mysqli_real_escape_string($conn, $_POST['property_baths']);
           $property_parking = mysqli_real_escape_string($conn, $_POST['property_parking']);
   
       
        // if ($_FILES['pro_images']['name'])
        //   {
        //       move_uploaded_file($_FILES['pro_images']['tmp_name'], "uploads/" . $_FILES['pro_images']['name']);
        //       $pro_images = "uploads/" . $_FILES['pro_images']['name'];
        //   }

          // if ($_FILES['pro_images']['name'])
          // {
          //     move_uploaded_file($_FILES['pro_images']['tmp_name'], "uploads/" . $_FILES['pro_images']['name']);
          //     $pro_images_des = "uploads/" . $_FILES['pro_images']['name'];
          // }


          if ($_FILES['pro_images']['name'])
          {
              move_uploaded_file($_FILES['pro_images']['tmp_name'], "uploads/" . $_FILES['pro_images']['name']);
              $pro_images_des = "uploads/" . $_FILES['pro_images']['name'];
          }


          // insert qurey in datatable code

          $query = "INSERT INTO property_list (property_name,property_location,property_type,property_rent_buy,property_price,property_discription,btn_text,btn_link,property_area,property_beds,property_baths,property_parking,pro_images) VALUES 
          ('$property_name','$property_location','$property_type','$property_rent_buy','$property_price','$property_discription','$btn_text','$btn_link','$property_area','$property_beds','$property_baths','$property_parking','$pro_images_des')";

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
              <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Section</span> Property</h4>

              <!-- Basic Layout & Basic with Icons -->
              <div class="row">
                <!-- Basic Layout -->
                <div class="col-lg-12">
                        <a href="manage-property-list.php"><button type="submit" class="btn btn-primary">All Properties List</button></a>
                        <div>
                          <br>
                <div class="col-xxl">

                        
                  <div class="card mb-4">
                    <div class="card-header d-flex align-items-center justify-content-between">
                    
                    
                    <h5 class="mb-0">Servicess  Details</h5>
                      
                    </div>
                    <div class="card-body">
                      
                    <form method="POST" action="manage-property.php" enctype="multipart/form-data">

                       <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-default-name">Property Images</label>
                          <div class="col-sm-10">
                            <input type="file" class="form-control" name="pro_images" id="" placeholder="Property Images" />
                          </div>
                        </div>
                      
                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-default-phone">Property Name</label>
                          <div class="col-sm-10">
                            <input
                              type="text"
                              name="property_name"
                              class="form-control phone-mask"
                              placeholder="Property name"
                              />
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-default-phone">Property Location</label>
                          <div class="col-sm-10">
                            <input
                              type="text"
                              name="property_location"
                              class="form-control phone-mask"
                              placeholder="Property name"
                              />
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-default-phone">Property Type</label>
                          <div class="col-sm-10">
                            <input
                              type="text"
                              name="property_type"
                              class="form-control phone-mask"
                              placeholder="Commercial & Residential"
                              />
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-default-phone">Rent & Buy</label>
                          <div class="col-sm-10">
                            <input
                              type="text"
                              name="property_rent_buy"
                              class="form-control phone-mask"
                              placeholder="Rent & Buy"
                              />
                          </div>
                        </div>

                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-default-phone">Property Price</label>
                          <div class="col-sm-10">
                            <input
                              type="number"
                              name="property_price"
                              class="form-control phone-mask"
                              placeholder="Rent & Price"
                              />
                          </div>
                        </div>

                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-default-phone">Property Discription</label>
                          <div class="col-sm-10">
                            <input
                              type="text"
                              name="property_discription"
                              class="form-control phone-mask"
                              placeholder="Property Discription"
                              />
                          </div>
                        </div>

                        <div class="row mb-3">
                          <label class="col-sm-1 col-form-label" for="basic-default-phone">Button URL</label>
                          <div class="col-sm-10">
                            <input
                              type="text"
                              name="btn_link"
                              class="form-control phone-mask"
                              placeholder="Page URL "
                              />
                          </div>
                        </div>
                        <div>

                        <div class="row mb-3">
                          <label class="col-sm-1 col-form-label" for="basic-default-phone">Button Text</label>
                          <div class="col-sm-10">
                            <input
                              type="text"
                              name="btn_text"
                              class="form-control phone-mask"
                              placeholder="Page URL "
                              />
                          </div>
                        </div>
                        <div>

                        

                        <div class="row mb-3">
                          <label class="col-sm-1 col-form-label" for="basic-default-phone">area</label>
                          <div class="col-sm-2">
                            <input
                              type="number"
                              name="property_area"
                              class="form-control phone-mask"
                              placeholder="350 sq.ft."
                              />
                          </div>
                          <label class="col-sm-1 col-form-label" for="basic-default-phone">beds</label>
                          <div class="col-sm-2">
                            <input
                              type="number"
                              name="property_beds"
                              class="form-control phone-mask"
                              placeholder="2 beds rooms "
                              />
                          </div>
                          <label class="col-sm-1 col-form-label" for="basic-default-phone">baths</label>
                          <div class="col-sm-2">
                            <input
                              type="number"
                              name="property_baths"
                              class="form-control phone-mask"
                              placeholder="baths "
                              />
                          </div>
                          <label class="col-sm-1 col-form-label" for="basic-default-phone">Parking</label>
                          <div class="col-sm-2">
                            <input
                              type="number"
                              name="property_parking"
                              class="form-control phone-mask"
                              placeholder="Parking"
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

         <?php include 'manage-footer-copyright.php'; ?>