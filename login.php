<?php
session_start();
$server = "localhost";
$user = "root";
$password = "";
$db = "sugnup";

$con = mysqli_connect($server,$user,$password,$db);
if($con)
{
    ?>
    <script>
    alert("Connection Successful");
</script>
    <?php
}
else{
    ?>
    <script>
    alert("No Connection");
    </script>
    <?php

}

if(isset($_POST['submit']))
{
    $email = $_POST['email'];
    $password = $_POST['password'];

    $email_search = "select * from signup where email = '$email'";
    $query = mysqli_query($con,$email_search);

    $email_count = mysqli_num_rows($query);

    if($email_count){
        $email_pass = mysqli_fetch_assoc($query);
        $db_pass = $email_pass['password'];

        $pass_decode = password_verify($password, $db_pass);

        if($pass_decode){
            echo"Login Successful";
            // header('location:music.html');

            ?>
            <script>
                location.replace("music.php");
            </script>
            <?php
        }
        else{
            echo "Password Incorrect";
        }


    }
    else{
        echo "Invalid Email";
    }
}

?>