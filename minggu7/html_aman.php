<?php
//Memeriksa apakah input adalah email yang valid
$input = $_POST['input'];
$email = $_POST['email'];
$input = htmlspecialchars($input, ENT_QUOTES, 'UTF-8');
?>