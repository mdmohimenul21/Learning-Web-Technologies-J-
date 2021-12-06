<?php
session_start();
if (isset($_POST['submit'])) {
    $type = $_POST['type'];
    if ($type == "producer") {
        $username = $_POST['username'];
        $password = $_POST['password'];
        $myfile = fopen('user.txt', 'r');
        while (!feof($myfile)) {
            $data = fgets($myfile);
            $user = explode('|', $data);
            if (trim($user[0]) == $username && trim($user[1]) == $password) {
                $_SESSION["user"] = $username;
                $_SESSION["type"] = $type;
                header('location: producer.php');
            }
        }
        die("invalid username/password");
    } else {
        die("Invalid Type! No user found");
    }
}
