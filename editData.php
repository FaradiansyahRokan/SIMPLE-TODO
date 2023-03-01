<?php
include('config.php');
$Id = $_POST['id'];
$data = $_POST['Data'];
mysqli_query($connect, "UPDATE list SET Data='$data' WHERE id = '$Id'");
header('location:index.php');