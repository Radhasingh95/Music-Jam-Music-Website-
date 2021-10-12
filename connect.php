<?php



$email = filter_input(INPUT_POST,'email');
$password = filter_input(INPUT_POST,'password');


if(!empty($email))
{
    if(!empty($password))
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
         $sql = "INSERT INTO signup (email, password)
         values('$email','$password')";
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
        echo"Password should not be empty";
        die();
    }
}
else{
    echo"Email should not be empty";
    die();
}

?>