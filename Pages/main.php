<?php 
session_start();
if($_SESSION['login'] == false){
  $_SESSION['admin'] = 0;
}
?>

<!DOCTYPE html>
<html lang="en" class="no-js">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <title>AFFA Deal</title>
        <meta name="description" content="Simple Multi-Item Slider: Category slider with CSS animations" />
        <meta name="keywords" content="jquery plugin, item slider, categories, apple slider, css animation" />
        <meta name="author" content="Codrops" />
        <link rel="shortcut icon" href="../favicon.ico"> 
        <!-- import style -->
        <link rel="stylesheet" type="text/css" href="include/style.css" />
        <script src="../js/modernizr.custom.63321.js"></script>

        <!-- font style : Architects+Daughter -->
        <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Architects+Daughter" />
    </head>
    <body class="bg" ng-app="myApp" ng-controller="dealCtrl">
        <div class="container"> 
            <!-- Codrops top bar -->
            <div class="codrops-top clearfix">
                <table width="100%">
                    <tbody>
                    <tr>
                        <td width="25%">
                        <!-- check session login -->
                        <?php if($_SESSION['login'] == false){ ?>
                            <a href="login.php"><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; LOGIN OR SIGN UP &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b></a>
                        <?php } else{ ?>
                            <a href="logout.php"><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;LOGOUT!!&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b></a>
                        <?php } ?>
                        </td>
                        <!-- show deal -->
                        <td width="12%">
                            <a href="multideal.php?main=FOOD&sub=Desert">FOOD</a>
                        </td>
                        <td width="12%">
                            <a href="multideal.php?main=BEAUTY&sub=Makeup">BEAUTY</a>
                        </td>
                        <td width="12%">
                            <a href="multideal.php?main=TRAVEL&sub=Hotel">TRAVEL</a>
                        </td>
                        <td width="12%">
                            <a href="multideal.php?main=LIFESTYLE&sub=Sport">LIFESTYLE</a>
                        </td>

                        <td width="25%">
                        <?php if($_SESSION['login'] == true){ ?>
                            <a href="#">
                                Welcome &nbsp;&nbsp;&nbsp;<b><?php echo $_SESSION['username']; ?></b> &nbsp; :D
                            </a>
                        <?php } ?>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div><!--/ Codrops top bar -->

            <header class="clearfix">
                <h1>HOT &nbsp;&nbsp; DEALS!! <span>Special for you. &nbsp;&nbsp; (づ￣ ³￣)づ</span></h1>
            </header>
            
            <!-- show deal new update-->
            <div class="main">
                <div id="mi-slider" class="mi-slider">
                    <ul>
                        <li id="li1"><a href="multideal.php?main=FOOD&sub=Desert"><img id="pic1" alt="img01"><h4>Dessert</h4></a></li>
                        <li id="li2"><a href="multideal.php?main=FOOD&sub=Food"><img id="pic2" alt="img02"><h4>Food</h4></a></li>
                        <li id="li3"><a href="multideal.php?main=FOOD&sub=Drink"><img id="pic3" alt="img03"><h4>Drink</h4></a></li>
                    </ul>
                    <ul>
                        <li id="li4"><a href="multideal.php?main=TRAVEL&sub=Transport"><img id="pic4" alt="img04"><h4>Transport</h4></a></li>
                        <li id="li5"><a href="multideal.php?main=TRAVEL&sub=Tour-package"><img id="pic5" alt="img05"><h4>Tour-package</h4></a></li>
                        <li id="li6"><a href="multideal.php?main=TRAVEL&sub=Hotel"><img id="pic6" alt="img06"><h4>Hotel</h4></a></li>
                    </ul>
                    <ul>
                        <li id="li7"><a href="multideal.php?main=BEAUTY&sub=Makeup"><img id="pic7" alt="img07"><h4>Makeup</h4></a></li>
                        <li id="li8"><a href="multideal.php?main=BEAUTY&sub=Fashion"><img id="pic8" alt="img08"><h4>Fashion</h4></a></li>
                        <li id="li9"><a href="multideal.php?main=BEAUTY&sub=Beauty-clinic"><img id="pic9" alt="img09"><h4>Beauty-clinic</h4></a></li>
                    </ul>
                    <ul>
                        <li id="li10"><a href="multideal.php?main=LIFESTYLE&sub=Entertainment"><img id="pic10" alt="img12"><h4>Entertainment</h4></a></li>
                        <li id="li11"><a href="multideal.php?main=LIFESTYLE&sub=Sport"><img id="pic11" alt="img13"><h4>Sport</h4></a></li>
                        <li id="li12"><a href="multideal.php?main=LIFESTYLE&sub=Electronic"><img id="pic12" alt="img14"><h4>Electronic</h4></a></li>
                    </ul>
                    <nav>
                        <a href="#">FOOD</a>
                        <a href="#">TRAVEL</a>
                        <a href="#">BEAUTY</a>
                        <a href="#">LIFESTYLE</a>
                    </nav>
                </div>
            </div>
            
            <center>
            <a href="#">
                    <img class="navbar-brand" alt="logo" src="../images/logo/logo-small.png">
            </a></center>
        </div><!-- /container -->

        <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.0.7/angular.min.js"></script>
     
        <!-- select update new from database -->
         <script>
           var app = angular.module('myApp', []);
           app.controller('dealCtrl', function($scope, $http) {
            $http.get("include/main.php").then(function (response) {
              $scope.names = response.data;

              console.log($scope.names);
              $str = "../Images/deal/";

              if($scope.names[0].pic1 == null){document.getElementById('li1').parentNode.removeChild(document.getElementById('li1'));}
              else{ document.getElementById('pic1').src = $str.concat($scope.names[0].pic1);}
              if($scope.names[0].pic2 == null){document.getElementById('li2').parentNode.removeChild(document.getElementById('li2'));}
              else{ document.getElementById('pic2').src = $str.concat($scope.names[0].pic2);}
              if($scope.names[0].pic3 == null){document.getElementById('li3').parentNode.removeChild(document.getElementById('li3'));}
              else{ document.getElementById('pic3').src = $str.concat($scope.names[0].pic3);}
              if($scope.names[0].pic4 == null){document.getElementById('li4').parentNode.removeChild(document.getElementById('li4'));}
              else{ document.getElementById('pic4').src = $str.concat($scope.names[0].pic4);}
              if($scope.names[0].pic5 == null){document.getElementById('li5').parentNode.removeChild(document.getElementById('li5'));}
              else{ document.getElementById('pic5').src = $str.concat($scope.names[0].pic5);}
              if($scope.names[0].pic6 == null){document.getElementById('li6').parentNode.removeChild(document.getElementById('li6'));}
              else{ document.getElementById('pic6').src = $str.concat($scope.names[0].pic6);}
              if($scope.names[0].pic7 == null){document.getElementById('li7').parentNode.removeChild(document.getElementById('li7'));}
              else{ document.getElementById('pic7').src = $str.concat($scope.names[0].pic7);}
              if($scope.names[0].pic8 == null){document.getElementById('li8').parentNode.removeChild(document.getElementById('li8'));}
              else{ document.getElementById('pic8').src = $str.concat($scope.names[0].pic8);}
              if($scope.names[0].pic9 == null){document.getElementById('li9').parentNode.removeChild(document.getElementById('li9'));}
              else{ document.getElementById('pic9').src = $str.concat($scope.names[0].pic9);}
              if($scope.names[0].pic10 == null){document.getElementById('li10').parentNode.removeChild(document.getElementById('li10'));}
              else{ document.getElementById('pic10').src = $str.concat($scope.names[0].pic10);}
              if($scope.names[0].pic11 == null){document.getElementById('li11').parentNode.removeChild(document.getElementById('li11'));}
              else{ document.getElementById('pic11').src = $str.concat($scope.names[0].pic11);}
              if($scope.names[0].pic12 == null){document.getElementById('li12').parentNode.removeChild(document.getElementById('li12'));}
              else{ document.getElementById('pic12').src = $str.concat($scope.names[0].pic12);}

             });
            }
          );
            
         </script>

        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
        <script src="../js/jquery.catslider.js"></script>
        <script>
            $(function() {
                $( '#mi-slider' ).catslider();
            });
        </script>
    </body>
</html>