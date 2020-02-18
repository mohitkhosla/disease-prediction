<html>
    
    <head>
    
   
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

     <link href='https://fonts.googleapis.com/css?family=Lora:400,400italic|Work+Sans:300,400,500,600' rel='stylesheet' type='text/css'>
     <link href="assets/css/toolkit-startup.css" rel="stylesheet">
     <link href="assets/css/application-startup.css" rel="stylesheet">
        
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">    
    
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
                <span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>  
                
            <a href ='../py-exec.php'>
                <input class="btn btn-primary" type="button" value="BACK"></a>&nbsp;&nbsp;
                
            <a href ='/project/docs/index.html'>
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
    
        <?php
        
        $myfile = fopen("../prediction-dbscan.txt", "r") or die("Unable to open file");

        if (fgets($myfile)=="Disease Predicted: Malaria") {
        
        echo "<div class='container'>
              <div class='row justify-content-md-center'>
                <div class='col col-md-auto'>    

                <p>
                    <a class='btn btn-primary' data-toggle='collapse' href='#collapseExample1' role='button' aria-expanded='false' aria-controls='collapseExampl' style='width: 30em;'>
                        &nbsp; &nbsp;<style='text-align:center;'>TREATMENT FOR MALARIA</style>&nbsp; &nbsp; 
                    </a>
                </p>

                  </div>
                </div>
            </div>    
        

          <div class='collapse' id='collapseExample1'>
            <div class='card card-body'>
                <p class='lead'><strong> Common Medicines for Malaria:</strong></p>

 
                    <p class='lead'><strong>Malarone</strong><br>
                    Generic name: atovaquone / proguanil systemic<br>
                    Drug class: antimalarial combinations</p>


                    <p class='lead'><strong>Plaquenil</strong><br>	
                    Generic name: hydroxychloroquine systemic<br>
                    Drug class: antirheumatics, antimalarial quinolines</p>

                    <p class='lead'><strong>Doxycycline</strong><br>
                    Generic name: doxycycline systemic<br>
                    Brand names:  Doxy 100, Doryx, Vibramycin<br>
                    Drug class: tetracyclines, miscellaneous antimalarials</p>  

                    <p class='lead'><strong>Mefloquine</strong><br>
                    Generic name: mefloquine systemic<br>
                    Brand name:  Lariam<br>
                        Drug class: antimalarial quinolines</p> 

                    <p class='lead'><strong>Chloroquine</strong><br>
                    Generic name: chloroquine systemic<br>
                    Brand names:  Aralen, Aralen Phosphate<br>
                    Drug class: amebicides, antimalarial quinolines</p>

                    <p class='lead'><strong>Necessary Pathological Tests:</strong>
                    Rapid Diagnostic Test (RDT),
                    Liver Function Tests (LFT),
                    Complete Blood Count (CBC),
                    and Blood Glucose Test</p>
                
            </div>
         </div>";    

        }
        
        ?>       
        

        <?php
        
        $myfile = fopen("../prediction-dbscan.txt", "r") or die("Unable to open file");

        if (fgets($myfile)=="Disease Predicted: Pneumonia") {
        
        echo "<div class='container'>
          <div class='row justify-content-md-center'>
            <div class='col col-md-auto'>    

            <p>    
                <a class='btn btn-primary' data-toggle='collapse' href='#collapseExample2' role='button' aria-expanded='false' aria-controls='collapseExample' style='width: 30em;'>
                    TREATMENT FOR PNEUMONIA
                </a> 
            </p>

                </div>
            </div>
        </div>
        
            
        <div class='collapse' id='collapseExample2'>
            <div class='card card-body'>
                
                <p class='lead'><strong>Common Medicines for Pneumonia:</strong></p>


                    <p class='lead'><strong>Levaquin</strong><br>
                    Generic name: levofloxacin systemic
                    Drug class: quinolones</p> 

                    <p class='lead'><strong>Ceftriaxone</strong><br>
                    Generic name: ceftriaxone systemic<br>
                    Drug class: third generation cephalosporins</p> 

                    <p class='lead'><strong>Amoxil</strong><br>
                    Generic name: amoxicillin systemic<br>
                    Drug class: aminopenicillins</p> 

                    <p class='lead'><strong>Cipro</strong><br>
                    Generic name: ciprofloxacin systemic<br>
                    Drug class: quinolones</p> 

                    <p class='lead'><strong>Avelox</strong><br>
                    Generic name: moxifloxacin systemic<br>
                    Drug class: quinolones</p> 

                    <p class='lead'><strong>Cefotaxime</strong><br>
                    Generic name: cefotaxime systemic<br>
                    Brand name:  Claforan</p> 

                    <p class='lead'><strong>Metronidazole</strong><br> 
                    Generic name: metronidazole systemic<br>
                    Brand names:  Flagyl, Flagyl IV, Flagyl 375<br>
                    Drug class: amebicides, miscellaneous antibiotics</p> 

                    <p class='lead'><strong>Necessary Pathological Tests:</strong>
                    Chest X-RAY,
                    Blood test to check WBCs,
                    Sputum tests,
                    A Pulse Oximetry Test and
                    Pleural fluid culture if there is fluid in the space surrounding the lungs
                    </p>                
                
            </div>
        </div>";
        
        }
        
        ?>
                        
        <?php
        
        $myfile = fopen("../prediction-dbscan.txt", "r") or die("Unable to open file");

        if (fgets($myfile)=="Disease Predicted: T.B.") {
        
        echo "<div class='container''>
          <div class='row justify-content-md-center'>
            <div class='col col-md-auto'>            

            <p>    
                <a class='btn btn-primary' data-toggle='collapse' href='#collapseExample3' role='button' aria-expanded='false' aria-controls='collapseExample' style='width: 30em;'>
                    &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;<style='text-align:center;'>TREATMENT FOR T.B.</style>&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; 
                </a> 
            </p>  

                </div>
            </div>
        </div>
                    
        <div class='collapse' id='collapseExample3'>
            <div class='card card-body'>

                <p class='lead'><strong>Common Medicines for T.B:</strong></p>

                <p class='lead'><strong>Decadron</strong><br>
                Generic name: dexamethasone systemic<br>
                Drug class: glucocorticoids</p> 

                <p class='lead'><strong>Dexamethasone</strong><br>	
                Generic name: dexamethasone systemic<br>
                Brand names:  Decadron, Dexamethasone Intensol, Dexasone<br>
                Drug class: glucocorticoids</p> 

                <p class='lead'><strong>Baycadron</strong><br> 
                Generic name: dexamethasone systemic<br>
                Drug class: glucocorticoids</p> 

                <p class='lead'><strong>Solurex LA</strong><br>
                Generic name: dexamethasone systemic<br>
                Drug class: glucocorticoids</p> 

                <p class='lead'><strong>Necessary Pathological Tests:</strong>
                Blood Test,
                Imaging Tests,
                Sputum Tests, 
                Chest X-RAY and 
                Serological Tests 
                </p>
                
            </div>
        </div>";
        
        }
        
        ?>
        
        
        <?php
        
        $myfile = fopen("../prediction-dbscan.txt", "r") or die("Unable to open file");

        if (fgets($myfile)=="Disease Predicted: Asthma") {
        
            echo "<div class='container'>
          <div class='row justify-content-md-center'>
            <div class='col col-md-auto'>        

            <p>        
                <a class='btn btn-primary' data-toggle='collapse' href='#collapseExample4' role='button' aria-expanded='false' aria-controls='collapseExample' style='width: 30em;'>
                    &nbsp; &nbsp;<style='text-align:center;'>TREATMENT FOR ASTHMA</style>&nbsp; &nbsp; 
                </a>   
            </p>  

                </div>
            </div>
        </div>
        
        <div class='collapse' id='collapseExample4'>
            <div class='card card-body'>
               
                <p class='lead'><strong>Common Medicines for Asthma:</strong></p>
                
                <p class='lead'><strong>Singular</strong><br>
                Generic name: montelukast systemic<br>
                Drug class: leukotriene modifiers</p> 

                <p class='lead'><strong>Montelukast</strong><br>
                Generic name: montelukast systemic<br>
                Brand name:  Singulair<br>
                Drug class: leukotriene modifiers</p>

                <p class='lead'><strong>Prednisone</strong><br>
                Generic name: prednisone systemic<br>
                Brand name:  Rayos<br>
                Drug class: glucocorticoids</p> 

                <p class='lead'><strong>Dulera</strong><br>
                Generic name: formoterol / mometasone systemic<br>
                Drug class: bronchodilator combinations</p> 

                <p class='lead'><strong>Atrovent</strong><br>
                Generic name: ipratropium systemic<br>
                Drug class: anticholinergic bronchodilators</p> 

                <p class='lead'><strong>Necessary Pathological Tests:</strong>
                Methacholine Challenge,
                Nitric Oxide Test,
                Imaging Tests,
                Allergy Test, 
                Sputum Eosinophils and
                Provocative Test
                </p>  
                
            </div>
        </div>";
     
        }
                    
        ?> 
        
        <br>
        
        <form id="form" action="consult-doctor.php" method="POST">
            
            <div class="container">
            <div class="row justify-content-md-center">
            <div class="col col-md-auto">                     

            
            <div class="form-group">    
              
                <input class="btn btn-primary btn btn-outline-secondary" type="submit" name="submit" value="CONSULT DOCTOR" style=" width: 30em;">
                
            </div>
                
            </div>
            </div>
            </div>    
            
        </form>
    
        </div>

        
    </body>    
        
</html>        