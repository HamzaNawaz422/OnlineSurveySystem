<!DOCTYPE html>

<head>
 <title>Cards</title>
 
</head>

<!DOCTYPE html>

<head>
 <title>Cards</title>
 
</head>

<style type="text/css">


*{
 margin: 0px;
 padding: 0px;
}
body{
 font-family: arial;
}
.main{

 margin: 2%;
 margin-top: 60px;
}

.card{
     width: 20%;
     display: inline-block;
     box-shadow: 2px 2px 20px black;
     border-radius: 25px; 
     margin: 2%;


    }

.image img{
  width: 100%;
  border-top-right-radius: 5px;
  border-top-left-radius: 5px;
  

 
 }

.title{
 
  text-align: center;
  padding: 10px;
margin-top: 20px;
  color: black;
   }

h1{
  font-size: 20px;
 }

.des{
  padding: 3px;
  text-align: center;
 
  padding-top: 10px;
        border-bottom-right-radius: 5px;
  border-bottom-left-radius: 5px;
border-radius: 25px;

}
button{
  margin-top: 40px;
  margin-bottom: 10px;
  background-color: white;
  border: 1px solid black;
  border-radius: 5px;
  padding:10px;
}
button:hover{
  background-color:  #343a40;
  color: white;
  transition: .5s;
  cursor: pointer;
}
.des:hover{
  background-color: #343a40;
  color: white;
  transition: .5s;
  cursor: pointer;
  border-radius: 25px;
}
.open-button {
  background-color: #555;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  opacity: 0.8;
  position: fixed;
  align-items: center;
  width: 280px;
}

/* The popup form - hidden by default */
.form-popup {
  display: none;
  position: fixed;
  right: 25%;
  border: 3px solid #f1f1f1;
  z-index: 9;



}

/* Add styles to the form container */
.form-container {
  max-width: 1000px;
  padding: 10px;
  background-color: white;
  max-height: 1000px;
}

/* Full-width input fields */
.form-container input[type=text], .form-container input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  border: none;
  background: #f1f1f1;
  margin-top: 10px;

}

/* When the inputs get focus, do something */
.form-container input[type=text]:focus, .form-container input[type=password]:focus {
  background-color: #ddd;
  outline: none;

}

/* Set a style for the submit/login button */
.form-container .btn {
  background-color: #4CAF50;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  width: 100%;
  margin-bottom:10px;
  opacity: 0.8;
}

/* Add a red background color to the cancel button */
.form-container .cancel {
  background-color: red;
}

/* Add some hover effects to buttons */
.form-container .btn:hover, .open-button:hover {
  opacity: 1;
}

</style>

 <?php
      
      if(isset($_POST['submit']))
           {
         NewSurvey();
        }
      
      ?>

<div class="main-content">
  <div class="section__content section__content--p30">


 <!--cards -->


<!--cards -->





<!--cards -->

<div class="form-popup" id="myForm">
  <form action="" class="form-container" method="post">
    <h1>Survey Name</h1>

    <label for="text"><b>Enter Survey Name</b></label>
    <input type="text" placeholder="Enter Survey Name" name="SurveyTitle">

    
<a href="forms/createform.php"
    <button type="submit" class="btn" name="submit" required="true">Create

    </button></a>
    <button type="button" class="btn cancel" onclick="closeForm()">Close</button>
  </form>
</div>


  

<div class="card">
<div class="des">
 <p style="font-weight: bold;">
Research</p>
<button onclick="openForm()">Create Survey</button>

  
   
  </div>
</div>

<div class="card">
<div class="des">
 <p style="font-weight: bold;">
IT</p>
<button onclick="openForm()">Create Survey</button>

  
   
  </div>
</div>


<div class="card">
<div class="des">
 <p style="font-weight: bold;">
Politics</p>
<button onclick="openForm()">Create Survey</button>

  
   
  </div>
</div>


<div class="card">
<div class="des">
 <p style="font-weight: bold;">
Health & Care</p>
<button onclick="openForm()">Create Survey</button>

  
   
  </div>
</div>

<div class="card">
<div class="des">
 <p style="font-weight: bold;">
Education</p>
<button onclick="openForm()">Create Survey</button>

  
   
  </div>
</div>

<div class="card">
<div class="des">
 <p style="font-weight: bold;">
Industrial</p>
<button onclick="openForm()">Create Survey</button>

  
   
  </div>
</div>

<div class="card">
<div class="des">
 <p style="font-weight: bold;">
Quiz</p>
<button onclick="openForm()">Create Survey</button>

  
   
  </div>
</div>

<div class="card">
<div class="des">
 <p style="font-weight: bold;">
Personal</p>
<button onclick="openForm()">Create Survey</button>

  
   
  </div>
</div>

<div class="card">
<div class="des">
 <p style="font-weight: bold;">
Just For Fun</p>
<button onclick="openForm()">Create Survey</button>

  
   
  </div>
</div>

<div class="card">
<div class="des">
 <p style="font-weight: bold;">
Others</p>
<button onclick="openForm()">Create Survey</button>

  
   
  </div>
</div>




</div>
</div>
</div>
<script>
function openForm() {
  document.getElementById("myForm").style.display = "block";

}


function closeForm() {
  document.getElementById("myForm").style.display = "none";
}
</script>

<?php include("dbconnection.php"); ?>
<?php
$location = "localhost";
$user = "root";
$pass = "";
$tabname="dbconnection"; 
 $conn=mysqli_connect($location, $user, $pass,$tabname);  
 if($conn)
 {
  echo "";
 }
 else
 {
  die(mysql_error());

 }
?>

<?php
$data;
function NewSurvey()
{
    $SurveyTitle=$_POST['SurveyTitle'];


$queryy="INSERT INTO createsurvey (SurveyTitle) VALUES('$SurveyTitle')";
$location = "localhost";
$user = "root";
$pass = "";
$tabname="dbconnection"; 
 $conn=mysqli_connect($location, $user, $pass,$tabname);  

$data=mysqli_query($conn,$queryy);

if($data)
{
  //header("location:login.php");
}



}
?>


