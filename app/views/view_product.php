<head>
	<title>Profile</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="/css/header.css">
	<link rel="stylesheet" href="/css/profile.css">

	<link rel="stylesheet" href="/css/footer.css">
	<link type="text/css" rel="stylesheet" href="/css/bootstrap.min.css">
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
		integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
		crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
		integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
		crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
		integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
		crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">
</head>


<body>
	<div class="wrapper">
		<div class="content">
			<div class="container-fluid">
				<?php include 'header.php'; ?>
				<div class="row my-1">
					<div class="col-md-3 py-3">
						<div class="list-group">
							<a href="/profile" class="list-group-item list-group-item-action">Current User</a>
							<a href="/profile/change_info" class="list-group-item list-group-item-action">Change
								Info</a>
							<a href="/profile/change_password" class="list-group-item list-group-item-action">Change
								Password</a>
							<!-- <a href="/profile/site_settings" class="list-group-item list-group-item-action">Site
								Settings</a> -->
							<?php if ($authService->getLoggedInUser()->getRole() == 'ADMIN') { ?>
								<a href="/admin" class="list-group-item list-group-item-action">View Users</a>
								<a href="index.php?action=view_product" class="list-group-item list-group-item-action">View Products</a>
							<?php } ?>
							<a href="/profile/delete_account" class="list-group-item list-group-item-action">Delete
								Account</a>
						</div>
					</div>
					<div class="col-md-9 py-4">

						<div class="card">
							<div class="card-header">
								<h3>Products</h3>
							</div>
							<div class="card-body">
								<p><a href="index.php?action=add_product"><span>Add a new product</span></a></p>
								<table class="table table-striped">
									<thead>
										<tr>
											<th>ID</th>
											<th>Name</th>
											<th>Price</th>
											<th>List</th>
											<th>Image</th>
											<th>Edit</th>
											<th>Delete</th>
										</tr>
									</thead>
									<tbody>
										<?php
										    $link = mysqli_connect('localhost', 'root', '', 'bkshop');
										     if(isset($_GET['page'])){
										            $page = $_GET['page'];
										        }else{
										            $page = 1;
										        }
										        $rowsPerPage = 10;
										        $perRow = $page*$rowsPerPage-$rowsPerPage;
										    $sql = "SELECT * FROM product INNER JOIN list_product ON product.id_list = list_product.id_list LIMIT $perRow, $rowsPerPage";
										    $query = mysqli_query($link, $sql);
										    while($row = mysqli_fetch_assoc($query)){
										?>
										<tr>
								        	<td><?php echo $row['id_product'];?></td>
								            <td ><a href="#"><?php echo $row['name_product'];?></a></td>
								            <td ><?php echo $row['price_product'];?></td>
								            <td><?php echo $row['name_list']?></td>
								            <td><img width="60" src="img/<?php echo $row['image_product'];?>" /></td>
								            <td><a href="index.php?action=edit_product&id_product=<?php echo $row['id_product'];?>"><span>Edit</span></a></td>
								            <td><a href="index.php?action=delete_product&id_product=<?php echo $row['id_product'];?>"><span>Delete</span></a></td>
								        </tr>
								        <?php
								        }
								        ?>
									</tbody>
								</table>
							</div>
						</div>
					</div>

				</div>

			</div>

		</div>
	</div>


	<?php include 'footer.php'; ?>
	</div>
	<script src="js/home.js"></script>
</body>