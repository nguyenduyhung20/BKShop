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
                            <?php } ?>
                            <a href="/profile/delete_account" class="list-group-item list-group-item-action">Delete
                                Account</a>
                        </div>
                    </div>
                    <div class="col-md-9 py-4">

                        <div class="card">
                            <div class="card-header">
                                <h3>Edit user</h3>
                            </div>
                            <div class="card-body">
                                <form action="/admin/update/<?php echo $user->getId(); ?>" method="post">
                                    <div class="form-group">
                                        <label for="username">Username:</label>
                                        <input type="text" class="form-control" name="username"
                                            value="<?php echo $user->getUsername(); ?>">
                                    </div>

                                    <div class="form-group">
                                        <label for="first_name">First Name:</label>
                                        <input type="text" class="form-control" name="first_name"
                                            value="<?php echo $user->getFirstName(); ?>">
                                    </div>

                                    <div class="form-group">
                                        <label for="last_name">Last Name:</label>
                                        <input type="text" class="form-control" name="last_name"
                                            value="<?php echo $user->getLastName(); ?>">
                                    </div>

                                    <div class="form-group">
                                        <label for="email">Email:</label>
                                        <input type="email" class="form-control" name="email"
                                            value="<?php echo $user->getEmail(); ?>">
                                    </div>

                                    <div class="form-group">
                                        <label for="phone">Phone:</label>
                                        <input type="text" class="form-control" name="phone"
                                            value="<?php echo $user->getPhone(); ?>">
                                    </div>

                                    <div class="form-group">
                                        <label for="address">Address:</label>
                                        <input type="text" class="form-control" name="address"
                                            value="<?php echo $user->getAddress(); ?>">
                                    </div>

                                    <div class="form-group">
                                        <label for="role">Role:</label>
                                        <select class="form-control" name="role">
                                            <option value="USER" <?php if ($user->getRole() == 'USER')
                                                echo 'selected'; ?>>
                                                User</option>
                                            <option value="ADMIN" <?php if ($user->getRole() == 'ADMIN')
                                                echo 'selected'; ?>>
                                                Admin</option>
                                        </select>
                                    </div>

                                    <button type="submit" class="btn btn-primary">Update</button>
                                </form>
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