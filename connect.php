<?php 

$con = new mySqli('localhost', 'root',"",'crudoperation');

if (!$con){

    die(mysqli_error($con));
}