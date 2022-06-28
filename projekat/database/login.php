<?php
session_start();

//uspostavljanje varijabli
$username = "";
$password= "";

//povezivanje sa bazom
$db = mysqli_connect('localhost', 'root', '', 'project');

if(isset($_POST['log-user'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $sql="SELECT FROM users WHERE  username='$username' AND password='$password' ";
    $result=mysqli_query($db, $sql);
    if($result->num_rows > 0) {
        $row=mysqli_fetch_assoc($result);
        $_SESSION['username']= $username;
        header('Location:./success-page.php');
    } else {
        echo"<script>alert ('Username or password are incorect!')</script>";
    }
}



