<?php
$host = "my-mariadb.cdyykgyowiim.ap-northeast-2.rds.amazonaws.com";
$user = "admin";
$pass = "1q2w3e4r!";
$db   = "mydb";
#테스트입니다.
$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("DB 연결 실패: " . $conn->connect_error);
}

$conn->set_charset("utf8mb4");
?>
