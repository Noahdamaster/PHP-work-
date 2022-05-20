<html>

<head>

    <title>Add Data</title>

</head>

<body>

<?php

//including the database connection file

include_once("config.php");

if(isset($_POST['Submit'])) {   

    $Code = $_POST['Code'];

    $Name = $_POST['Name'];

    $Version = $_POST['Version'];

    $releaseDate = $_POST['releaseDate'];

       

    // checking empty fields

    if(empty($Code) || empty($Name) || empty($Version) || empty($releaseDate)) {               

        if(empty($Code)) {

            echo "<font color='red'>Code field is empty.</font><br/>";

        }

       

        if(empty($Name)) {

            echo "<font color='red'>Name field is empty.</font><br/>";

        }

       

        if(empty($Version)) {

            echo "<font color='red'>Version field is empty.</font><br/>";

        }

        if(empty($releaseDate)) {

            echo "<font color='red'>Release Date field is empty.</font><br/>";

        }

        //link to the previous page

        echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";

    } else {

        // if all the fields are filled (not empty)            

        //insert data to database

        $result = mysqli_query($mysqli, "INSERT INTO products(productCode ,name , version , releaseDate ) VALUES('$Code','$Name','$Version','$releaseDate')");

        

        //display success message

        echo "<font color='green'>Data added successfully.";

        echo "<br/><a href='index.php'>View Result</a>";

    }

}

?>

</body>

</html>

/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */

