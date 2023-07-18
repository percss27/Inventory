<!-- ======= Sidebar ======= -->
<aside id="sidebar" class="sidebar">

<ul class="sidebar-nav" id="sidebar-nav">

  <li class="nav-item">
    <a class="nav-link " href="index.php">
      <i class="bi bi-grid"></i>
      <span>Dashboard</span>
    </a>
  </li><!-- End Dashboard Nav -->


  
 
  

  <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-menu-button-wide"></i><span>StockIN/StockOUT</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>


      <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
        <li>
        <a href="Stockinadmin.php">
          <i class="bi bi-circle"></i><span>StockIN</span>
        </a>
        </li>



        <li>
        <a href="StockOut.php">
          <i class="bi bi-circle"></i><span>StockOUT</span>
        </a>
        </li>

      </ul>
    </li>

 

  <li class="nav-item">
    <a class="nav-link collapsed" data-bs-target="#tables-nav" data-bs-toggle="collapse" href="">
      <i class="bi bi-layout-text-window-reverse"></i><span>Items</span><i class="bi bi-chevron-down ms-auto"></i>
    </a>


    <ul id="tables-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
      <li>
        <a href="schoolsupplies.php">
          <i class="bi bi-circle"></i><span>School Supplies</span>
          
        </a>
      </li>
      
      <li>
        <a href="Maintenance.php">
          <i class="bi bi-circle"></i><span>Maintenance Supplies</span>
        </a>
      </li>

      <li>
        <a href="General.php">
          <i class="bi bi-circle"></i><span>General Supplies</span>
        </a>
      </li>
    </ul>
  </li><!-- End Tables Nav -->






  

  <li class="nav-item">
    <a class="nav-link collapsed" data-bs-target="#tables-nav2" data-bs-toggle="collapse" href="#">
      <i class="bi bi-layout-text-window-reverse"></i><span>Users</span><i class="bi bi-chevron-down ms-auto"></i>
    </a>
    <ul id="tables-nav2" class="nav-content collapse " data-bs-parent="#sidebar-nav">

      <li>
        <a href="tables-data.php">
          <i class="bi bi-circle"></i><span>User Data</span>
        </a>
      </li>
    </ul>
  </li>
  
  
  

  
  
  <!-- End Tables Nav -->

  <li class="nav-item">
    <a class="nav-link collapsed" data-bs-target="#charts-nav" data-bs-toggle="collapse" href="#">
      <i class="bi bi-bar-chart"></i><span>Reports</span><i class="bi bi-chevron-down ms-auto"></i>
    </a>
    <ul id="charts-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
      <li>
        <a href="charts-chartjs.php">
          <i class="bi bi-circle"></i><span>Monthly Reports</span>
        </a>
      </li>
    </ul>
  </li><!-- End Charts Nav -->


  

  

  <li class="nav-heading">Pages</li>

  <li class="nav-item">
    <a class="nav-link collapsed" href="users-profile.php">
      <i class="bi bi-person"></i>
      <span>Profile</span>
    </a>
  </li><!-- End Profile Page Nav -->

  


  <li class="nav-item">
    <a class="nav-link collapsed" href="logout.php">
      <i class="bi bi-box-arrow-in-right"></i>
      <span>Logout</span>
    </a>
  </li><!-- End Login Page Nav -->
</ul>

</aside><!-- End Sidebar-->
