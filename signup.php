<?php include("dbconnection.php"); ?>



      <?php
 $data; 
      function NewUser() {  
 
 
  $username = $_POST['username'];
  $email = $_POST['email'];
  $password = $_POST['password'];
  $confirmpassword = $_POST['confirmpassword']; 

  $password1= strlen($password);

if ($password1 < 6){
 echo "Password  must be at least 6 characters";
return false ;
}



  $query = "INSERT INTO signup (username,email,password,confirmPassword) VALUES ('$username','$email','$password','$confirmpassword')"; 
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





<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
:root {
  --input-padding-x: 1.5rem;
  --input-padding-y: .75rem;
}
body {
  background-color: #E6E6FA;
  
}

.card-signin {
  border: 0;
  border-radius: 1rem;
  box-shadow: 0 0.5rem 1rem 0 rgba(0, 0, 0, 0.1);



}

.card-signin .card-title {
  margin-bottom: 2rem;
  font-weight: 300;
  font-size: 1.5rem;
  margin-bottom: 55px;


}

.card-signin .card-body {
  padding: 2rem;

}

.form-signin {
  width: 100%;


}

.form-signin .btn {
  font-size: 80%;
  border-radius: 5rem;
  letter-spacing: .1rem;
  font-weight: bold;
  padding: 1rem;
  transition: all 0.2s;

}

.form-label-group {
  position: relative;
  margin-bottom: 1rem;

}

.form-label-group input {
  height: auto;
  border-radius: 2rem;

}

.form-label-group>input,
.form-label-group>label {
  padding: var(--input-padding-y) var(--input-padding-x);

}

.form-label-group>label {
  position: absolute;
  top: 0;
  left: 0;
  display: block;
  width: 100%;
  margin-bottom: 0;
  /* Override default `<label>` margin */
  line-height: 1.5;
  color: #495057;
  border: 1px solid transparent;
  border-radius: .25rem;
  transition: all .1s ease-in-out;
}

.form-label-group input::-webkit-input-placeholder {
  color: transparent;

}

.form-label-group input:-ms-input-placeholder {
  color: transparent;
}

.form-label-group input::-ms-input-placeholder {
  color: transparent;

}

.form-label-group input::-moz-placeholder {
  color: transparent;

}

.form-label-group input::placeholder {
  color: transparent;

}

.form-label-group input:not(:placeholder-shown) {
  padding-top: calc(var(--input-padding-y) + var(--input-padding-y) * (2 / 3));
  padding-bottom: calc(var(--input-padding-y) / 3);

}

.form-label-group input:not(:placeholder-shown)~label {
  padding-top: calc(var(--input-padding-y) / 3);
  padding-bottom: calc(var(--input-padding-y) / 3);
  font-size: 12px;
  color: #777;

}

.btn-google {
  color: white;
  background-color: #ea4335;

}

.btn-facebook {
  color: white;
  background-color: #3b5998;
}

</style>
</head>
<body>
<?php include("header.php");?>
<div class="site-blocks-cover overlay"  data-aos="fade" id="home-section">



  <div class="container">
    <div class="row">
      <div class="col-sm-9 col-md-7 col-lg-5 mx-auto" style="margin-top: 50px;">
        <div class="card card-signin my-5">
          <div class="card-body">
      
      <?php
      
      if(isset($_POST['submit']))
           {
         NewUser();
        }
      
      ?>
      
      
      
      
      
      
        
            <h5 class="card-title text-center">Sign Up</h5>  
            <form class="form-signin" method="post">
         <div class="form-label-group">
                <input type="text" id="inputusername" name="username" class="form-control" placeholder="username" required autofocus>
                <label for="inputusername">username</label>
              </div>
      
              <div class="form-label-group">
                <input type="text" id="inputEmail" name="email" class="form-control" placeholder="Email address" required autofocus>
                <label for="inputEmail">Email address</label>
              </div>

              <div class="form-label-group">
                <input type="password" id="inputPassword" name="password" class="form-control" placeholder="Password" required autofocus>
                <label for="inputPassword">Password</label>
              </div>
        
        <div class="form-label-group">
                <input type="password" id="confirmpassword" name="confirmpassword" class="form-control" placeholder="confirm password" required autofocus>
                <label for="inputPassword">Confirm Password</label>
              </div>
        
      
              
              <button class="btn btn-lg btn-primary btn-block text-uppercase" name="submit" type="submit" onclick="return Validate()" >Sign Up</button><br>
          <span style="padding-left:180px; ">Already Account? </span>
        <a href="Login.php" style="float:right;">Login</a>
              
            </form>
      </div>
  </div>

      <script type="text/javascript">
        function Validate() {
      
      var email = document.getElementById('inputEmail');
      var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;

       if (!filter.test(email.value)) {
          alert('Please provide a valid email address');
          email.focus;
          return false;
      }


        var password = document.getElementById("inputPassword").value;
        var confirmPassword = document.getElementById("confirmpassword").value;

       


        if (password != confirmPassword  ) {

            alert("Passwords do not match.");
            return false;
        }
        return true;
    }
</script>




      
      
          </div>
        </div>
      </div>
       <?php include("footer.php");?>
    </div>

   
  </div>

  <script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
  <script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
  <script src="vendor/bootstrap/js/popper.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
  <script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
  <script src="vendor/daterangepicker/moment.min.js"></script>
  <script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
  <script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
  <script src="js/main.js"></script>


  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.countdown.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.fancybox.min.js"></script>
  <script src="js/jquery.sticky.js"></script>
  <script src="js/isotope.pkgd.min.js"></script>

  
  <script src="js/main.js"></script>
</body>
</html>