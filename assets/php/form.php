<?php 
$db = new mysqli("localhost","root","","aee");
if($db->connect_error){
    die("Connection failed: " . $db->connect_error);
}

$result = array();
$message = isset($_POST['message']) ? $_POST['message'] : null;
$from1 = isset($_POST['from1']) ? $_POST['from1'] : null;

if(!empty($message) && !empty($from1)){
    $sql = "INSERT INTO chat (message,from1) VALUES ('$message','$from1')";
    $result['send_status']= $db->query($sql);
}

 $start = isset($_GET['start']) ? intval($_GET['start']) : 0;
 $items = $db->query("SELECT * FROM chat WHERE id >" . $start);
 while($row = $items -> fetch_assoc()){
    $result['items'][] = $row;
 }

$db->close();

header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');


echo json_encode($result);
