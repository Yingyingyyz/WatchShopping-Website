<?php
include("conn/conn.php");
$keyword = str_replace(' ', '', $_GET['keyword']);

$query = "select * from product where name like '{$keyword}%' limit 0,100";
$result = mysqli_query($conn,$query);

if(! $result )
{
    die('NOT DATA: ' . mysqli_error($conn));
}
if (!$result) {
    echo "no such data";
} else {
   
    $row = mysqli_fetch_all($result,MYSQLI_ASSOC);

   
    mysqli_free_result($result);
    echo json_encode($row);

}
mysqli_close($conn);