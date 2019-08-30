
<?php

include './connection.php';

$id = $_GET['id'];

$result = mysqli_query($connect, "DELETE FROM borrow WHERE id=$id");

header('location: ../pages/borrowlist.php');
