<?php 
$link = mysql_connect('localhost', 'admin', 'admin');
if (!$link) {
    die('Not connected : ' . mysql_error());
}

// make foo the current db
$db_selected = mysql_select_db('php_test', $link);
if (!$db_selected) {
    die ('Can\'t use foo : ' . mysql_error());
}

function getUrl($page){
	$url = 'http://' . $_SERVER['HTTP_HOST'];            // Get the server
	$url .= rtrim(dirname($_SERVER['PHP_SELF']), '/\\'); // Get the current directory
	$url .='/'.$page;            							// <-- Your relative path
	return $url;
}
?>