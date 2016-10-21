<?php
include('connection.php');
if(isset($_REQUEST['id']))
{
	 $query = 'delete from employee where id ='.$_REQUEST['id'];
	$insert = mysql_query($query);
	$url = getUrl('index.php');
	header('Location: '.$url);
	die;  
}
?>