<?php
$con =  new mysqli("13.233.103.140","prateek","redhat","dm");
if($con->connect_error)
{
   echo $con->connect_error;
   exit;
}
?>
