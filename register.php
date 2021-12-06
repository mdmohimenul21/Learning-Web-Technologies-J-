<?php

if (isset($_POST['submit'])) {
    $type = $_POST['type'];
    if ($type == "producer") {
        $name = $_POST['name'];
        $username = $_POST['username'];
        $pass = $_POST['password'];
        $cpass = $_POST['confirmPassword'];
        $email = $_POST['email'];
        if ($pass != $cpass) {
            die("Wrong password");
        } else {
            $myfile = fopen('user.txt', 'a');
            $user = $_POST['username'] . "|" . $_POST['password'] . "|" . $_POST['email'] . "|" . $_POST['name'] . "\r\n";

            fwrite($myfile, $user);
            fclose($myfile);

            header('location: login.html');
        }
    } else {
        die("Invalid Type! No user found");
    }
}
