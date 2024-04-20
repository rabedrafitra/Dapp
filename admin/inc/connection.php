<?php 
	 $link= mysqli_connect("localhost","esthered_biblio","biblio");
     mysqli_select_db($link, "esthered_biblio");
     if(! $link ){
        die('Could not connect: ' . mysqli_error());
     }
 ?>


