<?php

function redirect($message, $page=null)
{
    $url = "index.php";
    if($page)
    {
        $url = "articles.php";
    }
    header("Location: $url?message=$message");
    exit;
}

$users = [
    "luc"=> "53f8a9f698d7d2ea9c8a3a6c8d5ab698",
    "michel"=> "945e9f0b4e381b13aa70b94b89a28709",
    "eglantine"=> "4fa9239cbfe7d76a31bb46471ce6a976",
    "patricia"=> "353c8773694fbf1251dec54d98b614a1"
];
// si username ou password vide
if(empty($_POST['username']) || empty($_POST['password'])) {
    redirect("empty username or password");

}
$username = $_POST['username'];
$unEncryptedPassword = $_POST['password'];


//si utilisateur existe déjà
if(isset($users[$username])) {
    redirect("username already exists");
}
$hashedPassword = md5($unEncryptedPassword);
$users[$username] = $hashedPassword;

redirect("Articles", "articles.php");

