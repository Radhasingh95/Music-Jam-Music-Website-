<?php


$name = filter_input(INPUT_POST,'name');
$email = filter_input(INPUT_POST,'email');
$phone = filter_input(INPUT_POST,'phone');
$msg = filter_input(INPUT_POST,'msg');

if(!empty($email))
{
    if(!empty($msg))
    {
    $host = "localhost";
    $dbusername = "root";
    $dbpassword = "";
    $dbname = "signup";

    // Create connection
    $conn = new mysqli($host,$dbusername,$dbpassword,$dbname);
    if(mysqli_connect_error()){
        die('Connection Error( '.mysqli_connect_errno().')'
        .mysqli_connect_error());
     }
     else{
         $sql = "INSERT INTO contact (name,email, phone,msg)
         values('$name', '$email','$phone', '$msg')";
         if($conn->query($sql)){
             echo "New record is inserted successfully";
         }
         else{
             echo "Error : ".$sql."<br>".$conn->error;
         }
         $conn->close();
     }

    }
    else{
        echo"Message should not be empty";
        die();
    }
}
else{
    echo"Email should not be empty";
    die();
}

?>