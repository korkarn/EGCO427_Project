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

	<!-- adddeal css -->
	<link href="include/adddeal.css" rel="stylesheet">

	<!-- font style : Architects+Daughter -->
	<link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Architects+Daughter" />

</head>

<body ng-app="myApp" ng-controller="dealCtrl">
    <div class="jumbotron">
        <center><p>Add deal</p></center>
    </div>
	<div class="container">
	    <div class="panel-body">
	        <div class="row">
	                <form role="form" name="card" action="" method="post">
	                <div class="col-lg-6">
	                	<div class="form-group">
	                        <label>Name deal</label>
	                        <input name="name" class="form-control" placeholder="Enter name" value="">
	                    </div>
	                    <div class="form-group">
	                        <label>Promotion</label>
	                        <input name="promotion" class="form-control" placeholder="Enter promotion" value="">
	                    </div>
	                    <div class="form-group">
	                        <label>Description</label>
	                        <input name="description" class="form-control" placeholder="Enter description" value="">
	                    </div>
	                    <label>New price</label>
	                    <div class="form-group input-group">
	                        <span class="input-group-addon">฿</span>
	                        <input id="price" name="newprice" type="text" class="form-control" value="">
	                        <span class="input-group-addon">.00</span>
	                    </div>
	                    <label>Old price</label>
	                    <div class="form-group input-group">
	                        <span class="input-group-addon">฿</span>
	                        <input id="price" name="oldprice" type="text" class="form-control" value="">
	                        <span class="input-group-addon">.00</span>
	                    </div>
	                    <div class="form-group">
	                        <label>Address</label>
	                        <input name="addr" class="form-control" placeholder="Enter address" value="">
	                    </div>
	                    <div class="form-group">
	                        <label>Telephone</label>
	                        <input name="tel" class="form-control" placeholder="Enter tel." value="">
	                    </div>
	                    <div class="form-group">
	                        <label>Website</label>
	                        <input name="web" class="form-control" placeholder="Enter web" value="">
	                    </div>
	                    <div class="form-group">
	                        <label>Latitude</label>
	                        <input name="lat" class="form-control" placeholder="Enter latitude" value="">
	                    </div>
	                    <div class="form-group">
	                        <label>Longitude</label>
	                        <input name="log" class="form-control" placeholder="Enter longitude" value="">
	                    </div>
                    </div>

					<div class="col-lg-6">
	                    <div class="form-group">
	                    	<label>Pic No. 1</label>
						    <input type="file" name="img[]" class="file">
						    <div class="input-group col-xs-12">
						      <span class="input-group-addon"><i class="glyphicon glyphicon-picture"></i></span>
						      <input name="pic1" type="text" class="form-control input-lg" placeholder="Upload Image" value="">
						      <span class="input-group-btn">
						        <button class="browse btn btn-default input-lg" type="button"><i class="glyphicon glyphicon-search"></i> Browse</button>
						      </span>
						    </div>
						</div>
						<div class="form-group">
	                    	<label>Pic No. 2</label>
						    <input type="file" name="img[]" class="file">
						    <div class="input-group col-xs-12">
						      <span class="input-group-addon"><i class="glyphicon glyphicon-picture"></i></span>
						      <input name="pic2" type="text" class="form-control input-lg" placeholder="Upload Image" value="">
						      <span class="input-group-btn">
						        <button class="browse btn btn-default input-lg" type="button"><i class="glyphicon glyphicon-search"></i> Browse</button>
						      </span>
						    </div>
						</div>
						<div class="form-group">
	                    	<label>Pic No. 3</label>
						    <input type="file" name="img[]" class="file">
						    <div class="input-group col-xs-12">
						      <span class="input-group-addon"><i class="glyphicon glyphicon-picture"></i></span>
						      <input name="pic3" type="text" class="form-control input-lg" placeholder="Upload Image" value="">
						      <span class="input-group-btn">
						        <button class="browse btn btn-default input-lg" type="button"><i class="glyphicon glyphicon-search"></i> Browse</button>
						      </span>
						    </div>
						</div>
						<div class="form-group">
	                    	<label>Pic No. 4</label>
						    <input type="file" name="img[]" class="file">
						    <div class="input-group col-xs-12">
						      <span class="input-group-addon"><i class="glyphicon glyphicon-picture"></i></span>
						      <input name="pic4" type="text" class="form-control input-lg" placeholder="Upload Image" value="">
						      <span class="input-group-btn">
						        <button class="browse btn btn-default input-lg" type="button"><i class="glyphicon glyphicon-search"></i> Browse</button>
						      </span>
						    </div>
						</div>
						<div class="form-group">
	                    	<label>Pic No. 5</label>
						    <input type="file" name="img[]" class="file">
						    <div class="input-group col-xs-12">
						      <span class="input-group-addon"><i class="glyphicon glyphicon-picture"></i></span>
						      <input name="pic5" type="text" class="form-control input-lg" placeholder="Upload Image" value="">
						      <span class="input-group-btn">
						        <button class="browse btn btn-default input-lg" type="button"><i class="glyphicon glyphicon-search"></i> Browse</button>
						      </span>
						    </div>
						</div>
						<label>Points</label>
	                    <div class="form-group input-group">
	                        <input id="price" name="point" type="text" class="form-control" value="">
	                        <span class="input-group-addon">points</span>
	                    </div>
	                    <div class="form-group">
	                        <label>Date start</label>
	                        <input name="datestart" type="date" class="form-control" placeholder="Enter Date" value="">
	                    </div>
	                    <div class="form-group">
	                        <label>Date end</label>
	                        <input name="dateend" type="date" class="form-control" placeholder="Enter Date" value="">
	                    </div>
	                    <div class="form-group">
		                    <label>Class of deal</label>
		                    <select class="selectpicker">
							  <optgroup label="FOOD">
							    <option name="dessert" value="Dessert">Dessert</option>
								<option name="food" value="Food">Food</option>
								<option name="drink" value="Drink">Drink</option>	
							  </optgroup>
							  <optgroup label="TRAVEL">
							    <option name="transport" value="Transport">Transport</option>
								<option name="tour" value="Tour-package">Tour-package</option>
								<option name="hotel" value="Hotel">Hotel</option>	
							  </optgroup>
							  <optgroup label="BEAUTY">
							    <option name="makeup" value="Makeup">Makeup</option>
								<option name="fashion" value="Fashion">Fashion</option>
								<option name="beauty" value="Beauty-clinic">Beauty-clinic</option>	
							  </optgroup>
							  <optgroup label="LIFTSTYLE">
							    <option name="entertainment" value="Entertainment">Entertainment</option>
								<option name="sport" value="Sport">Sport</option>
								<option name="electronic" value="Electronic">Electronic</option>	
							  </optgroup>
							</select>
						</div>
					</div>
	                </form>
	            </div>
	            <!-- /.col-lg-6 (nested) -->
	    </div>
    </div>

    <div>
        <center>
        	<input class="img-circle" type="image" src="../images/logo/save-icon.png" alt="save" width="50" height="50">
        	<input type="image" src="../images/logo/cancel-icon.png" alt="save" width="50" height="50" onClick="location.href='multideal.php'">
        </center>
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

</body>
</html>