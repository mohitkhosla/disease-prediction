<?php

    session_start();

    if (array_key_exists("email", $_SESSION)) {
        
        include("../connection.php");
        
    } else {
        
        header("Location: login.php");
        
    }
    
    if (isset($_POST['register'])) {
        
     $link = mysqli_connect("localhost", "root", "", "project");
        
        if (mysqli_connect_error()) {
            
            die ("Database Connection Error");
            
        }

    /*$query = "select * from viewdoctor";

    if( $result = mysqli_query($link, $query)){
        
        $row = mysqli_fetch_array($result);
        
        print_r($row);
        
    }*/

    $query = "INSERT INTO `viewdoctor` (`name`, `disease`, `address`, `workhours`) VALUES ('".mysqli_real_escape_string($link, $_POST['name'])."', '".mysqli_real_escape_string($link, $_POST['disease'])."', '".mysqli_real_escape_string($link, $_POST['address'])."', '".mysqli_real_escape_string($link, $_POST['workhours'])."')";
    
    if(mysqli_query($link, $query)){
        
            echo "<div class='container'>
                  <div class='row'>
                    <div class='alert alert-success col-md-12'>
                    <strong>Success!</strong> Doctor registered successfully.
                  </div>
                  </div>
                  </div>";
        
        } else {
        
            echo "<div class='container'>
                  <div class='row'>
                    <div class='alert alert-danger col-md-12'>
                    <strong>Oops!</strong> Registration was unsuccessful.
                  </div>
                  </div>
                  </div>";
        
        }

    }    
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="">

    <title>
      
        Order history &middot; 
      
    </title>

    <link href="http://fonts.googleapis.com/css?family=Roboto:300,400,500,700,400italic" rel="stylesheet">
    
      <link href="../assets/css/toolkit-inverse.css" rel="stylesheet">
    
    
    <link href="../assets/css/application.css" rel="stylesheet">
      
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->


    <style>
      /* note: this is a hack for ios iframe for bootstrap themes shopify page */
      /* this chunk of css is not part of the toolkit :) */
      body {
        width: 1px;
        min-width: 100%;
        *width: 100%;
      }
    </style>
  </head>


<body>
  <div class="container">
    <div class="row">
      <div class="col-sm-3 sidebar">
        <nav class="sidebar-nav">
          <div class="sidebar-header">
            <button class="nav-toggler nav-toggler-sm sidebar-toggler" type="button" data-toggle="collapse" data-target="#nav-toggleable-sm">
              <span class="sr-only">Toggle nav</span>
            </button>
            <a class="sidebar-brand img-responsive">
              <span class="icon icon-leaf sidebar-brand-icon"> Welcome!</span>
            </a>
          </div>

          <div class="collapse nav-toggleable-sm" id="nav-toggleable-sm">
            <form class="sidebar-form">
              <input class="form-control" type="text" placeholder="Search...">
              <button type="submit" class="btn-link">
                <span class="icon icon-magnifying-glass"></span>
              </button>
            </form>
            <ul class="nav nav-pills nav-stacked">
              <li class="nav-header">Dashboards</li>
              <li>
                <a href="../loggedinpage.php">Overview</a>
              </li>
              <li>
                <a href="../doctor-history/history.php">Doctor's History</a>
              </li>
                <li class="active">
                <a href="../register-doctor/register.php">Register Doctor</a>
                </li>
                <li>
                <a href="#docsModal" data-toggle="modal">
                  Notifications
                </a>
              </li>
              <li class="nav-header">More</li>
              <li >
                <a href='../login.php?logout'>Log out</a>
              </li>
            </ul>
            <hr class="visible-xs m-t">
          </div>
        </nav>
      </div>
      <div class="col-sm-9 content">
        <div class="dashhead">
  <div class="dashhead-titles">
    <h6 class="dashhead-subtitle">Dashboards</h6>
    <h2 class="dashhead-title">Doctor Registration</h2>
  </div>

  <div class="btn-toolbar dashhead-toolbar">
    <div class="btn-toolbar-item input-with-icon">
      <input type="text" value="01/01/15 - 01/08/15" class="form-control" data-provide="datepicker">
      <span class="icon icon-calendar"></span>
    </div>
  </div>
</div>

<hr class="m-t">

          <form id="form" action="#" method="POST">
          <div class="container">
              <div class="row">
                <div class="col-md-6">
                    
                    <div class="form-group"> 	 
                        <label for="name"><span class="req">* </span> Doctor's Full Name: </label>
                        <input class="form-control" type="text" name="name" id = "name" onkeyup = "Validate(this)" required /> 
                        <div id="errFirst"></div>    
                    </div>
                    
                    <br>
                    
                    <div class="form-group"> 	 
                        <label for="disease"><span class="req">* </span> Specialised Disease: </label>
                        <input class="form-control" type="text" name="disease" id = "disease" onkeyup = "Validate(this)" required /> 
                        <div id="errFirst"></div>    
                    </div>
                    
                    <br>
                    
                    <div class="form-group"> 	 
                        <label for="address"><span class="req">* </span> Address: </label>
                        <input class="form-control" type="text" name="address" id = "address" onkeyup = "Validate(this)" required /> 
                        <div id="errFirst"></div>    
                    </div>
                    
                    <br>
                    
                    <div class="form-group"> 	 
                        <label for="workhours"><span class="req">* </span> Working Hours (00:00 AM/PM): </label>
                        <input class="form-control" type="text" name="workhours" id = "workhours" onkeyup = "Validate(this)" required /> 
                        <div id="errFirst"></div>    
                    </div>
                    
                    <br>
                    
                    <div class="form-group">
                    <input class="btn btn btn-primary mb-2" type="submit" name="register" value="REGISTER">
                    </div>
                  </div>
              </div>
          </div>
         </form> 

<hr class="m-t">


    </div>
  </div>

  <div id="docsModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog">
    <div class="modal-content">

      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Important Messages</h4>
      </div>
      <div class="modal-body">
        <p>There are no new notifications currently.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal">Cool, got it!</button>
      </div>
    </div>
  </div>
</div>

    <script src="../assets/js/jquery.min.js"></script>
    <script src="../assets/js/chart.js"></script>
    <script src="../assets/js/tablesorter.min.js"></script>
    <script src="../assets/js/toolkit.js"></script>
    <script src="../assets/js/application.js"></script>
    <script>
      // execute/clear BS loaders for docs
      $(function(){while(window.BS&&window.BS.loader&&window.BS.loader.length){(window.BS.loader.pop())()}})
    </script>
    </div>
  </body>
</html>

