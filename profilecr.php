<hmtl>
	<head><link rel="stylesheet" href="build/css/intlTelInput.css">
  <link rel="stylesheet" href="build/css/demo.css">
<link rel="stylesheet" href="build/css/intlTelInput.css">
</head>
</hmtl>

<?php

session_start();

$em= $_SESSION['email'];



?>




<?php include("dbconnection.php"); ?>


     	
  <?php
$location = "localhost";
$user = "root";
$pass = "";
$tabname="dbconnection"; 
 $conn=mysqli_connect($location, $user, $pass,$tabname);  
 if($conn)
 {
  

 }
 else
 {
  die(mysql_error());
 }
 $result=$conn->query("select * from profilee where email='$em'") or die ($conn->error());
// pre_r($result);
if(isset($_POST['edit']))
{
  $id=$_POST['edit'];
 // $result=$mysqli->query("Select * from profilee") or die($mysqli->error());
  if(count($result)==1)
  {
    $row=$result->fetch_array();
    $fname=$row['firstname'];
    $lname=$row['lastname'];
    $cunt=$row['country'];
    $ph=$row['phone'];
    $edu=$row['education'];
    $gen=$row['gender'];
  }
}

?>
<div class="main-content">
	 <div class="section__content section__content--p30">
	<table class="table">
		
			
			<?php
			$row=$result->fetch_assoc();
			?>
		
		<tr>
			
			<td class="form-control">First Name : <?php echo $row['firstname'];?>     
			

		</td></tr><tr>
			<td class="form-control">Last Name : <?php echo $row['lastname'];?></td></tr><tr>
			<td class="form-control">Country : <?php echo $row['country'];?></td></tr><tr>
			<td class="form-control">Phone : <?php echo $row['phone'];?></td></tr><tr>
			<td class="form-control">Education : <?php echo $row['education']; ?></td></tr><tr>
			<td class="form-control">Gender : <?php echo $row['gender']; ?></td></tr>
			<td> <a href="Editform.php" class="btn btn-info">Edit
				  <a href="firsrprofile.php" class="btn btn-info">Fill Profile
				  
				
				
			</td>
			<td> 
			</td>

			
	
		</tr>
		
	</table>

</div>
</div>
<?php
 function pre_r($array)
 {

 	echo '<pre>';
 	print_r($array);
 	echo '</pre>';
 }

?>


  <script src="countries/jquery-2.2.4.min.js"></script>
<script src="countries/custom.js"></script>
 <script src="build/js/intlTelInput.js"></script>