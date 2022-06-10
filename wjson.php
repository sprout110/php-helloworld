<?php
$nane = $_POST['name'];
$surname =$_POST['surname'];
$mobile = $_POST['mobile'];
$email =$_POST['email'];
$str_datos = file_get_contents("people.json")
//add new data to people.json
  
// Loading existing data:
$json = file_get_contents("people.json");
$data = json_decode($json, true);

// Adding new data:
$data[3] = array('Name' => 'Foo', 'Surname' => 'Bar');

// Writing modified data:
file_put_contents('people.json', json_encode($data, JSON_FORCE_OBJECT));
?>
