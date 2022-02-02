<?php
require_once('include/session.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Huduma Pharmacy System</title>
    <!-- Bootsrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <!-- fonts -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/fontawesome.min.css">
    <link rel="stylesheet" href="assets/css/datatables.min.css">

    <!-- custom css -->
    <link rel="stylesheet" href="/assets/css/style.css">
    <!-- Moris Charts CSS -->
    <link rel="stylesheet" href="assets/css/plugins/morris.css">

</head>

<body>
    <div id="wrapper">
        <!-- navigation -->
        <nav class="nav navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toogle" data-toggle="navbar.ex1-collapse">
                    <span class="sr-only">Toogle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a href="Index.html" class="navbar-brand">Huduma Inventory and Monitoring System</a>
            </div>
            <!-- TOp Menu -->
            <ul class="nav navbar-right top-nav">
                <li class="dropdown">
                    <a href="#" class="dropdown-toogle" data-toggle="dropdown"> <i class=" fa fa-user"></i>Administration<b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="#"><i class="fa fa-fw fa-gear"></i>Settings</a>
                        </li>
                        <li class="driver"></li>
                        <li>
                            <a href="logout.php"><i class="fa fa-fw fa-power-off"></i>Log Out</a>
                        </li>
                    </ul>
                </li>
            </ul>
            <!-- slide bar menu items - these collapse to the respoinsive navigation menu on small screen -->
            <div class="collapse navbar collapse navbar ex1-collapse">
                <ul class="active">
                    <a href="home.php"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Home</a>
                    <li>
                        <a href="items.php"><span class="=glyphicon glyphicon-list" aria-hidden="true"></span>Item List</a>
                    </li>
                    <li>
                        <a href="product.php"><span class="glyphicon glyphicon-th-list" aria-hidden="true">Product Profile</span></a>
                    </li>
                    <li>
                        <a href=""><span class="glyphicon glyphicon-book" aria-hidden="true"></span>Stocks</a>
                    </li>
                    <li>
                        <a href="expired.php"><span class="glyphicon glyphicon-remove" aria-hidden="true">Expired</span></a>
                    </li>
                    <li>
                        <a href="sales.php"><span class="glyphicon glyphicon-record" aria-hidden="true">Sales</span></a>
                    </li>

                </ul>

            </div>
        </nav>
    </div>
    <!-- navbar-collapse -->
    <div id="page-wrapper">
        <div class="container-fluid">
            <!-- page heading -->
            <div class="row">
                <div class="col-lg-12">
                    <hi class="page-header">
                        Welcome <small>Administartor</small>
                    </hi>
                    <ol class="breadcrumb">
                        <li class="active">
                            <i class="fa fa-home">Home</i>
                        </li>
                    </ol>
                </div>
            </div>
            <!-- row -->
            <div id="order"></div>
        </div>
        <!-- container fluid -->
    </div>
    <!-- page wrapper -->
    </div>
    <!-- wrapper -->

    <?php include_once('modal/to_cart.php')?>
    <?php include_once('modal/confirmation.php')?>
    <?php include_once('modal/add_new_item.php')?>
    <?php include_once('modal/message.php')?>
    <!-- Js -->
    <!-- Bootsrap js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="assets/js/bootstrap.bundle.js"></script>
    <script src="stylesheet" href="assets/js/bootstrap.min.js"></script>
    <!-- fonts -->
    <sript type="text/javascript" src="assets/js/fontawesome.min.js"></sript>
    <script type="text/javascript" src="assets/js/jq"></script>
    <script src="assets/js/datatables.min.js"></script>
</body>

</html>