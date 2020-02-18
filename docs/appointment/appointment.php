<?php

    $error = ""; $successMessage = "";

    if ($_POST) {
        
        if (!$_POST["email"]) {
            
            $error .= "An email address is required.<br>";
            
        }
        
        if (!$_POST["content"]) {
            
            $error .= "The content field is required.<br>";
            
        }
        
        if (!$_POST["name"]) {
            
            $error .= "The name is required.<br>";
            
        }
        
        if ($_POST['email'] && filter_var($_POST["email"], FILTER_VALIDATE_EMAIL) === false) {
            
            $error .= "The email address is invalid.<br>";
            
        }
        
        if ($error != "") {
            
            $error = '<div class="alert alert-danger" role="alert"><p>There were error(s) in your form:</p>' . $error . '</div>';
            
        } else {
            
            $emailTo = $_POST['email'];
            
            
            if (mail($emailTo, 'Thank you! Your booking has been confirmed.', 'Greeting! We\'ll get back to you soon.', 'From: Team')) {
                
                $successMessage = '<div class="alert alert-success" role="alert">Your message was sent, we\'ll get back to you ASAP!</div>';
                
                
            } else {
                
                $error = '<div class="alert alert-danger" role="alert"><p><strong>Your message couldn\'t be sent - please try again later</div>';
                
                
            }
            
        }
    
        
    }

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags always come first -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.2/css/bootstrap.min.css" integrity="sha384-y3tfxAZXuh4HwSYylfB+J125MxIs6mR5FOHamPBG064zB+AFeWH94NdvaCBm8qnd" crossorigin="anonymous">
      
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.2/css/bootstrap.min.css" integrity="sha384-y3tfxAZXuh4HwSYylfB+J125MxIs6mR5FOHamPBG064zB+AFeWH94NdvaCBm8qnd" crossorigin="anonymous"> 
        
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">   
      
      
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        
    <script src="//code.jquery.com/jquery-1.11.1.min.js" ></script>
      
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>  
      
    <style type="text/css">  
      .form-group.required .control-label:after {
      content:" *";
      color:red;
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
      
        <div class="jumbotron">
        <br>
  
    
        <hr>
      
      <div class="container">
      <br>
    <h3>Go Ahead and Book an Appointment for Free!</h3> <br>
      
      <div id="success"><?php echo $successMessage; ?></div>
      <div id="error"><?php echo $error; ?></div>      
      
      <form method="post">
  <fieldset class="form-group">
      <fieldset class="form-group required">
    <label for="name" class="control-label">Full Name</label>
    <input type="text" class="form-control" id="name" name="name" placeholder="Enter your full name" >
    </fieldset>
    <fieldset class="form-group required">
    <label for="email" class="control-label">Email Address</label>
    <input type="email" class="form-control" id="email" name="email" placeholder="Enter email">
    <small class="text-muted">We'll never share your email with anyone else.</small>
  </fieldset><br>
      <fieldset class="form-group"><div class="form-group">
            <div style="width: 15em;">
              <select type="pContactMethod" placeholder="Contact Method" class="form-control">
                <option>Select Doctor</option>
                <option value="d1">Dr. Mehul Shah</option>
                <option value="d2">Dr. Shailesh Jain</option>
                <option value="d3">Dr. Indu Bubna</option>
                <option value="d4">Dr. Mitali Agarwal</option>
                <option value="d5">Dr. Kapil Rathi</option>
                <option value="d6">Dr. Sandeep S Tilve</option>
              </select>
          </div>
          </div></fieldset>
      <fieldset class="form-group required"><div class="form-group">
            <div style="width: 15em;">
              <select type="pContactMethod" placeholder="Contact Method" class="form-control">
                <option>Select Time</option>
                <option value="t1">9:00 AM - 1:00 PM</option>
                <option value="t2">2:30 PM - 6:00 PM</option>
                <option value="t3">7:00 PM - 11:30 PM</option>
              </select>
          </div>
          </div></fieldset>
  <fieldset class="form-group">
    <label for="exampleTextarea">What would you like to ask us?</label>
    <textarea class="form-control" id="content" name="content" rows="3"></textarea>
  </fieldset>
</fieldset>
  <button type="submit" id="submit" class="btn btn-primary">SUBMIT</button>
</form>
          
        </div>
</div>
    <!-- jQuery first, then Bootstrap JS. -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.2/js/bootstrap.min.js" integrity="sha384-vZ2WRJMwsjRMW/8U7i6PWi6AlO1L79snBrmgiDpgIWJ82z8eA5lenwvxbMV1PAh7" crossorigin="anonymous"></script>
          
          
    <script type="text/javascript">
          
          $("form").submit(function(e) {
              
              var error = "";
              
              if ($("#email").val() == "") {
                  
                  error += "The email field is required.<br>"
                  
              }
              
              if ($("#name").val() == "") {
                  
                  error += "The name field is required.<br>"
                  
              }
              
              if ($("#content").val() == "") {
                  
                  error += "The content field is required.<br>"
                  
              }
              
              if (error != "") {
                  
                 $("#error").html('<div class="alert alert-danger" role="alert"><p><strong>There were error(s) in your form:</strong></p>' + error + '</div>');
                  
                  return false;
                  
              } else {
                  
                  return true;
                  
              }
              
        
          })
          
    </script>
      
  </body>
</html>