<?php
$data = json_decode(file_get_contents('php://input'), true);
$id = $data['idImg'];
$db = @mysqli_connect('localhost','root', '', test);
$sql = "SELECT * FROM catalog WHERE id = {$id}";
$result = @mysqli_query($db, $sql);
$array_result = [];
while ($row = mysqli_fetch_assoc($result))
$array_result[] = $row;

$response['desc'] = $array_result[0]['description'];
$response['imgAddr'] = $array_result[0]['image'];
$response['price'] = $array_result[0]['price'];
echo json_encode($response, JSON_UNESCAPED_UNICODE);
