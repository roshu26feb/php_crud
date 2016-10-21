<?php include('connection.php');
$query = 'select * from employee where id='.$_GET['id'];
$row = mysql_query($query);
while($record = mysql_fetch_array($row))
{
	$id = $record['id'];
	$name = $record['name'];
	$designation = $record['designation'];
	$gender = $record['gender'];
}

if(isset($_POST['e_submit']))
{
	echo $query = 'update employee set name="'.$_POST['e_name'].'", designation="'.$_POST['e_designation'].'",gender="'.$_POST['e_gender'].'" where id ="'.$_POST['e_id'].'"';
	$insert = mysql_query($query);
	$url = getUrl('index.php');
	header('Location: '.$url);
	die;  
}
?>
<table>
<form method="POST">
	<tr><td><label>Name:</label></td>
		<td><input type="hidden" name="e_id" value="<?php echo $id;?>" ></td>
		<td><input type="text" name="e_name" value="<?php echo $name;?>" ></td>
	</tr>
	<tr><td><label>Designation:</label></td>
		<td>
			<select name="e_designation" >
			<option value="develeoper" <?php if($designation == 'develeoper'){echo 'selected';}?>>Develeoper</option>
			<option value="manager" <?php if($designation == 'manager'){echo 'selected';}?>>Manager</option>
			</select>
		</td>
	</tr>
	<tr><td><label>Name:</label></td><td><input type="radio" name="e_gender" value="male">Male<input type="radio" name="e_gender" value="Female">FeMale</td></tr>
	<tr><td></td><td><input type="submit" name="e_submit" ></td></tr>
</form>
</table>
