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
    <div style="border:0px solid black; height: 80vh" class="container-fluid mt-5">
      
      <div class="row">


      </div>


      <div class="row">

        <div class="modal fade" id="modalContactForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  <div class="modal-dialog cascading-modal" role="document">
    <!--Content-->
    <div class="modal-content">

      <!--Header-->
      <div class="modal-header light-blue darken-3 white-text">
        <h4 class="title"><i class="fas fa-pencil-alt"></i> Contact form</h4>
        <button type="button" class="close waves-effect waves-light" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <!--Body-->
      <div class="modal-body mb-0">
        <div class="md-form form-sm">
          <i class="fas fa-envelope prefix active"></i>
          <input type="text" id="form8" class="form-control">
          <label for="form8" class="active">Your name</label>
        </div>

        <div class="md-form form-sm">
          <i class="fas fa-lock prefix active"></i>
          <input type="password" id="form9" class="form-control">
          <label for="form9" class="active">Your email</label>
        </div>

        <div class="md-form form-sm">
          <i class="fas fa-tag prefix"></i>
          <input type="search" id="form-autocomplete-2" class="form-control mdb-autocomplete">
          <button class="mdb-autocomplete-clear">
            <svg fill="#000000" height="24" viewBox="0 0 24 24" width="24" xmlns="https://www.w3.org/2000/svg">
              <path d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12z" />
              <path d="M0 0h24v24H0z" fill="none" />
            </svg>
          </button>
          <label for="form-autocomplete-2" class="active">Subject</label>
        </div>

        <div class="md-form form-sm">
          <i class="fas fa-pencil-alt prefix"></i>
          <textarea type="text" id="form67" class="md-textarea mb-0"></textarea>
          <label for="form67">Your message</label>
        </div>

        <div class="text-center mt-1-half">
          <button class="btn btn-info mb-2 waves-effect waves-light">Send <i class="fas fa-send ml-1"></i></button>
        </div>

      </div>
    </div>
    <!--/.Content-->
  </div>
</div>

<div class="text-center">
  <a href="" class="btn btn-default btn-rounded my-3" data-toggle="modal" data-target="#modalContactForm">Apply for Leave</a>
</div>
      
    </div>
  </main>
  <?php include '../inc/footer.php' ?>
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
