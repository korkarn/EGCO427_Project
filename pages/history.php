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
    //check users
    if($_SESSION['admin'] == 1)
    {
        $sql = "SELECT history.date, deal.promotion FROM deal INNER JOIN history ON deal.id=history.deal_id ORDER BY date DESC";
        $result = $mysqli->query($sql);
        $row1 = array();
        while ($res = $result->fetch_array(MYSQLI_ASSOC))
        {
            $row1[] =$res;
        }   
    }
    else
    {
        $sql = "SELECT history.date, deal.promotion FROM deal INNER JOIN history ON deal.id=history.deal_id WHERE users_id = '".$_SESSION['user_id']."' ORDER BY date DESC";
        $result = $mysqli->query($sql);
        $row1 = array();
        while ($res = $result->fetch_array(MYSQLI_ASSOC))
        {
             $row1[] =$res;
        }
    }
 ?>

 <?php 
    $mysqli = connectDB();
    //get id for show history
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
 	<meta charset="utf-8" >
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Crafty+Girls" />
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Allerta+Stencil" />
    <!-- style css -->
    <link rel="stylesheet" href="css/style.css">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css">	
    <!-- main css -->
    <link href="include/main.css" rel="stylesheet">
</head>

<body ng-app="myApp" ng-controller="customersCtrl">
    <div class="jumbotron" style="background-color: #FF6138">
        <!-- click logo back to main page -->
        <a href="main.php">
            <img class="navlogo" alt="logo" src="../images/logo/logo-small.png">&nbsp;&nbsp;
        </a>
    </div>
    <div class="container">
        <div class="panel-body top">
            <div>
            <center>
                <!-- show profile picture -->
                <img src="images\users\<?php echo $row["pic"]?>" class="img-circle userpic">
            </center>
  		    
            <center>
            <!-- show username -->
                <h1 class="username"><?php echo $row["username"]?></h>
            </center>
  				      
            <center>
                <!-- show points -->
                <h1 class="point"><img src="images\coins.png" class="img-circle" width="40" height="40">&nbsp;<?php echo $row["points"]?> points</h1>
            </center><br><br><br>
  			
                <center>
                <div id="page-wrapper">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="dataTable_wrapper">
                                <!-- click profile button back to profile page and click history button for this page-->
                                <button type="button" class="btn btn-danger btnprofile" onclick="location.href='profile.php'">
                            PROFILE</button>
                                <button type="button" class="btn btn-danger btnprofile" onclick="location.href='history.php'">
                            HISTORY</button>   
                                <!-- show history table from buy deals -->
                                <table class="tab">
                                    <thead>
                                    <tr>
                                        <th class="th" width=35% width="=500px">Date</th>
                                        <th class="th" width=65%>Promotion</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="tr" ng-repeat="row1 in names | filter:test">
                                            <td class="td">{{row1.date}}</td>
                                            <td class="td">{{row1.promotion}}</td>
                                        </tr>     
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                </center>
            </div>
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
        $scope.names = <?php echo json_encode($row1) ;?>
    });
    </script>
    <script src="https://code.jquery.com/jquery-2.2.3.min.js"></script>
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>            
</body>
</html>