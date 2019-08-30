<?php

include './connection.php';

echo $id = $_POST['id']; 

echo $bname = $_POST['bname'];

echo $author = $_POST['author'];

echo $edition = $_POST['edition'];

echo $category = $_POST['category'];

echo $books_img_name = $_FILES['bimg']['name'];
echo $books_img_tmp = $_FILES['bimg']['tmp_name'];
move_uploaded_file($books_img_tmp, '../images/books/' . $books_img_name);


if ($bname && $author && $edition && $category) {
    $result = mysqli_query($connect, "UPDATE books SET b_name='$_POST[bname]', b_author='$_POST[author]', b_edition='$_POST[edition]', b_category='$_POST[category]', b_img='$books_img_name' WHERE id='$id'");
    echo "ok";
    header("Location: ../pages/allbooks.php");

} else {
    header('location: ../pages/home.php?result=booksnotadd');
    echo "not";
}
