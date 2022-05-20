<?php

//including the database connection file

include("config.php");

//getting id of the data from url

$productCode = $_GET['productCode'];

//deleting the row from table

$result = mysqli_query($mysqli, "DELETE FROM products WHERE productCode='".$productCode."'");

//redirecting to the display page (index.php in our case)

header("Location:index.php");

?>
/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */

