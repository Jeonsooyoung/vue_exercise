<?php 

// $requestPayload = file_get_contents("php://input");
// $object = json_decode($requestPayload);

// var_dump($$object)
$url ='data.json';
if(!file_exists($url)) {
  echo '파일이 없습니다.';
  exit;
}
$json_string = file_get_contents($url);
$R = json_decode($json_string, true);
echo '<pre>';
print_r($R);
echo '</pre>';


if(isset($_POST['id'])) {

  echo 'GET : Your id is'. $_POST['id'];
}