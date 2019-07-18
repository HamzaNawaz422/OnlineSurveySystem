<hmtl>
  <head><link rel="stylesheet" href="build/css/intlTelInput.css">
  <link rel="stylesheet" href="build/css/demo.css">
<link rel="stylesheet" href="build/css/intlTelInput.css">

<head><link rel="stylesheet" href="build/css/intlTelInput.css">
  <link rel="stylesheet" href="build/css/demo.css">
<link rel="stylesheet" href="build/css/intlTelInput.css">
</head>

</head>
</hmtl>

<?php

session_start();

$em=$_SESSION['email'];



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

<?php

 function edit(){


$link = mysqli_connect("localhost", "root", "", "dbconnection");



$em=$_SESSION['email'];
  $firstname = $_POST['fname'];
  $lastname = $_POST['lname'];
  $country = $_POST['country'];
  //$phone = $_POST['phone'];
  $education = $_POST['educationlevel'];
  $gender = $_POST['gender'];
  



$sql = "UPDATE profilee SET firstname='$firstname',lastname='$lastname',education='$education',gender='$gender' WHERE email='$em'";
if(mysqli_query($link, $sql)){
    echo "Records were updated successfully.";
} else {
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}



}


?>




<?php
      
     if(isset($_POST['submit']))
           {
       edit();
        }
      
      ?>






</br>
<form action="" method="post">

         First Name: <input type="text" class="form-control" value=" <?php echo $row['firstname'];?> " name="fname" placeholder="First Name "/><br>

         Last Name: <input type="text" class="form-control" value=" <?php echo $row['lastname'];?> " name="lname" placeholder="Last Name"/><br>

         Sleect Your Country: <SELECT class="form-control" value=" <?php echo $row['country'];?>" name="country" id="country" ></SELECT><br>
                               
           Select Your Phone Number:<input id="phone"   name="phone" type="tel" class="form-control"  /><br><br>  


            <label class="radio-inline">
            Male<input type="radio" value="male" value=" <?php echo $row['gender'];?> " name="gender" checked class="form-control"></label>

            <label class="radio-inline">
            Female<input type="radio" name="gender" value=" <?php echo $row['gender'];?> " class="form-control" value="female"></label><br><br>                    
                                         


 Education Level:<input type="text" name="educationlevel" value=" <?php echo $row['education'];?>"  class="form-control" placeholder="Bs(Your Field)" /><br>



<button type="submit"  class="btn btn-success" name="submit" >Update</button>




</form>








      
      

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
  <script>
    var input = document.querySelector("#phone");
    window.intlTelInput(input, {
      // allowDropdown: false,
      // autoHideDialCode: false,
      // autoPlaceholder: "off",
      // dropdownContainer: document.body,
      // excludeCountries: ["us"],
      // formatOnDisplay: false,
      // geoIpLookup: function(callback) {
      //   $.get("http://ipinfo.io", function() {}, "jsonp").always(function(resp) {
      //     var countryCode = (resp && resp.country) ? resp.country : "";
      //     callback(countryCode);
      //   });
      // },
      // hiddenInput: "full_number",
      // initialCountry: "auto",
      // localizedCountries: { 'de': 'Deutschland' },
      // nationalMode: false,
      // onlyCountries: ['us', 'gb', 'ch', 'ca', 'do'],
      // placeholderNumberType: "MOBILE",
      // preferredCountries: ['cn', 'jp'],
      // separateDialCode: true,
      utilsScript: "build/js/utils.js",
    });
  </script>