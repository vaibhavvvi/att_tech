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
         <div class="col=lg-2">
          
         </div>
        <div class="col-lg-8">
           <?php  if($directory_name=='absent'){ ?>
          <button onclick="window.location.href='../smart_attendance'" type="button" class="btn btn-light">PRESENT</button>
          <button onclick="window.location.href='../absent'" type="button" class="btn deep-orange white-text">ABSENT</button>
          <?php }
          else{ ?>
          <button onclick="window.location.href='../smart_attendance'" type="button" class="btn primary-color white-text">PRESENT</button>
         
          <button onclick="window.location.href='../absent'" type="button" class="btn btn-light">ABSENT</button>
        <?php } ?>
      </div>
      <table class="table">
  <thead class="primary-color white-text">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Emp ID</th>
      <th scope="col">Name</th>
      <th scope="col">STATUS</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>10472</td>
      <td>Akash Jaiswal</td>
      <td><!-- Default checked -->
<div class="custom-control custom-switch">
  <input type="checkbox" class="custom-control-input" id="customSwitch1" checked>
  <label class="custom-control-label" for="customSwitch1"></label>
</div></td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>10555</td>
      <td>Vaibhav Vishal</td>
      <td><!-- Default checked -->
<div class="custom-control custom-switch">
  <input type="checkbox" class="custom-control-input" id="customSwitch2" checked>
  <label class="custom-control-label" for="customSwitch2"></label>
</div></td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>10562</td>
      <td>Aayush Singh</td>
      <td><!-- Default checked -->
<div class="custom-control custom-switch">
  <input type="checkbox" class="custom-control-input" id="customSwitch3" checked>
  <label class="custom-control-label" for="customSwitch3"></label>
</div></td>
    </tr>
  </tbody>
</table>
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
