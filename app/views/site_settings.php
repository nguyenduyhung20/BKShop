<div class="card">
    <div class="card-header">
        <h3>Site Settings</h3>
    </div>
    <div class="card-body">
        <h4>Notification Settings</h4>
        <form action="/profile/site_settings" method="post">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="notification" id="notification"
                    <?= $user->getNotification() ? 'checked' : ''; ?>>
                <label class="form-check-label" for="notification">
                    Receive notifications
                </label>
            </div>
            <button type="submit" class="btn btn-primary mt-3">Save Changes</button>
        </form>
    </div>
</div>