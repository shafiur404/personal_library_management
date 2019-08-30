<?php

include('connection.php');

$bname = $_POST['bname'];

$author = $_POST['author'];

$edition = $_POST['edition'];

$category = $_POST['category'];

$books_img_name = $_FILES['bimg']['name'];
$books_img_tmp = $_FILES['bimg']['tmp_name'];
move_uploaded_file($books_img_tmp, '../images/books/' . $books_img_name);

if ($bname && $author && $edition && $category) {
    $upostinsert =  mysqli_query($connect, "INSERT INTO books(b_name,b_author,b_edition,b_category,b_img) VALUES('$bname','$author','$edition','$category','$books_img_name')");
    header('location: ../pages/home.php?result=addbooks');
} else {
    header('location: ../pages/home.php?result=booksnotadd');
}
