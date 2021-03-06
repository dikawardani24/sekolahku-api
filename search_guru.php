<?php

require_once './repository/GuruRepository.php';
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$nama = $_REQUEST['nama'];
$repo = new GuruRepository();

try {
    $datas = $repo->findByName($nama);
    echo json_encode(array(
        "success" => true,
        "guru_list" => $datas,
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
