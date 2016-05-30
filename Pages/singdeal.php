<?php
  session_start();
  //get id for show deal
  $id = $_GET['id']; 
 
 require_once('include\function.php');
    $mysqli = connectDB();
        //select comment for show
        $sql = "SELECT * FROM users INNER JOIN rating_comment ON rating_comment.users_id=users.id WHERE rating_comment.deal_id = $id ORDER BY rating_comment.date DESC LIMIT 5";
        $result = $mysqli->query($sql);
        $ment = array();
        while ($res = $result->fetch_array(MYSQLI_ASSOC))
        {
            $ment[] =$res;
        }

        //select like_num for show like number
        $sql = "SELECT SUM(like_num) as sumlike FROM rating_like WHERE rating_like.deal_id = $id";
        $result = $mysqli->query($sql);
        $like = array();
        while ($res = $result->fetch_array(MYSQLI_ASSOC))
        {
            $like[] =$res;
        }
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
  <!-- style css -->
  <link href="css/style.css" rel="stylesheet">
  <!-- font style : Carfty girls -->
  <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Crafty+Girls" />
  <!-- font style : Kiteone -->
  <link rel="stylesheet" type="text/css" href="//db.onlinewebfonts.com/c/97602e8f20f5e5b76a6bc0c6b977e30e?family=Kite+One" />
 	<!-- font style : Architects+Daughter -->
 	<link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Architects+Daughter" />
  <!-- API key google map -->
  <script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyDaZYfPJJ7flNiAEz24FJI2rYwP7gDHYkk"></script>

  <!-- define value latitude,longitude -->
  <script>
     var rows;
  </script>
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
        <!-- click logo back to main page-->
  		  <a href="main.php">
  		    <img class="navbar-brand" alt="logo" src="../images/logo/logo-small.png">&nbsp;&nbsp;
  		  </a>
  		</div>
 		   
      <div id="navbarCollapse" class="collapse navbar-collapse">
        <!-- navbar show logo, main deal, pdf button, like button and profile picture -->
        <ul class="nav navbar-nav">
          <li><a href="multideal.php?main=FOOD&sub=Dessert">FOOD &nbsp;</a></li>
          <li><a href="multideal.php?main=TRAVEL&sub=Transport">TRAVEL &nbsp;</a></li>
          <li><a href="multideal.php?main=BEAUTY&sub=Makeup">BEAUTY &nbsp;</a></li>
          <li><a href="multideal.php?main=LIFESTYLE&sub=Entertainment">LIFESTYLE</a></li>
          <?php if($_SESSION['login'] == true){ ?>
          <li><input class="img-circle imgbtn"style="margin-top: 20px; margin-left: 150px; margin-right: 10px" type="image" src="images/pdf.png" onClick="location.href='include/buydeal.php?id='+<?php echo $id ?>"></li>
          <li><input class="img-circle imgbtn" style="margin-top: 20px" type="image" src="images/like.png" onClick="location.href='include/like.php?id='+<?php echo $id ?>"></li>              
          <?php } ?>
        </ul>

        <!-- check user if not have login will not show -->
        <?php if($_SESSION['login'] == true){ ?>
              <div class="nav navbar-nav-main navbar-right">
                <div class="btn-group">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                    <img class="navbar-brand-avatar img-circle" alt="logo" src="../Pages/images/users/<?php echo $_SESSION['user_pic'];?>">
                    </a>
                  <!-- click profile picture dropdown profile, history and logout -->
                  <ul class="dropdown-menu">
                    <li><a href="profile.php">Profile</a></li>
                    <li><a href="history.php">History</a></li>
                    <li role="separator" class="divider"></li>
                    <li><a href="logout.php">Log out</a></li>
                  </ul>
                </div>
              </div>
          <?php } ?>
      </div>
 	  </div>
 	</nav>
 	
  <div class="container bg" ng-repeat="rec in names">
    <!-- main slider carousel -->
    <center>
    <div class="row">
      <div class="col-md-12" id="slider">
        <div class="col-md-12" id="carousel-bounding-box">
          <div id="myCarousel" class="carousel slide imgslidebar">

            <!-- show slide deal images -->
            <div class="carousel-inner">
              <div class="active item" data-slide-number="0">
                <img src="../Images/deal/{{rec.Pic1}}" class="img-responsive">
              </div>
              <div class="item" data-slide-number="1">
                <img src="../images/deal/{{rec.Pic2}}" class="img-responsive">
              </div>
              <div class="item" data-slide-number="2">
                <img src="../images/deal/{{rec.Pic3}}" class="img-responsive">
              </div>
              <div class="item" data-slide-number="3">
                <img src="../images/deal/{{rec.Pic4}}" class="img-responsive">
              </div>
              <div class="item" data-slide-number="4">
                <img src="../images/deal/{{rec.Pic5}}" class="img-responsive">
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
        </div>
      </div>
    </div>
    </center>
    
    <div class="bg-sub">
      <div class="row">
        <!-- show deal images -->
        <div class="col-md-12 hidden-sm hidden-xs" id="slider-thumbs">    
          <ul class="list-inline">
          <li> <a id="carousel-selector-0">
            <img src="../images/deal/{{rec.Pic1}}" class="img-responsive imgsing">
          </a></li>
          <li> <a id="carousel-selector-1">
            <img src="../images/deal/{{rec.Pic2}}" class="img-responsive imgsing">
          </a></li>
          <li> <a id="carousel-selector-2">
            <img src="../images/deal/{{rec.Pic3}}" class="img-responsive imgsing">
          </a></li>
          <li> <a id="carousel-selector-3">
            <img src="../images/deal/{{rec.Pic4}}" class="img-responsive imgsing">
          </a></li>
          <li> <a id="carousel-selector-4">
            <img src="../images/deal/{{rec.Pic5}}" class="img-responsive imgsing">
          </a></li> 
        </div>

        <!-- show deal description -->
        <div><center><h1 class="name">{{rec.Name}}</h1></center>
        <br><br>
          <p><b>Promotion : &nbsp;&nbsp;</b> {{rec.Promotion}}</p>
          <p><b>Old price : &nbsp;&nbsp;</b> {{rec.Priceold}} &nbsp;&nbsp;&nbsp;&nbsp; <b>New price : &nbsp;&nbsp;</b> {{rec.Pricenew}}</p>
          <p><b>Description : &nbsp;&nbsp;</b> {{rec.Description}}</p>
          <p><b>Location : &nbsp;&nbsp;</b> {{rec.Addr}}</p>
          <p><b>Tel. : &nbsp;&nbsp;</b> {{rec.Tel}}</p>
          <p><b>Website : &nbsp;&nbsp;</b> {{rec.Web}}</p>
          <p><b>Start : &nbsp;&nbsp;</b> {{rec.DateStart}} &nbsp;&nbsp;&nbsp;&nbsp; <b>End : &nbsp;&nbsp;</b> {{rec.DateEnd}}</p>
          <p><b>Points : &nbsp;&nbsp;</b> {{rec.Point}}</p>
          <p><b>Like : &nbsp;&nbsp;</b>
                <?php 
                if($like[0]['sumlike'] == null)
                  {
                    echo '0';
                  }
                else
                  {
                    echo $like[0]['sumlike'];
                  }                
                ?> </p>
        </div><br> 

        <!-- show location with google map -->
        <center><div id="googleMap" style="width:400px;height:250px;"></div></center><br><br><br>

        <!-- show comment 5 update -->
        <div ng-repeat="ment in com">
        <div class="col-sm-1 picment" >
          <div class="thumbnail" >
            <img class="img-responsive" src="images/users/{{ment.pic}}">
          </div><!-- /thumbnail -->
        </div><!-- /col-sm-1 -->
        <div class="col-sm-5">
          <div class="panel panel-default">
            <div class="panel-heading" >
              <strong class="ment">{{ment.username}}:&nbsp;&nbsp;&nbsp;&nbsp;{{ment.comment}}</strong> <span class="text-muted"></span>
            </div>
          </div><!-- /panel panel-default -->
        </div><!-- /col-sm-5 -->
        </div>
      </div>

      <!-- comment box -->
      <div class="col-md-12">
        <div class="widget-area no-padding blank">
          <div class="status-upload">
            <form role="form" name="btn" action="include/comment.php?id=<?php echo $id ?>" method="post" >
              <textarea placeholder="What are you thinking right now?" type="text" value="" name="comment" id="comment"></textarea>
              <button type="submit" name="btn" class="btn btn-success green"><i class="fa fa-share"></i> Comment</button>
            </form>
          </div>
        </div>
      </div>

    </div>
  </div>

  <!-- function show google map -->
  <script>
  function initialize() {
      var mapProp = {
        center:new google.maps.LatLng(Number(rows[0].Lat),Number(rows[0].Lon)),
        zoom:8,
        mapTypeId:google.maps.MapTypeId.ROADMAP
      };
      var map=new google.maps.Map(document.getElementById("googleMap"),mapProp);
      var marker = new google.maps.Marker({
        position: {lat:Number(rows[0].Lat),lng:Number(rows[0].Lon)},
        map: map,
      });
    }
    google.maps.event.addDomListener(window, 'load', initialize);
  </script>

  <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.0.7/angular.min.js"></script>
 
  <script>
    var app = angular.module('myApp', []);
    app.controller('dealCtrl', function($scope, $http) {
    $http.get("include/singdeal.php?id=<?php echo $id ?>").then(function (response) 
    {
      $scope.names = response.data;
      rows = response.data;
      console.log($scope.names);
      $scope.com = <?php echo json_encode($ment) ;?>;
      console.log(Object.keys($scope.com).length);
      $scope.numlike = <?php echo json_encode($like) ;?>;
      console.log($scope.numlike[0].sumlike);
      console.log(Object.keys($scope.numlike).length);
    });
  });
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