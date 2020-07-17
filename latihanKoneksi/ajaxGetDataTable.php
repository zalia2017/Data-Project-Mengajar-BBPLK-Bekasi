<?php
require_once "koneksi.php";

$sql = "SELECT*FROM tb_users";
$result = $conn->query($sql);
$rows = array();

while($row=$result->fetch_assoc()){
    $rows[] = $row;
}
echo json_encode($rows);
?>