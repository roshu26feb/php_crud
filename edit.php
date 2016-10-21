<?php 
include('connection.php');
$sql = "select * from employee";
$res = mysql_query($sql);
?>
<table>
	<th>id</th>
	<th>name</th>
	<th>designation</th>
	<th>gender</th>
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
		</tr>
	<?php }
	?>
</table>
