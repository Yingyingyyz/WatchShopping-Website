<?php
include("conn/conn.php");
$type = $_GET['fid'];
if($type == 1){
    $query = "select * from product where price < 50";
}elseif($type == 2){
    $query = "select * from product where price >=50 and price <=150";
}elseif ($type == 3){
    $query = "select * from product where price >150";
}elseif ($type == 4){
    $query = "select * from product where rating >=4";
}elseif ($type == 5){
    $query = "select * from product where rating >= 3";
}else{
    $query = "select * from product";
}

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