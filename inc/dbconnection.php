<head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-106122426-5"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-106122426-5');
</script>
</head>

<?php
error_reporting(E_ALL);

function encryptIt_webs($q) {
    $cryptKey = '@#preztishwebscrat';
    $qEncoded = base64_encode(mcrypt_encrypt(MCRYPT_RIJNDAEL_256, md5($cryptKey), $q, MCRYPT_MODE_CBC, md5(md5($cryptKey))));
    return( $qEncoded );
}

function decryptIt_webs($q) {
    $cryptKey = '@#preztishwebscrat';
    $qDecoded = rtrim(mcrypt_decrypt(MCRYPT_RIJNDAEL_256, md5($cryptKey), base64_decode($q), MCRYPT_MODE_CBC, md5(md5($cryptKey))), "\0");
    return( $qDecoded );
}
date_default_timezone_set("Asia/Calcutta");
$host="127.0.0.1";
$user="root";
$pass="password";
$dbname="att_tech";
$link=@mysqli_connect($host,$user,$pass,$dbname);
    if(mysqli_connect_errno())
    {
        echo"Failed to Connect!!";
        exit();
    }
    else
    {
         //echo "Connected Successfully";
    }
?>