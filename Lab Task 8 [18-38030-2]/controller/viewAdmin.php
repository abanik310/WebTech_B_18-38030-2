<?php
require_once '../model/model.php';
function viewAllAdmin()
{
    return fetchAllAdmin();
}

function viewAdmin($oid)
{
    $flag = false;
    $admins = fetchAllAdmin();
    foreach ($admins as $key => $data) {
        if ($data["o-id"] == $oid) {
            $admin = array(
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
        return $admin;
    } else
        return false;
}
