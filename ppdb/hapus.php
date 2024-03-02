<?php
require_once("config.php");

if(isset($_GET['id'])) {
    $id = $_GET['id'];

    $sql = "DELETE FROM calon_siswa WHERE id = $id";
    if($query) {
        header('Location: list-siswa.php');
    } else {
        header('Location: index.php?status=gagal');
    }
} else { 
    die("Lu siapa dah...   <a href='index.php'>Balik Sono</a>");
}