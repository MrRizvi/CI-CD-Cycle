<?php
$con =  new mysqli("13.233.167.2","prateek","redhat","dm");
if($con->connect_error)
{
   echo $con->connect_error;
   exit;
}
?>
