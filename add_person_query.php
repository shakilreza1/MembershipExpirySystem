<?php
include ('db.php');

if (isset($_POST['update'])) 
{
$email=$_POST['email'];
$active = $_POST['active']; //receive value "Y" from add_person.php page
$number_of_days = $_POST['number_of_days']; //receive value "5" from add_person.php page

$dates = mktime(0,0,0,date("m"),date("d")+$number_of_days,date("Y")); //Return the Unix timestamp for a date. Then use it to find the day of that date
$expiration_date = date("Y/m/d", $dates); //format and timestamp

#echo $expiration_date;
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$sql = "UPDATE tbl_member SET expiration_date=:expiration_date, active= :active  WHERE email=:email ";

$query = $conn->prepare($sql);
$result = $query->execute(array(':expiration_date' => $expiration_date, ':active' => $active, ':email' => $email));

#$conn->exec($sql); //exec() executes the given command.

echo "<script>alert('Successfully Updated!'); window.location='index.php'</script>";

}

if (isset($_POST['Save'])) 
{
	
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$contact_number = $_POST['contact_number'];
$email = $_POST['email'];
$address = $_POST['address'];
$active = $_POST['active'];
$number_of_days = $_POST['number_of_days'];
$dates = mktime(0,0,0,date("m"),date("d")+$number_of_days,date("Y")); //Return the Unix timestamp for a date. Then use it to find the day of that date
$expiration_date = date("Y/m/d", $dates); //format and timestamp

$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$sql = "INSERT INTO tbl_member (first_name, last_name, contact_number, email, address, expiration_date,active)
VALUES ('$first_name', '$last_name', '$contact_number', '$email', '$address', '$expiration_date', '$active')";

$conn->exec($sql); //exec() executes the given command.

echo "<script>alert('Successfully Added!'); window.location='index.php'</script>";
}

?>