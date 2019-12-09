<?php include 'inc/dbconnection.php'; ?>
<?php $dept=1; ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>MODERATOR | HIGHRADIUS</title>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/mdb.min.css" rel="stylesheet">
  <link href="css/style.min.css" rel="stylesheet">
  <link rel="icon" href="img/favicon.png">
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
<?php include 'inc/header.php';?>

<button onClick="javascript:window.open('/inc/phpqrcode/index1.php','Windows','width=auto,toolbar=no,menubar=no,scrollbars=yes,resizable=yes,location=no,directories=no,status=no, url=no');return false" style="position: absolute; bottom: 30px; right: 30px; border-radius: 50%; height: 75px; z-index: 3" class="btn btn-primary"><i class="fas fa-expand fa-2x" style="margin:-5px; padding: 0px"></i></button>
  <main style="background-color: white" class="pt-5 mx-lg-5">
    <div style="border:0px solid black; height: 85vh" class="container-fluid mt-5">
      <div class="embed-responsive embed-responsive-16by9">
  <iframe class="embed-responsive-item" src="inc/phpqrcode/index1.php" allowfullscreen></iframe>
</div>
    </div>
  </main>
  <?php include 'inc/footer.php' ?>
  <!--/.Footer-->
  <!-- JQuery -->
  <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="js/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="js/mdb.min.js"></script>
  <!-- Initializations -->
  <script type="text/javascript">
    // Animations initialization
    new WOW().init();
  </script>
<?php
  $month_str="";
  $current_month = date('m');
  $current_year_table_name = date('Y');
  $current_month_table_name = date('M');
$current_year = date('y');
$days = cal_days_in_month(CAL_GREGORIAN, $current_month, $current_year);
for($i=1; $i<=$days; $i++){
  $month_str.= '`d'.$i.'`'.' varchar(2) DEFAULT "A",';
}
$query_table_new = 'CREATE TABLE IF NOT EXISTS `'.$current_month_table_name.$current_year_table_name.'` (
  `intern_id` int(11) NOT NULL,
  `intern_name` varchar(105) DEFAULT NULL,
  `department` VARCHAR(50) DEFAULT 0,
  '.$month_str.' PRIMARY KEY (`intern_id`)
)';
$res_table_new = mysqli_query($link, $query_table_new);
$check_table = "SELECT * FROM ".$current_month_table_name.$current_year_table_name;
$res_check_table = mysqli_query($link, $check_table);
$count = mysqli_num_rows($res_check_table);
if($count==0)
{
  $query_get_interns = "SELECT * FROM tbl_intern";
  $res_get_interns = mysqli_query($link, $query_get_interns);
  while($row_get_interns=mysqli_fetch_assoc($res_get_interns)){
    $intern_id = $row_get_interns['intern_id'];
    $intern_name = $row_get_interns['intern_name'];
    $department = $row_get_interns['department'];
    $query_add_intern = "INSERT INTO ".$current_month_table_name.$current_year_table_name."(intern_id, intern_name, department) VALUES('$intern_id', '$intern_name', '$department');";
    $res_add_intern = mysqli_query($link, $query_add_intern);
  }
}
?>
</body>
</html>