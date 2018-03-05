<?php 
header("Content-type:application/json");
$con = mysqli_connect("127.0.0.1", "homestead", "secret", "crudo");
//if(!$con){
//    die('Could not connect:'.mysqli_error());
//}
//$result = mysqli_query($con, "select * from users");
//while($row = mysqli_fetch_assoc($result)){
//    $output[]=$row;
//}
//print(json_encode($output,JSON_PRETTY_PRINT));
$dato=$_GET['dato'];
//var_dump($dato);
//exit();
if(!empty($dato)){
    $result = mysqli_query($con, "select * from users where id =".$dato);
//    var_dump($result);
//    exit();
    $row = mysqli_fetch_assoc($result);
    $output[] = $row;
    print(json_encode($output, JSON_PRETTY_PRINT));
}
mysqli_close($con);

 ?>