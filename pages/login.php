<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="stylesheet" href="css/style.css">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css">  

    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Architects+Daughter" />
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.3.14/angular.min.js"></script>

</head>

<body class="login" ng-app="postExample" ng-controller="PostController as postCtrl">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                    <div>
                        <center><img src="images/logo-small.png" class="logo"></center><br>
                    </div>
                    <div class="panel-body">
                        <form role="form">
                            <center><fieldset class="field">
                            <center><h3 class="title">LOG IN</h3></center>
                                <div class="form-group ">
                                    <input class="form-control user" placeholder="Username" name="username" type="text" autofocus ng-model="username">
                                </div>
                                <div class="form-group">
                                    <input class="form-control user" placeholder="Password" name="password" type="password" value="" ng-model="password">
                                </div>
                                <!-- Change this to a button or input when using this as a form -->
                                <!--<a href="index.html" class="btn btn-lg btn-success btn-block">Login</a>-->
                                <input type="submit" name="submit" id="submit" value="Login" class="btn btn-lg btn-success btn-block loginbtn" ng-click="postForm()"/>
                            </fieldset></center>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    <script>
            angular.module('postExample', []).controller('PostController', ['$scope', '$http', function($scope,$http){
                    $scope.postForm = function(){
                        var encodedString = 'username='+encodeURIComponent($scope.username) +
                    '&password=' +
                    md5(encodeURIComponent($scope.password));
                    $http({
                        method: 'POST',
                        url: 'checklogin.php',
                        data: encodedString,
                        headers: {'Content-Type': 'application/x-www-form-urlencoded'}
                    })
                    .success(function(data, status, headers, config){
                        console.log(data);
                        if(data.trim() === 'correct'){
                            window.location.href = 'index.php';
                        }
                        else{
                            $scope.errorMsg = "Login fail";
                            alert($scope.errorMsg);
                        }
                    })
                    .error(function(data, status,headers, config){
                        $scope.errorMsg = 'Cannot Submit Form';
                        alert($scope.errorMsg);
                    });
                }
            }]);

        </script>
        <script src="md5.js" type="text/javascript"></script>
        <!-- jQuery -->
        <script src="http://code.jquery.com/jquery.js"></script>
        <!-- Bootstrap JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

    <!-- jQuery -->
    <script src="../bower_components/jquery/dist/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../bower_components/metisMenu/dist/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>

</body>

</html>