<?php
session_start();
if (isset($_POST['logout'])) {
    session_destroy();
   header('location:home.php'); # code...
}
$conn=mysqli_connect('localhost', 'root', 'achungo18', 'infinityco');
if(isset($_POST['submit']))
{
	$fname=$_POST['fname'];
    $sname=$_POST['sname'];
    $email=$_POST['email'];
    $address=$_POST['address'];
    $mobile=$_POST['tel'];

 $sq="INSERT INTO customers(first_name, second_name, email, L_address, Telephone) VALUES ('$fname','$sname','$email','$address','$mobile')";
  mysqli_query($conn,$sq);

  header('loction:cust.php');
  ?>
  <script type="text/javascript">alert("Purchase Confirmed")</script>

  <?php
  

   
} 
    



?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
input[type=text],input[type=email],input[type=tel]{
    width: 60%;
    padding: 12px 20px;
    margin: 20px 0;
    display: inline-block;
    border-radius: 4px;
    box-sizing: border-box;
    border: none;
    border-bottom: 1px solid yellow;

}
button {
    width: 60%;
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}
button:hover {
        background-color: #45a049;
        
}
/*.register{ 
    background-color: lightblue;
    text-align: center; width: 60%; }*/

div {
    border-radius: 5px;
    background-color: #f2f2f2;
    padding: 40px;
    text-align: center;

}
		
    
	</style>
</head>
<body>
	
<div>
  <form   action="cust.php" method="post" >
    <div class="register" style="color: lightblue; "><h2>ENTER CUSTOMER DETAILS</h2></div>
    <input type="text"  name="fname" placeholder="Enter First Name" required><br>
    <input type="text"  name="sname" placeholder="Enter Second Name" required><br>
    <input type="Email"  name="email" placeholder="Enter Email Name" required><br>
    <input type="text"  name="address" placeholder="Enter Address" required><br>
    <input type="tel"  name="tel" placeholder="Enter Telephone" required><br>
    <button type="submit" name="submit">Submit To Confirm Purchase</button>
  </form> 
</div>
<form method="post" action="cust.php">
<div><button name="logout">Sign Out</button></div>
</form>
</body>
</html>