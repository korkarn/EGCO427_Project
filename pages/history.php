<?php 
require_once('include\function.php');
    $mysqli = connectDatabase();
    $sql = "SELECT history.date, deal.promotion FROM deal INNER JOIN history ON deal.id=history.deal_id ORDER BY date DESC";
    $result = $mysqli->query($sql);
    while ($res = $result->fetch_array(MYSQLI_ASSOC))
        {
            $row1[] =$res;
        }
 ?>

 <?php 
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
 	<meta charset="utf-8" >
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Crafty+Girls" />
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Allerta+Stencil" />
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
                <h1 class="username"><?php echo $row["username"]?></h>
            </center>
  				      
            <center>
                <h1 class="point"><img src="images\coins.png" class="img-circle" width="40" height="40">&nbsp;<?php echo $row["points"]?> points
            </center><br><br><br>
  			
                <center>
                <div id="page-wrapper">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="dataTable_wrapper">
                                <button type="button" class="btn btn-danger btnprofile" onclick="location.href='profile.php'">
                            PROFILE</button>
                                <button type="button" class="btn btn-danger btnprofile" onclick="location.href='history.php'">
                            HISTORY</button>   
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

    <script>
        var app = angular.module('myApp', []);
        app.controller('customersCtrl', function($scope, $http) {
        $scope.names = <?php echo json_encode($row) ;?>
    });
    </script>

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