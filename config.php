<?php
 $databaseHost = "localhost"; 
 $databaseUser = "root";
 $databasePassword = "";
 $databaseName = "findstay";
        
      $con=mysql_connect($databaseHost ,$databaseUser ,$databasePassword )or die ('Connection Error');
      mysql_select_db("findstay",$con) or die ('Database Error');
 ?>