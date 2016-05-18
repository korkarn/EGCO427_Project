<?php 
require_once('include\function.php');
    $mysqli = connectDatabase();
    $sql = "SELECT * FROM deal WHERE class_id = 7";
    $result = $mysqli->query($sql);
    while ($res = $result->fetch_array(MYSQLI_ASSOC))
        {
            $row[] =$res;
        }
 ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>AFFA Deal</title>
	
	<!-- jquery.js for bootstrap -->
	<script src="https://code.jquery.com/jquery.js"></script>

	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

	<!-- Latest compiled and minified JS -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

	<!-- main css -->
	<link href="include/main.css" rel="stylesheet">

	<!-- font style : Architects+Daughter -->
	<link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Architects+Daughter" />

</head>

<body ng-app="myApp" ng-controller="customersCtrl">
	<!-- Navigation -->
    <nav role="navigation" class="navbar navbar-default">
    	<div class="container">
		    <!-- Brand and toggle get grouped for better mobile display -->
		    <div class="navbar-header">
		        <button type="button" data-target="#navbarCollapse" data-toggle="collapse" class="navbar-toggle">
		            <span class="sr-only">Toggle navigation</span>
		            <span class="icon-bar"></span>
		            <span class="icon-bar"></span>
		            <span class="icon-bar"></span>
		        </button>
		        <a href="#">
		        	<img class="navbar-brand" alt="logo" src="../images/logo/logo-small.png">
		      	</a>
		    </div>
		    <!-- Collection of nav links and other content for toggling -->
		    <div id="navbarCollapse" class="collapse navbar-collapse">
		    	<form class="navbar-form navbar-right" role="search">
				  	<div class="form-group">
				    	<input type="text" class="form-control" placeholder="Search">
				  	</div>
				  	<button type="submit" class="btn btn-default btn-md">Search</button>

		         	<!-- <button type="button" data-toggle="collapse" class="navbar-toggle">
			            <span class="sr-only">Toggle navigation</span>
			            <span class="icon-bar">Home</span>
			            <span class="icon-bar">Food</span>
			            <span class="icon-bar">Beauty</span>
			            <span class="icon-bar">Travel</span>
			            <span class="icon-bar">Lifestyle</span>
		        	</button> -->

					<div class="nav navbar-nav-main navbar-login">
		            	<li><a href="#">Login</a></li>
		         	</div>

		         	<button type="button" class="btn btn-default btn-md">Sign up for free</button>

				  	<a href="#">
			        	<img class="navbar-brand-avatar" alt="logo" src="../images/logo/avatar.png">
			      	</a>
				</form>
		        
		    </div>
	    </div>
	</nav>

	<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img src="..\Images\beauty\makeup<?php echo $row["pic1"]?>" alt="New York">
      <div class="carousel-caption">
      </div> 
    </div>

    <div class="item">
      <img src="..\Images\beauty\makeup<?php echo $row["pic3"]?>" alt="Chicago">
      <div class="carousel-caption">
      </div> 
    </div>

    <div class="item">
      <img src="..\Images\beauty\makeup<?php echo $row["pic5"]?>" alt="Los Angeles">
      <div class="carousel-caption">
      </div> 
    </div>
  </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

<p><?php echo $row["pic5"]?></p>

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
    
    </script>
    <script src="https://code.jquery.com/jquery-2.2.3.min.js"></script>
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script> 
	
</body>
</html>