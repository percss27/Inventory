<?php 
include 'header.php';
include 'sidebar.php';
?>  


  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Users</h1> 
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.php">Home</a></li>
          <li class="breadcrumb-item">Users</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Users</h5>
 <!-- Vertically centered Modal -->
 <form class="row g-3 needs-validation" action="register_process2.php" method="POST" novalidate>
 <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#verticalycentered">
  Add User
              </button>
              <div class="modal fade" id="verticalycentered" tabindex="-1">
                <div class="modal-dialog modal-dialog-centered">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title">Registration</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                   

                    <div class="col-12">
                      <label for="yourName" class="form-label">Your Name</label>
                      <input type="text" id="full_name" name="full_name" class="form-control"  required>
                      <div class="invalid-feedback">Please, enter your name!</div>
                    </div>


                    <div class="col-12">
                      <label for="yourEmail" class="form-label">Your Email</label>
                      <input type="email"id="email" name="email" class="form-control" required>
                      <div class="invalid-feedback">Please enter a valid Email adddress!</div>
                    </div>


                    <div class="col-12">
                      <label for="yourUsername" class="form-label">Username</label>
                      <div class="input-group has-validation">
                        <span class="input-group-text" id="inputGroupPrepend">@</span>
                        <input type="text" id="username" name="username" class="form-control" required>
                        <div class="invalid-feedback">Please choose a username.</div>
                      </div>
                    </div>


                    <div class="col-12">
                      <label for="yourName" class="form-label">Department</label>
                     
                      <select  id="Department" name="Department"class="form-control" required>

                      <option value="BSIT">FACULTY</option>
                          <option value="User">FINANCE</option>
                          <option value="User">CLINIC</option>
                          <option value="BSIT">PRESIDENT</option>
                          <option value="BSIT">GUIDANCE</option>
                          <option value="User">ADMIN OFFICE</option>
                          <option value="User">ADMISSION</option>
                          <option value="BSIT">REGISTRAR</option>
                          <option value="BSIT">PROPERTY CUSTODIAN</option>
                          <option value="User">TESDA-LMSCT</option>
                          <option value="User">O.S.A.S.</option>
                          <option value="BSIT">RESEARCH</option>
                          <option value="BSIT">I.C.E.S.</option>
                          <option value="User">SAFETY OFFICER</option>
                          <option value="User">G.A.D.</option>
                          <option value="BSIT">SUPPLIES</option>
                          <option value="BSIT">BSIT</option>
                          <option value="BSIT">ABELS-BTVTE</option>
                          <option value="User">BSSW</option>
                          <option value="User">BSA-BISAIS</option>
                          <option value="BSIT">BSE</option>
                          <option value="BSIT">BSPA</option>



                        </select>

                      
                      <div class="invalid-feedback">Please, enter your Department!</div>
                    </div>

                    <div class="col-12">
                      <label for="yourPassword" class="form-label">Password</label>
                      <input type="password" id="password" name="password" class="form-control" required>
                      <div class="invalid-feedback">Please enter your password!</div>
                    </div>

                    <div class="col-12">
                      <label for="yourPassword" class="form-label">Confirm Password</label>
                      <input type="password" name="confirm_password" id="confirm_password" class="form-control" required>
                      <div class="invalid-feedback">Please enter your password!</div>
                    </div>

                    <div class="col-12">
                      <label for="yourPassword" class="form-label">Privillages</label>
                      
                      <select id="privillage" name="privillage"class="form-control" required>
                          <option value="Admin">Admin</option>
                          <option value="User">User</option>
                      </select>

                      <div class="invalid-feedback">Please enter your Privillage</div>
                    </div>



                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                      <button type="submit" class="btn btn-primary">Register</button>
                    </div>
                  </div>
                </div>
              </div><!-- End Vertically centered Modal-->

    </form>




              <!-- Table with stripped rows -->
              <table class="table datatable">
                <thead>
                  <tr>
                    <th scope="col">UserID</th>
                    <th scope="col">UserName</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Department</th>
                    <th scope="col">Privillages</th>
                    <th scope="col">Action</th>

                  </tr>
                </thead>
                <tbody>
                  
                <?php
// Populate the table with data
include 'server.php';
$query = "SELECT * FROM `login`";
$result = $connection->query($query);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row['UserID'] . "</td>";
        echo "<td>" . $row['UserName'] . "</td>";
        echo "<td>" . $row['FullName'] . "</td>";
        echo "<td>" . $row['Email'] . "</td>";
        echo "<td>" . $row['Department'] . "</td>";
        echo "<td>" . $row['Privillage'] . "</td>";
        echo "<td><i class='ri-edit-box-fill'  data-bs-toggle='modal' data-bs-target='#basicModal". $row['UserID'] ."'></i> <i class='ri-delete-bin-2-fill' ></i></td>";
        echo "</tr>";
   
?>














                    
 <!-- Basic Modal -->
              <div class="modal fade" id="basicModal<?php echo $row['UserID']; ?>" tabindex="-1">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title">User ID: <?php echo $row['UserID']; ?></h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                    <form method="POST" action="updateuser.php">
                    <input type="hidden" value="<?php echo $row['UserID']; ?>" id="userid" name="userid">
                    
                    <div class="col-12">
                      <label for="yourName" class="form-label">Your Name</label>
                      <input type="text" id="full_name" name="full_name" class="form-control" value="<?php echo $row['FullName']; ?>"  required>
                      <div class="invalid-feedback">Please, enter your name!</div>
                    </div>


                    <div class="col-12">
                      <label for="yourEmail" class="form-label">Your Email</label>
                      <input type="email"id="email" name="email" class="form-control" value=" <?php echo $row['Email']; ?>" required>
                      <div class="invalid-feedback">Please enter a valid Email adddress!</div>
                    </div>


                    <div class="col-12">
                      <label for="yourUsername" class="form-label">Username</label>
                      <div class="input-group has-validation">
                        <span class="input-group-text" id="inputGroupPrepend">@</span>
                        <input type="text" id="username" name="username" class="form-control" value=" <?php echo $row['UserName']; ?>" required>
                        <div class="invalid-feedback">Please choose a username.</div>
                      </div>
                    </div>


                    <div class="col-12">
                      <label for="yourName" class="form-label">Department</label>
                      <input type="text" id="Department" name="Department" class="form-control" value=" <?php echo $row['Department']; ?>" required>
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