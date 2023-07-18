<?php 
include 'header.php';
include 'sidebar.php';
?>  


  <main id="main" class="main">

    <div class="pagetitle">
      <h1>General Supplies</h1> 
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.php">Home</a></li>
          <li class="breadcrumb-item">General Supplies</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <br>
 <!-- Vertically centered Modal --> 
 <form class="row g-3 needs-validation" action="addschoolsupplies.php" method="POST" novalidate>
              <div class="modal fade" id="verticalycentered" tabindex="-1">
                <div class="modal-dialog modal-dialog-centered">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title">Add Item</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                   


                    <div class="col-12">
                      <label for="yourName" class="form-label">Name</label>
                      <input type="text" id="ItemName" name="ItemName" class="form-control"  required>
                      <div class="invalid-feedback">Please, enter the item name!</div>
                    </div>


                    <div class="col-12">
                      <label for="yourName" class="form-label">Description</label>
                      <input type="text" id="ItemDes" name="ItemDes" class="form-control"  required>
                      <div class="invalid-feedback">Please, enter the item name!</div>
                    </div>



                    <div class="col-12">
                      <label for="yourName" class="form-label">Unit</label>
                      <input type="text" id="ItemUnit" name="ItemUnit" class="form-control"  required>
                    </div>


                    <div class="col-12">
                      <label for="yourName" class="form-label">Quantity</label>
                      <input type="text" id="Quantity" name="Quantity" class="form-control"  required>
                      <div class="invalid-feedback">Please, enter the item name!</div>
                    </div>




                    

                    
                    

                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                      <button type="submit" class="btn btn-primary">Add</button>
                    </div>
                  </div>
                </div>
              </div><!-- End Vertically centered Modal-->

    </form>




              <!-- Table with stripped rows -->
              <table class="table datatable">
                <thead>
                  <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Description</th>
                    <th scope="col">Unit</th>
                    <th scope="col">Quantity</th>
                    <th scope="col">Category</th>
                    <th scope="col">Action</th>

                  </tr>
                </thead>
                <tbody>
                  
                <?php
// Populate the table with data
include 'server.php';
$query = "SELECT * FROM `items`";
$result = $connection->query($query);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row['ItemID'] . "</td>";
        echo "<td>" . $row['ItemName'] . "</td>";
        echo "<td>" . $row['ItemDes'] . "</td>";
        echo "<td>" . $row['Itemunit'] . "</td>";
        echo "<td>" . $row['Quantity'] . "</td>";
        echo "<td>" . $row['Category'] . "</td>";
        echo "<td><i class='ri-edit-box-fill'  data-bs-toggle='modal' data-bs-target='#basicModal". $row['ItemID'] ."'></i> <i class='ri-delete-bin-2-fill' ></i></td>";
        echo "</tr>";
   
?>














                    
 <!-- Basic Modal -->
              <div class="modal fade" id="basicModal<?php echo $row['ItemID']; ?>" tabindex="-1">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title">User ID: <?php echo $row['ItemID']; ?></h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                    <form method="POST" action="updateschool.php">
                    <input type="hidden" value="<?php echo $row['ItemID']; ?>" id="ItemID" name="ItemID">
                    
                


                    <div class="col-12">
                      <label for="yourName" class="form-label">Name</label>
                      <input type="text" id="ItemName" name="ItemName" class="form-control" value="<?php echo $row['ItemName']; ?>"  required>
                      <div class="invalid-feedback">Please, enter your name!</div>
                    </div>


                    <div class="col-12">
                      <label for="yourName" class="form-label">Description</label>
                      <input type="text" id="ItemDes" name="ItemDes" class="form-control" value="<?php echo $row['ItemDes']; ?>"  required>
                      <div class="invalid-feedback">Please, enter your name!</div>
                    </div>



                    <div class="col-12">
                      <label for="yourName" class="form-label">Unit</label>
                      <input type="text" id="ItemUnit" name="ItemUnit" class="form-control" value="<?php echo $row['Itemunit']; ?>"  required>
                      <div class="invalid-feedback">Please, enter your name!</div>
                    </div>


                    <div class="col-12">
                      <label for="yourName" class="form-label">Quantity</label>
                      <input type="text" id="Quantity" name="Quantity" class="form-control" value="<?php echo $row['Quantity']; ?>"  required>
                      <div class="invalid-feedback">Please, enter your name!</div>
                    </div>




    

                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                      <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>
                    </form>
                  </div>
                </div>
              </div><!-- End Basic Modal-->

            


<?php 
 }
} else {
    echo "<tr><td colspan='3'>No data found</td></tr>";
}
mysqli_close($connection); ?>

               
</tbody>
              </table>
              <!-- End Table with stripped rows -->



            </div>
          </div>

        </div>
      </div>
    </section>

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">
    <div class="copyright">
      &copy; Copyright <strong><span>NiceAdmin</span></strong>. All Rights Reserved
    </div>
    <div class="credits">
      <!-- All the links in the footer should remain intact. -->
      <!-- You can delete the links only if you purchased the pro version. -->
      <!-- Licensing information: https://bootstrapmade.com/license/ -->
      <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
      Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/chart.js/chart.umd.js"></script>
  <script src="assets/vendor/echarts/echarts.min.js"></script>
  <script src="assets/vendor/quill/quill.min.js"></script>
  <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/admin.js"></script>

</body>

</html>