<?php

$link = mysqli_connect("localhost", "root", "", "project");
        
        if (mysqli_connect_error()) {
            
            die ("Database Connection Error");
            
        }

    $myfile = fopen("../prediction-dbscan.txt", "r") or die("Unable to open file");

    if (fgets($myfile)=="Disease Predicted: Pneumonia") {

    $query = "select * from viewdoctor where disease like '%Pneumonia%'";

    $result = mysqli_query($link, $query);
   
}   $myfile = fopen("../prediction-dbscan.txt", "r") or die("Unable to open file");

    if (fgets($myfile)=="Disease Predicted: Malaria") {

    $query = "select * from viewdoctor where disease like '%Malaria%'";

    $result = mysqli_query($link, $query);
          
} $myfile = fopen("../prediction-dbscan.txt", "r") or die("Unable to open file");

    if (fgets($myfile)=="Disease Predicted: T.B.") {

    $query = "select * from viewdoctor where disease like 'T%'";

    $result = mysqli_query($link, $query);
          
} $myfile = fopen("../prediction-dbscan.txt", "r") or die("Unable to open file");

    if (fgets($myfile)=="Disease Predicted: Asthma") {

    $query = "select * from viewdoctor where disease like '%Asthma%'";

    $result = mysqli_query($link, $query);
          
}
   
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
    
        
    <style type="text/css">

    .wrapper {
            
        font-size: 20px;
        padding-left: 30px;
        
        }    

    </style>
        
    
        
    </head>
    
    <body>
        
        <nav class="navbar navbar-light bg-faded fixed-top">
            
            
            <a class="navbar-brand" href="#"><h2>&nbsp;&nbsp;Symptoms Based Disease Prediction</h2></a>
            <div class="pull-xs-right">
               <span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
                
            <a href ='../diagnosis/diagnosis.php'>
                <input class="btn btn-primary" type="button" value="BACK"></a>&nbsp;&nbsp;
                
            <a href ='/project/docs/index.html'>
                <input class="btn btn-primary" type="button" value="HOME"></a>  
            </div>
        </nav>    
<br>
    <div class="jumbotron">
    <br>  
  <h3 class="display-4">Have a nice day!</h3>
  <p class="lead">&quot;An Apple a day keeps the doctor away.&quot;</p>
  <!--<hr class="my-4">
  <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
    </div>-->  
   
    <hr>
           <br />  
           <div class="container">                  
                <div class="table-responsive">  
                     <table class="table table-striped">  
                          <tr>  
                               <th>Doctors' Name</th>  
                               <th>Specialised Diseases</th>
                               <th>Address</th>  
                               <th>Working Hours</th>  
                          </tr>  
                          <?php  
                          if(mysqli_num_rows($result) > 0)  
                          {  
                               while($row = mysqli_fetch_array($result))  
                               {  
                          ?>  
                          <tr>  
                               <td><?php echo $row["name"];?></td>  
                               <td><?php echo $row["disease"]; ?></td>
                               <td><?php echo $row["address"];?></td>  
                               <td><?php echo $row["workhours"]; ?></td>
                          </tr>  
                          <?php  
                               }  
                          }  
                          ?>  
                          
                     </table>  
                </div>  
           </div> 

        
        <br>
        <hr>
        <br>    
     </div>  
    </body>
    
</html>