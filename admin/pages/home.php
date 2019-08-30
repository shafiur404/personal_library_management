<?php
include '../inc/connection.php';
// All User
$result = mysqli_query($connect, "SELECT  COUNT(*) as id FROM books");
while ($row = mysqli_fetch_array($result)) {
    $totaluser = $row['id'];
    // echo "There are currently " .$activeorders. " List.";
}

// Total Products done
$result = mysqli_query($connect, "SELECT  COUNT(*) as id FROM borrow");
while ($row = mysqli_fetch_array($result)) {
    $totalproduct = $row['id'];
    // echo "There are currently " .$totalproduct. " List.";

}
// Active orders
$result = mysqli_query($connect, "SELECT  COUNT(*) as id FROM books");
while ($row = mysqli_fetch_array($result)) {
    $activeorders = $row['id'];
    // "There are currently " .$activeorders. " List.";
}
// Science Fiiction Books done
$result = mysqli_query($connect, "SELECT  COUNT(*) as b_category FROM books WHERE b_category='SiFi'");
while ($row = mysqli_fetch_array($result)) {
    $SiFi = $row['b_category'];
    // echo "There are currently " .$SiFi. " List.";
}
// Fantacy Books done
$result = mysqli_query($connect, "SELECT  COUNT(*) as b_category FROM books WHERE b_category='Fantasy'");
while ($row = mysqli_fetch_array($result)) {
    $Fantacy = $row['b_category'];
    // echo "There are currently " .$Fantacy. " List.";
}
// Thriller Books done
$result = mysqli_query($connect, "SELECT  COUNT(*) as b_category FROM books WHERE b_category='Thriller'");
while ($row = mysqli_fetch_array($result)) {
    $Thriller = $row['b_category'];
    // echo "There are currently " .$Thriller. " List.";
}
// Detective Story Books done
$result = mysqli_query($connect, "SELECT  COUNT(*) as b_category FROM books WHERE b_category='Detective'");
while ($row = mysqli_fetch_array($result)) {
    $Detective = $row['b_category'];
    // echo "There are currently " .$Detective. " List.";
}
?>

<!Doctype html>
<html lang="en">

<head>
    <title>Personal Library Management</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../../node_modules/bootstrap/dist/css/bootstrap.min.css">
</head>
<style>
    body {
        font-size: .875rem
    }

    .feather {
        width: 16px;
        height: 16px;
        vertical-align: text-bottom
    }

    .sidebar {
        position: fixed;
        top: 0;
        bottom: 0;
        left: 0;
        z-index: 100;
        padding: 30px 0 0;
        box-shadow: inset -1px 0 0 rgba(0, 0, 0, .1)
    }

    .sidebar-sticky {
        position: relative;
        top: 0;
        height: 100%;
        padding-top: .5rem;
        overflow-x: hidden;
        overflow-y: auto
    }

    @supports ((position:-webkit-sticky) or (position:sticky)) {
        .sidebar-sticky {
            position: -webkit-sticky;
            position: sticky
        }
    }

    .sidebar .nav-link {
        font-weight: 500;
        color: #333
    }

    .sidebar .nav-link .feather {
        margin-right: 4px;
        color: #999
    }

    .sidebar .nav-link.active .feather,
    .sidebar .nav-link:hover .feather {
        color: inherit
    }

    .sidebar-heading {
        font-size: .75rem;
        text-transform: uppercase
    }

    [role=main] {
        padding-top: 30px
    }

    .navbar-brand {
        padding-top: .75rem;
        padding-bottom: .75rem;
        font-size: 1rem;
        background-color: rgba(0, 0, 0, .25);
        box-shadow: inset -1px 0 0 rgba(0, 0, 0, .25)
    }
</style>

<body>

    <div class="container-fluid">
        <div class="row">
            <nav class="col-md-2 d-none d-md-block bg-light sidebar text-white">
                <div class="sidebar-sticky">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link" href="./home.php">
                                <span data-feather="home"></span><i class="fe fe-heart"></i>
                                Dashboard <span class="sr-only">(current)</span>
                            </a>
                        </li>
                        <!-- <li class="nav-item">
                            <a class="nav-link" href="./order.php">
                                <span data-feather="file"></span>
                                Orders
                            </a>
                        </li> -->
                        <li class="nav-item">
                            <a class="nav-link" href="./allbooks.php">
                                <span data-feather="shopping-cart"></span>
                                <i class="fe fe-heart"></i> All Books
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="./addbooks.php">
                                <span data-feather="layers"></span>
                                Add Books
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="./borrowlist.php">
                                <span data-feather="layers"></span>
                                Borrwoed Books
                            </a>
                        </li>
                    </ul>

                    <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
                        <span>Categories</span>
                        <!-- <a class="d-flex align-items-center text-muted" href="#">
                            <span data-feather="plus-circle"></span>
                        </a> -->
                    </h6>
                    <ul class="nav flex-column mb-2">
                        <li class="nav-item">
                            <a class="nav-link" href="./sciencefiction.php">
                                <span data-feather="file-text"></span>
                                Science fiction
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="fantasy.php">
                                <span data-feather="file-text"></span>
                                Fantasy
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="thriller.php">
                                <span data-feather="file-text"></span>
                                Thriller
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="detectivestory.php">
                                <span data-feather="file-text"></span>
                                Detective story
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>

            <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
                <!-- <h2>Section title</h2> -->
                <div class="row">

                    <div class="card text-white bg-dark m-3 col-md-4">
                        <div class="card-header">
                            <h5><b>Total Books</b></h5>
                        </div>
                        <div class="card-body">
                            <h1> <?php echo $totaluser; ?> <a href="./allbooks.php"><button type="button" class="btn btn-primary mt-2 float-right">Visit</button></a>
                                <h1>
                        </div>
                    </div>
                    <div class="card text-white bg-dark m-3 col-md-4">
                        <div class="card-header">
                            <h5><b>Borrwoed Books</b></h5>
                        </div>
                        <div class="card-body">
                            <h1><?php echo $totalproduct; ?> <a href="./borrowlist.php"><button type="button" class="btn btn-primary mt-2 float-right">Visit</button></a>
                                <h1>
                        </div>
                    </div>
                    <!-- <div class="card text-white bg-dark m-3 col-md-4">
                        <div class="card-header">
                            <h5><b>Active orders</b></h5>
                        </div>
                        <div class="card-body">
                            <h1>25 <button type="button" class="btn btn-primary mt-2 float-right">Visit</button>
                                <h1>
                        </div>
                    </div> -->
                </div>


                <h4 class="d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">Books Categories :</h4>
                <div class="row">

                    <div class="card text-white bg-dark m-3 col-md-4">
                        <div class="card-header">
                            <h5><b>Science fiction</b></h5>
                        </div>
                        <div class="card-body">
                            <h1> <?php echo $SiFi; ?>
                            <a href="./sciencefiction.php">
                            <button type="button" class="btn btn-primary mt-2 float-right">Visit</button>
                            </a>
                                    <h1>
                        </div>
                    </div>
                    <div class="card text-white bg-dark m-3 col-md-4">
                        <div class="card-header">
                            <h5><b>Fantasy</b></h5>
                        </div>
                        <div class="card-body">
                            <h1> <?php echo $Fantacy; ?>
                            <a href="./fantasy.php">
                            <button type="button" class="btn btn-primary mt-2 float-right">Visit</button>
                            </a>
                                    <h1>
                        </div>
                    </div>
                    <div class="card text-white bg-dark m-3 col-md-4">
                        <div class="card-header">
                            <h5><b>Thriller</b></h5>
                        </div>
                        <div class="card-body">
                            <h1> <?php echo $Thriller; ?>
                            <a href="./thriller.php">
                            <button type="button" class="btn btn-primary mt-2 float-right">Visit</button>
                            </a>
                                    <h1>
                        </div>
                    </div>
                    <div class="card text-white bg-dark m-3 col-md-4">
                        <div class="card-header">
                            <h5><b>Detective story</b></h5>
                        </div>
                        <div class="card-body">
                            <h1> <?php echo $Detective; ?>
                            <a href="./detectivestory.php">
                            <button type="button" class="btn btn-primary mt-2 float-right">Visit</button>
                            </a>
                                    <h1>
                        </div>
                    </div>
                </div>

            </main>
        </div>
    </div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="../../node_modules/jquery/dist/jquery.min.js"></script>
    <script src="../../node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <!-- For icons -->
    <script src="../../node_modules/feather-icons/dist/feather.min.js"></script>
    <script>
        feather.replace()
    </script>
    <!-- / -->

</body>

</html>