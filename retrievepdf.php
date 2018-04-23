<html>

<?php  

session_start();
$id = $_GET['id'];


$connect = mysqli_connect("localhost", "root", "", "placement_cell_iiitg"); 

 $sql = "SELECT pdf FROM student WHERE s_id = '$id'";
$result2 = mysqli_query($connect, $sql);    // query execution
$row = mysqli_fetch_object($result2); // returns the current row of the resultset
$pdf_content = $row->pdf; // Put contents of pdf into variable
$fileName = $sid.".pdf"; // create the unique name for pdf generated
//download file from database and allows you to save in your system
header("Content-type: application/pdf");
header("Content-disposition: inline; filename=".$fileName);
print $pdf_content;

              
               
                ?>  
				
				</html>