<!Doctype html>
<html lang="en">

<head>
    <title>Detective Story Books</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../../node_modules/bootstrap/dist/css/bootstrap.min.css">
</head>
<style>
    body {
        font-size: .875rem;
    }

    .feather {
        width: 16px;
        height: 16px;
        vertical-align: text-bottom;
    }

    /*
 * Sidebar
 */

    .sidebar {
        position: fixed;
        top: 0;
        bottom: 0;
        left: 0;
        z-index: 100;
        padding: 40px 0 0;
        box-shadow: inset -1px 0 0 rgba(0, 0, 0, .1);
    }

    .sidebar-sticky {
        position: relative;
        top: 0;
        height: calc(100vh - 48px);
        padding-top: .5rem;
        overflow-x: hidden;
        overflow-y: auto;

    }

    @supports ((position: -webkit-sticky) or (position: sticky)) {
        .sidebar-sticky {
            position: -webkit-sticky;
            position: sticky;
        }
    }

    .sidebar .nav-link {
        font-weight: 500;
        color: #333;
    }

    .sidebar .nav-link .feather {
        margin-right: 4px;
        color: #999;
    }

    .sidebar .nav-link:hover .feather,
    .sidebar .nav-link.active .feather {
        color: inherit;
    }

    .sidebar-heading {
        font-size: .75rem;
        text-transform: uppercase;
    }

    /*
 * Content
 */

    [role="main"] {
        padding-top: 48px;
        /* Space for fixed navbar */
    }

    /*
 * Navbar
 */

    .navbar-brand {
        padding-top: .75rem;
        padding-bottom: .75rem;
        font-size: 1rem;
        background-color: rgba(0, 0, 0, .25);
        box-shadow: inset -1px 0 0 rgba(0, 0, 0, .25);
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
                                <i class="fe fe-heart"></i> Books
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
                                <span data-feather="users"></span>
                                Borrowed Books
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
                <div class="table-responsive">
                    <table class="table table-striped table-sm">
                        <thead>
                            <tr>
                                <th>#ID</th>
                                <th>Name</th>
                                <th>Category</th>
                                <th>Code</th>
                                <th>Price</th>
                                <th>Image</th>
                                <th>Edit</th>
                                <th>Delete</th>
                            </tr>
                        </thead>
                        <tbody>

                            <?php include('../inc/connection.php');
                            $books_data = mysqli_query($connect, "SELECT * FROM books WHERE b_category='Detective'");
                            // $id = $books_slice['id'];
                            while ($books_slice = mysqli_fetch_array($books_data)) : 
                                // $id = $books_slice['id'];
                            ?>
                            
                                <tr>
                                    <th scope="row"><?php echo $books_slice['id']; ?></th>
                                    <td><?php echo $books_slice['b_name']; ?></td>
                                   
                                    <td><?php echo $books_slice['b_category']; ?></td>
                                    <td><?php echo $books_slice['b_author']; ?></td>
                                    <td><?php echo $books_slice['b_edition']; ?></td>
                                    <td><?php echo $books_slice['b_img']; ?></td>
                                    <td>

                                        <a href='./editbooks.php?id=<?php echo $books_slice['id']; ?>' class="btn btn-primary">Edit</a>

                                    </td>
                                    <td>

                                    <a class="btn btn-danger" href='../inc/deletebooks.php?id=<?php echo $books_slice['id']; ?>'>Delete</a>

                                    </td>
                                </tr>
                                </tr>

                            <?php endwhile; ?>
                        </tbody>
                    </table>
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