<?php
$nameErr = $tidErr = $cidErr = $sectionErr = "";
$name = $cid =  $tid = $section = "";
$flag = false;

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (empty($_POST["name"])) {
        $nameErr = "Name is required";
        $flag = false;
    } else {
        $name = test_input($_POST["name"]);
        $flag = true;
    }

    if (empty($_POST["t-id"])) {
        $tidErr = "Organization id required";
        $flag = false;
    } else {
        $tid = test_input($_POST["t-id"]);
        $flag = true;
    }

    if (empty($_POST["c-id"])) {
        $cidErr = "Organization id required";
        $flag = false;
    } else {
        $cid = test_input($_POST["c-id"]);
        $flag = true;
    }

    if (empty($_POST["section"])) {
        $sectionErr = "Organization id required";
        $flag = false;
    } else {
        $section = test_input($_POST["section"]);
        $flag = true;
    }

    if ($flag == true) {
        require_once '../model/model.php';
        $data['name'] = $_POST['name'];
        $data['c-id'] = $_POST["c-id"];
        $data['t-id'] = $_POST['t-id'];
        $data['section'] = $_POST['section'];

        if (checkSection($_POST["c-id"], $_POST["section"])) {
            echo "<br><br>Already Registered Section with this course";
        } else {
            if (editCourse($data)) {
                echo "<br><br>Course created successfully";
            } else {
                echo "<br><br>There was a problem creating Course";
            }
        }
    }
}

function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
