<?php

    session_start();

    if (array_key_exists("email", $_SESSION)) {
        
        include("../connection.php");
        
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
      
        Order history &middot; 
      
    </title>

    <link href="http://fonts.googleapis.com/css?family=Roboto:300,400,500,700,400italic" rel="stylesheet">
    
      <link href="../assets/css/toolkit-inverse.css" rel="stylesheet">
    
    
    <link href="../assets/css/application.css" rel="stylesheet">

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
            <a class="sidebar-brand img-responsive" href="#">
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
              <li >
                <a href="../loggedinpage.php">Overview</a>
              </li>
              <li class="active">
                <a href="../doctor-history/history.php">Doctor's History</a>
              </li>
                <li>
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
    <h2 class="dashhead-title">History</h2>
  </div>

  <div class="btn-toolbar dashhead-toolbar">
    <div class="btn-toolbar-item input-with-icon">
      <input type="text" value="01/01/15 - 01/08/15" class="form-control" data-provide="datepicker">
      <span class="icon icon-calendar"></span>
    </div>
  </div>
</div>

<div class="flextable table-actions">
  <div class="flextable-item flextable-primary">
    <div class="btn-toolbar-item input-with-icon">
      <input type="text" class="form-control input-block" placeholder="Search">
      <span class="icon icon-magnifying-glass"></span>
    </div>
  </div>
  <div class="flextable-item">
    <div class="btn-group">
      <button type="button" class="btn btn-primary-outline">
        <span class="icon icon-pencil"></span>
      </button>
      <button type="button" class="btn btn-primary-outline">
        <span class="icon icon-erase"></span>
      </button>
    </div>
  </div>
</div>

<div class="table-full">
  <div class="table-responsive">
    <table class="table" data-sort="table">
      <thead>
        <tr>
          <th><input type="checkbox" class="select-all" id="selectAll"></th>
          <th>Doctor's ID</th>
          <th>Doctor's Name</th>
          <th>Specialized Diseases</th>
          <th>City/Area</th>
          <th>Date</th>
          <th>Pay/Month</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td><input type="checkbox" class="select-row"></td>
          <td><a href="#">#10001</a></td>
          <td>Dr. Laxman G. Jonwal</td>
          <td>Malaria, Asthma</td>
          <td>Kandivali</td>    
          <td>01/01/2016</td>
          <td>$200.00</td>
        </tr>
        <tr>
          <td><input type="checkbox" class="select-row"></td>
          <td><a href="#">#10002</a></td>
          <td>Dr. Sanjay S Chopra</td>
          <td>Malaria</td>
          <td>Sion</td>    
          <td>01/05/2016</td>
          <td>$100.00</td>
        </tr>
        <tr>
          <td><input type="checkbox" class="select-row"></td>
          <td><a href="#">#10003</a></td>
          <td>Dr. Neeraj Kumar Tulara</td>
          <td>Malaria</td>
          <td>Andheri</td>    
          <td>17/02/2016</td>
          <td>$100.00</td>
        </tr>
        <tr>
          <td><input type="checkbox" class="select-row"></td>
          <td><a href="#">#10004</a></td>
          <td>Dr. Bella Jagtap Palnitkar</td>
          <td>Malaria</td>
          <td>Vile Parle</td>    
          <td>21/03/2016</td>
          <td>$300.00</td>
        </tr>
        <tr>
          <td><input type="checkbox" class="select-row"></td>
          <td><a href="#">#10005</a></td>
          <td>Dr. SR Garg</td>
          <td>Malaria</td>
          <td>Powai</td>    
          <td>21/03/2016</td>
          <td>$200.00</td>
        </tr>
        <tr>
          <td><input type="checkbox" class="select-row"></td>
          <td><a href="#">#10006</a></td>
          <td>Dr. Sandeep S Tilve</td>
          <td>Pneumonia</td>
          <td>Goregaon</td>    
          <td>01/05/2017</td>
          <td>$200.00</td>
        </tr>
        <tr>
          <td><input type="checkbox" class="select-row"></td>
          <td><a href="#">#10007</a></td>
          <td>Dr. Mehul Shah</td>
          <td>T.B, Pneumonia, Asthma</td>
          <td>Nana Chowk</td>    
          <td>21/04/2016</td>
          <td>$100.00</td>
        </tr>
        <tr>
          <td><input type="checkbox" class="select-row"></td>
          <td><a href="#">#10008</a></td>
          <td>Dr. Indu Bubna</td>
          <td>T.B, Pneumonia</td>
          <td>Malad</td>    
          <td>25/07/2016</td>
          <td>$100.00</td>
        </tr>
        <tr>
          <td><input type="checkbox" class="select-row"></td>
          <td><a href="#">#10009</a></td>
          <td>Dr. Miti A. Shah</td>
          <td>Pneumonia</td>
          <td>Sion</td>    
          <td>16/01/2017</td>
          <td>$300.00</td>
        </tr>
        <tr>
          <td><input type="checkbox" class="select-row"></td>
          <td><a href="#">#10010</a></td>
          <td>Dr. Sunita Jonwal</td>
          <td>Asthma</td>
          <td>Kandivali</td>    
          <td>20/52/2017</td>
          <td>$200.00</td>
        </tr>
        <tr>
          <td><input type="checkbox" class="select-row"></td>
          <td><a href="#">#10011</a></td>
          <td>Dr. Rajesh Shah</td>
          <td>T.B, Asthma</td>
          <td>Borivali</td>    
          <td>10/06/2017</td>
          <td>$200.00</td>
        </tr>
        <tr>
          <td><input type="checkbox" class="select-row"></td>
          <td><a href="#">#10012</a></td>
          <td>Dr. Shailesh Jain</td>
          <td>Pneumonia</td>
          <td>Mumbai Central</td>    
          <td>04/07/2017</td>
          <td>$100.00</td>
        </tr>
        <tr>
          <td><input type="checkbox" class="select-row"></td>
          <td><a href="#">#10013</a></td>
          <td>Dr. Vikas Punamiya</td>
          <td>Pneumonia</td>
          <td>Dadar</td>    
          <td>01/06/2017</td>
          <td>$100.00</td>
        </tr>
        <tr>
          <td><input type="checkbox" class="select-row"></td>
          <td><a href="#">#10014</a></td>
          <td>Dr. Alpa Dawda</td>
          <td>Asthma</td>
          <td>Mulund</td>    
          <td>06/08/2017</td>
          <td>$300.00</td>
        </tr>
        <tr>
          <td><input type="checkbox" class="select-row"></td>
          <td><a href="#">#10015</a></td>
          <td>Dr. Alaknanda Pai</td>
          <td>Pneumonia, Malaria</td>
          <td>Bhandup</td>    
          <td>20/02/2016</td>
          <td>$200.00</td>
        </tr>
        <tr>
          <td><input type="checkbox" class="select-row"></td>
          <td><a href="#">#10016</a></td>
          <td>Dr. Sulaiman Ladhani</td>
          <td>T.B, Asthma</td>
          <td>Mazgaon</td>    
          <td>17/01/2018</td>
          <td>$200.00</td>
        </tr>
        <tr>
          <td><input type="checkbox" class="select-row"></td>
          <td><a href="#">#10017</a></td>
          <td>Dr. Mitali Agarwal</td>
          <td>T.B, Pneumonia, Asthma</td>
          <td>Malad</td>    
          <td>01/01/2015</td>
          <td>$100.00</td>
        </tr>
        <tr>
          <td><input type="checkbox" class="select-row"></td>
          <td><a href="#">#10018</a></td>
          <td>Dr. Arvind H. Kate</td>
          <td>Pneumonia</td>
          <td>Mumbai</td>    
          <td>04/02/2018</td>
          <td>$100.00</td>
        </tr>
        <tr>
          <td><input type="checkbox" class="select-row"></td>
          <td><a href="#">#10019</a></td>
          <td>Dr. Kamleshkumar Pandey</td>
          <td>T.B, Pneumonia, Asthma</td>
          <td>Borivali</td>    
          <td>01/09/2017</td>
          <td>$300.00</td>
        </tr>
        <tr>
          <td><input type="checkbox" class="select-row"></td>
          <td><a href="#">#10020</a></td>
          <td>Dr. Kapil Rathi</td>
          <td>T.B.</td>
          <td>Sakinaka</td>
          <td>10/04/2017</td>
          <td>$200.00</td>
      </tbody>
    </table>
  </div>
</div>

<div class="text-center">
  <ul class="pagination">
    <li>
      <a href="#" aria-label="Previous">
        <span aria-hidden="true">&laquo;</span>
      </a>
    </li>
    <li class="active"><a href="#">1</a></li>
    <li><a href="#">2</a></li>
    <li><a href="#">3</a></li>
    <li><a href="#">4</a></li>
    <li><a href="#">5</a></li>
    <li>
      <a href="#" aria-label="Next">
        <span aria-hidden="true">&raquo;</span>
      </a>
    </li>
  </ul>
</div>

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
        <p>There are no new notifications currenly.</p>
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
  </body>
</html>

