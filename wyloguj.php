<?php
require_once("baza.php") ;
$q=mysqli_query($link,
"delete from sesje where id='{$_COOKIE['id']}';");
		setcookie('id',0-1);
		unset($_COOKIE['id']);
echo '<meta http-equiv="refresh" content="1;url=index.php">';
?>
