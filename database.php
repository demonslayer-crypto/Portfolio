<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "Portfolio";

    //creating connection
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    else {
        echo "Connected successfully";
    }

    echo '</br>';

    //creating database
    // $db = "CREATE DATABASE Portfolio";
    // if (mysqli_query($conn, $db)) {
    //     echo "Database created successfully";
    // }
    // else {
    //     echo "Error creating database: " . mysqli_error($conn);
    // }

    //creating table
    // $table = "CREATE TABLE `portfolio` (`S.No` INT(5) NOT NULL AUTO_INCREMENT , `Full_Name` VARCHAR(30) NOT NULL , `E_Mail` VARCHAR(50) NOT NULL , `Mob_No` INT(10) NOT NULL , `Email_Sub` VARCHAR(50) NOT NULL , `Text` VARCHAR(150) NOT NULL , PRIMARY KEY (`S.No`)) ENGINE = InnoDB";
    // if($conn->query($table)===true) {
    //     echo "Table Created Successfully";
    // }
    // else {
    //     echo "Error creating table: " . $conn->error;
    // }

    //retrieve form data
    if(isset($_POST['submit']))
    {
        $name = $_POST['Full_Name'];
        $email = $_POST['E_Mail'];
        $mob = $_POST['Mob_No'];
        $sub = $_POST['Email_Sub'];
        $text = $_POST['Text'];
    
    //inserting into table
    $sql = "INSERT INTO `contact`(`S.No`, `Full_Name`, `E_Mail`, `Mob_No`, `Email_Sub`, `Text`) VALUES ('null','$name','$email','$mob','$sub','$text')";
    if (mysqli_query($conn, $sql)) {
        echo "New record created successfully";
    }
    else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}
    mysqli_close($conn);
