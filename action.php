<?php
require 'config.php';
$output='';
$sql="SELECT * FROM language WHERE cid='".$_POST['courseID']."'ORDER BY p_lang";
$result=mysqli_query($conn,$sql);
$output .='<option value="" disabled selected>-select Language-</option>';
while($row=mysqli_fetch_array($result)){
$output .='<option value="'.$row["id"].'">'.$row["p_lang"].'</option>';
}
echo $output;
?>