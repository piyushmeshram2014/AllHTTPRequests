<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<style>
	.all
	{
		border: 1px solid black;
		margin: 5px;
		padding: 5px;
	}
	.all *
	{
		border: 1px solid black;
		margin: 10px;
		padding: 5px;
	}
	input[type=submit]
	{
		float:right;
	}
</style>
<body>
	<header>
		<h3 align="center">HTTP REQUESTS</h3>
	</header>

		<div class="all">
			<div class="createproduct">
				<form method="post" action="product.php">
					<h4>POST A New Product</h4>
					Product Id<input type="text" name="pid" placeholder="ex: 1">
					Product Name<input type="text" name="name" placeholder="ex: Nokia 3550">
					Price<input type="text" name="price" placeholder="ex: 500">
					Category<input type="text" name="category" placeholder="ex: Electronics">
					<input type="submit" name="cp">
				</form>
			</div>

			<div class="getallprod">
				<h4>GET All Products</h4>
				<form method="get" action="product.php">
					<input style="float:none" type="submit" name="gp">
				</form>
			</div>

			<div class="getprodbyid">
				<h4>GET Product By Product-Id</h4>
				<form method="get" action="product.php">
					Product Id<input type="text" name="pid" placeholder="ex: 1">
					<input type="submit" name="gpid">
				</form>
			</div>

			<div class="getprodbycategory">
				<h4>GET Product By Category</h4>
				<form method="get" action="product.php">
					Product Category<input type="text" name="category" placeholder="ex: Electronics">
					<input type="submit" name="gpbc">
				</form>
			</div>

			<div class="updateprod">
				<h4>UPDATE A Product</h4>
				<form method="post" action="product.php">
					Product Id<input type="text" name="pid" placeholder="ex: 1">
					Product Name<input type="text" name="name" placeholder="ex: Nokia 3550">
					Price<input type="text" name="price" placeholder="ex: 500">
					Category<input type="text" name="category" placeholder="ex: Electronics">
					<input type="submit" name="up">
				</form>
			</div>

			<div class="deleteprod">
				<h4>DELETE A Product</h4>
				<form method="post" action="product.php">
					Product Id<input type="text" name="pid" placeholder="ex: 1">
					<input type="submit" name="dp">
				</form>
			</div>
		</div>


</body>
</html>
