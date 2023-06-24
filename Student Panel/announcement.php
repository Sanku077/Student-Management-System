<?php 
 if (!isset($_SESSION["email"])) {
   header("location: login.php");
 }
include'includes/dbh.inc.php';
 ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/announce.css">
</head>
<body>
<div class="container">
<div class="row message-wrapper rounded shadow mb-20">
    <div class="col-md-12 message-sideright">
<!--------Function for scanning the post from the database on the bases of posted time interval---------->
<?php 
$ret=mysqli_query($conn,"select * from announcement");
                $cnt=1;
                while($row=mysqli_fetch_array($ret))
                {?>


        <div class="panel">
            <div class="panel-heading">
                <div class="media">
                    <a class="pull-left" href="#">
                        <img src="https://bootdey.com/img/Content/avatar/avatar6.png" class="img-circle avatar">
                    </a>
                    <div class="media-body">
                        <h4 class="media-heading"><?php echo $row['full_name'];?><small>(<?php echo $row['Post'];?>)</small></h4>
                        <small class="date"><?php echo $row['Created_at'];?></small>
                    </div>
                </div>
            </div><!-- /.panel-heading -->
            <div class="panel-body">
                <p class="lead">
                    <?php echo $row['heading'];?>
                </p>
                <p class="lead">
                   <?php echo $row['content'];?>
                </p>
                <br>
                <p class="lead">
                    Thanks! <br>
                    Rebecca.
                </p>
            </div><!-- /.panel-body -->
        </div><!-- /.panel -->
        <div class="panel">
        <?php $cnt=$cnt+1; }?>
            <div class="panel-heading">
                <div class="media">
                    <a class="pull-left" href="#">
                        <img src="https://bootdey.com/img/Content/avatar/avatar6.png"  class="img-circle avatar">
                    </a>
                    <div class="media-body">
                        <h4 class="media-heading">Priyanka Kapadia</h4>
                        <small class="date">Saturday 29th May 2020</small>
                    </div>
                </div>
            </div><!-- /.panel-heading -->
            <div class="panel-body">
                <p class="lead">
                    Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                </p>
                <strong class="lead">Hi Tol Lee</strong>
                <p class="lead">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                </p>
            </div><!-- /.panel-body -->
        </div><!-- /.panel -->
                <div class="panel">
            <div class="panel-heading">
                <div class="media">
                    <a class="pull-left" href="#">
                        <img src="https://bootdey.com/img/Content/avatar/avatar1.png"  class="img-circle avatar">
                    </a>
                    <div class="media-body">
                        <h4 class="media-heading">Sanket Milke <small>(Assistant Professor)</small></h4>
                        <small class="date">Saturday 29th May 2020</small>
                    </div>
                </div>
            </div><!-- /.panel-heading -->
            <div class="panel-body">
                <p class="lead">
                    RE : Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                </p>
                <p class="lead">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                </p>
                <br>
                <p class="lead">
                    Thanks! <br>
                    Rebecca.
                </p>
            </div><!-- /.panel-body -->
        </div><!-- /.panel -->
                <div class="panel">
            <div class="panel-heading">
                <div class="media">
                    <a class="pull-left" href="#">
                        <img src="https://bootdey.com/img/Content/avatar/avatar6.png" 
                         class="img-circle avatar">
                    </a>
                    <div class="media-body">
                        <h4 class="media-heading">Swati Jaipurkar</h4>
                        <small class="date">Saturday 29th May 2020</small>
                    </div>
                </div>
            </div><!-- /.panel-heading -->
            <div class="panel-body">
                <p class="lead">
                    Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                </p>
                <strong class="lead">Hi Tol Lee</strong>
                <p class="lead">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                </p>
            </div><!-- /.panel-body -->
        </div><!-- /.panel -->
    </div><!-- /.message-sideright -->
</div>
</div>
</body>
</html>