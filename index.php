<html>
<head>
<title>Hi~我愛你！</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>
<body>

<?php 
$data1 = $_GET["Name"];
$data2 = $_GET["Love"];
?>

Hi~<?php echo $data1; ?>，我愛你！<br /><br />

<?php 
echo "歡迎你，喜歡的學科是 ";
echo $data2;
?>。


<?php

phpinfo(INFO_MODULES);

?>
  
</body>
</html>

