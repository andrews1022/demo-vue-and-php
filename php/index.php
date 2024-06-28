<?php
  header('Content-Type: application/json');
  header('Access-Control-Allow-Origin: http://localhost:5173'); // Allow requests from your front-end origin
  
  $message = array('message' => 'Hello from PHP!');
  
  echo json_encode($message);

  // short version
  // echo json_encode(array('message' => 'hello!'));
?>
