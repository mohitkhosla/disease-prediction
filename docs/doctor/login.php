<?php 

    session_start();

    $error = "";

    if (isset($_GET['logout'])) {
        
        session_destroy();
        
    }
        
    if (array_key_exists("submit", $_POST)) {
        
        include("connection.php");
        
        if (!$_POST['email']) {
            
            $error .= "An email address is required<br>";
            
        } 
        
        if (!$_POST['password']) {
            
            $error .= "A password is required<br>";
            
        } 
        
        if ($error != "") {
            
            $error = "<p>There were error(s) in your form:</p>".$error;
            
        } else {
            
                $query = "SELECT * FROM `doctor` WHERE email = '".mysqli_real_escape_string($link, $_POST['email'])."'";
                
                    $result = mysqli_query($link, $query);
            
                    $_SESSION['email'] = mysqli_insert_id($link);
                
                    $row = mysqli_fetch_array($result);
                
                    if (isset($row)) {
                        
                        $hashedPassword = md5($_POST['password']);
                        
                        if ($hashedPassword == $row['password']) {
                            
                            $_SESSION['email'] = $_POST['email'];
                            
                            header("Location: loggedinpage.php");
                                
                        } else {
                            
                            $error = "That email/password combination could not be found.";
                            
                        }
                        
                    } else {
                        
                        $error = "That email/password combination could not be found.";
                        
                    }
                    
                }
            
    }
?>

<!doctype html>
<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8">

        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <!-- Place favicon.ico in the root directory -->

        <link rel="stylesheet" href="css/loginstyle.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
        <link rel="stylesheet" href="https://code.getmdl.io/1.2.1/material.blue-amber.min.css">
        <script async src="js/material.min.js"></script>
    </head>
    <body>
        <div id="error"><?php echo $error; ?></div>
        <div class="demo-layout mdl-layout mdl-layout--fixed-header mdl-js-layout mdl-color--grey-100">
            <div class="demo-ribbon"></div>
            <main class="demo-main mdl-layout__content">
                    <div class="demo-container mdl-grid">
                    <div class="mdl-cell mdl-cell--2-col mdl-cell--hide-tablet mdl-cell--hide-phone"></div>
                    <div class="demo-content mdl-color--white mdl-shadow--4dp content mdl-color-text--grey-800 mdl-cell mdl-cell--8-col">
            
                        <h3 class="mdl-typography--head mdl-typography--font-light">Doctor's Login Portal</h3><br>
                        
                        <form method="post">
                            <h4 class="mdl-typography mdl-typography--font-light">Email </h4>
                            <div class="mdl-textfield mdl-js-textfield">
                                <input class="mdl-textfield__input" type="email" name="email" autofocus="true" required>
                                <label class="mdl-textfield__label">e.g. example@gmail.com</label>
                            </div>

                            <h4 class="mdl-typography mdl-typography--font-light">Password </h4>
                            <div class="mdl-textfield mdl-js-textfield">
                                <input class="mdl-textfield__input" type="password" name="password" autofocus="false" required>
                                <label class="mdl-textfield__label"></label>
                            </div>
                            <br>
                            <input type="submit" name="submit" class="mdl-button mdl-button--colored mdl-button--raised mdl-js-button mdl-js-ripple-effect"> <span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
                            <input type="submit" value="Home" onclick="document.location='../index.html'" class="mdl-button mdl-button--colored mdl-button--raised mdl-js-button mdl-js-ripple-effect">
                        </form>   
                    </div>
                 </div>
            </main>
        </div>
    </body>
</html>