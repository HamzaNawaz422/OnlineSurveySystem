<?php

if(isset($_POST['password'])){
$pass = $_POST['password'];
$acode=$_POST['code'];
 $email=$_POST['email'];

	$location = "localhost";
$user = "root";
$pass = "";
$tabname="dbconnection";
$con=mysqli_connect($location, $user, $pass,$tabname);
// Check connection
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
$query = mysqli_query($con,"select * from signup where email='$email'")
or die(mysqli_error($con)); 

if (mysqli_num_rows ($query)==1) 
{
$query3 = mysqli_query($con,"update signup set password='$pass' where email='$email'")
or die(mysqli_error($con)); 

echo 'Password Changed';
}
else
{
echo 'Wrong CODE';
}
}
?>

<form action="resetpass.php" method="POST">
<p>New Password:</p><input type="password" name="pass" />
<input type="submit"  name="submit" value="Signup!" />
<input type="hidden" name="code" value="<?php echo $_GET['email'];?>" />
</form>