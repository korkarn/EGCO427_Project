<?php 
session_start();
//check login
if($_SESSION['login'] == true){
  $session_true = true;
}
else{
  $session_true = false;
  header('location: login.php');
}
require_once('include\function.php');
    $mysqli = connectDB();
    //get id for edit profile
    if(isset($_GET['id']))
    {
        $id = $_GET['id'];
    }
    else
    {
        $id = 1;
    }
    $row = getProfile($id,$mysqli);
    $mysqli = connectDB(); 
 ?>

 <!DOCTYPE html>
 <html>
 <head>
    <title>profile</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Crafty+Girls" />
    <link rel="stylesheet" type="text/css" href="//db.onlinewebfonts.com/c/97602e8f20f5e5b76a6bc0c6b977e30e?family=Kite+One" />
    <!-- style css -->
    <link rel="stylesheet" href="css/style.css">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css">  
</head>

<body ng-app="myApp" ng-controller="customersCtrl">
    <div class="jumbotron" style="background-color: #FF6138">
    </div>
        <div class="top">
            <div>
                <center>
                <!-- show profile picture and edit profile picture -->
                <form name="submit" action="include/upload.php" method="post" enctype="multipart/form-data">
                    <img src="images/users/<?php echo $row["pic"]?>" class="img-circle userpic">
                    <div>
                        <br>
                        <label><input style="width:200px" type="file" value="Choose file" accept="image/*" id="pic" name="pic"></label>
                        <input type="submit" value="Upload" name="submit">
                        <br><br><br>
                    </div>
                </form>
                </center>

                <center>
                    <!-- show profile and edit profile -->
                    <form role="form" name="save" action="include/save.php" method="post">
                            <table>
                            <tbody>
                                <tr width=100%>
                                    <td><h1 class="info">USERNAME :</td>
                                    <td><h1 class="info"><ul><input style="width:300px" name="username" type="text" class="form-control" value="<?php echo $row["username"]?>"></ul></td>
                                </tr>
                                <tr width=100%>
                                    <td><h1 class="info">E-MAIL :</td>
                                    <td><h1 class="info"><ul><input style="width:300px" name="email" type="text" class="form-control" value="<?php echo $row["email"]?>"></ul></td>
                                </tr>
                                <tr width=100%>
                                    <td><h1 class="info">TEL :</td>
                                    <td><ul><h1 class="info"><input style="width:300px" name="tel" type="text" class="form-control" value="<?php echo $row["tel"]?>"></ul></td>
                                </tr>
                                <tr width=100%>
                                    <td><h1 class="info">ADDRESS :</td>
                                    <td><ul><h1 class="info"><input style="width:300px" name="address" type="text" class="form-control" value="<?php echo $row["address"]?>"></ul></td>
                                </tr>
                            </tbody>
                        </table>
                        <br><br><br>

                        <center>
                        <!-- save button for save profile after edit and exit button for exit from 'editprofile' page -->
                        <div> 
                            <input class="img-circle imgbtn" type="image" src="images/save.png" alt="save">
                            <input class="img-circle imgbtn" type="image" src="images/exit.png" alt="exit" onClick="location.href='profile.php?id='+<?php echo $row["id"] ?>">
                        </div>
                        </center>
                    </form>
                </center>

    <script>
        $(document).ready(function() {
        $('#dataTables-example').DataTable({
            responsive: true
        });
    });
    </script>

    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.0.7/angular.min.js"></script>
    
    <script src="https://code.jquery.com/jquery-2.2.3.min.js"></script>
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script> 
               
</body>
</html>