<?php
require_once './repository/GuruRepository.php';

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$id = $_REQUEST['id'];
$repo = new GuruRepository();

try {
    $data = $repo->findById($id);
    echo json_encode(array(
        "success" => true,
        "guru" => $data,
    ));
} catch (PDOException $exc) {
    if ($exc->getCode() == 2002) {
        $error = "Couldn't connect to database";
    } else {
        $error = $exc->getMessage();
    }

    echo json_encode(array(
        "success" => false,
        "error" => $error,
    ));
}
