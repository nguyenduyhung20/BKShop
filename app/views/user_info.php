
<div class="card">
    <div class="card-header">
        <h3>Current User</h3>
    </div>
    <div class="card-body">
        <p><strong>Username: </strong><?= $user->getUsername(); ?></p>
        <p><strong>First Name: </strong><?= $user->getFirstName(); ?></p>
        <p><strong>Last Name: </strong><?= $user->getLastName(); ?></p>
        <p><strong>Email: </strong><?= $user->getEmail(); ?></p>
        <p><strong>Phone: </strong><?= $user->getPhone(); ?></p>
        <p><strong>Address: </strong><?= $user->getAddress(); ?></p>
    </div>
</div>
