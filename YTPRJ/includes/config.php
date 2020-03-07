<?php
$db = mysqli_connect('localhost' , 'root' , '' , 'cv');
function x($data){
    global $db;
    $data = mysqli_real_escape_string($db , htmlspecialchars($data));
    return $data;
}
if(isset($_GET['d'])){
    $id = x($_GET['d']);
    mysqli_query($db , "DELETE FROM `person` WHERE `id` = '$id'");
    header("Location:index.php");
  }
?>