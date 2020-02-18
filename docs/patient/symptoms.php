<?php

if (isset($_POST['submit']))
{
    
    $fever = $_POST['fever'];
    $diarrhoea = $_POST['diarrhoea'];
    $vomiting = $_POST['vomiting'];
    $chills = $_POST['chills'];
    $breathlessness = $_POST['breathlessness'];
    $headache = $_POST['headache'];
    $weightloss = $_POST['weightloss'];
    $fatigue = $_POST['fatigue'];
    $sweating = $_POST['sweating'];
    $musclepain = $_POST['musclepain'];
    $chestpain = $_POST['chestpain'];
    $cough = $_POST['cough'];
    $neckstiffness = $_POST['neckstiffness'];
    $appetiteloss = $_POST['appetiteloss'];
    $tiredness = $_POST['tiredness'];
    $malaise = $_POST['malaise'];
    $wheezing = $_POST['wheezing'];
    $cynosis = $_POST['cynosis'];
    $abdomenpain = $_POST['abdomenpain'];
    $fastheartrate = $_POST['fastheartrate'];
    
    $fp = fopen("test-data.txt","w+") or die("Unable to open file!");
    
    
    $line = $fever.",".$diarrhoea.",".$vomiting.",".$chills.",".$breathlessness.",".$headache.",".$weightloss.",".$fatigue.",".$sweating.",".$musclepain.",".$chestpain.",".$cough.",".$neckstiffness.",".$appetiteloss.",".$tiredness.",".$malaise.",".$wheezing.",".$cynosis.",".$abdomenpain.",".$fastheartrate."\n";
    
    
    fputs($fp, $line) or die("Unable to write into file!"); //write single line to file
    
    fclose($fp);

} 

?>

<!doctype html>
<html>

    <head>
    
   <!-- Required meta tags always come first -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

     <link href='https://fonts.googleapis.com/css?family=Lora:400,400italic|Work+Sans:300,400,500,600' rel='stylesheet' type='text/css'>
     <link href="assets/css/toolkit-startup.css" rel="stylesheet">
     <link href="assets/css/application-startup.css" rel="stylesheet">
        
        
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.2/css/bootstrap.min.css" integrity="sha384-y3tfxAZXuh4HwSYylfB+J125MxIs6mR5FOHamPBG064zB+AFeWH94NdvaCBm8qnd" crossorigin="anonymous"> 
        
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">    
            
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
        
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
                <span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>  
                
            <a href ='../index.html'>
                <input class="btn btn-primary" type="button" value="HOME"></a>  
            </div>
        </nav>    
<br>
    <div class="jumbotron">
        <br>
  <h4 class="display-4">Symptoms Page!</h4>
  <p class="lead">Symptoms are a simple unit, a simple prediction component for calling extra attention to featured curable disease.</p>
  <!--<hr class="my-4">
  <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
    </div>  
      -->
        <br>
        <hr>
    <form class="jumbotron" action="#" method="POST">
        <div class="wrapper">
        <div class="form-group required"> <!-- Radio group !-->
		  <label class="control-label">Are you experiencing Fever?</label>  
            <div class="radio">
		              <label>
			             <input type="radio" name="fever" value="1">
			             Yes
		              </label>
		      </div>
		      <div class="radio">
                    <label>
			             <input type="radio"  name="fever" value="0">
			             No
		          </label>
		      </div>
	       </div>		
        
        <div class="form-group required"> <!-- Radio group !-->
		  <label class="control-label">Do you have Diarrhoea?</label>
		      <div class="radio">
		              <label>
			             <input type="radio" name="diarrhoea" value="1">
			             Yes
		              </label>
		      </div>
		      <div class="radio">
                    <label>
			             <input type="radio" name="diarrhoea" value="0">
			             No
		          </label>
		      </div>
	       </div>
        
        <div class="form-group required"> <!-- Radio group !-->
		  <label class="control-label">Do you experience Vomiting?</label>
		      <div class="radio">
		              <label>
			             <input type="radio" name="vomiting" value="1">
			             Yes
		              </label>
		      </div>
		      <div class="radio">
                    <label>
			             <input type="radio" name="vomiting" value="0">
			             No
		          </label>
		      </div>
	       </div>
        
        <div class="form-group required"> <!-- Radio group !-->
		  <label class="control-label">Do you experience Chills?</label>
		      <div class="radio">
		              <label>
			             <input type="radio" name="chills" value="1">
			             Yes
		              </label>
		      </div>
		      <div class="radio">
                    <label>
			             <input type="radio"  name="chills" value="0">
			             No
		          </label>
		      </div>
	       </div>
        
        <div class="form-group required"> <!-- Radio group !-->
		  <label class="control-label">Do you experience Breathlessness?</label>
		      <div class="radio">
		              <label>
			             <input type="radio" name="breathlessness" value="1">
			             Yes
		              </label>
		      </div>
		      <div class="radio">
                    <label>
			             <input type="radio"  name="breathlessness" value="0">
			             No
		          </label>
		      </div>
	       </div>
        
        <div class="form-group required"> <!-- Radio group !-->
		  <label class="control-label">Do you experience Headache?</label>
		      <div class="radio">
		              <label>
			             <input type="radio" name="headache" value="1">
			             Yes
		              </label>
		      </div>
		      <div class="radio">
                    <label>
			             <input type="radio"  name="headache" value="0">
			             No
		          </label>
		      </div>
	       </div>
        
        <div class="form-group required"> <!-- Radio group !-->
		  <label class="control-label">Do you experience Weight loss?</label>
		      <div class="radio">
		              <label>
			             <input type="radio" name="weightloss" value="1">
			             Yes
		              </label>
		      </div>
		      <div class="radio">
                    <label>
			             <input type="radio"  name="weightloss" value="0">
			             No
		          </label>
		      </div>
	       </div>
        
        <div class="form-group required"> <!-- Radio group !-->
		  <label class="control-label">Do you experience Fatigue?</label>
		      <div class="radio">
		              <label>
			             <input type="radio" name="fatigue" value="1">
			             Yes
		              </label>
		      </div>
		      <div class="radio">
                    <label>
			             <input type="radio"  name="fatigue" value="0">
			             No
		          </label>
		      </div>
	       </div>
        
        <div class="form-group required"> <!-- Radio group !-->
		  <label class="control-label">Do you experience Sweating?</label>
		      <div class="radio">
		              <label>
			             <input type="radio" name="sweating" value="1">
			             Yes
		              </label>
		      </div>
		      <div class="radio">
                    <label>
			             <input type="radio"  name="sweating" value="0">
			             No
		          </label>
		      </div>
	       </div>
        
        <div class="form-group required"> <!-- Radio group !-->
		  <label class="control-label">Do you experience Muscle Pain?</label>
		      <div class="radio">
		              <label>
			             <input type="radio" name="musclepain" value="1">
			             Yes
		              </label>
		      </div>
		      <div class="radio">
                    <label>
			             <input type="radio"  name="musclepain" value="0">
			             No
		          </label>
		      </div>
	       </div>
        
        <div class="form-group required"> <!-- Radio group !-->
		  <label class="control-label">Do you experience Chest Pain?</label>
		      <div class="radio">
		              <label>
			             <input type="radio" name="chestpain" value="1">
			             Yes
		              </label>
		      </div>
		      <div class="radio">
                    <label>
			             <input type="radio"  name="chestpain" value="0">
			             No
		          </label>
		      </div>
	       </div>
        
        <div class="form-group required"> <!-- Radio group !-->
		  <label class="control-label">Do you experience Cough?</label>
		      <div class="radio">
		              <label>
			             <input type="radio" name="cough" value="1">
			             Yes
		              </label>
		      </div>
		      <div class="radio">
                    <label>
			             <input type="radio"  name="cough" value="0">
			             No
		          </label>
		      </div>
	       </div>
        
        <div class="form-group required"> <!-- Radio group !-->
		  <label class="control-label">Do you experience Neck Stiffness?</label>
		      <div class="radio">
		              <label>
			             <input type="radio" name="neckstiffness" value="1">
			             Yes
		              </label>
		      </div>
		      <div class="radio">
                    <label>
			             <input type="radio"  name="neckstiffness" value="0">
			             No
		          </label>
		      </div>
	       </div>
        
        <div class="form-group required"> <!-- Radio group !-->
		  <label class="control-label">Do you experience Appetite loss?</label>
		      <div class="radio">
		              <label>
			             <input type="radio" name="appetiteloss" value="1">
			             Yes
		              </label>
		      </div>
		      <div class="radio">
                    <label>
			             <input type="radio"  name="appetiteloss" value="0">
			             No
		          </label>
		      </div>
	       </div>
        
        <div class="form-group required"> <!-- Radio group !-->
		  <label class="control-label">Do you experience Tiredness?</label>
		      <div class="radio">
		              <label>
			             <input type="radio" name="tiredness" value="1">
			             Yes
		              </label>
		      </div>
		      <div class="radio">
                    <label>
			             <input type="radio"  name="tiredness" value="0">
			             No
		          </label>
		      </div>
	       </div>
        
        <div class="form-group required"> <!-- Radio group !-->
		  <label class="control-label">Do you experience Malaise?</label>
		      <div class="radio">
		              <label>
			             <input type="radio" name="malaise" value="1">
			             Yes
		              </label>
		      </div>
		      <div class="radio">
                    <label>
			             <input type="radio"  name="malaise" value="0">
			             No
		          </label>
		      </div>
	       </div>
        
        <div class="form-group required"> <!-- Radio group !-->
		  <label class="control-label">Do you experience Wheezing?</label>
		      <div class="radio">
		              <label>
			             <input type="radio" name="wheezing" value="1">
			             Yes
		              </label>
		      </div>
		      <div class="radio">
                    <label>
			             <input type="radio"  name="wheezing" value="0">
			             No
		          </label>
		      </div>
	       </div>
        
        <div class="form-group required"> <!-- Radio group !-->
		  <label class="control-label">Do you experience Cynosis?</label>
		      <div class="radio">
		              <label>
			             <input type="radio" name="cynosis" value="1">
			             Yes
		              </label>
		      </div>
		      <div class="radio">
                    <label>
			             <input type="radio"  name="cynosis" value="0">
			             No
		          </label>
		      </div>
	       </div>
        
        <div class="form-group required"> <!-- Radio group !-->
		  <label class="control-label">Do you experience Abdomen pain?</label>
		      <div class="radio">
		              <label>
			             <input type="radio" name="abdomenpain" value="1">
			             Yes
		              </label>
		      </div>
		      <div class="radio">
                    <label>
			             <input type="radio"  name="abdomenpain" value="0">
			             No
		          </label>
		      </div>
	       </div>
        
        <div class="form-group required"> <!-- Radio group !-->
		  <label class="control-label">Do you experience fast heart rate?</label>
		      <div class="radio">
		              <label>
			             <input type="radio" name="fastheartrate" value="1">
			             Yes
		              </label>
		      </div>
		      <div class="radio">
                    <label>
			             <input type="radio"  name="fastheartrate" value="0">
			             No
		          </label>
		      </div>
	       </div>
            
            <br>
            
        <input type="submit" value="SUBMIT" name="submit" class="btn btn-primary mb-2" id="submit"> &nbsp;
        <input type="button" id="submitbtn" value="PREDICT USING ML" onclick="document.location='py-exec.php'" class="btn btn-primary mb-2" href="#" role="button">
        
        </div>
        
    </form> 
        
        </div>
        
         <script type="text/javascript">
             
    document.getElementById("submit").onclick = function()  {
        
        alert("Thank you for your responses. Please click the predict button");
        
    } 
             
        </script>    

    </body>
    
</html>