<?php

    session_start();

    if (array_key_exists("email", $_SESSION)) {
        
        include("connection.php");
        
    } else {
        
        header("Location: login.php");
        
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
      
        Overview &middot; 
      
    </title>

    <link href="http://fonts.googleapis.com/css?family=Roboto:300,400,500,700,400italic" rel="stylesheet">
    
      <link href="assets/css/toolkit-inverse.css" rel="stylesheet">
    
    
    <link href="assets/css/application.css" rel="stylesheet">

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
              <li class="active">
                <a href="loggedinpage.php">Overview</a>
              </li>
              <li>
                <a href="doctor-history/history.php">Doctor's History</a>
              </li>
                <li>
                <a href="register-doctor/register.php">Register Doctor</a>
                </li>
                <li>
                <a href="#docsModal" data-toggle="modal">
                  Notifications
                </a>
              </li>
              <li class="nav-header">More</li>
              <li >
                <a href='login.php?logout'>Log out</a>
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
    <h2 class="dashhead-title">Overview</h2>
  </div>

  <div class="btn-toolbar dashhead-toolbar">
    <div class="btn-toolbar-item input-with-icon">
      <input type="text" value="01/01/15 - 01/08/15" class="form-control" data-provide="datepicker">
      <span class="icon icon-calendar"></span>
    </div>
  </div>
</div>

<hr class="m-t">

<div class="row text-center m-t-lg">
  <div class="col-sm-4 m-b-md">
    <div class="w-lg m-x-auto">
      <canvas
        class="ex-graph"
        width="200" height="200"
        data-chart="doughnut"
        data-value="[{ value: 230, color: '#1ca8dd', label: 'Returning' }, { value: 130, color: '#1bc98e', label: 'New' }]"
        data-segment-stroke-color="#252830">
      </canvas>
    </div>
    <strong class="text-muted">New vs Returning</strong>
    <h3>Pneumonia</h3>
  </div>
  <div class="col-sm-4 m-b-md">
    <div class="w-lg m-x-auto">
      <canvas
        class="ex-graph"
        width="200" height="200"
        data-chart="doughnut"
        data-value="[{ value: 330, color: '#1ca8dd', label: 'Recurring' }, { value: 30, color: '#1bc98e', label: 'New' }]"
        data-segment-stroke-color="#252830">
      </canvas>
    </div>
    <strong class="text-muted">New vs Recurring</strong>
    <h3>Dengue</h3>
  </div>
  <div class="col-sm-4 m-b-md">
    <div class="w-lg m-x-auto">
      <canvas
        class="ex-graph"
        width="200" height="200"
        data-chart="doughnut"
        data-value="[{ value: 100, color: '#1ca8dd', label: 'Referrals' }, { value: 260, color: '#1bc98e', label: 'Direct' }]"
        data-segment-stroke-color="#252830">
      </canvas>
    </div>
    <strong class="text-muted">Direct vs Referrals</strong>
    <h3>Malaria</h3>
  </div>
</div>

<div class="hr-divider m-t-md m-b">
  <h3 class="hr-divider-content hr-divider-heading">Quick stats</h3>
</div>

<div class="row statcards">
  <div class="col-sm-6 col-lg-3 m-b">
    <div class="statcard statcard-success">
      <div class="p-a">
        <span class="statcard-desc">System views</span>
        <h2 class="statcard-number">
          12,938
          <small class="delta-indicator delta-positive">5%</small>
        </h2>
        <hr class="statcard-hr m-b-0">
      </div>
      <canvas id="sparkline1" width="378" height="94" class="sparkline" data-chart="spark-line" data-value="[{data:[28,68,41,43,96,45,100]}]" data-labels="['a','b','c','d','e','f','g']" style="width: 189px; height: 47px;"></canvas>
    </div>
  </div>
  <div class="col-sm-6 col-lg-3 m-b">
    <div class="statcard statcard-danger">
      <div class="p-a">
        <span class="statcard-desc">Dataset</span>
        <h2 class="statcard-number">
          758
          <small class="delta-indicator delta-negative">1.3%</small>
        </h2>
        <hr class="statcard-hr m-b-0">
      </div>
      <canvas id="sparkline1" width="378" height="94" class="sparkline" data-chart="spark-line" data-value="[{data:[4,34,64,27,96,50,80]}]" data-labels="['a', 'b','c','d','e','f','g']" style="width: 189px; height: 47px;"></canvas>
    </div>
  </div>
  <div class="col-sm-6 col-lg-3 m-b">
    <div class="statcard statcard-info">
      <div class="p-a">
        <span class="statcard-desc">Pateint's Observed</span>
        <h2 class="statcard-number">
          1,293
          <small class="delta-indicator delta-positive">6.75%</small>
        </h2>
        <hr class="statcard-hr m-b-0">
      </div>
      <canvas id="sparkline1" width="378" height="94" class="sparkline" data-chart="spark-line" data-value="[{data:[12,38,32,60,36,54,68]}]" data-labels="['a', 'b','c','d','e','f','g']" style="width: 189px; height: 47px;"></canvas>
    </div>
  </div>
  <div class="col-sm-6 col-lg-3 m-b">
    <div class="statcard statcard-warning">
      <div class="p-a">
        <span class="statcard-desc">Patient's Record</span>
        <h2 class="statcard-number">
          758
          <small class="delta-indicator delta-negative">1.3%</small>
        </h2>
        <hr class="statcard-hr m-b-0">
      </div>
      <canvas id="sparkline1" width="378" height="94" class="sparkline" data-chart="spark-line" data-value="[{data:[43,48,52,58,50,95,100]}]" data-labels="['a', 'b','c','d','e','f','g']" style="width: 189px; height: 47px;"></canvas>
    </div>
  </div>
</div>

<hr class="m-t">

<div class="row">
  <div class="col-md-6 m-b-md">
    <div class="list-group">
      <h4 class="list-group-header">
        Countries Diagnosed
      </h4>
      
        <a class="list-group-item" href="#">
          <span class="list-group-progress" style="width: 62.4%;"></span>
          <span class="pull-right text-muted">62.4%</span>
          United States
        </a>
      
        <a class="list-group-item" href="#">
          <span class="list-group-progress" style="width: 15.0%;"></span>
          <span class="pull-right text-muted">15.0%</span>
          India
        </a>
      
        <a class="list-group-item" href="#">
          <span class="list-group-progress" style="width: 5.0%;"></span>
          <span class="pull-right text-muted">5.0%</span>
          United Kingdom
        </a>
      
        <a class="list-group-item" href="#">
          <span class="list-group-progress" style="width: 5.0%;"></span>
          <span class="pull-right text-muted">5.0%</span>
          Canada
        </a>
      
        <a class="list-group-item" href="#">
          <span class="list-group-progress" style="width: 4.5%;"></span>
          <span class="pull-right text-muted">4.5%</span>
          Russia
        </a>
      
        <a class="list-group-item" href="#">
          <span class="list-group-progress" style="width: 2.3%;"></span>
          <span class="pull-right text-muted">2.3%</span>
          Mexico
        </a>
      
        <a class="list-group-item" href="#">
          <span class="list-group-progress" style="width: 1.7%;"></span>
          <span class="pull-right text-muted">1.7%</span>
          Spain
        </a>
      
        <a class="list-group-item" href="#">
          <span class="list-group-progress" style="width: 1.5%;"></span>
          <span class="pull-right text-muted">1.5%</span>
          France
        </a>
      
        <a class="list-group-item" href="#">
          <span class="list-group-progress" style="width: 1.4%;"></span>
          <span class="pull-right text-muted">1.4%</span>
          South Africa
        </a>
      
        <a class="list-group-item" href="#">
          <span class="list-group-progress" style="width: 1.2%;"></span>
          <span class="pull-right text-muted">1.2%</span>
          Japan
        </a>
      
    </div>
    <a href="#" class="btn btn-primary-outline p-x">All countries</a>
  </div>
  <div class="col-md-6 m-b-md">
    <div class="list-group">
      <h4 class="list-group-header">
        Most visited pages
      </h4>
      
        <a class="list-group-item" href="#">
          <span class="pull-right text-muted">3,929,481</span>
          /(Logged out)
        </a>
      
        <a class="list-group-item" href="#">
          <span class="pull-right text-muted">1,143,393</span>
          /(Logged in)
        </a>
      
        <a class="list-group-item" href="#">
          <span class="pull-right text-muted">938,287</span>
          /tour
        </a>
      
        <a class="list-group-item" href="#">
          <span class="pull-right text-muted">749,393</span>
          /features/something
        </a>
      
        <a class="list-group-item" href="#">
          <span class="pull-right text-muted">695,912</span>
          /features/another-thing
        </a>
      
        <a class="list-group-item" href="#">
          <span class="pull-right text-muted">501,938</span>
          /users/username
        </a>
      
        <a class="list-group-item" href="#">
          <span class="pull-right text-muted">392,842</span>
          /page-title
        </a>
      
        <a class="list-group-item" href="#">
          <span class="pull-right text-muted">298,183</span>
          /some/page-slug
        </a>
      
        <a class="list-group-item" href="#">
          <span class="pull-right text-muted">193,129</span>
          /another/directory/and/page-title
        </a>
      
        <a class="list-group-item" href="#">
          <span class="pull-right text-muted">93,382</span>
          /one-more/page/directory/file-name
        </a>
      
    </div>
    <a href="#" class="btn btn-primary-outline p-x">View all pages</a>
  </div>
</div>

<div class="list-group">
  <h4 class="list-group-header">
    Patient's Affected by Diseases
  </h4>
  
    <a class="list-group-item" href="#">
      <span class="pull-right text-muted">3,481</span>
      Pneumonia
    </a>
  
    <a class="list-group-item" href="#">
      <span class="pull-right text-muted">2,393</span>
      Dengue
    </a>
  
    <a class="list-group-item" href="#">
      <span class="pull-right text-muted">2,287</span>
      Malaria
    </a>
  
    <a class="list-group-item" href="#">
      <span class="pull-right text-muted">2,020</span>
      Tuberculosis
    </a>
  
    <a class="list-group-item" href="#">
      <span class="pull-right text-muted">1,912</span>
      Diabetes
    </a>
  
    <a class="list-group-item" href="#">
      <span class="pull-right text-muted">1,738</span>
      Hypertension 
    </a>
  
    <a class="list-group-item" href="#">
      <span class="pull-right text-muted">1,542</span>
      Jaundice
    </a>
  
    <a class="list-group-item" href="#">
      <span class="pull-right text-muted">983</span>
      Influenza
    </a>
  
    <a class="list-group-item" href="#">
      <span class="pull-right text-muted">549</span>
      Rabies
    </a>
  
    <a class="list-group-item" href="#">
      <span class="pull-right text-muted">382</span>
      Yellow Fever
    </a>
  
</div>
<a href="#" class="btn btn-primary-outline p-x">View all diseases</a>

      </div>
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


    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/chart.js"></script>
    <script src="assets/js/tablesorter.min.js"></script>
    <script src="assets/js/toolkit.js"></script>
    <script src="assets/js/application.js"></script>
    <script>
      // execute/clear BS loaders for docs
      $(function(){while(window.BS&&window.BS.loader&&window.BS.loader.length){(window.BS.loader.pop())()}})
    </script>
  </body>
</html>