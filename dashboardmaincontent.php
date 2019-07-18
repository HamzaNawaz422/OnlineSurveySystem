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

<div class="main-content">
  <div class="section__content section__content--p30">


 <!--cards -->

<div class="card">



<div class="des">
  <a href="fillprofile.php">
 <p style="font-weight: bold;">
Your Profile</p>
</a>
</div>
</div>

<div class="card">



<div class="des">
  <a href="createsurvey.php">
 <p style="font-weight: bold;">
Quick Pool
</p>
<ul>
  <li>which type of questions you want to perform</li>
</ul>
</a>
</div>
</div>

</div>
</div>
