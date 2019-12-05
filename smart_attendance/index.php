<?php session_start(); 


function redirect($url)
{
    if (!headers_sent())
    {    
        header('Location: '.$url);
        exit;
        }
    else
        {  
        echo '<script type="text/javascript">';
        echo 'window.location.href="'.$url.'";';
        echo '</script>';
        echo '<noscript>';
        echo '<meta http-equiv="refresh" content="0;url='.$url.'" />';
        echo '</noscript>'; exit;
    }
}

// $ch = curl_init();
// curl_setopt_array(
// $ch, array(
// CURLOPT_URL => '../inc/phpqrcode/del.php',
// CURLOPT_RETURNTRANSFER => true
// ));

// $output = curl_exec($ch);
// echo $output;

redirect('../inc/phpqrcode/del.php');
?>

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

    td{
      border:0px solid black;
    }
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
<?php include '../inc/header_in.php';
// rmdir('../inc/phpqrcode/temp'); 

?>


 <?php 
      $new_path = explode('/',getcwd());
      $length_of_path = sizeof($new_path);
      $directory_name = $new_path[$length_of_path-1];
     
      ?>

  <main class="pt-5 mx-lg-5">
    <div style="border:0px solid black; height: 80vh" class="container-fluid mt-5">
      <div class="row">
         <div class="col=lg-2">
          &nbsp;&nbsp;&nbsp;&nbsp;
         </div>
        <div class="col=lg-10">
          <button onclick="window.location.href='../smart_attendance'" type="button" class="btn primary-color white-text">PRESENT</button>
          <?php  if($directory_name=='smart_attendance'){ ?>
          <button onclick="window.location.href='../absent'" type="button" class="btn btn-light">ABSENT</button>
          
          <?php }
          else{ ?>
          <button onclick="window.location.href='../absent'" type="button" class="btn primary-color white-text">ABSENT</button>
          <button onclick="window.location.href='../absent'" type="button" class="btn primary-color white-text">PRESENT</button>
          <button onclick="window.location.href='../smart_attendance'" type="button" class="btn btn-light">ABSENT</button>
        <?php } ?>
        </div>
      </div>
      <table class="table">
  <thead class="primary-color white-text">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Emp ID</th>
      <th scope="col">Name</th>
      <th style="text-align: center;" scope="col">STATUS</th>
      <th scope="col">HALF DAY</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>10472</td>
      <td>Akash Jaiswal</td>
      <td><!-- Default checked -->
<div class="custom-control custom-switch" align="center">
  <input type="checkbox" class="custom-control-input" id="customSwitch1" checked>
  <label class="custom-control-label" for="customSwitch1"></label>
</div></td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>10555</td>
      <td>Vaibhav Vishal</td>
      <td><!-- Default checked -->
<div class="custom-control custom-switch" align="center">
  <input type="checkbox" class="custom-control-input" id="customSwitch2" checked>
  <label class="custom-control-label" for="customSwitch2"></label>
</div></td>
    </tr>
     <tr>
      <th scope="row">2</th>
      <td>10555</td>
      <td>Vaibhav Vishal</td>
      <td><!-- Default checked -->
<div class="custom-control custom-switch" align="center">
  <input type="checkbox" class="custom-control-input" id="customSwitch2" checked>
  <label class="custom-control-label" for="customSwitch2"></label>
</div></td>
    </tr>
     <tr>
      <th scope="row">2</th>
      <td>10555</td>
      <td>Vaibhav Vishal</td>
      <td><!-- Default checked -->
<div class="custom-control custom-switch" align="center">
  <input type="checkbox" class="custom-control-input" id="customSwitch2" checked>
  <label class="custom-control-label" for="customSwitch2"></label>
</div></td>
<td>
  <div class="custom-control custom-radio">
  <input type="radio" class="custom-control-input" id="defaultUnchecked" name="defaultExampleRadios">
  <label class="custom-control-label" for="defaultUnchecked">Half Day</label>
</div>
</td>
    </tr>
     <tr>
      <th scope="row">2</th>
      <td>10555</td>
      <td>Vaibhav Vishal</td>
      <td><!-- Default checked -->
<div class="custom-control custom-switch" align="center">
  <input type="checkbox" class="custom-control-input" id="customSwitch2" checked>
  <label class="custom-control-label" for="customSwitch2"></label>
</div></td>
    </tr>
     <tr>
      <th scope="row">2</th>
      <td>10555</td>
      <td>Vaibhav Vishal</td>
      <td><!-- Default checked -->
<div class="custom-control custom-switch" align="center">
  <input type="checkbox" class="custom-control-input" id="customSwitch2" checked>
  <label class="custom-control-label" for="customSwitch2"></label>
</div></td>
    </tr>
    
    <tr>
      <th scope="row">3</th>
      <td>10562</td>
      <td>Devi Prasad</td>
      <td><!-- Default checked -->
<div class="custom-control custom-switch" align="center">
  <input type="checkbox" class="custom-control-input" id="customSwitch3" checked>
  <label class="custom-control-label" for="customSwitch3"></label>
</div></td>
    </tr>
  </tbody>
</table>
    </div>
  </main>
  <?php include '../inc/footer.php' ?>
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
</body>
</html>
