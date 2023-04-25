<div class="card">
    <div class="card-header">
        <h3>Delete Account</h3>
    </div>
    <div class="card-body">
        <?php if (isset($_SESSION['error'])) {
            echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">';
            echo $_SESSION['error'];
            echo '<button type="button" class="close" data-dismiss="alert" aria-label="Close">';
            echo '<span aria-hidden="true">&times;</span>';
            echo '</button>';
            echo '</div>';
            unset($_SESSION['error']);
        } ?>

        <p>Are you sure you want to delete your account?</p>
        <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#confirmDeleteModal">Delete
            Account</button>
    </div>
</div>

<!-- Confirm Delete Modal -->
<div class="modal fade" id="confirmDeleteModal" tabindex="-1" role="dialog" aria-labelledby="confirmDeleteModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="confirmDeleteModalLabel">Confirm Account Deletion</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>Are you sure you want to delete your account?</p>
                <p>This action cannot be undone.</p>
                <form id="deleteAccountForm" action="/profile/delete_account" method="post">
                    <div class="form-group">
                        <label for="password">Enter your password to confirm:</label>
                        <input type="password" class="form-control" id="password" name="password" required>
                    </div>
                </form>
                <p>You can delete your account in <span id="timer"></span>.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-danger" id="confirmDeleteButton">Delete Account</button>
            </div>
        </div>
    </div>
</div>

<script>
    $(document).ready(function () {
        var deleteButton = $('#confirmDeleteButton');
        var timer = $('#timer');
        var remainingTime = 0; // 1 hour in milliseconds
        deleteButton.prop('disabled', true);
        var startTime = <?php echo $_SESSION['delete_account_start_time'] ?? 'null'; ?>;
        if (startTime !== null) {
            var elapsedTime = Date.now() - startTime;
            remainingTime -= elapsedTime;
            if (remainingTime <= 0) {
                clearInterval(interval);
                deleteButton.prop('disabled', false);
                timer.text('now');
                remainingTime = 0;
            }
        }
        else {
            startTime = Date.now();
            <?php $_SESSION['delete_account_start_time'] = `startTime`; ?>
        }
        var interval = setInterval(function () {
            remainingTime -= 1000;
            var hours = Math.floor(remainingTime / (60 * 60 * 1000));
            var minutes = Math.floor((remainingTime % (60 * 60 * 1000)) / (60 * 1000));
            var seconds = Math.floor((remainingTime % (60 * 1000)) / 1000);
            timer.text(hours + 'h ' + minutes + 'm ' + seconds + 's');
            if (remainingTime <= 0) {
                clearInterval(interval);
                deleteButton.prop('disabled', false);
                timer.text('now');
                remainingTime = 0;
            }
        }, 1000);

        // Disable the delete button for 1 hour after the user first clicks on it
        deleteButton.click(function () {
            deleteButton.prop('disabled', true);
            setTimeout(function () {
                deleteButton.prop('disabled', false);
            }, 60 * 60 * 1000); // 1 hour in milliseconds
        });
    });
    // Require the user to enter their password before allowing them to delete their account
    $('#confirmDeleteButton').click(function () {
        $('#deleteAccountForm').submit();
    });
</script>