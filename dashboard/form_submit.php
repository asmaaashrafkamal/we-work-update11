
<?php
//insert into database
$l=[];
if(!empty($_POST)) {
 if($_POST['point']!="" ){
 $id = $_POST['point'];
array_push($l,$id);
echo '<div style="padding:3%;"><div class="alert alert-success"  style="max-width: 600px;"  role="alert"><h4 style="text-align:center;">Successfully Saved </h4> </div></div>';
 if($l!=[]){
    session_start();
$_SESSION['test'][]=$l;
 }
}}
?>