<?php
  include("conn/conn.php");

$query = "select * from product";
$result = mysqli_query($conn,$query);

if(! $result )
{
    die('NOT DATA: ' . mysqli_error($conn));
}
if (!mysqli_fetch_array($result,MYSQLI_ASSOC)) {
    echo "no such data";
} else {
 
   $row = mysqli_fetch_all($result,MYSQLI_ASSOC);


    mysqli_free_result($result);
    echo json_encode($row);

}
mysqli_close($conn);
