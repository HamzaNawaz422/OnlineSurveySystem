<!DOCTYPE html>
<html lang="en">
<head>
	<title>Table V03</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor01/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor01/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor01/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor01/perfect-scrollbar/perfect-scrollbar.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css01/util.css">
	<link rel="stylesheet" type="text/css" href="css01/main.css">
<!--===============================================================================================-->
</head>
<body>
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
	<div class="limiter">
		<div class="container-table100">
			<div class="wrap-table100">
				<div class="table100 ver1 m-b-110">
					<table data-vertable="ver1">
						
			<?php
			$row=$result->fetch_assoc();
			?>
						<tbody>
							<tr class="row100">
								<td class="column100 column1" data-column="column1">First Name</td>
								<td class="column100 column2" data-column="column2"> <?php echo $row['firstname'];?></td>
								
							</tr>

							<tr class="row100">
								<td class="column100 column1" data-column="column1">Last Name</td>
								<td class="column100 column2" data-column="column2">  <?php echo $row['lastname'];?></td>
								
							</tr>

							<tr class="row100">
								<td class="column100 column1" data-column="column1">Country</td>
								<td class="column100 column2" data-column="column2"><?php echo $row['country'];?></td>
								
							</tr>

							<tr class="row100">
								<td class="column100 column1" data-column="column1">Phone</td>
								<td class="column100 column2" data-column="column2"><?php echo $row['phone'];?></td>
								
							</tr>

							<tr class="row100">
								<td class="column100 column1" data-column="column1">Education</td>
								<td class="column100 column2" data-column="column2"><?php echo $row['education']; ?></td>
								
							</tr>

							<tr class="row100">
								<td class="column100 column1" data-column="column1">Gender</td>
								<td class="column100 column2" data-column="column2"><?php echo $row['gender']; ?></td>
								
							</tr>
							<tr>
							<td> <a href="Editform.php" class="btn btn-info">Edit My Profile

						</a>
					</td>
				</tr><br>
				<tr>
							<td> <a href="fillprofile.php" class="btn btn-info">Create New Profile

						</a>
					</td>
				</tr>

							
						</tbody>
					</table>
				</div>

				

				
				

				

			
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>


	

<!--===============================================================================================-->	
	<script src="vendor01/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor01/bootstrap/js/popper.js"></script>
	<script src="vendor01/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor01/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="js01/main.js"></script>
	
	
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

</body>
</html>