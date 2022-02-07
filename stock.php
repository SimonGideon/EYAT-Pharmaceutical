<!DOCTYPE html>
<html lang="en">

<head>
   
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initiate-cale=1">
    <meta name="description" content="">
    <meta name="author" content="Maryanne Njuguna">

    <title>Regis Inventory & Monitoring System</Title>

<!-- Bootstrap Core CSS -->
<link href="assets/css/bootstrap.min.css" rel="stylesheet">
<link href="assets/css/bootstrap-theme.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

<!-- Google Font -->
<link href="https://fonts.googleapis.com/css?family=Muli:200,300,400,600,700,800,900" rel="stylesheet">

<!-- Custom CSS -->
<link href="assets/css/style.css" rel="stylesheet">
<link href="assets/css/sb-admin.css" rel="stylesheet">

<!-- Morris Charts CSS -->
<link href="assets/css/Plugins/morris.css" rel="stylesheet">

<!-- Custom Fonts -->
<link href="assets/css/dataTables-bootstrap-min.css" rel="stylesheet">
<link href="assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">


<body>

    <div id= "wrapper">

            <!-- Navigation -->
            <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
                <!-- Brand and Toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-exl-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.html">Regis Inventory & Monitoring System</a>
                </div>
                <!-- Top Menu Items -->
                <ul class="nav navbar-right top-nav">
                    <li class="dropdown">
                        <a href="administrator.php" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user style= padding: 20px 10px;"></i>  Administrator<b class="caret"></b></a>
                        <ul class="dropdown-menu">
                        <li>
                            <a href="settings.php"><i class="fa fa-fw fa-gear"></i>Settings</a>
                        </li>
                    <li class="divider"></li>
                    <li>
                        <a href="logout.php"><i class="fa fa-fw fa-power-off"></i>Log Out</a>
                    </li>
                </ul>
            </li>
        </ul>
        <!-- Sidebar Menu - These collapse to the responsive navigation menu on small screens -->
        <div class="collapse navbar-collapse navbar-exl-collapse">
            <ul class="nav navbar-nav side-nav">
            <li>
                <a href="home.php"><span class="glyphicon glyphicon-home" aria-hidden="true"></span></i>Home</a>
            </li>
            <li>
                <a href="item.php"><span class="glyphicon glyphicon-list" aria-hidden="true"></span></i>Item List</a>
            </li>
            <li>
                <a href="product.php"><span class="glyphicon glyphicon-th-list" aria-hidden="true"></span></i>Product Profile</a>
            </li>
            <li  class="active">
                <a href="stock.php"><span class="glyphicon glyphicon-th-list" aria-hidden="true"></span></i>Stocks</a>
            </li>
            <li>
                <a href="expired.php"><span class="glyphicon glyphicon-th-list" aria-hidden="true"></span></i>Expired</a>
            </li>
            <li>
                <a href="sales.php"><span class="glyphicon glyphicon-th-list" aria-hidden="true"></span></i>Sales</a>
            </li>
            </ul>
        </div>
                   </nav>
 <!--/.Navbar-collapse -->
 <div id="page-wrapper"></div>

<div class="container-fluid">

<!-- Page Heading -->
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">
            Stocks
        </h1>
        <ol class="breadcrumb bg-primary">
            <li class="active">
                <i class="fa fa-home"></i>Stocks
            </li>
        </ol>
    </div>
</div>



<script type="text/javascript" src="assets/js/jquery-3.1.1.min.js"></script>
            <script type="text/javascript" src="assets/js/jquery-1.12.3.js"></script>
            <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
            <script type="text/javascript" src="assets/js/jquery.dataTable.min.js"></script>
            <script type="text/javascript" src="assets/js/dataTables.bootstrap.min.js"></script>
            <script type="text/javascript" src="assets/js/regis.js"></script>
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

</body>
</html>