<?php  

session_start();

$connect = mysqli_connect("localhost", "root", "", "placement_cell_iiitg"); 
$id = $_GET['id'];
echo $id;
                $query = "SELECT * FROM image where s_id='1601023'";  
                $result = mysqli_query($connect, $query);  
                while($row = mysqli_fetch_array($result))  
                {  
                     echo '  
                          <tr>  
                               <td>  
                                    <img src="data:image/jpeg;base64,'.base64_encode($row['name'] ).'" height="200" width="200" class="img-thumnail" />  
                               </td>  
                          </tr>  
                     ';  
                }  
                ?>  