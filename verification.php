<?php


// si username ou password vide
if(empty($_POST['username']) || empty($_POST['password'])) {

}

$username = $_POST['username'];
$unEncryptedPassword = $_POST['password'];
$hashedPassword = md5($unEncryptedPassword);

