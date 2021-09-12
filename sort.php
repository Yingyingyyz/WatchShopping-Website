<?php
include("conn/conn.php");
$type = $_GET['oid'];
if($type == 1){
    $query = "select * from product order by price asc";
}elseif($type == 2){
    $query = "select * from product order by price desc";
}elseif ($type == 3){
    $query = "select * from product order by rating desc";
}elseif ($type == 4){
    $query = "select * from product order by discount desc";
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