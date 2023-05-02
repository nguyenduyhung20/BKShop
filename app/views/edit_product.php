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
								<a href="index.php?action=view_product" class="list-group-item list-group-item-action">View
									Products</a>
							<?php } ?>
							<a href="/profile/delete_account" class="list-group-item list-group-item-action">Delete
								Account</a>
						</div>
					</div>
					<div class="col-md-9 py-4">

						<div class="card">
							<div class="card-header">
								<h3>Edit Products</h3>
							</div>
							<div class="card-body">
								<?php
								$link = mysqli_connect('localhost', 'root', '', 'bkshop');
								$id_product = $_GET['id_product'];
								$sql = "SELECT * FROM product WHERE id_product = $id_product";
								$query = mysqli_query($link, $sql);
								while ($arr = mysqli_fetch_assoc($query)) {
									?>
									<form method="post" enctype="multipart/form-data">
										<div class="form-group">
											<label for="name_product">Tên sản phẩm</label>
											<input type="text" class="form-control" id="name_product" name="name_product"
												value="<?php if (isset($_POST['name_product'])) {
													echo $_POST['name_product'];
												} else {
													echo $arr['name_product'];
												} ?>" />
											<?php if (isset($error_name_product)) {
												echo $error_name_product;
											} ?>
										</div>
										<div class="form-group">
											<label for="image_product">Ảnh mô tả</label>
											<input type="file" class="form-control-file" id="image_product"
												name="image_product" />
											<input type="text" disabled name="image_product"
												value="<?php echo $arr['image_product']; ?>" />
										</div>
										<div class="form-group">
											<label for="id_list">Nhà cung cấp</label>
											<select class="form-control" id="id_list" name="id_list">
												<?php
												$sqlDm = "SELECT * FROM list_product";
												$queryDm = mysqli_query($link, $sqlDm);
												while ($arrDm = mysqli_fetch_assoc($queryDm)) {
													echo "<option value=1>" . $arrDm['name_list'] . " </option>";
												}
												?>
											</select>
										</div>
										<div class="form-group">
											<label for="price_product">Giá sản phẩm</label>
											<input type="text" class="form-control" id="price_product" name="price_product"
												value="<?php if (isset($_POST['price_product'])) {
													echo $_POST['price_product'];
												} else {
													echo $arr['price_product'];
												} ?>" />
											<?php if (isset($error_price_product)) {
												echo $error_price_product;
											} ?>
										</div>
										<div class="form-group">
											<label for="special">Sản phẩm đặc biệt</label><br />
											Có <input type="radio" name="special" id="special" value=1 <?php if ($arr['special'] == 1) {
												echo 'checked';
											} ?> /> Không <input type="radio"
												name="special" id="special" value=0 <?php if ($arr['special'] == 0) {
													echo 'checked';
												} ?> /></td>
										</div>
										<div class="form-group">
											<label for="description_product">Thông tin chi tiết sản phẩm</label>
											<textarea class="form-control" id="description_product"
												name="description_product"
												rows="12"><?php if (isset($_POST['description_product'])) {
													echo $_POST['description_product'];
												} else {
													echo $arr['description_product'];
												} ?></textarea>
											<?php if (isset($error_description_product)) {
												echo $error_description_product;
											} ?>
										</div>
										<button type="submit" class="btn btn-primary" name="submit">Cập nhật</button>
										<button type="reset" class="btn btn-secondary" name="reset">Làm mới</button>
									</form>
									<?php
								}
								?>
							</div>
						</div>
					</div>

				</div>

			</div>

		</div>
	</div>

	<?php
	if (isset($_POST['submit'])) {
		// Tên Sản phẩm
		if ($_POST['name_product'] == '') {
			$error_name_product = '<span style="color:red;">(*)<span>';
		} else {
			$name_product = $_POST['name_product'];
		}
		// Giá Sản phẩm
		if ($_POST['price_product'] == '') {
			$error_price_product = '<span style="color:red;">(*)<span>';
		} else {
			$price_product = $_POST['price_product'];
		}
		// Chi tiết Sản phẩm
		if ($_POST['description_product'] == '') {
			$error_description_product = '<span style="color:red;">(*)<span>';
		} else {
			$description_product = $_POST['description_product'];
		}
		// Ảnh mô tả Sản phẩm
		if ($_FILES['image_product']['name'] == '') {
			$image_product = $_POST['image_product'];
		} else {
			$image_product = $_FILES['image_product']['name'];
			$tmp = $_FILES['image_product']['tmp_name'];
		}
		// Danh mục Sản phẩm
		$id_list = $_POST['id_list'];
		// Sản phẩm Đặc biệt
		$special = $_POST['special'];
		// Xử lý Sửa Thông tin Sản phẩm
		if (isset($name_product) && isset($price_product) && isset($description_product)) {
			if ($_FILES['image_product']['name'] != "") {
				move_uploaded_file($tmp, 'img/' . $image_product);
			}
			$sqlUpdate = "UPDATE product  SET     id_list = $id_list,
                                            name_product = '$name_product',
                                            image_product ='$image_product',
                                            price_product = '$price_product',
                                            special ='$special',
                                            description_product = '$description_product'
                                    WHERE   id_product = $id_product";
			$queryUpdate = mysqli_query($link, $sqlUpdate);
			header('location:index.php?action=view_product');
		}
		header('location:index.php?action=view_product');
	}
	?>


	<?php include 'footer.php'; ?>
	</div>
	<script src="js/home.js"></script>
</body>