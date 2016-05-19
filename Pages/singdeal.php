<?php
 	session_start();
 	$_SESSION["admin"] = 1;
  $id = $_GET['id'];
 ?>
 
 <!DOCTYPE html>
 <html>
 <head>
 	<meta charset="utf-8">
 	<meta http-equiv="X-UA-Compatible" content="IE=edge">
 	<title>AFFA Deal</title>

  <link rel="stylesheet" href="http://fontawesome.io/assets/font-awesome/css/font-awesome.css">
 	
 	<!-- jquery.js for bootstrap -->
 	<script src="https://code.jquery.com/jquery.js"></script>
 
 	<!-- Latest compiled and minified CSS -->
 	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
 
 	<!-- Latest compiled and minified JS -->
 	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
 
 	<!-- main css -->
 	<link href="include/main.css" rel="stylesheet">
 
 	<!-- multideal css -->
 	<link href="include/singdeal.css" rel="stylesheet">
 
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
 		            <li><a href="multideal.php?main=FOOD&sub=Dessert">FOOD &nbsp;</a></li>
 		            <li><a href="multideal.php?main=TRAVEL&sub=Transport">TRAVEL &nbsp;</a></li>
                <li><a href="multideal.php?main=BEAUTY&sub=Makeup">BEAUTY &nbsp;</a></li>
 		            <li><a href="multideal.php?main=LIFESTYLE&sub=Entertainment">LIFESTYLE</a></li>
 		        </ul>
 		    </div>
 	    </div>
 	</nav>
 	
  <div class="container bg" ng-repeat="rec in names">
    <!-- main slider carousel -->
    <div class="row">
        <div class="col-md-12" id="slider">
          <div class="col-md-12" id="carousel-bounding-box">
            <div id="myCarousel" class="carousel slide">
              <!-- main slider carousel items -->
              <div class="carousel-inner">
                <div class="active item" data-slide-number="0">
                    <img src="../images/<?php echo $_SESSION['name_main'] ?>/<?php echo $_SESSION['name_sub'] ?>/{{rec.Pic1}}" class="img-responsive">
                </div>
                <div class="item" data-slide-number="1">
                  <img src="../images/<?php echo $_SESSION['name_main'] ?>/<?php echo $_SESSION['name_sub'] ?>/{{rec.Pic2}}" class="img-responsive">
                </div>
                <div class="item" data-slide-number="2">
                    <img src="../images/<?php echo $_SESSION['name_main'] ?>/<?php echo $_SESSION['name_sub'] ?>/{{rec.Pic3}}" class="img-responsive">
                </div>
                <div class="item" data-slide-number="3">
                    <img src="../images/<?php echo $_SESSION['name_main'] ?>/<?php echo $_SESSION['name_sub'] ?>/{{rec.Pic4}}" class="img-responsive">
                </div>
                <div class="item" data-slide-number="4">
                    <img src="../images/<?php echo $_SESSION['name_main'] ?>/<?php echo $_SESSION['name_sub'] ?>/{{rec.Pic5}}" class="img-responsive">
                </div>
              </div>
              <!-- main slider carousel nav controls --> <a class="carousel-control left" href="#myCarousel" data-slide="prev">‹</a>

              <a class="carousel-control right" href="#myCarousel" data-slide="next">›</a>
            </div>
          </div>
        </div>
    </div>
    <!--/main slider carousel-->

    <!-- thumb navigation carousel -->
    <div class="col-md-12 hidden-sm hidden-xs" id="slider-thumbs">
        
            <!-- thumb navigation carousel items -->
          <ul class="list-inline">
          <li> <a id="carousel-selector-0" class="selected">
            <img src="../images/<?php echo $_SESSION['name_main'] ?>/<?php echo $_SESSION['name_sub'] ?>/{{rec.Pic1}}" class="img-responsive">
          </a></li>
          <li> <a id="carousel-selector-1">
            <img src="../images/<?php echo $_SESSION['name_main'] ?>/<?php echo $_SESSION['name_sub'] ?>/{{rec.Pic2}}" class="img-responsive">
          </a></li>
          <li> <a id="carousel-selector-2">
            <img src="../images/<?php echo $_SESSION['name_main'] ?>/<?php echo $_SESSION['name_sub'] ?>/{{rec.Pic3}}" class="img-responsive">
          </a></li>
          <li> <a id="carousel-selector-3">
            <img src="../images/<?php echo $_SESSION['name_main'] ?>/<?php echo $_SESSION['name_sub'] ?>/{{rec.Pic4}}" class="img-responsive">
          </a></li>
                <li> <a id="carousel-selector-4">
            <img src="../images/<?php echo $_SESSION['name_main'] ?>/<?php echo $_SESSION['name_sub'] ?>/{{rec.Pic5}}" class="img-responsive">
          </a></li>
        
    </div>

    <div class="bg-sub">
      <div class="row">
          <center><h1>{{rec.Name}}</h1></center>
          <br><br><br>
          <p><b>Promotion : &nbsp;&nbsp;</b> {{rec.Promotion}}</p>
          <p><b>Old price : &nbsp;&nbsp;</b> {{rec.Priceold}} &nbsp;&nbsp;&nbsp;&nbsp; <b>New price : &nbsp;&nbsp;</b> {{rec.PriceNew}}</p>
          <p><b>Description : &nbsp;&nbsp;</b> {{rec.Dscription}}</p>
          <p><b>Address : &nbsp;&nbsp;</b> {{rec.Promotion}}</p>
          <p><b>Tel. : &nbsp;&nbsp;</b> {{rec.Dscription}}</p>
          <p><b>Website : &nbsp;&nbsp;</b> {{rec.Promotion}}</p>
          <br><br><br>
         
          <div class="col-sm-1">
          <div class="thumbnail">
          <img class="img-responsive user-photo" src="https://ssl.gstatic.com/accounts/ui/avatar_2x.png">
          </div><!-- /thumbnail -->
          </div><!-- /col-sm-1 -->

          <div class="col-sm-5">
            <div class="panel panel-default">
              <div class="panel-heading">
                <strong>myusername</strong> <span class="text-muted"></span>
              </div>
            <div class="panel-body">
              Panel content
            </div><!-- /panel-body -->
            </div><!-- /panel panel-default -->
          </div><!-- /col-sm-5 -->
          </div>

          <div class="col-md-12">
            <div class="widget-area no-padding blank">
            <div class="status-upload">
              <form >
                <textarea placeholder="What are you thinking right now?" name="text"></textarea>
                <button type="submit" class="btn btn-success green"><i class="fa fa-share"></i> Comment</button>
              </form>
            </div><!-- Status Upload  -->
          </div><!-- Widget Area -->
        </div>
      </div>
  </div>
  <div class="container">
    <div class="row">
    
        
    </div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.0.7/angular.min.js"></script>
 
     <script>
       var app = angular.module('myApp', []);
       app.controller('dealCtrl', function($scope, $http) {
        $http.get("include/singdeal.php?id="+$id).then(function (response) {
          $scope.names = response.data;
          console.log($scope.names);
         });
      }
     </script>

 <script>
  $('#myCarousel').carousel({
    interval: 4000
  });

  // handles the carousel thumbnails
  $('[id^=carousel-selector-]').click( function(){
    var id_selector = $(this).attr("id");
    var id = id_selector.substr(id_selector.length -1);
    id = parseInt(id);
    $('#myCarousel').carousel(id);
    $('[id^=carousel-selector-]').removeClass('selected');
    $(this).addClass('selected');
  });

  // when the carousel slides, auto update
  $('#myCarousel').on('slid', function (e) {
    var id = $('.item.active').data('slide-number');
    id = parseInt(id);
    $('[id^=carousel-selector-]').removeClass('selected');
    $('[id=carousel-selector-'+id+']').addClass('selected');
  });

  $(document).ready(function(){
    $("[data-toggle=tooltip]").tooltip();
  });
 </script>

 </body>
 </html>