<?php
require_once('db.php');

$curdate=date("Y/m/d");

$stmt = $conn->prepare('select * from tbl_member');
		$stmt->execute();
		while($row=$stmt->fetch(PDO::FETCH_ASSOC))
		{
			if ($row["expiration_date"] < $curdate) 
			{
			$sql = "UPDATE tbl_member SET active='N' WHERE tbl_member_id='$row[tbl_member_id]' ";
		    // Prepare statement
		    $stmt2 = $conn->prepare($sql);
		    // execute the query
		    $stmt2->execute();
			}
		}
// sql to delete a record
#$sql = "Delete from tbl_member where expiration_date > '$curdate'";

// use exec() because no results are returned
#$conn->exec($sql);
?>


<!DOCTYPE html>
<html>
<head>
	<title>
		Delete Member by Date
	</title>
	
<style type="text/css">
body {
	width:800px;
	margin:auto;
	padding:10px;
}
td {
	text-align:center;
	padding:10px;
}
table {
	margin:auto;
	border:1px solid;
}
label {
	font-size:18px;
	color:black;
    font-weight: bold;
    font-family: Arial;
}
h2 {
	color:black;
	text-align:center;
}
th {
	color:red;
	font-size:20px;
    font-family: Arial;
}
.btn_confirm {
	color: black;
    font-size: 18px;
    font-family: Arial;
    font-weight: bold;
    background: azure;
    border: black 1px solid;
    border-radius: 8px;
    width: 138px;
	cursor:pointer;
}
a {
	text-decoration:none;
}
</style>

</head>

<body>

<h2>Registered Members</h2>

<br />

<a href="add_person.php">
	<button type="submit" class="btn_confirm">
		Register
	</button>
</a>
<a href="index.php">
	<button type="submit" class="btn_confirm">
		back to login
	</button>
</a>

<br />
<br />

<table border="1" cellspacing="5" cellpadding="5" width="100%">
	<thead>
		<tr>
			<th>First Name</th>
			<th>Last Name</th>
			<th>Contact Number</th>
			<th>Address</th>
			</tr>
	</thead>
	<tbody>
	<?php
		require_once('db.php');
		$result = $conn->prepare("SELECT * FROM tbl_member ORDER BY tbl_member_id DESC");
		$result->execute();
		for($i=0; $row = $result->fetch(); $i++)
		{
		$id=$row['tbl_member_id'];
	?>
		<tr>
			<td><label><?php echo $row['first_name']; ?></label></td>
			<td><label><?php echo $row['last_name']; ?></label></td>
			<td><label><?php echo $row['contact_number']; ?></label></td>
			<td><label><?php echo $row['address']; ?></label></td>
			
		</tr>
		<?php 
		
		} 

		?>
	</tbody>
</table>

</body>

</html>