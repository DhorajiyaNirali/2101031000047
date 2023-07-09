<?php
    $username = "root";
    $servername = "localhost";
    $password = "";
    $dbname = "database1";

    $conn = mysqli_connect($servername,$username,$password,$dbname);

    if(!$conn){
        die("Connection Failed".mysqli_connect_error());
    }
    // else{
    //     echo "Connection Successfull";
    // }

    $sql = "select * from table1";
    $result = mysqli_query($conn,$sql);
    print_r($result);

    if(mysqli_num_rows($result)>0){
        while($row = mysqli_fetch_assoc($result))
        {
        echo "First Name:".$row["First_Name"]."<br>"."Last Name:".$row["Last_Name"]."<br>"."Contact:".$row["Contact"]."<br>"."Email:".$row["Email"]."<br>"."<br>";
        }
    }
    else{
        echo "No records";
    }
?>