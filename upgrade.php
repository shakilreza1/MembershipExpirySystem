<?php 
session_start(); 
?>
<!DOCTYPE html>
<html>
<head>
	<title>
		Membership Registration
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

<h2>Membership Registration</h2>

<br />
<a href="index.php">
	<button type="submit">
		Log Out
	</button>
</a>

<br />
<br />

<table border="1" cellspacing="5" cellpadding="5" width="100%">
	<thead>
		<tr>
			<th>Sorry Member ship has been expired. for Renew Please click the button below</th>
		</tr>
	</thead>
	<tbody>
	<?php
		require_once('db.php');

	 
	if(isset($_SESSION["email"]))  
 {  
      $email = $_SESSION["email"] ; 
		$result = $conn->prepare("SELECT * FROM tbl_member WHERE email = '$email' ");
		#$result->execute(array(':email'=>$email));
		$result->execute();
		for($i=0; $row = $result->fetch(); $i++)
		{
		$id=$row['tbl_member_id'];
	?>
		<tr>
			<td> <label>active for 5 days</label></td>
		</tr>
		<tr>
			<td>
				<form method="post" action="add_person_query.php">
					<input type="hidden" name="number_of_days" value="5">
					<input type="hidden" name="active" value="Y">
					<input type="hidden" name="email" value="<?php echo $row['email']?>">
					<input type="submit" name="update" value="Active" class="btn_confirm">
				</form>
			</td>
		</tr>
		<?php 
		
		} 
 }
		?>
	</tbody>
</table>
</body>

</html>