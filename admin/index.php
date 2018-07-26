<!--<html>
    <head> 
       
    </head>
    <body>
                <?php
              /*  include '../include/dbConnect.php';
                if (isset($_POST['btnLogin'])) {
                    $uName = $_POST['uName'];
                    $uPassword = $_POST['uPassword'];
                    $rs = $con->query("Select count(User_Name) from bloodbankadmin where User_Name='$uName' and User_Password='$uPassword'");
                    echo "Select count(User_Name) from bloodbankadmin where User_Name='$uName' and User_Password='$uPassword'";

                    $row = $rs->fetch_row();
                    if ($row[0] == 1) {
                        header("https://localhost/a/admin/change-password.php");
                    } else {
                        echo "<script>alert('Invalid Login Ceridential');</script>";
                    }
                }*/
                ?>
            </div>
        </div>
    </body>    
</html>-->



<?php
session_start();
include('includes/config.php');
if (isset($_POST['login'])) {
    $email = $_POST['username'];
    $password = $_POST['password'];
    $sql = "SELECT User_Name,User_Password FROM bloodbankadmin WHERE User_Name='".$email."' and User_Password='".$password."'";


    $query = $dbh->prepare($sql);
    $query->bindParam(':email', $email, PDO::PARAM_STR);
    $query->bindParam(':password', $password, PDO::PARAM_STR);
    $query->execute();
    $results = $query->fetchAll(PDO::FETCH_OBJ);
    if ($query->rowCount() > 0) {
        $_SESSION['alogin'] = $_POST['username'];
        echo "<script type='text/javascript'> document.location = 'change-password.php'; </script>";
    } else {

        echo "<script>alert('Invalid Details');</script>";
    }
}
?>
<!doctype html>


    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
 <link rel="stylesheet" type="text/css" href="../../CSS/bootstrap.css"/>
        <title>BloodBank & Donor Management System | Admin Login</title>
      
    </head>

    <body>
         <div style="position: absolute; left: 25%; bottom: 45%;padding: 30px; width: 50%; border:groove 3px ; border-radius: 10px">
            <center>  <span class="h1 text-center" >Admin Login</span></center>
            <div style="position: relative; width: 150px; height: 160px; border-right: black ridge 2px">
                <img src="../resource/logo.png"/>

            </div>
            <div style=" width:75%; margin-left: 25%; padding: 10px;margin-top: -160px;;height: 160px; ">
                <form method="POST" action="">
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text">User Name</span>
                        </div>
                        <input type="text"  name="username"class="form-control" placeholder="Username" required>
                    </div>

                    <div class="input-group mb-3">
                        <input type="password" name="password" class="form-control" placeholder="Your Password" required>
                        <div class="input-group-append">
                            <span class="input-group-text">Password</span>
                        </div>
                    </div>
                    <center> <div class="input-group mb-3">
                            <button type="submit" name="login" class="btn btn-primary" style="width: 150px; margin-left: 67%;" >Login</button>
                        </div></center>
                </form>
       
        
        

       <!-- <div class="login-page bk-img" style="background-image: url(img/banner.png);">
            <div class="form-content">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-md-offset-3">
                            <h1 class="text-center text-bold text-light mt-4x">BloodBank & Donor Management System Sign in</h1>
                            <div class="well row pt-2x pb-3x bk-light">
                                <div class="col-md-8 col-md-offset-2">
                                    <form method="POST">

                                        <label for="" class="text-uppercase text-sm">Your Username </label>
                                        <input type="text" placeholder="Username" name="username" class="form-control mb">

                                        <label for="" class="text-uppercase text-sm">Password</label>
                                        <input type="password" placeholder="Password" name="password" class="form-control mb">



                                        <button class="btn btn-primary btn-block" name="login" type="submit">LOGIN</button>

                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>-->

        <!-- Loading Scripts -->
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap-select.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/jquery.dataTables.min.js"></script>
        <script src="js/dataTables.bootstrap.min.js"></script>
        <script src="js/Chart.min.js"></script>
        <script src="js/fileinput.js"></script>
        <script src="js/chartData.js"></script>
        <script src="js/main.js"></script>

    </body>

</html>-->
