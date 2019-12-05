<?php session_start(); ?>
<?php include '../inc/dbconnection.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>MODERATOR | HIGHRADIUS</title>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
  <link href="../css/bootstrap.min.css" rel="stylesheet">
  <link href="../css/mdb.min.css" rel="stylesheet">
  <link href="../css/style.min.css" rel="stylesheet">
  <link rel="icon" href="../img/favicon.png">
  <style>


.map-container{
overflow:hidden;
padding-bottom:56.25%;
position:relative;
height:0;
}
.map-container iframe{
left:0;
top:0;
height:100%;
width:100%;
position:absolute;
}
  </style>
</head>

<body class="grey lighten-3">
<?php include '../inc/header_in.php' ?>
  <main class="pt-5 mx-lg-5">
    <!-- Section: Testimonials v.2 -->
<section class="text-center my-5">

    <?php
             $intern = $_GET['intern'];
      $query_load_interns = "SELECT * FROM tbl_intern WHERE intern_id='$intern'";
      $res_load_interns = mysqli_query($link, $query_load_interns);
      $row_load_interns = mysqli_fetch_assoc($res_load_interns);
    ?>

  <!-- Section heading -->
  <!-- <h2 class="h1-responsive font-weight-bold my-5"><?php echo $row_load_interns['intern_name'] ?></h2> -->

  <div class="wrapper-carousel-fix">
    <!-- Carousel Wrapper -->
    <div id="carousel-example-1" class="carousel no-flex testimonial-carousel slide carousel-fade" data-ride="carousel"
      data-interval="false">
      <!--Slides-->
      <div class="carousel-inner" role="listbox">
        <!--First slide-->
        <div class="carousel-item active">
          <div class="testimonial">
            <!--Avatar-->
            <div class="avatar mx-auto mb-4">
              <img style="width: 200px" src="../stud_dp/default_dp.png" class="rounded-circle img-fluid"
                alt="First sample avatar image">
            </div>
           
            <!--Content-->
            <h4 style="line-height: 5px" class="font-weight-bold"><?php echo $row_load_interns['intern_name']?></h4>
            <h6 style="line-height: 20px" class="font-weight-bold my-3"><?php echo $row_load_interns['intern_id']?></h6>
            <!--Review-->
            <!-- <i class="fas fa-star blue-text"> </i>
            <i class="fas fa-star blue-text"> </i>
            <i class="fas fa-star blue-text"> </i>
            <i class="fas fa-star blue-text"> </i>
            <i class="fas fa-star-half-alt blue-text"> </i> -->
          </div>
        </div>
      </div>
      <!--Slides-->
      <!--Controls-->
      <a class="carousel-control-prev left carousel-control" href="#carousel-example-1" role="button"
        data-slide="prev">
        <span class="icon-prev" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next right carousel-control" href="#carousel-example-1" role="button"
        data-slide="next">
        <span class="icon-next" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
      <!--Controls-->
    </div>
    <!-- Carousel Wrapper -->
  </div>

</section>
<!-- Section: Testimonials v.2 -->
    </div>
  </main>



  <div style="position: absolute; width: 100%; bottom:0">
  <?php include '../inc/footer.php' ?>
</div>
  <!--/.Footer-->

  <!-- SCRIPTS -->
  <!-- JQuery -->
  <script type="text/javascript" src="../js/jquery-3.4.1.min.js"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="../js/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="../js/bootstrap.min.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="../js/mdb.min.js"></script>
  <!-- Initializations -->
  <script type="text/javascript">
    // Animations initialization
    new WOW().init();

  </script>



</body>

</html>
