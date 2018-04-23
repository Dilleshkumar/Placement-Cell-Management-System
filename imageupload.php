<?php
session_start();
error_reporting(0);
if(isset($_POST["submit"])){
    $check = getimagesize($_FILES["image"]["tmp_name"]);
    if($check !== false){
        $image = $_FILES['image']['tmp_name'];
        $imgContent = addslashes(file_get_contents($image));
$name =$_SESSION["name"];

echo $name;
        /*
         * Insert image data into database
         */
        
        //DB details
        $dbHost     = 'localhost';
        $dbUsername = 'root';
        $dbPassword = '';
        $dbName     = 'placement_cell_iiitg';
        $name = $_SESSION['name'];
        //Create connection and select DB
        $db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);
        
        // Check connection
        if($db->connect_error){
            die("Connection failed: " . $db->connect_error);
        }
        
        $dataTime = date("Y-m-d H:i:s");
        
        //Insert image content into database
        $insert = $db->query("update student set image=('$imgContent') where s_id=('$name')");
        if($insert){
            $_SESSION['uploaded']="Image uplaoded succesfully";
        }else{
            $_SESSION['unuploaded']="File upload failed, please try again.";
        } 
    }else{
        $_SESSION['noimage'] ="Please select an image file to upload.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<form action="imageupload.php" method="post" enctype="multipart/form-data" style="margin-top:148px;
						margin-left:582px;">
        Select image to upload:
        <input type="file" name="image"/>
        <input type="submit" name="submit" value="UPLOAD"/>
		<h4 style="color:forestgreen;"><?php if( isset($_SESSION['uploaded']) )
{
        echo $_SESSION['uploaded'];

        unset($_SESSION['uploaded']);

}?></h4>

          <h4 style="color:red;"><?php if( isset($_SESSION['unuploaded']) )
{
        echo $_SESSION['unuploaded'];

        unset($_SESSION['unuplaoded']);

}?></h4>

<h4 style="color:red;"><?php if( isset($_SESSION['noimage']) )
{
        echo $_SESSION['noimage'];

        unset($_SESSION['noimage']);

}?></h4>

    </form>
	



