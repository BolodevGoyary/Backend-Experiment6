<?php
include "db_connect.php";
$result = $conn->query("SELECT * FROM posts");
?>
<!DOCTYPE html>
<html>
<body>
<h2>Posts List</h2>
<table border="1" cellpadding="10">
<tr>
<th>ID</th>
<th>Title</th>
<th>Action</th>
</tr>
<?php while($row=$result->fetch_assoc()): ?>
<tr>
<td><?php echo $row["id"]; ?></td>
<td><?php echo $row["title"]; ?></td>
<td>
<a href="delete.php?id=<?php echo $row['id']; ?>" onclick="return confirm('Delete this item?')">Delete</a>
</td>
</tr>
<?php endwhile; ?>
</table>
</body>
</html>