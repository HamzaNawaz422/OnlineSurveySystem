

<?php
session_start();


$em= $_SESSION['email'];

?>


<?php include("dbconnection.php"); ?>


      <?php

 $data; 
      function ProfileComplete() {
 
 
 $firstname = $_POST['fname'];
  $lastname = $_POST['lname'];
  $country = $_POST['country'];
  $phone = $_POST['phone'];
  $ema= $_POST['email'];
  $education = $_POST['educationlevel'];
  $gender = $_POST['gender']; 
  $query = "INSERT INTO profilee (firstname,lastname,country,phone,education,gender,email) VALUES ('$firstname','$lastname','$country','$phone','$education','$gender','$ema')"; 
$location = "localhost";
$user = "root";
$pass = "";
$tabname="dbconnection"; 
 $conn=mysqli_connect($location, $user, $pass,$tabname);  

  $data = mysqli_query ($conn,$query)or die(mysql_error);
  if($data) 
   {

     ?>
      <div class="alert alert-success alert-dismissible fade show" role="alert">
         <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
         </button>
          <strong>Well done!</strong> You successfully Registered
     </div>
   
   
   <?php
     
      
     
   }else{

     echo "Not insert here"; 
   
  }
}





?>


<head><link rel="stylesheet" href="build/css/intlTelInput.css">
  <link rel="stylesheet" href="build/css/demo.css">
<link rel="stylesheet" href="build/css/intlTelInput.css">
</head>
  
<div class="main-content">
          <div class="section__content section__content--p30">
                    <form action="" method="post">

                            First Name: <input type="text" class="form-control" name="fname" placeholder="First Name "/><br>
							Last Name: <input type="text"  class="form-control" name="lname" placeholder="Last Name"

              /><br>
							            
                           Sleect Your Country: <SELECT class="form-control" name="country" id="country">
                               
                                
                            </SELECT><br>

                             Select Your Phone Number:<input id="phone" name="phone" type="tel" class="form-control"  /><br><br>


                              Your Email is:<input id="email" name="email" type="tel" class="form-control" readonly="true"   value="<?php echo $em;  ?>" /><br><br>

                             
                              Education Level:<input type="text" name="educationlevel" class="form-control" placeholder="Bs(Your Field)" /><br>

                             

                             
                             <label class="radio-inline">
                              Male<input type="radio" value="male" name="gender" checked class="form-control"></label>

                              <label class="radio-inline">
                               Female<input type="radio" name="gender" class="form-control" value="female"></label><br><br>


							  
							<button type="submit"  class="btn btn-success" name="submit" >Submit</button> 
               
							  
                              </form>
                           							  
                        <div class="row">
                            <div class="col-md-12">
                                
                            </div>
                        </div>
                    </div>
                </div>
          <?php
      
     if(isset($_POST['submit']))
           {
       ProfileComplete();
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

