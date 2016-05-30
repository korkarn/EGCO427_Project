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
 
 <body>
     <div class="jumbotron">
         <center><p>..Sign up..</p></center>
     </div>
 	<div class="container">
 	    <div class="panel-body">
 	        <div class="row">
              <form role="form" name="card" action="include/signup.php" method="post" enctype="multipart/form-data">
              <div class="col-lg-12">
              	<div class="form-group">
                      <label>Username</label>
                      <input name="username" class="form-control" placeholder="Enter name" value="">
                  </div>
                  <div class="form-group">
                      <label>Password</label>
                      <input name="password" class="form-control" placeholder="Enter promotion" value="">
                  </div>
                  <div class="form-group">
                      <label>Email</label>
                      <input name="email" class="form-control" type="email" placeholder="Enter description" value="">
                  </div>
                  <div class="form-group">
                      <label>Address</label>
                      <input name="addr" class="form-control" placeholder="Enter description" value="">
                  </div>
                  <div class="form-group">
                      <label>Telephone</label>
                      <input name="tel" class="form-control" type="number" min="0" pattern="^0" placeholder="Enter tel." value="">
                  </div>
                  <div class="form-group">
          	           <label>Pic</label>
    				             <input type="file" name="img" class="file">
    				             <div class="input-group col-xs-12">
    				               <span class="input-group-addon"><i class="glyphicon glyphicon-picture"></i></span>
    				                 <input name="pic" type="text" class="form-control input-lg" placeholder="Upload Image" value="">
    				               <span class="input-group-btn">
    				                 <button class="browse btn btn-default input-lg" type="button"><i class="glyphicon glyphicon-search"></i> Browse</button>
    				               </span>
    				             </div>
				          </div>
				      </div>
			        <center>
   			    	<div> 
   			        	<input type="image" type="submit" src="../images/logo/save-icon.png" alt="save" width="50" height="50">
   			      </div>
      			</center>
            </form>
 	        </div>
 	    </div>
  </div>
  
  	<input type="image" src="../images/logo/cancel-icon.png" alt="save" width="50" height="50" onClick="location.href='multideal.php?main=BEAUTY&sub=Makeup'">
 	
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