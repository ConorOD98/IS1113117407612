<?php
// Start the session
session_start()
?>
<!DOCTYPE html>
<html>
    <head>
        
        <title> Enter Details</title>
        
        
        <!--jQuery-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script type="text/javascript" src="ebus2_validator.js"></script>
        
            <style>
        
        body{
            text-align:center;
            
        }
    </style>
    
    </head>
    
    <body>
             <PHP><head><link rel="stylesheet" href="ebus1.css" type="text/css" /></head></PHP>
        <h4>Please enter your payment details.</h4>
        
            <br />
            
            <form method = "POST" action = "Ebus3.php">
                
                <label for="name">
                     Name
                </label>
                
                <input type="text" id="name" name="name" placeholder="Name" >
                
                <br>
                
                 <label for="email">
                     Email
                </label>
                
                <input type="email" id="email" name="email" placeholder="Email Address" >
                
                <br>
                
                 <label for="user_pin">
                     PIN 
                </label>
                
                <input type="password" id="user_pin" placeholder="Card Pin" maxlength="4">
                    
                <button type="Submit" id="btnPurchase" disabled> 
                    Proceed with Purchase 
                </button>
                
            </form>
            
            <br />
            
            <button onClick="validateDetails()"> Validate </button>
            <a role="button" href="Ebus1.php">Back</a>
        
        
        <?php  
        // Set session variables
          $_SESSION["total"] = $_POST["total"];
          ?>
        
  
        
        
    </body>
    
    
    
</html>

