<?php
include('config.php');
$ID = $_GET['ID'];
mysqli_query($connect, "DELETE FROM list WHERE id='$ID'");
header('location:index.php');