<?php

            displayimage1();

            function displayimage1()

            {

               $con = mysqli_connect('localhost','root','') or die(mysql_error());
$db = mysqli_select_db($con,'placement_cell_iiitg') or die(mysql_error());

$qry="SELECT image FROM student WHERE s_id = '1601023'  ";

$result=mysqli_query($con,$qry)or die(mysqli_error());

                while($row = mysqli_fetch_array($result))

                {

                    echo '<img id="my" height="150" width="320" src="data:image;base64,'.$row[6].' "> ';

}

                mysql_close($con);  

            }

?>