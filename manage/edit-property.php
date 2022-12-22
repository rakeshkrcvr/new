<?php
include '../database.php';
include 'sidebar.php';
include 'importent-header.php';
?> 


<style>
  img{
    width:100px;
  }
</style>

<div class="content-wrapper">
  <!-- Content -->
  <div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4">
      <span class="text-muted fw-light">Section</span> Property
    </h4>
    <!-- Basic Layout & Basic with Icons -->
    <div class="row">
      <!-- Basic Layout -->
      <div class="col-lg-12">
        <a href="manage-property-list.php">
          <button type="submit" class="btn btn-primary">All Properties List</button>
        </a>
        <div>
          <br>
          <div class="col-xxl">
            <div class="card mb-4">
              <div class="card-header d-flex align-items-center justify-content-between">
                <h5 class="mb-0">Servicess Details</h5>
              </div>
              <div class="card-body"> 
                
                <?php

            if(isset($_GET['id']))
            
            
            {

                $property_list_id = mysqli_real_escape_string($conn,  $_GET['id']);
                $property_list_query = "SELECT * FROM property_list WHERE id = '$property_list_id' ";
                $property_list_result = mysqli_query($conn, $property_list_query);

                // print_r($property_list_result);

                

                if(mysqli_num_rows($property_list_result) > 0 ) 
                {
                  $property = mysqli_fetch_assoc($property_list_result);{

                  // print_r($property);
       ?> 


<?php
                // if(isset($_GET['id']))
                //  {
                //     $property_list_id = mysqli_real_escape_string($conn, $_GET['id']);
                //     $property_list_query = "SELECT * FROM property_list WHERE id='$property_list_id' ";
                //     $query_run = mysqli_query($conn, $property_list_query);
                //     if(mysqli_num_rows($query_run) > 0){
                //       while($data = mysqli_fetch_assoc($query_run)){
                //           echo $data["property_name"];
                      // }
                
        

              ?>
       
                    <form method="POST" action="manage-property.php" enctype="multipart/form-data">
                  <div class="row mb-3">
                    <input type="hidden" name="id" value="<?= $property['id']; ?>" >
                    <label class="col-sm-2 col-form-label" for="basic-default-name">Property Images</label>
                    <div class="col-sm-10">
                      <div><img class="edit_image" src="<?= $property['pro_images']; ?>"></div>
                      <input type="file" class="form-control" name="pro_images" id=""  value="<?= $property['pro_images']; ?>" placeholder="Property Images" />
                    </div>
                  </div>
                  <div class="row mb-3">
                    <label class="col-sm-2 col-form-label" for="basic-default-phone">Property Name</label>
                    <div class="col-sm-10">
                      <input type="text" name="property_name" value="<?= $property['property_name']; ?>" class="form-control phone-mask" placeholder="Property name" />
                    </div>
                  </div>
                  <div class="row mb-3">
                    <label class="col-sm-2 col-form-label" for="basic-default-phone">Property Location</label>
                    <div class="col-sm-10">
                      <input type="text" name="property_location" value="<?= $property['property_location']; ?>" class="form-control phone-mask" placeholder="Property name" />
                    </div>
                  </div>
                  <div class="row mb-3">
                    <label class="col-sm-2 col-form-label" for="basic-default-phone">Property Type</label>
                    <div class="col-sm-10">
                      <input type="text" name="property_type" value="<?= $property['property_type']; ?>" class="form-control phone-mask" placeholder="Commercial & Residential" />
                    </div>
                  </div>
                  <div class="row mb-3">
                    <label class="col-sm-2 col-form-label" for="basic-default-phone">Rent & Buy</label>
                    <div class="col-sm-10">
                      <input type="text" name="property_rent_buy" value="<?= $property['property_location']; ?>" class="form-control phone-mask" placeholder="Rent & Buy" />
                    </div>
                  </div>
                  <div class="row mb-3">
                    <label class="col-sm-2 col-form-label" for="basic-default-phone">Property Price</label>
                    <div class="col-sm-10">
                      <input type="number" name="property_price" value="<?= $property['property_price']; ?>" class="form-control phone-mask" placeholder="Rent & Price" />
                    </div>
                  </div>
                  <div class="row mb-3">
                    <label class="col-sm-2 col-form-label" for="basic-default-phone">Property Discription</label>
                    <div class="col-sm-10">
                      <input type="text" name="property_discription" value="<?= $property['property_discription']; ?>" class="form-control phone-mask" placeholder="Property Discription" />
                    </div>
                  </div>
                  <div class="row mb-3">
                    <label class="col-sm-1 col-form-label" for="basic-default-phone">Button URL</label>
                    <div class="col-sm-10">
                      <input type="text" name="btn_link" value="<?= $property['btn_link']; ?>" class="form-control phone-mask" placeholder="Page URL " />
                    </div>
                  </div>
                  <div>
                    <div class="row mb-3">
                      <label class="col-sm-1 col-form-label" for="basic-default-phone">Button Text</label>
                      <div class="col-sm-10">
                        <input type="text" name="btn_text" value="<?= $property['btn_text']; ?>" class="form-control phone-mask" placeholder="Page URL " />
                      </div>
                    </div>
                    <div>
                      <div class="row mb-3">
                        <label class="col-sm-1 col-form-label" for="basic-default-phone">area</label>
                        <div class="col-sm-2">
                          <input type="number" name="property_area" value="<?= $property['property_area']; ?>"  class="form-control phone-mask" placeholder="350 sq.ft." />
                        </div>
                        <label class="col-sm-1 col-form-label"  for="basic-default-phone">beds</label>
                        <div class="col-sm-2">
                          <input type="number" name="property_beds" value="<?= $property['property_beds']; ?>" class="form-control phone-mask" placeholder="2 beds rooms " />
                        </div>
                        <label class="col-sm-1 col-form-label" for="basic-default-phone">baths</label>
                        <div class="col-sm-2">
                          <input type="number" name="property_baths" value="<?= $property['property_baths']; ?>" class="form-control phone-mask" placeholder="baths " />
                        </div>
                        <label class="col-sm-1 col-form-label" for="basic-default-phone">Parking</label>
                        <div class="col-sm-2">
                          <input type="number" name="property_parking" value="<?= $property['property_parking']; ?>" class="form-control phone-mask" placeholder="Parking" />
                        </div>
                      </div>
                      <!-- <div><button type="submit" class="btn btn-primary">Add Menu</button><div> -->
                      <div class="row justify-content-end">
                        <div class="col-sm-10">
                          <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                        </div>
                      </div>
        </form>

        <?php 
            
          }
          
           }else{
             echo "No Records Found!";
        }
          }
          ?>

              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- / Content --> 
        <?php 
         include 'manage-footer-copyright.php';
         
         
          ?>