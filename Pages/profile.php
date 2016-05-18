<?php 
require_once('include\function.php');
    $mysqli = connectDB();
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
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Crafty+Girls" />
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Allerta+Stencil" />
    <link rel="stylesheet" type="text/css" href="//db.onlinewebfonts.com/c/97602e8f20f5e5b76a6bc0c6b977e30e?family=Kite+One" />
    <link rel="stylesheet" href="css/style.css">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css">	
</head>

<body ng-app="myApp" ng-controller="customersCtrl">
    <div class="jumbotron" style="background-color: #FF6138">
    </div>
        <div class="panel-body top">
            <div>
                <center>
                    <img src="images\users\<?php echo $row["pic"]?>" class="img-circle userpic">
                </center>
  				
                <center>
                    <h1 class="username"><?php echo $row["username"]?>
                </center>
                
  				<center>
                    <h1 class="point"><img src="images\coins.png" class="img-circle" width="40" height="40">&nbsp;<?php echo $row["points"]?> points
                </center><br><br><br>

  				<center>
                <div id="page-wrapper">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="dataTable_wrapper">
                                <button type="button" class="btn btn-danger btnprofile" onclick="location.href='profile.php'">PROFILE</button>
                                <button type="button" class="btn btn-danger btnprofile" onclick="location.href='history.php'">HISTORY</button>   
                                <table>
                                <tbody class="bordtab">
                                    <tr>
                                        <td><h1 class="info">E-MAIL : </td>
                                        <td><ul><h1 class="info"><?php echo $row["email"]?></ul></td>
                                    </tr>
                                    <tr>
                                        <td><h1 class="info">TEL : </td>
                                        <td><ul><h1 class="info"><?php echo $row["tel"]?></ul></td>
                                    </tr>
                                    <tr>
                                        <td><h1 class="info">ADDRESS : </td>
                                        <td><ul><h1 class="info"><?php echo $row["address"]?></ul></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>
                                            <input class="img-circle img" type="image" src="images/prev.png" onClick="location.href='include/prev.php?id='+<?php echo $row["id"] ?>">
                                            <input class="img-circle img" type="image" src="images/next.png" onClick="location.href='include/next.php?id='+<?php echo $row["id"] ?>">                            
                                            <input class="img-circle img" type="image" src="images/edit.png" onClick="location.href='editprofile.php?id='+<?php echo $row["id"] ?>">
                                        </td>
                                    </tr>
                                </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                </center><br><br>
            </div>
        </div>

    <script>
        $(document).ready(function() {
        $('#dataTables-example').DataTable({
            responsive: true
        });
    });
    </script>

    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.0.7/angular.min.js"></script>
    <script>
        var app = angular.module('myApp', []);
        app.controller('customersCtrl', function($scope, $http) {
        $scope.names = <?php echo json_encode($row) ;?>
    });
    </script>
    <script src="https://code.jquery.com/jquery-2.2.3.min.js"></script>
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>            
</body>
</html>