<?php
include '../database.php';
include 'sidebar.php';
include 'importent-header.php';
?>


<style>
.edit_image{
    width:150px;
}
</style>

<!-- Content wrapper -->
<div class="content-wrapper">
    <!-- Content -->

    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Section</span> All Properties List</h4>

        <!-- Basic Layout & Basic with Icons -->
        <div class="row">



            <div class="container table-responsive py-5">
                <table class="table table-bordered table-hover">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">S.No</th>
                            <th scope="col">Property Name</th>
                            <th scope="col">Property Image</th>
                            <th scope="col">Property Type</th>
                            <th scope="col">Builder Name</th>
                            <th scope="col">Gallery images</th>
                            <th scope="col">Amenities</th>
                            <th scope="col">Property Edit</th>
                            <th scope="col">Property Type</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>TRY OUR VIRTUAL TOURS</td>
                            <td><img class="edit_image" src="uploads/emmer.jpeg"></td>
                            <td>Commercial</td>
                            <td>Emmar</td>
                            <td><button class="btn btn-primary">Edit Gallery</button></td>
                            <td><button class="btn btn-primary">Edit Amenities</button></td>
                            <td><button class="btn btn-primary">Edit</button></td>
                            <td><button class="btn btn-primary">Delete</button></td>
                        </tr>

                    </tbody>
                </table>
            </div>





        </div>
    </div>
</div>


<!-- / Content -->

<?php include 'manage-footer-copyright.php'; ?>