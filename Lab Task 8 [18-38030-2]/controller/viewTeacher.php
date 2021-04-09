<?php
require_once '../model/model.php';
function viewAllTeacher()
{
    return fetchAllTeacher();
}

function viewTeacher($oid)
{
    $flag = false;
    $teachers = fetchAllTeacher();
    foreach ($teachers as $key => $data) {
        if ($data["o-id"] == $oid) {
            $teacher = array(
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
        return $teacher;
    } else
        return false;
}
