<!-- app/views/profile.php -->

<head>
    <title>Profile</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="/css/profile.css">
    <link rel="stylesheet" href="/css/header.css">
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
        <div class="sidenav">
            <a href="/profile">Current User</a>
            <a href="/profile/change_info">Change Info</a>
            <a href="/profile/change_password">Change Password</a>
            <a href="/profile/setting_site">Site Settings</a>
        </div>
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
                            <a href="/profile/delete_account" class="list-group-item list-group-item-action">Delete
                                Account</a>
                        </div>
                    </div>
                    <div class="col-md-9 py-4">
                        <?php
                        $action = $_GET['action'];
                        switch ($action) {
                            case 'change_info':
                                require_once 'change_info.php';
                                break;
                            case 'change_password':
                                require_once 'change_password.php';
                                break;
                            // case 'site_settings':
                            //     require_once 'site_settings.php';
                            //     break;
                            case 'delete_account':
                                require_once 'delete_account.php';
                                break;
                            default: // Show the Current User view by default
                                require_once 'user_info.php';
                                break;
                        }
                        ?>
                    </div>

                </div>

            </div>
        </div>

        <?php include 'footer.php'; ?>

    </div>
</body>