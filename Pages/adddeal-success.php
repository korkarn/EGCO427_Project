<?php
  	session_start();
  	$_SESSION["admin"] = 1;
  	require_once('include/config.php');
      $mysqli = connectDB();
 	$sql = "SELECT * FROM deal WHERE id = '".$_SESSION["class_id"]."'";
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
 		    <div id="navbarCollapse" class="collapse navbar-collapse navbar-right">
             	<h1>Add deal success!!</h1>
 		    </div>
 	    </div>
 	</nav>
 
 	<div class="container">
  	    <div class="panel-body">
  	        <div class="row">
  	                <form role="form" name="card" method="post">
  	                <div class="col-lg-4">
  	                	<div class="form-group">
  	                        <label>Name deal</label>
  	                        <input name="name" class="form-control" value="<?php echo $row["name"] ?>">
 	                    </div>
 	                    <div class="form-group">
 	                        <label>Promotion</label>
 	                        <input name="promotion" class="form-control" placeholder="Enter promotion" value="<?php echo $row["promotion"] ?>">
 	                    </div>
 	                    <div class="form-group">
 	                        <label>Description</label>
 	                        <input name="description" class="form-control" placeholder="Enter description" value="<?php echo $row["description"] ?>">
 	                    </div>
 	                    <label>New price</label>
 	                    <div class="form-group input-group">
 	                        <span class="input-group-addon">฿</span>
 	                        <input id="price" name="newprice" type="text" class="form-control" value="<?php echo $row["price_new"] ?>">
 	                    </div>
 	                    <label>Old price</label>
 	                    <div class="form-group input-group">
 	                        <span class="input-group-addon">฿</span>
 	                        <input id="price" name="oldprice" type="text" class="form-control" value="<?php echo $row["price_old"] ?>">
 	                    </div>
 	                    <div class="form-group">
 	                        <label>Address</label>
 	                        <input name="addr" class="form-control" placeholder="Enter address" value="<?php echo $row["address"] ?>">
 	                    </div>
 	                    <div class="form-group">
 	                        <label>Telephone</label>
 	                        <input name="tel" class="form-control" placeholder="Enter tel." value="<?php echo $row["tel"] ?>">
 	                    </div>
 	                    <div class="form-group">
 	                        <label>Website</label>
 	                        <input name="web" class="form-control" placeholder="Enter web" value="<?php echo $row["website"] ?>">
 	                    </div>
 	                    <div class="form-group">
 	                        <label>Latitude</label>
 	                        <input name="lat" class="form-control" placeholder="Enter latitude" value="<?php echo $row["latitude"] ?>">
 	                    </div>
 	                    <div class="form-group">
 	                        <label>Longitude</label>
 	                        <input name="log" class="form-control" placeholder="Enter longitude" value="<?php echo $row["longitude"] ?>">
 	                    </div>
 	                    <label>Points</label>
 	                    <div class="form-group input-group">
 	                        <input id="price" name="point" type="text" class="form-control" value="<?php echo $row["points"] ?>">
 	                        <span class="input-group-addon">points</span>
 	                    </div>
 	                    <div class="form-group">
 	                        <label>Date start</label>
 	                        <input name="datestart" type="date" class="form-control" placeholder="Enter Date" value="<?php echo $row["date_start"] ?>">
 	                    </div>
 	                    <div class="form-group">
 	                        <label>Date end</label>
 	                        <input name="dateend" type="date" class="form-control" placeholder="Enter Date" value="<?php echo $row["date_end"] ?>">
 	                    </div>
 	                    <div class="form-group">
 	                        <label>Class</label>
 	                        <input name="class" class="form-control" placeholder="Enter longitude" value="<?php echo $_SESSION["name_main"] ?>">
  	                    </div>
                      </div>
                      
                      <div class="col-lg-4">
  	                    <div class="form-group">
  	                    	<label>Pic No. 1</label>
  						    <input type="image" type="submit" src="../images/<?php echo $_SESSION["name_main"] ?>/<?php echo $_SESSION["name_sub"] ?>/<?php echo $row["pic1"] ?>" alt="save" width="200" height="200">
 						</div>
 						<div class="form-group">
 	                    	<label>Pic No. 2</label>
 						    <input type="image" type="submit" src="../images/<?php echo $_SESSION["name_main"] ?>/<?php echo $_SESSION["name_sub"] ?>/<?php echo $row["pic2"] ?>" alt="save" width="200" height="200">
 						</div>
 						<div class="form-group">
  	                    	<label>Pic No. 3</label>
  						    <input type="image" type="submit" src="../images/<?php echo $_SESSION["name_main"] ?>/<?php echo $_SESSION["name_sub"] ?>/<?php echo $row["pic3"] ?>" alt="save" width="200" height="200">
  						</div>
 					</div>
 
 					<div class="col-lg-4">
 					<?php if($row["pic4"] != ""){ ?>
  						<div class="form-group">
  	                    	<label>Pic No. 4</label>
  						    <input type="image" type="submit" src="../images/<?php echo $_SESSION["name_main"] ?>/<?php echo $_SESSION["name_sub"] ?>/<?php echo $row["pic4"] ?>" alt="save" width="200" height="200">
  						</div>
 					<?php } ?>
 					<?php if($row["pic5"] != ""){ ?>
  						<div class="form-group">
  	                    	<label>Pic No. 5</label>
  						    <input type="image" type="submit" src="../images/<?php echo $_SESSION["name_main"] ?>/<?php echo $_SESSION["name_sub"] ?>/<?php echo $row["pic5"] ?>" alt="save" width="200" height="200">
  						</div>
 					<?php } ?>
  					</div>
                  </form>
  	            </div><!-- /.col-lg-6 (nested) -->
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