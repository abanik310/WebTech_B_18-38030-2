<?php
include_once "../controller/signin.php";
if (isset($_SESSION["name"])) {
    header('Location: adminDash.php');
} else {
    header('Location: login.php');
}
