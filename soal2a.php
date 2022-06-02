<?php 
	$host ="localhost";
	$user="root";
	$pas ="";
	$db ="tesdb";
	$con  = mysqli_connect($host,$user,$pas,$db) or die ("error ". mysqli_error($con));
	
    $query = query("select DISTINCT( H.hobi ), COUNT( H.hobi) from hobi H join person  P where  P.id = H.person_id group by H.hobi");

	function query($query){
		global $con;
		$result = mysqli_query($con,$query);
		$rows = [];
		while($row =mysqli_fetch_assoc($result)){
			$rows[] = $row;
		}
		return $rows;
	}
   
 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title></title>
 </head>
 <body>
		 	</table>	
 	</div>
 </body>
 </html> 
	