<?php 
include('connection.php');
$sql = "select * from employee";
$res = mysql_query($sql); 
print_r($_POST);
if(isset($_POST['e_delete']))
{
	print_r($_POST);
	$query = 'delete employee where id ='.$_POST['e_id'];
	$insert = mysql_query($query);
	$url = getUrl('index.php');
	header('Location: '.$url);
	die;  
}
?>

<a href="create.php">Create</a>

<table>
	<th>id</th>
	<th>name</th>
	<th>designation</th>
	<th>gender</th>
	<th></th>
	<th></th>
	<th></th>

	<?php
	while($r = mysql_fetch_assoc($res))
	{ ?>
		<tr>
			<td><?php echo $r['id'];?></td>
			<td><?php echo $r['name'];?></td>
			<td><?php echo $r['designation'];?></td>
			<td><?php echo $r['gender'];?></td>
			<td><a href="<?php echo 'view.php?id='.$r["id"];?>">view</a></td>
			<td><a href="<?php echo 'edit.php?id='.$r["id"];?>">edit</a></td>
			<td>
				<form method="POST" action="index.php" name="deleteForm_<?php echo $r["id"];?>">
				<input name="e_id" type="hidden" value="<?php echo $r["id"];?>">
				<input type="submit" name="e_delete" value="Delete">
				</form>
			</td>
			
		</tr>
	<?php }
	?>
</table>
