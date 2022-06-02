<?php 
if (!isset($_SESSION['simpan']) && !isset($_SESSION['simpan2'])) {
    header("Location: soal1a.php");
}

$cek = $_POST['input'];
$a=0;
$start = $_POST['start'];
$stop = $_POST['stop'];
foreach( $cek as $key => $n ) {
    $a++;
  }


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    
     $x=0;
     $b=1;
     $c=1;

 
        foreach ($cek as $key => $v) {
         
            if ($c>$stop) {
                $c=1;
                $b++;
            }
           echo("$b.$c : $v <br>");
           $c++;
           
          
        }
        
    ?>
</body>
</html>
