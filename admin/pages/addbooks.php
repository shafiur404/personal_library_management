<?php
if (isset($_GET['result'])) {
  if ($_GET['result'] == 'booksnotadd') {
    echo '<div class="alert alert-danger" style="margin-bottom:0px;text-align:center;">
      <strong>Something Worng ! </strong> Book is not added.</div>';
  }
  if ($_GET['result'] == 'addbooks') {
    echo '<div class="alert alert-success" style="margin-bottom:0px;text-align:center;">
      <strong>Sussesfully added</strong></div>';
  }
}
?>

<!Doctype html>
<html lang="en">

<head>
    <title>Add Books</title>
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
        padding: 35px 0 0;
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
        padding-top: 40px;
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
                                <span data-feather="users"></span>
                                Borrowed Books
                            </a>
                        </li>
                    </ul>

                    <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
                        <span>Categories</span>
                        
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

            <!-- content area start -->
            <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-5">
           <div class="container">
           <form action="../inc/addbooks.php" method="POST" enctype="multipart/form-data">
          <select id="inputState" class="form-control mb-3" name="category">
            <option selected>Category...</option>
            <option value="SiFi">Science fiction</option>
            <option value="Fantasy">Fantasy</option>
            <option value="Thriller">Thriller</option>
            <option value="Detective">Detective story</option>
          </select>


          <input type="text" name="bname" class="form-control mb-3" placeholder="Enter Books Name">
          <input type="text" name="author" class="form-control mb-3" placeholder="Enter Author Name" >

          <input type="text" name="edition" class="form-control mb-3" placeholder="Enter Books Edition" >


          <input type="file" name="bimg" class="form-control-file mb-1" >
          <small id="emailHelp" class="form-text text-muted mb-4">Upload Books Cover</small>


          <button class="btn btn-primary btn-block" type="submit">Add Books</button>
        </form>
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