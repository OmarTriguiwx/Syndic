<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
 	<table>

	<tr>
	<th>Content</th>
    </tr>
	<?php 
	foreach($result  as $r): ?>
	<tr>
	<?php 
	echo $r->id_user;
	echo "<br/>";
	?>
    </tr>
	<?php endforeach; ?>

</table>

</body>
</html>