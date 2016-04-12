<?php
session_start();
session_destroy();
header("location: ../phppages/hpage.php");
?>