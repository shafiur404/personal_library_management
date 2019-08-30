
<?php

include './connection.php';

$id = $_GET['id'];

$result = mysqli_query($connect, "DELETE FROM books WHERE id=$id");

header('location: ../pages/allbooks.php');
