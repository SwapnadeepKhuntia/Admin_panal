<?php
include("admin_inc/db.php");
if(isset($_POST["save"])){
  $c=$con->real_escape_string($_POST["cname"]);
  $sql="insert into catagorys(catagory_name)values('$c')";
  $con->query($sql);
  header("location:listcatagory.php");
}
else{
    echo "access denied";
}
?>