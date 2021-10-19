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

// if(isset($_POST['submit']))
// {
//     $email = $_POST['email'];
//     $password = $_POST['password'];

//     $email_search = "select * from signup where email = '$email'";
//     $query = mysqli_query($con,$email_search);

//     $email_count = mysqli_num_rows($query);

//     if($email_count){

        
//         $email_pass = mysqli_fetch_assoc($query);
//         $db_pass = $email_pass['password'];

//         $pass_decode = password_verify($password, $db_pass);

//         if($pass_decode){
//             echo"Login Successful";
//             // header('location:music.html');

            
//             <script>
//                 location.replace("music.html");
//             </script>
//             
//         }
//         else{
//             echo "Password Incorrect";
//         }


//     }
//     else{
//         echo "Invalid Email";
//     }
// }

function test_input($data)
{
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   return $data;
}

if ($_SERVER["REQUEST_METHOD"]== "POST") {
      
    $email = test_input($_POST["email"]);
    $password = test_input($_POST["password"]);
    $stmt = $conn->prepare("SELECT * FROM signup");
    $stmt->execute();
    $users = $stmt->fetchAll();
      
    foreach($users as $user) {
          
        if(($user['email'] == $email) && 
            ($user['password'] == $password)) {
                header("Location: http://localhost/Music-Jam-Music-Website-/music.html");
                exit;
                
        }
        else {
            echo "<script language='javascript'>";
            echo "alert('WRONG INFORMATION')";
            echo "</script>";
            die();
        }
    }
}

?>