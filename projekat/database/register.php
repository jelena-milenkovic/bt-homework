<?php
session_start();

//uspostavljanje varijabli
$username = "";
$email = "";
$password= "";
$errors =[];

//povezivanje sa bazom
$db = mysqli_connect('localhost', 'root', '', 'project');

//register user
if(isset($_POST['reg_user'])) {
    $username = mysqli_real_escape_string($db, $_POST['username']);
    $email = mysqli_real_escape_string($db, $_POST['email']);
    $password = mysqli_real_escape_string($db, $_POST['password']);

}

//form validation
if(empty($username)) {
    array_push($errors, "Username is required!");
}
if(empty($email)) {
    array_push($errors, "Email is required!");
}
if(empty($password)) {
    array_push($errors, "Password is required!");
}

//prvo da se proveri baza da se vidi da li postoji korisnik sa istim emailom
$user_check_query = "SELECT * FROM users WHERE email = '$email' LIMIT 1";
$result = mysqli_query($db, $user_check_query);
$user = mysqli_fetch_assoc($result);

if($user) {
    if($user['username'] === $username) {
        array_push($errors, "Username already exists!");
    }
    if($user['email'] === $email) {
        array_push($errors, "Email already exists!");
    }
}
//ako ne postoje greske u formi registruj usera
if(count($errors) == 0) {
    $query = "INSERT INTO users (username, email, password) VALUES ('$username', $email', '$password')";
    $result = mysqli_query($db, $query);
    if($result) {
        echo "<script>alert('User registration completed!')</script>";
    } 
}




?>