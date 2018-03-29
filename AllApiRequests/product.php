<?php
	// error_reporting(0);
	// Connect to database

	$connection=mysqli_connect('localhost',username,password,'vogue');
	if($connection)
		// echo 'connected';
	header('Content-Type: application/json');

	//create product
	if(isset($_POST['cp']))
	{
		// echo "correct block";
		$pid=$_POST['pid'];
		$name = $_POST['name'];
		$price = $_POST['price'];
		$category = $_POST['category'];
		$query = "INSERT into `products` values('$pid','$name','$price','$category'); ";
		//echo "$query";
		$res = mysqli_query($connection,$query);
		if($res)
			echo 'updated';
		else
			echo 'cant update';
	}
	else if(isset($_GET['gp'])){
		echo "here";
			$param = array();
			$i = 0;
			$str="SELECT * FROM `products`;";
			//echo $str;
			$result = mysqli_query($connection,$str);
			//echo json_encode($res);
			$final= array();
			while($row=mysqli_fetch_array($result))
			{
				//echo json_encode($row);
			$param['pid'] = $row['pid'];
			$param['name'] = $row['name'];
			$param['price'] = $row['price'];
			$param['category'] = $row['category'];
			$final[] = $param;
			}
			echo json_encode($final);
	}
			else if(isset($_GET['gpid']))
			{
				$res = $_GET['pid'];
				echo $res;
				$str = "SELECT * FROM `products` where pid = $res ;";
				echo $str;
				$result = mysqli_query($connection,$str);
				//echo json_encode($res);
				$final= array();
				while($row=mysqli_fetch_array($result))
				{
					//echo json_encode($row);
				$param['pid'] = $row['pid'];
				$param['name'] = $row['name'];
				$param['price'] = $row['price'];
				$param['category'] = $row['category'];
				$final[] = $param;
			}
				echo json_encode($final);
			}
			else if(isset($_GET['gpbc']))
			{
				$res = $_GET['category'];
				$str="SELECT * FROM `products` where category = '$res';";
				//echo $str;
				$result = mysqli_query($connection,$str);
				//echo json_encode($res);
				$final= array();
				while($row=mysqli_fetch_array($result))
				{
					//echo json_encode($row);
				$param['pid'] = $row['pid'];
				$param['name'] = $row['name'];
				$param['price'] = $row['price'];
				$param['category'] = $row['category'];
				$final[] = $param;
			}
			echo json_encode($final);
			}
			// put request
			else if(isset($_POST['up']))
			{
				$pid=$_POST['pid'];
				echo $pid;
				$name = $_POST['name'];
				$price = $_POST['price'];
				$category = $_POST['category'];
				$query = "UPDATE products SET name = '$name' ,price = '$price' , category = '$category' WHERE `pid` = '$pid'; ";
				//echo "$query";
				$res = mysqli_query($connection,$query);
				if($res)
					echo 'The product details have been updated';
				else
					echo 'Cant update';
			}
			//delete request
			else if(isset($_POST['dp']))
			{
				$pid=$_POST['pid'];
				$query = "DELETE FROM `products` where pid = '$pid'; ";
				//echo "$query";
				$res = mysqli_query($connection,$query);
				if($res)
					echo 'The product has been deleted';
				else
					echo 'Cant update';
			}
			else {
				echo "<h2>Some Problem with your data.TRY AGAIN ... !!</h2>";
			}


	mysqli_close($connection);

?>
