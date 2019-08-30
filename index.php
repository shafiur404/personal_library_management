<?php
session_start();


?>
<!Doctype html>
<html lang="en">

<head>
    <title>Showing Books</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="./node_modules/bootstrap/dist/css/bootstrap.min.css">
</head>
<style>

</style>

<body>
    <div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm">
        <h5 class="my-0 mr-md-auto font-weight-normal">LOGO</h5>
        <nav class="my-2 my-md-0 mr-md-3">
            <a class="p-2 text-dark" href="./index.php">HOME</a>
            <a class="p-2 text-dark" href="./pages/borrowlist.php">BORROW LIST</a>
            <a class="p-2 text-dark" href="./pages/contact.php">CONTACT US</a>
        </nav>
        <?php

        if (!isset($_SESSION['uemail'])) {

            echo '<a class="btn btn-outline-success mr-3" href="./pages/signin.php">Sign in</a>
        <a class="btn btn-outline-primary" href="./pages/signup.php">Sign up</a>';
        } else {
            echo '<button type="button" class="btn btn-outline-dark text-uppercase  mr-3">HI ' . $_SESSION["uname"] . '</button>';
            echo '<a class="btn btn-outline-dark" href="./inc/logout.php">LOGOUT</a>';
        }

        ?>

    </div>
    <!-- Books area -->
    <div class="container">
        <?php
        if (isset($_GET['result'])) {
            if ($_GET['result'] == 'addborrow') {
                echo '<div class="alert alert-success">
      Borrowed Books successfully
                </div>';
            }
            if ($_GET['result'] == 'alreadyadd') {
                echo '<div class="alert alert-success">
                This book are already borrow
                                </div>';
            }
        }

        ?>
        <h3 class="text-center">All Books</h3>
        <div class="row justify-content-around">


            <?php include('./admin/inc/connection.php');
            $books_data = mysqli_query($connect, "SELECT * FROM books");
            while ($books_slice = mysqli_fetch_array($books_data)) : ?>

                <div class="card m-3" style="width: 18rem;">
                    <form action="./inc/borrow.php" method="POST">

                        <img style="height: 300px;" class="card-img-top" src="./admin/images/books/<?php echo $books_slice['b_img']; ?>" alt="Card image cap">
                        <input type="hidden" name="bimg" value="<?php echo $books_slice['b_img']; ?>">
                        <div class="card-body">
                            <h6 class="card-title text-center">Book Name: <?php echo $books_slice['b_name']; ?></h6>
                            <input type="hidden" name="bookname" value="<?php echo $books_slice['b_name']; ?>">
                            <p class="card-title text-center">Author Name: <?php echo $books_slice['b_author']; ?></p>
                            <input type="hidden" name="bookauthor" value="<?php echo $books_slice['b_author']; ?>">
                            <?php if (isset($_SESSION['uemail'])) {

                                echo ' <button style="margin-left: 83px;" class="btn btn-primary">Borrow</button>';
                            }
                            ?>


                        </div>
                    </form>
                </div>

            <?php endwhile; ?>


        </div>
        <h3 class="text-center">Science Fiction</h3>
        <div class="row justify-content-around">


            <?php include('./admin/inc/connection.php');
            $books_data = mysqli_query($connect, "SELECT * FROM books WHERE b_category='SiFi'");
            while ($books_slice = mysqli_fetch_array($books_data)) : ?>

                <div class="card m-3" style="width: 18rem;">
                    <img style="height: 300px;" class="card-img-top" src="./admin/images/books/<?php echo $books_slice['b_img']; ?>" alt="Card image cap">
                    <div class="card-body">
                        <h6 class="card-title text-center">Book Name: <?php echo $books_slice['b_name']; ?></h6>
                        <p class="card-title text-center">Author Name: <?php echo $books_slice['b_author']; ?></p>
                    </div>
                </div>

            <?php endwhile; ?>


        </div>
        <h3 class="text-center">Fantasy</h3>
        <div class="row justify-content-around">


            <?php include('./admin/inc/connection.php');
            $books_data = mysqli_query($connect, "SELECT * FROM books WHERE b_category='Fantasy'");
            while ($books_slice = mysqli_fetch_array($books_data)) : ?>

                <div class="card m-3" style="width: 18rem;">
                    <img style="height: 300px;" class="card-img-top" src="./admin/images/books/<?php echo $books_slice['b_img']; ?>" alt="Card image cap">
                    <div class="card-body">
                        <h6 class="card-title text-center">Book Name: <?php echo $books_slice['b_name']; ?></h6>
                        <p class="card-title text-center">Author Name: <?php echo $books_slice['b_author']; ?></p>
                    </div>
                </div>

            <?php endwhile; ?>


        </div>
        <h3 class="text-center">Thriller</h3>
        <div class="row justify-content-around">


            <?php include('./admin/inc/connection.php');
            $books_data = mysqli_query($connect, "SELECT * FROM books WHERE b_category='Thriller'");
            while ($books_slice = mysqli_fetch_array($books_data)) : ?>

                <div class="card m-3" style="width: 18rem;">
                    <img style="height: 300px;" class="card-img-top" src="./admin/images/books/<?php echo $books_slice['b_img']; ?>" alt="Card image cap">
                    <div class="card-body">
                        <h6 class="card-title text-center">Book Name: <?php echo $books_slice['b_name']; ?></h6>
                        <p class="card-title text-center">Author Name: <?php echo $books_slice['b_author']; ?></p>
                    </div>
                </div>

            <?php endwhile; ?>


        </div>
        <h3 class="text-center">Detective Story</h3>
        <div class="row justify-content-around">


            <?php include('./admin/inc/connection.php');
            $books_data = mysqli_query($connect, "SELECT * FROM books WHERE b_category='Detective'");
            while ($books_slice = mysqli_fetch_array($books_data)) : ?>

                <div class="card m-3" style="width: 18rem;">
                    <img style="height: 300px;" class="card-img-top" src="./admin/images/books/<?php echo $books_slice['b_img']; ?>" alt="Card image cap">
                    <div class="card-body">
                        <h6 class="card-title text-center">Book Name: <?php echo $books_slice['b_name']; ?></h6>
                        <p class="card-title text-center">Author Name: <?php echo $books_slice['b_author']; ?></p>
                    </div>
                </div>

            <?php endwhile; ?>


        </div>
    </div>
    <!--Footer -->
    <footer class="pt-4 my-md-5 pt-md-5 border-top container">
        <div class="row">
            <div class="col-6 col-md">
                <h5>Features</h5>
                <ul class="list-unstyled text-small">
                    <li><a class="text-muted" href="#">Cool stuff</a></li>
                    <li><a class="text-muted" href="#">Random feature</a></li>
                    <li><a class="text-muted" href="#">Team feature</a></li>
                    <li><a class="text-muted" href="#">Stuff for developers</a></li>
                    <li><a class="text-muted" href="#">Another one</a></li>
                    <li><a class="text-muted" href="#">Last time</a></li>
                </ul>
            </div>
            <div class="col-6 col-md">
                <h5>Resources</h5>
                <ul class="list-unstyled text-small">
                    <li><a class="text-muted" href="#">Resource</a></li>
                    <li><a class="text-muted" href="#">Resource name</a></li>
                    <li><a class="text-muted" href="#">Another resource</a></li>
                    <li><a class="text-muted" href="#">Final resource</a></li>
                </ul>
            </div>
            <div class="col-6 col-md">
                <h5>About</h5>
                <ul class="list-unstyled text-small">
                    <li><a class="text-muted" href="#">Team</a></li>
                    <li><a class="text-muted" href="#">Locations</a></li>
                    <li><a class="text-muted" href="#">Privacy</a></li>
                    <li><a class="text-muted" href="#">Terms</a></li>
                </ul>
            </div>
        </div>
    </footer>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="./node_modules/jquery/dist/jquery.min.js"></script>
    <script src="./node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>