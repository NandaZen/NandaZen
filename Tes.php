<!DOCTYPE html>
<?php
    $nisn = $_POST['nisn'];
    $nama = $_POST['nama'];
    $tempat = $_POST['tempat'];
    $tanggal = $_POST['tanggal'];
    $kelamin = $_POST['kelamin'];
    $agama = $_POST['agama'];
    $anak = $_POST['anak'];
    $saudara = $_POST['saudara'];

    $conn = new mysqli('localhost','root','','exampale');
    if ($conn->connect_error) {
        die('Connection Failed: '. $conn->connect_error);
    }else{
        $stmt = $conn->prepare("Insert into coba (nisn, nama, tempat, tanggal, kelamin, agama, anak, saudara) values(?,?,?,?,?,?,?,?)");
        $stmt->bind_param("ssssssii", $nisn, $nama, $tempat, $tanggal, $kelamin, $agama, $anak, $saudara);
        $stmt->execute();
        echo "Selamat ya!";
        $stmt->close();
        $conn->close();
    }
    if ($nisn && $nama && $tempat && $tanggal && $kelamin && $agama && $anak && $saudara) {
        echo "Data sudah diterima dan akan disimpan";
    }else {
        echo "Data tidak lengkap";
    }

?>