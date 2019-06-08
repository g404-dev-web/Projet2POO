<?php
session_start();

$login = $pw = 'admin';

if ($_POST['login'] == $login && $_POST['password'] == $pw) {
    $_SESSION['user'] = $login;
    header('Location: ../admin/create.php');
} else {
    header('Location: ../admin/index.php?err=1');
}
