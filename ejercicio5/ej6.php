<?php
	$name=strip_tags(trim($_GET['name']));
	$gend=$_GET['gender'];
	$lang=$_GET['Languages'];
	$hoby=$_GET['hoby'];
	$pais=$_GET['pais'];
	$text=$_GET['text'];





	echo "The user`s name is $name, gender $gend and speaks $lang language. His hobby is $hoby";
	echo "<br> El texto es: ";
	echo "$text";


?>