<?php
include 'koneksi.php';
$queryResult=$koneksi->query("SELECT*FROM tb_item");
$result=array();
while($fetchData=$queryResult ->fetch_assoc()){
    $result[]=$fetchData;
}
echo json_encode($result);
?>