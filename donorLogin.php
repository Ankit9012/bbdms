<?php
include 'include/menuHeader.php';

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="CSS/bootstrap.css"/>
        <title> 
            Donor LogIn
        </title>
    </head>
    <body>
        
        <div class="container-fluid" style="position: absolute; background-color: green;top: 40%;"> 
            <fieldset >
                <legend>
                    Donor's Login
                </legend>
            </fieldset>

            <form action="" method="POST">
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text">@</span>
                        <input class="form-control" type="text" name="dmail" required="required" placeholder="Your Email"/>
                    </div>
                    <div class="input-group-prepend">
                        <span style="background-color: lightgrey;"><img src="resource/password_logo.png"/></span>
                        <input type="password" class="form-control" placeholder="Your password" required="required" name="dpassword"/>
                    </div>
                    <br/>
                    <button type="submit" class="btn btn-primary" name="donorSubmit">LOGIN</button>
                </div>
            </form>

        </div>
    </body>

</html>