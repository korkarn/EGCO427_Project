<?php 
	require_once('include\config.php');
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
	<link rel="stylesheet" href="include/profile.css">
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css">	
</head>

<body ng-app="myApp" ng-controller="customersCtrl">
 	<!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron" style="height: 150px"></div>
      <div class="panel-body" style="margin-top: -120px">
  			<div>
          <center><img src="images\users\<?php echo $row["pic"]?>" alt="User Avatar" class="img-circle" width="150" height="150"></center>
  				<center><h1 class="username"><?php echo $row["username"]?></h1></center>
  				<center><h2 class="point"><img src="images\coins.png" alt="coin" class="img-circle" width="40" height="40">&nbsp;<?php echo $row["points"]?> points</h2></center><br>
  				<center><table border="0">
          <tbody>
            <tr>
              <td><h3 class="info">E-MAIL : </h3></td>
              <td><ul><h3 class="info"><?php echo $row["email"]?></h3></ul></td>
            </tr>
            <tr>
              <td><h3 class="info">TEL : </h3></td>
              <td><ul><h3 class="info"><?php echo $row["tel"]?></h3></ul></td>
            </tr>
            <tr>
              <td><h3 class="info">ADDRESS : </h3></td>
              <td><ul><h3 class="info"><?php echo $row["address"]?></h3></ul></td>
            </tr>
          </tbody>
          </table></center>
        </div>
        <br><br><br><br><br>

  		<center><div>
        <input class="img-circle" type="image" src="images/prev.png" width="50" height="50" onClick="location.href='include/prevprofile.php?id='+<?php echo $row["id"] ?>">
        <input class="img-circle" type="image" src="images/edit.png" alt="edit" width="50" height="50">
        <input class="img-circle" type="image" src="images/save.png" alt="save" width="50" height="50">
        <input class="img-circle" type="image" src="images/next.png" width="50" height="50" onClick="location.href='include/nextprofile.php?id='+<?php echo $row["id"] ?>">
      </div>
    </div></center>
			
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