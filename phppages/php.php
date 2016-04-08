<?php

$dbhost = 'localhost';
  $dbuser = 'root';
  $dbpass = 'root';
  $conn = mysql_connect($dbhost, $dbuser, $dbpass);     //connection establish
  mysql_select_db('sch_db');                //choose database
  if(! $conn ) {
    die('Could not connect: ' . mysql_error());
    }
    else{
       echo 'Connected successfully <br/>';
    }

    ?>
