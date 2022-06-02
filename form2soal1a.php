<?php 
if (!isset($_SESSION['simpan'])) {
    header("Location: soal1a.php");
}

$start = $_POST['start'];
$stop = $_POST['stop'];


?>

 <!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Document</title>
      <style>
          input{
              width: 70px;
          }
      </style>
 </head>
 <body>
      <form action="hasilsoal1a.php" method="post">
          <table>
      <?php
      for ($i=1; $i <= $start; $i++) { 
       
          echo"<tr>";
         for ($j=1; $j <= $stop; $j++) { 
            ?>
            <td>
            <?php
                echo("$i . $j :");
                
            ?>
             <input type="text" name="input[]" id=""required="">
            </td>


        <?php   
        
         }
          global $tamp;
         echo"</tr>";
      }
      
 
      ?>
      <tr>
          <td>
          <input type="text" name="start" id="" hidden value='<?php echo($start)?>'>
          <input type="text" name="stop" id="" hidden value='<?php echo($stop)?>'>

            <input type="submit" value="submit" name="simpan"></td>
      </tr>
      </table>
</form>

<?php
    if (isset($_POST['simpan'])) {


    }

?>

     
 </body>
 </html>
