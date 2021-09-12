<?php
include("conn/conn.php");

if(empty($_FILES)){ 


}else{

$up_root = 'images/';

is_dir($up_root) || mkdir($up_root);

foreach($_FILES as $item){
 
    if($item['error'] === 0){
 
      $content = file_get_contents($item['tmp_name'],'r');
  
      $fid = uniqid();
      
      $suffix = explode('.',$item['name']);
 
      $suffix = array_pop($suffix);
      $suffix && ($suffix = '.'.$suffix);
   
      move_uploaded_file($item['tmp_name'],$up_root.$fid.$suffix);
      $img = $up_root.$fid.$suffix;
      
    }else{
      echo "update error !";
    };
};
};

$detail_url= str_replace(' ', '', $_POST['pro_detail_url']);
$name = str_replace(' ', '', $_POST['pro_name']);
$price = str_replace(' ', '', $_POST['pro_price']);
$rating = str_replace(' ', '', $_POST['pro_rating']);
$discount = str_replace(' ', '', $_POST['pro_discount']);
$type = str_replace(' ', '', $_POST['pro_type']);
$img = str_replace("\\", '/',$img);
$query = "INSERT INTO `product`(`name`, `price`, `detail_url`, `img_url`, `rating`, `discount`, `type`) VALUES 
                               ('{$name}',$price, '{$detail_url}','{$img}',$rating,$discount,$type)";
$result = mysqli_query($conn,$query);

if(! $result )
{
    die('NOT DATA: ' . mysqli_error($conn));
}
else{
	  echo "insert Product Success";
	  
}
mysqli_close($conn);
?>
<a href="AddProduct.php">goback to AddProduct</a>