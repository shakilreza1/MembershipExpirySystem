<?php
require_once('db.php');
session_start();  
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

 if(isset($_POST["login"]))  
      {  
             
                $query = "SELECT * FROM tbl_member WHERE email = :email";  
                $statement = $conn->prepare($query); 
				
				
                $statement->execute(array(  'email' => $_POST["email"]));  
				
                $count = $statement->rowCount();  
                if($count > 0)  
                {  
					$result = $statement->fetch();
					$activ_db=$result['active'];

					if($activ_db=="Y")
					{
						// execute the query
						$stmt->execute();		
						$_SESSION["email"] = $_POST["email"];
						header("location:info.php");  
					}
					else
					{
    					$_SESSION["email"] = $_POST["email"];
						 header("location:upgrade.php");
					}
                
                }  
                else  
                {  
                     $message = '<label>Wrong Data</label>';  
                }  
            
      } else
      {
      	 session_destroy();  
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
<a href="add_person.php">
	<button type="submit" class="btn_confirm">
		Register
	</button>
</a>
<a href="main.php">
	<button type="submit" class="btn_confirm">
		all members
	</button>
</a>
<br />
<br />
<form method="post" >
<table border="1" cellspacing="5" cellpadding="5" width="100%">
	<thead>
		<tr>
			<th>Email </th>
			
		</tr>
	</thead>
	<tbody>
		<tr>
			<td><label>Email </label><input type="email" name="email">
            <label><input type="submit" name="login" value="Login"></label>
			</td>
			
		</tr>
	</tbody>
</table>
</form>
</body>

</html>