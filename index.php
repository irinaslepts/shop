<!DOCTYPE html>
<html>
<head>
	<title>Главная</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
	<div class="col-12 bg-success" style="height: 100px;">
		<h1 style="text-align: center;" class="px-auto">Товары для школьников ;)</h1>
	</div>
	<div class="col-12 bg-light" style="height: 50px;">
		
									<form action="admin.php" method="GET">
										<div class="row">
									<div class="col">
							     	<button class="btn btn-success">Твитнуть</button>
							   		</div>
									<div class="col">
							     	<button class="btn btn-success">Админ-панель</button>
							   		</div>
							   		<div class="col">
							     	<button class="btn btn-success">info</button>
							   		</div>
										</div>

									</form>
		
	</div>
	<div class="col-10 bg-light mx-auto" style="height: 1000px;">
		<?php 
										$connect = mysqli_connect("127.0.0.1", "root", "", "shop");

				
										
										$query = mysqli_query($connect, "SELECT * FROM tovar");
										$result = $query->fetch_assoc();
										$result2 = $query->fetch_assoc();
										$result3 = $query->fetch_assoc();
										$result4 = $query->fetch_assoc();
										$result5 = $query->fetch_assoc();
										$result6 = $query->fetch_assoc();
										?>







							<div class="row">
										<div class="col-3 mx-auto">
										<h3>
										<?php 
										echo "<h3 class='' style = 'text-align: center;'>".$result["title"]."</h3>";
									 	?>
										</h3>
										<?php 
		 									echo "<img class='rounded mx-auto d-block' src='{$result["img"]}'> ";
		 								?>

		 								<h3>
										<?php 
										echo "<p class='' style = 'text-align: center;'>".$result["descript"]."</p>";
									 	?>
										</h3>
										<h5>
										<?php 
										
										echo "<button type='button' class='btn btn-success mx-auto d-block'>".$result["price"]."</button>";
									 	?>
										</h5>
										</div>


										<div class="col-3 mx-auto">
										<h3>
										<?php 
										echo "<h3 class='' style = 'text-align: center;'>".$result2["title"]."</h3>";
									 	?>
										</h3>
										<?php 
		 									echo "<img class='rounded mx-auto d-block w-100' src='{$result2["img"]}'> ";
		 								?>

		 								<h3>
										<?php 
										echo "<p class='' style = 'text-align: center;'>".$result2["descript"]."</p>";
									 	?>
										</h3>
										<h4>
										<?php 
										echo "<button type='button' class='btn btn-success mx-auto d-block'>".$result2["price"]."</button>";
									 	?>
										</h4>
										</div>

									    <div class="col-3 mx-auto">
										<h3>
										<?php 
										echo "<h3 class='' style = 'text-align: center;'>".$result3["title"]."</h3>";
									 	?>
										</h3>
										<?php 
		 									echo "<img class='rounded mx-auto d-block w-100' src='{$result3["img"]}'> ";
		 								?>

		 								<h3>
										<?php 
										echo "<p class='' style = 'text-align: center;'>".$result3["descript"]."</p>";
									 	?>
										</h3>
										<h5>
										<?php 
										
										echo "<button type='button' class='btn btn-success mx-auto d-block'>".$result3["price"]."</button>";
									 	?>
										</h5>
										</div>






							</div>
							<div class="row">
										<div class="col-3 mx-auto">
										<h3>
										<?php 
										echo "<h3 class='' style = 'text-align: center;'>".$result4["title"]."</h3>";
									 	?>
										</h3>
										<?php 
		 									echo "<img class='rounded mx-auto d-block w-100' src='{$result4["img"]}'> ";
		 								?>

		 								<h3>
										<?php 
										echo "<p class='' style = 'text-align: center;'>".$result4["descript"]."</p>";
									 	?>
										</h3>
										<h5>
										<?php 
										
										echo "<button type='button' class='btn btn-success mx-auto d-block'>".$result4["price"]."</button>";
									 	?>
										</h5>
										</div>


										<div class="col-3 mx-auto">
										<h3>
										<?php 
										echo "<h3 class='' style = 'text-align: center;'>".$result5["title"]."</h3>";
									 	?>
										</h3>
										<?php 
		 									echo "<img class='rounded mx-auto d-block w-100' src='{$result5["img"]}'> ";
		 								?>

		 								<h3>
										<?php 
										echo "<p class='' style = 'text-align: center;'>".$result5["descript"]."</p>";
									 	?>
										</h3>
										<h4>
										<?php 
										echo "<button type='button' class='btn btn-success mx-auto d-block'>".$result5["price"]."</button>";
									 	?>
										</h4>
										</div>

									    <div class="col-3 mx-auto">
										<h3>
										<?php 
										echo "<h3 class='' style = 'text-align: center;'>".$result6["title"]."</h3>";
									 	?>
										</h3>
										<?php 
		 									echo "<img class='rounded mx-auto d-block w-100' src='{$result6["img"]}'> ";
		 								?>

		 								<h3>
										<?php 
										echo "<p class='' style = 'text-align: center;'>".$result6["descript"]."</p>";
									 	?>
										</h3>
										<h5>
										<?php 
										
										echo "<button type='button' class='btn btn-success mx-auto d-block'>".$result6["price"]."</button>";
									 	?>
										</h5>
										</div>






							</div>



										
										
									
</body>
</html>