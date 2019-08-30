<?php

session_start();

include ('connection.php');

echo $bookname = $_POST['bookname'];

echo $bookauthor = $_POST['bookauthor'];

echo $username = $_SESSION['uname'];

echo $useremail = $_SESSION['uemail'];

echo $books_img_name = $_POST['bimg'];


$email_select = mysqli_query($connect, "SELECT * FROM borrow WHERE book_name='$bookname'");
echo $how_many_user = mysqli_num_rows($email_select);
if ($bookname && $useremail && $bookauthor && $username) {
    if ($how_many_user  >= 1) {
        header('location: ../index.php?result=alreadyadd');
        echo "This book are already borrow";
    } else {
        $upostinsert =  mysqli_query($connect, "INSERT INTO borrow(user_name,user_email,book_name,book_author,bimg) VALUES('$username','$useremail','$bookname','$bookauthor','$books_img_name')");
    header('location: ../index.php?result=addborrow');
    echo "ok";
    }
}else{
    header('location: ../index.php?result=booksnotadd');
    echo "Not Borrow";
}
