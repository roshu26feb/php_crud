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
?>