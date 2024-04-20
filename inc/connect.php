<?php 
	 $link= mysqli_connect("localhost","esthere1_play","play");
     mysqli_select_db($link, "esthere1_play");
     if(! $link ){
        die('Could not connect: ' . mysqli_error());
     }
 ?>
