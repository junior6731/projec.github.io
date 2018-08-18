<?php
session_start();
$conn=mysqli_connect('localhost', 'root', 'achungo18', 'infinityco');
$_SESSION['message']='';
if(isset($_POST['submit'])){
	$username=$_POST['username'];
    $password=$_POST['password'];
    $password=md5($password);
    $sq="SELECT * FROM signin WHERE username='$username' AND password='$password'";
    $res=mysqli_query($conn,$sq);
    $qer=mysqli_num_rows($res);
    if($qer>0)
    {
    
  echo $qer;
   } 
}
 /*if(isset($_POST['submit']))
  {
    $user=$_POST['username'];
    $pass=$_POST['password'];
    $pass=md5($pass);
      $sql="SELECT * FROM signin where username='$user' and password='$pass'";
    $res=mysqli_query($conn, $sql);
    if(mysqli_num_rows($res)==1)
    {

        header('location:cust.php'); 
}

}

*/

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		input[type=text],input[type=password]{
    width: 60%;
    padding: 12px 20px;
    margin: 20px 0; 
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    

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
  <form   action="sign.php" method="post" >
    <div><?php echo $_SESSION['message']?></div>
    <div class="register" style="color: lightblue; "><h2>LOGIN</h2></div>
    <input type="text"  name="username" placeholder="Enter username" required><br>
    <input type="password"  name="password" placeholder="Enter Password" required><br>
    <button type="submit" name="submit">Login</button> 
  </form>
</div>
<div><h3>DONT HAVE AN ACCOUNT, PLEASE SIGN UP <span><a href="Reg.php">HERE</a> </span></h3></div>

</body>
</html>