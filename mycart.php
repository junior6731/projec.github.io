<?php
 session_start();
 $conn=mysqli_connect('localhost', 'root', 'achungo18', 'infinityco');
 $sql=" INSERT INTO orders (product_id,customer_1d)  VALUES()"

 	
?>
<!DOCTYPE html>
<html>
<head>
	<title>cart</title>
	 <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style type="text/css">
.product{ 
	border: 1px solid #eaeaec;
	margin:20px; /*-1px,-19px,3px,-1px;*/
	padding: 10px;
	text-align: center;
	background-color: #efefef;
}
input[type='submit']:visited{
	background-color: yellow;

}
input[type='submit']:hover{
	background-color: grey;

}
a:hover{
	background-color: grey;
	width: 100%;

}
table, th,tr{ text-align: center; }
.title2
{ 
	text-align: center;
	color: red;
background-color: #efefef;
padding: 2%; }

h2{ text-align: center;color: #66afe9;background-color: #efefef; padding: 2%;}
 table th{ background-color: #efefef; }
</style>

</head>
<body>
	<div class="container" style="width:100%;">
		<h3 align="center">Cart</h3><br>
		<?php   
		$sql="SELECT * FROM products ORDER BY id ASC";
		$res=mysqli_query($conn,$sql);

		if (mysqli_num_rows($res)>0  ) {
		
          while ($row=mysqli_fetch_array($res)) {
          	
              ?>  
          <div class="col-md-3" > 
          	 <form method="post" action="mycart.php?action=add&id=<?php echo $row['id'] ?>" >
          	 	<div class="product">
          	 		<img src="<?php echo $row['image']; ?>" class="image">
          	 		<h5 class="text-info"><?php echo $row['product_name']; ?></h5>
          	 		<h5 class="text-danger"><?php echo $row['price']; ?></h5>
          	 		
          	 		<input type="submit" name="add" style="margin-top: 5px;" class="btn_success" value="Add to cart">
          	 	</div>
          	 </form>

          </div>  
          <?php  
             }
         }
         ?>
         <div style="clear: both;"></div>
         	<h3 class="title2">Shopping Cart Details</h3>
         	<div class=" table-responsive"> 
         		<table class="table table-bordered">
         		<tr>
         			<th width="40%">Product name</th>
         		    <th width="13%">Price Details</th>
         			<th width="37%">Total Price</th>
         			
         		</tr>
        
         		<tr><td><?php echo "Microwave"; ?></td>
         			<td><?php echo 3000; ?></td>
         			<td><?php echo 3000; ?></td>
         		</tr>
         		<tr><td><?php echo "ironbox"; ?></td>
         			<td><?php echo "1500"; ?></td>
         			<td><?php echo "1500"; ?></td>
         		</tr>
         		<tr><td><?php echo "Television"; ?></td>
         			<td><?php echo "1500"; ?></td>
         			<td><?php echo "1500"; ?></td>
         		</tr>
         		<tr><td><?php echo "Toaster"; ?></td>
         			<td><?php echo "500"; ?></td>
         			<td><?php echo "500"; ?></td>
         		</tr>
         		<tr><td><?php echo "Hoofer"; ?></td>
         			<td><?php echo "5900"; ?></td>
         			<td><?php echo "5900"; ?></td>
         		</tr>
         		<tr><td><?php echo "Oven"; ?></td>
         			<td><?php echo "17900"; ?></td>
         			<td><?php echo "17900"; ?></td>
         		</tr>
         		<tr>
         		<td colspan="2" align="right">Total</td>
         		<th  align="right"><?php echo "30300"; ?></th>
         		<td></td>
         	</tr>
         	
         
         	</table>
         	</div>
         </div>
         <div>
         <div><a href="sign.php"><h2>Proceed To Purchase</h2></a></div>
</body>
</html>