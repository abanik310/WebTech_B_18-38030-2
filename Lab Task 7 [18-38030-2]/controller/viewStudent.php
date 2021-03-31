<?php
require_once '../model/model.php';
function viewAllStudent()
{
    return fetchAllStudent();
}

function viewStudent($oid)
{
    $flag = false;
    $students = fetchAllStudent();
    foreach ($students as $key => $data) {
        if ($data["o-id"] == $oid) {
            $student = array(
                "name" => $data["name"],
                "email" => $data["email"],
                "o-id" => $data["o-id"],
                "password" => $data["password"],
                "gender" => $data["gender"],
                "dob" => $data["dob"]
            );
            $flag = true;
        }
    }
    if ($flag == true) {
        return $student;
    } else
        return false;
}
