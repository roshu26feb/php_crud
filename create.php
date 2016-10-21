<?php 
include('connection.php');

if(isset($_POST['e_submit']))
{
	echo $query = 'insert into employee (name,designation,gender) values("'.$_POST['e_name'].'","'.$_POST['e_designation'].'","'.$_POST['e_gender'].'")';
	$insert = mysql_query($query);
	$url = getUrl('index.php');
	header('Location: '.$url);
	die;  
}
?>
<table>
<form method="POST">
	<tr><td><label>Name:</label></td>
		<td><input type="text" name="e_name" ></td>
	</tr>
	<tr><td><label>Designation:</label></td>
		<td>
			<select name="e_designation">
			<option value="develeoper">Develeoper</option>
			<option value="manager">Manager</option>
			</select>
		</td>
	</tr>
	<tr><td><label>Name:</label></td><td><input type="radio" name="e_gender" value="male">Male<input type="radio" name="e_gender" value="Female">FeMale</td></tr>
	<tr><td></td><td><input type="submit" name="e_submit" ></td></tr>
</form>
</table>
