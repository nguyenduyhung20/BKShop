
<h1>Users</h1>
<table>
	<tr>
		<th>ID</th>
		<th>Username</th>
		<th>First Name</th>
		<th>Last Name</th>
		<th>Email</th>
		<th>Phone</th>
		<th>Address</th>
		<th>Role</th>
		<th>Edit</th>
		<th>Delete</th>
	</tr>
	<?php foreach ($users as $user): ?>
	<tr>
		<td><?php echo $user->getId(); ?></td>
		<td><?php echo $user->getUsername(); ?></td>
		<td><?php echo $user->getFirstName(); ?></td>
		<td><?php echo $user->getLastName(); ?></td>
		<td><?php echo $user->getEmail(); ?></td>
		<td><?php echo $user->getPhone(); ?></td>
		<td><?php echo $user->getAddress(); ?></td>
		<td><?php echo $user->getRole(); ?></td>
		<td><a href="/admin/edit/<?php echo $user->getId(); ?>">Edit</a></td>
		<td><a href="/admin/delete/<?php echo $user->getId(); ?>">Delete</a></td>
		</tr>
	<?php endforeach; ?>
</table>
