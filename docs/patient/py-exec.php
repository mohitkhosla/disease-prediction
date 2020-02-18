<?php

exec("python logic-kmeans.py");

exec("python logic-dbscan.py");
 
?>

<!doctype html>
<html>

    <head>
    
   
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

     <link href='https://fonts.googleapis.com/css?family=Lora:400,400italic|Work+Sans:300,400,500,600' rel='stylesheet' type='text/css'>
     <link href="assets/css/toolkit-startup.css" rel="stylesheet">
     <link href="assets/css/application-startup.css" rel="stylesheet">
        
        
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.2/css/bootstrap.min.css" integrity="sha384-y3tfxAZXuh4HwSYylfB+J125MxIs6mR5FOHamPBG064zB+AFeWH94NdvaCBm8qnd" crossorigin="anonymous"> 
        
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">    
    
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>    
        
    <style type="text/css">

    .form-group.required .control-label:after {
      content:" *";
      color:red;
    }
        
    .wrapper {
            
        font-size: 20px;
        
        }    

    </style>
        
    
        
    </head>
    
    <body>
        
        <nav class="navbar navbar-light bg-faded fixed-top">
            
            
            <a class="navbar-brand" href="#"><h2>&nbsp;&nbsp;Symptoms Based Disease Prediction</h2></a>
            <div class="pull-xs-right">
                <span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
            <a href ='../index.html'>
                <input class="btn btn-primary" type="button" value="HOME"></a>  
            </div>
        </nav>    
<br>
    <div class="jumbotron">
        <br>
  <h3 class="display-4">Thank you!</h3>
  <p class="lead">&nbsp; Please check your featured curable disease below.</p>
  <!--<hr class="my-4">
  <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
    </div>-->  
   
        <br>
        <hr>
        <br>
       
        
        <p class="lead"><strong>Using K-MEANS Algorithm:</strong></p>
        <div class="alert alert-success wrapper" role="alert">
        
        <?php

        $myfile = fopen("predicted-disease.txt", "r") or die("Unable to open file");

        while(!feof($myfile)) {

          echo fgets($myfile);

        }

        fclose($myfile);

        ?>
        
        </div>  
        
        <br>
        
        <hr>
        
        <br>
        
        <p class="lead"><strong>Using DBSCAN Algorithm:</strong></p>
        <div class="alert alert-success wrapper" role="alert">
        
        <?php

        $myfile = fopen("prediction-dbscan.txt", "r") or die("Unable to open file");

        while(!feof($myfile)) {

          echo fgets($myfile);

        }

        fclose($myfile);

        ?>
        
        </div> 
        
        <br>
        
        <p>
            <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="CollapseExample">DBSCAN CLUSTERING GRAPH</button>
        </p>
        
        <div class="collapse" id="collapseExample">
            <img src="DBSCAN.jpg" width="100%">
        </div>
        
        <br>
        
        <hr>
        
        <br>
        
        <p class="lead"><strong>Comparing the accuracies of K-MEANS &amp; DBSCAN Algorithm:</strong></p>
        
        <p>
            <button class="btn btn-primary" type="button" data-toggle="collapse" data-target=".multi-collapse" aria-expanded="false" aria-controls="multiCollapseExample1 multiCollapseExample2" style="width:15em;">COMPARE</button>
        </p>
        
        <div class="row">
            <div class="col">
                <div class="collapse multi-collapse" id="multiCollapseExample1">
                    <div class="card card-body">
                        <strong>K-MEANS Algorithm: 66.15%</strong><br>
                        *Based on our dataset
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="collapse multi-collapse" id="multiCollapseExample2">
                    <div class="card card-body">
                        <strong>DBSCAN Algorithm: 88.89%</strong><br>
                        *Based on our dataset
                    </div>
                </div>
            </div>
        </div>
        
        <br>
        
        <hr>
        
        <br>
        
       <p class="lead"><strong>You may now check the required Medicines and Tests to be carried out for your Predicted Disease:</strong></p>
            <a href ='../patient/diagnosis/diagnosis.php'>
                <input class="btn btn-primary" type="button" value="DIAGNOSIS" style="width:15em;">
            </a> 

        
        </div>
    </body>
</html>

