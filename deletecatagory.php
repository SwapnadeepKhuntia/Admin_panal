

<?php 
include("admin_inc/db.php");
$id= $_GET['did'];
$sql="delete from catagorys where id=$id";
$con->query($sql);
header("location:listcatagory.php");
?>

<?php
session_start();
if(!isset($_SESSION['an'])){
    header("location:index.php");
}

?>