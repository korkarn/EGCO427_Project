<?php
	session_start();
  if($_SESSION['signup'] == true){
      $session_true = true;
  }
  else{
      $session_true = false;
      header('location: main.php');
  }
	require_once('include/config.php');
  $mysqli = connectDB();
 	$sql = "SELECT * FROM users WHERE id = '".$_SESSION["newuser_id"]."'";
 	$result = mysqli_query($mysqli, $sql);
 	$row = mysqli_fetch_assoc($result)
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
 
 	<!-- adddeal css -->
 	<link href="include/adddeal.css" rel="stylesheet">
 
 	<!-- main css -->
 	<link href="include/main.css" rel="stylesheet">
 
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
  		        	<img class="navbar-brand" alt="logo" src="../images/logo/logo-small.png">
  		      	</a>
  		    </div>
 		    <!-- Collection of nav links and other content for toggling -->
 		    <div id="navbarCollapse" class="jumbotron">
             <center>	<h1>Success!!</h1> </center>
 		    </div>
 	    </div>
 	</nav>
 
 	<div class="container">
  	    <div class="panel-body">
  	        <div class="row">
  	                <form role="form" name="card" method="post">
  	                <div class="col-lg-6">
  	                	<div class="form-group">
  	                        <label>Username</label>
  	                        <input name="username" class="form-control" value="<?php echo $row["username"] ?>" readonly="">
 	                    </div>
 	                    <div class="form-group">
 	                        <label>Email</label>
 	                        <input name="email" class="form-control" value="<?php echo $row["email"] ?>" readonly="">
 	                    </div>
                      <div class="form-group">
                          <label>Telephone</label>
                          <input name="tel" class="form-control" value="<?php echo $row["tel"] ?>" readonly="">
                      </div>
                      <div class="form-group">
                          <label>Address</label>
                          <input name="addr" class="form-control" value="<?php echo $row["address"] ?>" readonly="">
                      </div>
						          <div class="form-group">
	                    	<label>Pic</label>.
                        <center>
						              <input type="image" src="images/users/<?php echo $row["pic"] ?>" class="img-circle" style="width: 160px; height: 160px;">
                        </center>
						          </div>
  					        </div>
                  </form>
  	         </div>
 	      </div>
     </div>
     	
 	<script>
 		$(document).on('click', '.browse', function(){
 		  var file = $(this).parent().parent().parent().find('.file');
 		  file.trigger('click');
 		});
 		$(document).on('change', '.file', function(){
 		  $(this).parent().find('.form-control').val($(this).val().replace(/C:\\fakepath\\/i, ''));
 		});
 	</script>
 
 	<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.0.7/angular.min.js"></script>
 
     <script>
       var app = angular.module('myApp', []);
       app.controller('dealCtrl', function($scope, $http) {
        $scope.names = <?php echo json_encode($row) ;?>
       });
     </script>
 
 </body>
 </html>