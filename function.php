<?php

// connection 
$connection = mysqli_connect('localhost', 'root', '','ujicoba');

// if($connetion) {
//     echo 'berhasil';
// } 
// Check for the connections

// Register Functions
if(isset($_POST['register'])){
    //if Register button pressed

    $username = $_POST['username'];
    $password = $_POST['password']; // <-- User's Raw Input Data

    //Encrypting Function [!] Important Part [!] Wajib Di isi [!] 

    $epassword = password_hash($password, PASSWORD_DEFAULT);
    // $eusername = password_hash($username, PASSWORD_DEFAULT);

    //insert to data base
    $insert = mysqli_query($connection, "INSERT INTO member (username, password) values ('$username','$epassword')");

    if ($insert) {
        //if success
        header('location:login.php'); // redirect to Login page
    } else {
        //if fail 
        echo '
        <script>
            alert("Something wrong in register section, please try again"); window.location.href="register.php";
        </script>
        ';
    }

}
//----------------------------------------------------------------------//
// Login Functions
 if(isset($_POST['login'])){
    //if Login button pressed

    $username = $_POST['username'];
    $password = $_POST['password']; // <-- User's Raw Input Data

    //Dencrypting Function [!] Important Part [!] Wajib Di isi [!] 


    //insert to data base
    $checkdb = mysqli_query($connection, "SELECT * FROM member where 
    username='$username'");
    $calculate = mysqli_num_rows($checkdb);
    $pw = mysqli_fetch_array($checkdb);
    $updatedpass = $pw['password'];
                
    if ($calculate > 0) {
        //if exist
        //password verification
    if (password_verify($password,$updatedpass)) {
            //if password correct
            header('location:home.php'); // redirect to Login page
    } else {

            //if fail 
            echo '
            <script>
                alert("Something wrong, maybe in your username or password input, please try again"); window.location.href="login.php";
            </script>
            ';

        }

    } else {
        //if fail 
        echo '
        <script>
            alert("Login Fail, please try again"); window.location.href="login.php";
        </script>
        ';
    }

}


?>
