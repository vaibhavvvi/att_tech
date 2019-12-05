<header>

    <!-- Navbar -->
    <nav class="navbar fixed-top navbar-expand-lg navbar-light white scrolling-navbar">
      <div class="container-fluid">

        <!-- Brand -->
       <!--  <a class="navbar-brand waves-effect" href="https://mdbootstrap.com/docs/jquery/" target="_blank">
          <strong class="blue-text">MDB</strong>
        </a> -->

        <!-- Collapse -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Links -->
        <div class="collapse navbar-collapse" id="navbarSupportedContent">

          <!-- Left -->
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link waves-effect" href="#">Home
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link waves-effect" href="https://mdbootstrap.com/docs/jquery/" target="_blank">FAQ</a>
            </li>
            <li class="nav-item">
              <a class="nav-link waves-effect" href="https://mdbootstrap.com/education/bootstrap/" target="_blank">Raise Query</a>
            </li>
          </ul>
          <ul class="navbar-nav nav-flex-icons">
            <!-- <li class="nav-item">
              <a href="https://www.facebook.com/mdbootstrap" class="nav-link waves-effect" target="_blank">
                <i class="fab fa-facebook-f"></i>
              </a>
            </li> -->
           <!--  <li class="nav-item">
              <a href="https://twitter.com/MDBootstrap" class="nav-link waves-effect" target="_blank">
                <i class="fab fa-twitter"></i>
              </a>
            </li> -->
            <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-333" data-toggle="dropdown"
          aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-user"></i>
        </a>
        <div class="dropdown-menu dropdown-menu-right dropdown-default"
          aria-labelledby="navbarDropdownMenuLink-333">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Logout</a>
        </div>
      </li>
          </ul>
        </div>
      </div>
    </nav>
    <div class="sidebar-fixed position-fixed">
      <a class="logo-wrapper waves-effect">
        <center> <img src="../img/hrc.png" class="img-fluid" alt=""> </center>
      </a>

       <div class="list-group list-group-flush">
        <a href="../" class="list-group-item list-group-item-action waves-effect">
          <i class="fas fa-qrcode mr-3"></i>QR CODE</a>

          <?php 
      $new_path = explode('/',getcwd());
      $length_of_path = sizeof($new_path);
      $directory_name = $new_path[$length_of_path-1];
      if($directory_name=='smart_attendance' || $directory_name=='absent'){
      ?>

        <a href="../smart_attendance" class="list-group-item active primary-color waves-effect">
          <i class="fas fa-table mr-3"></i>Smart Attendance
        </a>
      <?php } 
      else{

      ?>

        <a href="../smart_attendance" class="list-group-item list-group-item-action waves-effect">
          <i class="fas fa-table mr-3"></i>Smart Attendance</a>

        <?php } ?>


<?php 
      $new_path = explode('/',getcwd());
      $length_of_path = sizeof($new_path);
      $directory_name = $new_path[$length_of_path-1];
      if($directory_name=='monthly_view'){
      ?>

      <?php
        $current_month = date('M');
      ?>
        <a href="../monthly_view?month=<?php echo $current_month ?>" class="list-group-item active primary-color waves-effect">
          <i class="fas fa-calendar mr-3"></i>Monthly report
        </a>
      <?php } 
      else{

      ?>

        <a href="../monthly_view?month=<?php echo $current_month ?>" class="list-group-item list-group-item-action waves-effect">
          <i class="fas fa-calendar mr-3"></i>Monthly report</a>

        <?php }
      $new_path = explode('/',getcwd());
      $length_of_path = sizeof($new_path);
      $directory_name = $new_path[$length_of_path-1];
      if($directory_name=='all_interns'){
      ?>

        <a href="../all_interns" class="list-group-item active primary-color waves-effect">
          <i class="fas fa-user mr-3"></i>Interns
        </a>
      <?php } 
      else{
      ?>
        <a href="../all_interns" class="list-group-item list-group-item-action waves-effect">
          <i class="fas fa-user mr-3"></i>Interns</a>
        <?php } ?>
        <!-- <a href="#" class="list-group-item list-group-item-action waves-effect">
          <i class="fas fa-map mr-3"></i>Maps</a> -->
        <!-- <a href="#" class="list-group-item list-group-item-action waves-effect">
          <i class="fas fa-money-bill-alt mr-3"></i>Orders</a> -->
      </div>
    </div>

  </header>