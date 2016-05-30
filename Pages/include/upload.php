// <?php
    session_start();
    require_once('function.php');
    //get values from 'editprofile' page when have edit profile picture
    $id = $_SESSION['user_id'];
    $pic = $_FILES["pic"]["name"];
    $folder = "../images/users/";
    $path = $folder.$pic;

    //move image from other folder to users folder
    if( move_uploaded_file($_FILES["pic"]["tmp_name"], $path) ) 
    {
        $mysqli = connectDB();
        if( upload($id, $pic, $mysqli) ) {
           header('Location: ../editprofile.php?id='.$id);
        } 
        else {
          	echo 'Error uploading file';
        }
    } 
    else {
       echo 'Error uploading file';
    }
?>