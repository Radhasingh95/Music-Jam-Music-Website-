<?php
session_start();
$server = "localhost";
$user = "root";
$password = "";
$db = "signup";

$conn = mysqli_connect($server,$user,$password,$db);
if($conn)
{
    
   echo " <script language='javascript'>";
   echo " alert('Connection Successful')";
    echo"</script>";
    
}
else{
    
    echo " <script language='javascript'>";
   echo " alert('No Connection ')";
    echo"</script>";
    

}

if(isset($_POST['submit']))
{
    
    $email = $_POST['email'];
    $password = $_POST['password'];

    $email_search = "select * from signup where email = '$email'";
    $query = mysqli_query($conn,$email_search);

    $email_count = mysqli_num_rows($query);

    if($email_count){
        

        
        $email_pass = mysqli_fetch_assoc($query);
        $db_pass = $email_pass['password'];

        
        echo "$db_pass";
        echo "$password";
        
        if($email == "admin@gmail.com"){
            header('location:http://localhost/Music-Jam-Music-Website-/audio.php');
            
        }
        else{
        if($db_pass == $password){
            echo"Login Successful";
            header('location:http://localhost/Music-Jam-Music-Website-/music.html');

            
            
            
        }
        else{
            echo "Password Incorrect";
        }}


    }
    else{
        echo "Invalid Email";
    }
}



?>