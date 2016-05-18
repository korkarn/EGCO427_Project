<?php 
require_once('include\function.php');
    $mysqli = connectDatabase();
    if(isset($_GET['id']))
    {
        $id = $_GET['id'];
    }
    else
    {
        $id = 1;
    }
    $row = getProfile($id,$mysqli);
    $mysqli = connectDatabase(); 
 ?>

 <!DOCTYPE html>
 <html>
 <head>
    <title>profile</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Crafty+Girls" />
    <link rel="stylesheet" type="text/css" href="//db.onlinewebfonts.com/c/97602e8f20f5e5b76a6bc0c6b977e30e?family=Kite+One" />
    <link rel="stylesheet" href="css/style.css">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css">  
</head>

<body ng-app="myApp" ng-controller="customersCtrl">
    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron" width=100% style="background-color: #ff6138;height: 200px"></div>
        <div class="panel-body" style="margin-top: -130px">
            <div>
                <center>
                    <img src="images\users\<?php echo $row["pic"]?>" class="img-circle" width="160" height="160">
                </center>
                <center>
                    <h1 class="username"><?php echo $row["username"]?></h>
                </center>
                <center>
                    <h1 class="point"><img src="images\coins.png" class="img-circle" width="40" height="40">&nbsp;<?php echo $row["points"]?> points</h>
                </center><br>
                <center>
                <form role="form" name="save" action="include/save.php" method="post">
                    <input name="id" type="text" class="form-control" value="<?php echo $row["id"]?>">
                    <table>
                        <tbody>
                            <tr width=100%>
                                <td><h1 class="info">E-MAIL : </h></td>
                                <td><h1 class="info"><ul><input style="width:300px" name="email" type="text" class="form-control" value="<?php echo $row["email"]?>"></h></ul></td>
                            </tr>
                            <tr width=100%>
                                <td><h1 class="info">TEL : </h></td>
                                <td><ul><h1 class="info"><input style="width:300px" name="tel" type="text" class="form-control" value="<?php echo $row["tel"]?>"></h></ul></td>
                            </tr>
                            <tr width=100%>
                                <td><h1 class="info">ADDRESS : </h></td>
                                <td><ul><h1 class="info"><input style="width:300px" name="address" type="text" class="form-control" value="<?php echo $row["address"]?>"></h></ul></td>
                            </tr>
                        </tbody>
                    </table>
                    <br><br><br><br><br>

                    <center>
                    <div> 
                        <input class="img-circle" type="image" src="images/save.png" alt="save" width="50" height="50">
                        <input class="img-circle" type="image" src="images/exit.png" alt="exit" width="50" height="50" onClick="location.href='profile.php?id='+<?php echo $row["id"] ?>">
                    </div>
                    </center>
                </form>

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