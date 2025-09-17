<?php
$host = "my-mariadb.cdyykgyowiim.ap-northeast-2.rds.amazonaws.com";
$user = "admin";
$pass = "1q2w3e4r!";
$db   = "mydb";

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("DB 연결 실패: " . $conn->connect_error);
}
# test_for_action #테스트입니다.slack_test.감태윤이 test!!!
$conn->set_charset("utf8mb4");
?>
