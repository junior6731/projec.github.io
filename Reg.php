<?php
session_start();
$_SESSION['error']='';
$conn=mysqli_connect('localhost', 'root', 'achungo18', 'infinityco');
if (isset($_POST['submit'])) {
    if ($_POST['password']==$_POST['confirm']) {

    $username=$_POST['username'];
    $password=$_POST['password'];
    $confirm=$_POST['confirm'];
   // $password=md5($password); //Encrypts the Password before storing in database
   // $confirm=md5($confirm);  //Encrypts the Password before storing in database
    $sql="INSERT INTO signin (username, password, confirmpassword)  VALUES ('$username','$password','$confirm')";
    mysqli_query($conn,$sql);
    ?>
    <script type="text/javascript">alert("Registeration Successful Proceed To Login Section")</script>
    <?php
    header('location:sign.php');
    }
else{
    ?>
     <script type="text/javascript">alert("Passwords Do Not Match")</script>
<?php  
   } 
}

/*if(isset($_POST['login'])){
    $username=$_POST['username'];
    $password=$_POST['password'];
    $sq="SELECT * FROM signin WHERE username='$username' and password='$password'";
    $res=mysqli_query($conn,$sq);
    if(mysqli_num_rows($res)==1)
    {
    
  header('location:cust.php');
}
}*/


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
    box-sizing: border-box;

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
  <form   action="Reg.php" method="post" >
    <div class="register" style="color: lightblue; "><h2>REGISTER</h2></div>
    <div><h4><?php echo $_SESSION['error']; ?></h4></div>
    <input type="text"  name="username" placeholder="Enter username" required><br>
    <input type="password"  name="password" placeholder="Enter Password" required><br>
    <input type="Password"  name="confirm" placeholder="Confirm Password" required><br>
    <button type="submit" name="submit">Submit</button>
  </form>
</div>


</body>
</html>