<?php
session_start();
$link = mysqli_connect("localhost", "root","","placement_cell_iiitg") or die ("Error".mysqli_error($link));
$name = $_SESSION["name"];

if(isset($_POST['upload']))
{

// extract file name, type, size and path
$file_path=$_FILES['pdf']['tmp_name']; //pdf is the name of the input type where we are uploading files
$file_type=$_FILES['pdf']['type'];
$file_size=$_FILES['pdf']['size'];
$file_name=$_FILES['pdf']['name'];

// checks whether selected file is a pdf file or not
if ($file_name != "" && $file_type == 'application/pdf')
{

//extracts data of file in $data variable
$data=mysqli_real_escape_string($link, file_get_contents($file_path));
// query to insert file in database
$query="INSERT INTO student(pdf) values( '".$data."') where s_id='$name'"; //”field_name” is the name of the field where we are uploading pdf files
$result = mysqli_query($link, $query); //query execution
// Check if it was successful
if($result)
echo 'Success! Your file was successfully added!';
else
echo 'Error!';
} 

else {
echo 'Not a pdf file';
}
}



?>
<html>

<form name="form" id="form" action="" method="post" enctype="multipart/form-data">
File: <input type="file" name="pdf" id="pdf" accept="application/pdf" title="Choose File" /><br />
<input type="submit" name="upload" id="upload" value="Upload" /><br />

</form>
</html>
