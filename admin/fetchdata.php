<?php
include "db_connection.php";

$sql = "SELECT * FROM tbl_student";
$result = $conn->query($sql);

$sql_messages = "SELECT * FROM messagetbl";
$result_messages = $conn->query($sql_messages);
?>