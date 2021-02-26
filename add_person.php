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
    font-family: cursive;
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
    font-family: Arial;;
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

<h2>Add Your Information</h2>

			<a href="index.php">
				<button type="submit" class="btn_cancel">
					login
				</button>
			</a>
<br />
<br />
<form method="post" action="add_person_query.php">
<table border="1" cellspacing="5" cellpadding="5" width="100%">
	<tr>
		<td>
			<label>First Name</label>
		</td>
		<td width="395px">
			<input type="text" class="text_Box" name="first_name" autofocus="autofocus" placeholder="First Name ....." required />
		</td>
	</tr>
	<tr>
		<td>
			<label>Last Name</label>
		</td>
		<td width="395px">
			<input type="text" class="text_Box" name="last_name" placeholder="Last Name ....." required />
		</td>
	</tr>
	<tr>
		<td>
			<label>Contact Number</label>
		</td>
		<td width="395px">
			<input type="text" class="text_Box" name="contact_number" placeholder="Contact Number ....." required />
		</td>
	</tr>
	<tr>
		<td>
			<label>Email</label>
		</td>
		<td width="395px">
			<input type="email" class="text_Box" name="email" placeholder="Email .....">
		</td>
	</tr>
	<tr>
		<td>
			<label>Address</label>
		</td>
		<td width="395px">
			<input type="text" class="text_Box" name="address" placeholder="Address ....." required />
			<input type="hidden" name="active" value="Y">
			<input type="hidden" name="number_of_days" value="5">
		</td>
	</tr>
	<tr>
		<td colspan="2">
			<a>
				<button type="submit" class="btn_confirm" name="Save">
					Save Data
				</button>
			</a>
		</td>
	</tr>
</table>
</form>

</body>

</html>