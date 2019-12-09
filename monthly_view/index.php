<!DOctYPE html>
<html lang="en">
<?php include '../inc/dbconnection.php' ?>
<?php $department=1; ?>
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
  <?php
  if(isset($_GET['month'])){
    $currentMonth = $_GET['month'];
  }
  else{
    $currentMonth='Jan';
  }

  if(isset($_GET['year'])){
    $currentYear = $_GET['year'];
  }
  else{
    $currentYear='2019';
  }

  ?>
<?php include '../inc/header_in.php'?>
  <main class="pt-5 mx-lg-5">
    <div style="border:0px solid black; height: 80vh" class="container-fluid mt-5">
      <div class="row">
        <center>
        <?php 
        if($currentMonth=='Jan') 
        { ?>
          <button onclick="window.location.href='../monthly_view?month=Jan'" type="button" class="btn btn-deep-orange">Jan</button>
        <?php }
        else
        { ?>
          <button onclick="window.location.href='../monthly_view?month=Jan'" type="button" class="btn">Jan</button>
         <?php }

        if($currentMonth=='Feb') 
        { ?>
          <button onclick="window.location.href='../monthly_view?month=Feb'" type="button" class="btn btn-deep-orange">Feb</button>
        
        <?php }
        else
        { ?>
          <button onclick="window.location.href='../monthly_view?month=Feb'" type="button" class="btn">Feb</button>
        <?php } 

        if($currentMonth=='Mar') 
        { ?>
          <button onclick="window.location.href='../monthly_view?month=Mar'" type="button" class="btn btn-deep-orange">Mar</button>
        <?php } 
        else
        {?>
          <button onclick="window.location.href='../monthly_view?month=Mar'" type="button" class="btn">Mar</button>
        <?php }

         if($currentMonth=='Apr') 
        { ?>
          <button onclick="window.location.href='../monthly_view?month=Apr'" type="button" class="btn btn-deep-orange">Apr</button>
        <?php } 
        else
        {?>
          <button onclick="window.location.href='../monthly_view?month=Apr'" type="button" class="btn">Apr</button>
        <?php }

         if($currentMonth=='May') 
        { ?>
          <button onclick="window.location.href='../monthly_view?month=May'" type="button" class="btn btn-deep-orange">May</button>
        <?php } 
        else
        {?>
          <button onclick="window.location.href='../monthly_view?month=May'" type="button" class="btn">May</button>
        <?php }

         if($currentMonth=='Jun') 
        { ?>
          <button onclick="window.location.href='../monthly_view?month=Jun'" type="button" class="btn btn-deep-orange">Jun</button>
        <?php } 
        else
        {?>
          <button onclick="window.location.href='../monthly_view?month=Jun'" type="button" class="btn">Jun</button>
        <?php }

         if($currentMonth=='Jul') 
        { ?>
          <button onclick="window.location.href='../monthly_view?month=Jul'" type="button" class="btn btn-deep-orange">Jul</button>
        <?php } 
        else
        {?>
          <button onclick="window.location.href='../monthly_view?month=Jul'" type="button" class="btn">Jul</button>
        <?php }

         if($currentMonth=='Aug') 
        { ?>
          <button onclick="window.location.href='../monthly_view?month=Aug'" type="button" class="btn btn-deep-orange">Aug</button>
        <?php } 
        else
        {?>
          <button onclick="window.location.href='../monthly_view?month=Aug'" type="button" class="btn">Aug</button>
        <?php }

         if($currentMonth=='Sep') 
        { ?>
          <button onclick="window.location.href='../monthly_view?month=Sep'" type="button" class="btn btn-deep-orange">Sep</button>
        <?php } 
        else
        {?>
          <button onclick="window.location.href='../monthly_view?month=Sep'" type="button" class="btn">Sep</button>
        <?php }

         if($currentMonth=='Oct') 
        { ?>
          <button onclick="window.location.href='../monthly_view?month=Oct'" type="button" class="btn btn-deep-orange">Oct</button>
        <?php } 
        else
        {?>
          <button onclick="window.location.href='../monthly_view?month=Oct'" type="button" class="btn">Oct</button>
        <?php }

         if($currentMonth=='Nov') 
        { ?>
          <button onclick="window.location.href='../monthly_view?month=Nov'" type="button" class="btn btn-deep-orange">Nov</button>
        <?php } 
        else
        {?>
          <button onclick="window.location.href='../monthly_view?month=Nov'" type="button" class="btn">Nov</button>
        <?php }

         if($currentMonth=='Dec') 
        { ?>
          <button onclick="window.location.href='../monthly_view?month=Dec'" type="button" class="btn btn-deep-orange">Dec</button>
        <?php } 
        else
        {?>
          <button onclick="window.location.href='../monthly_view?month=Dec'" type="button" class="btn">Dec</button>
        <?php }
        ?>
      </center>
      </div>
      <br><br>
      <div class="row">
        <div class="container-fluid">
          <table id="dt-basic-checkbox" class="table table-striped table-bordered" cellspacing="0" width="100%">
  <thead>
    <tr>
      <th>#
      </th>
      <th class="th-sm">EMP ID
      </th>
      <th class="th-sm">NAME
      </th>

      <?php
       $start =1;
       $end = 31;

       while($start<=$end){
        echo'
        <th class="th-sm">'.$start.'
      </th>';
      $start=$start+1;
       }
      ?>
    </tr>
  </thead>
  <tbody>

     <?php
            if(isset($_GET['pg'])){
              $pg = $_GET['pg'];
            }
            else{
              $pg=1;
            }
            $start=($pg-1)*10;
            $sl = ($pg-1)*10;
            $q_mnt = "SELECT * FROM ".$currentMonth.$currentYear." WHERE department='$department' ORDER BY intern_name ASC LIMIT $start,10";
            $res_mnt = mysqli_query($link, $q_mnt);
            while($row_mnt = mysqli_fetch_assoc($res_mnt)){
          ?>
    <tr>
      <td> <?php echo $sl+1; $sl=$sl+1;?></td>
      <td><?php echo $row_mnt['intern_id'] ?></td>
      <td><?php echo $row_mnt['intern_name'] ?></td>
      <?php 
        $start =1;
        $end = 31;

         while($start<=$end){
          $temp = 'd'.$start;
        echo'
        <td>'.$row_mnt[$temp].'</td>';
        $start=$start+1;
       }

      ?>
    </tr>
    <?php } ?>
  

  </tfoot>
</table>




        </div>
      </div>
    </div>
  </main>
  <div style="position: absolute;bottom: 0px; width: 100%">
  <!--?php include '../inc/footer.php' ?-->
</div>
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
