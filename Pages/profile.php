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
require_once('include/function.php');
    $mysqli = connectDB();
    //get id for show profile
    if(isset($_GET['id']))
    {
        $id = $_GET['id'];
    }
    else
    {
        $id = 1;
    }
    $rec = getProfile($id,$mysqli);
    $mysqli = connectDB(); 
 
    //check users
    if($_SESSION['username'] == 'admin')
    {
        $sql = "SELECT * FROM users";
        $result = $mysqli->query($sql);
        while ($res = $result->fetch_array(MYSQLI_ASSOC))
        {
            $row[] =$res;
        }
    }
    else
    {
        $sql = "SELECT * FROM users WHERE id = '".$_SESSION['user_id']."' ";
        $result = $mysqli->query($sql);
        while ($res = $result->fetch_array(MYSQLI_ASSOC))
        {
            $row[] =$res;
        }
    }     
?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title>profile</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Crafty+Girls" />
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Allerta+Stencil" />
    <link rel="stylesheet" type="text/css" href="//db.onlinewebfonts.com/c/97602e8f20f5e5b76a6bc0c6b977e30e?family=Kite+One" />
    <link rel="stylesheet" href="css/style.css">
    <!-- main css -->
    <link href="include/main.css" rel="stylesheet">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css">	
</head>

<body ng-app="myApp" ng-controller="customersCtrl">
    <div class="jumbotron" style="background-color: #FF6138">
        <!-- click logo back to main page-->
        <a href="main.php">
            <img class="navlogo" alt="logo" src="../images/logo/logo-small.png">&nbsp;&nbsp;
        </a>
    </div>
    <div class="container">
        <div class="panel-body top">
            <div>
                <center>
                    <!-- show profile picture-->
                    <img src="images\users\<?php echo $rec["pic"]?>" class="img-circle userpic">
                </center>
  				
                <center>
                    <!-- show username-->
                    <h1 class="username"><?php echo $rec["username"]?>
                </center>
                <center>
                    <!-- show points-->
                    <h1 class="point"><img src="images\coins.png" class="img-circle" width="40" height="40">&nbsp;<?php echo $rec["points"]?> points
                </center><br><br>
  			
            <div id="page-wrapper">
                <div class="row">
                    <div class="col-lg-3"></div>
                    <div class="col-lg-6">
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                        <!-- click profile button for this page and click history button go to history page-->
                        <center><button type="button" class="btn btn-danger btnprofile" onclick="location.href='profile.php'">
                            PROFILE</button>
                                <button type="button" class="btn btn-danger btnprofile" onclick="location.href='history.php'">
                            HISTORY</button></center>

                            <!-- show profiles-->
                            <ul class="bord" ng-repeat="row in names">
                                    <span class="chat-img pull-left">
                                        <img src="images/users/{{row.pic}}" alt="User Avatar" class="img-circle imguser">
                                    </span>
                                    <div class="chat-body clearfix">
                                        <table><tbody class="info">
                                            <tr>
                                            <td><b>Name:</b></td>
                                            <td class="tabtd">{{row.username}}</td>
                                            </tr>
                                            <tr>
                                            <td><b>Email:</b></td>
                                            <td class="tabtd">{{row.email}}</td>
                                            </tr>
                                            <tr>
                                            <td><b>Telephone:</b></td>
                                            <td class="tabtd">{{row.tel}}</td>
                                            </tr>
                                            <tr>
                                            <td><b>Address:</b></td>
                                            <td class="tabtd">{{row.address}}</td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                            </ul>
                            <center>
                            <!-- click edit button for edit profile-->
                            <input class="img-circle imgbtn" type="image" src="images/edit.png" onClick="location.href='editprofile.php?id='+<?php echo $rec["id"] ?>">
                            </center> 
                        </div>
                    </div>
                    <!-- /.col-lg-12 -->
                    <div class="col-lg-3"></div>    
                </div>
            </div>
            </div>
        </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.0.7/angular.min.js"></script>
    <script>
        var app = angular.module('myApp', []);
        app.controller('customersCtrl', function($scope, $http) {
        $scope.names = <?php echo json_encode($row) ;?>;
        console.log(Object.keys($scope.names).length);
    });
    </script>
    <script src="https://code.jquery.com/jquery-2.2.3.min.js"></script>
    <!-- Latest compiled and minified JavaScript-->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>            
</body>
</html>