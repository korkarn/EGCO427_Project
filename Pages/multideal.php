<?php
 	session_start();
 	$_SESSION["admin"] = 1;
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
 
 	<!-- multideal css -->
 	<link href="include/multideal.css" rel="stylesheet">
 
 	<!-- font style : Architects+Daughter -->
 	<link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Architects+Daughter" />
 
 </head>
 
 <body ng-app="myApp" ng-controller="dealCtrl">
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
  		        <a href="main.php">
  		        	<img class="navbar-brand" alt="logo" src="../images/logo/logo-small.png">&nbsp;&nbsp;
  		      	</a>
  		    </div>
 		    <!-- Collection of nav links and other content for toggling -->
 		    <div id="navbarCollapse" class="collapse navbar-collapse">
 		        <ul class="nav navbar-nav">
 		            <li class="active"><a href="#">Food &nbsp;</a></li>
 		            <li><a href="#">Dessert &nbsp;</a></li>
 		            <li><a href="#">Drink</a></li>
 		        </ul>
 		        <ul class="nav navbar-nav navbar-right">
 		            <li><a href="#">Login</a></li>
 		        </ul>
 		    </div>
 	    </div>
 	</nav>
 	
 	<center>
 		<h1 class="deal-name">FOOD
 			<?php
             if($_SESSION["admin"] == 1){?>
 			<a href="adddeal.php">
 	    		<img class="insert-deal" alt="add" src="../images/logo/add.png">
 	  		</a>
 	  		<?php
             }
             ?> 
   		</h1>
 	</center>
 	
 
 	<div class="container" ng-repeat="rec in names">
 		<div class="row bg-deal">
 			<div class="col-md-4 col-sm-8">
 				<a href="#" class="thumbnail">
 			      <img src="../images/logo/logo-small.png" alt="deal">
 			    </a>
 			</div>
 			<div class="col-md-8 col-sm-4">
 			    <div class="detail">
 				  <p><b>Promotion : &nbsp; </b>{{rec.Promotion}}&nbsp; </p>
 				  <p><b>Description : &nbsp; </b>&nbsp; </p>
 				</div>
 			</div>
 		</div>
 	</div>
 	
 
 	<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.0.7/angular.min.js"></script>
 
     <script>
       var app = angular.module('myApp', []);
       app.controller('dealCtrl', function($scope, $http) {
         $http.get("include/multideal.php").then(function (response) {
           $scope.names = response.data;
           console.log($scope.names);
         });
       });
     </script>
 </body>
 </html>