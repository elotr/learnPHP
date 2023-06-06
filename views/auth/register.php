<?php require __DIR__ .  '/../partials/header.php' ?>
<div class="container">
    <form action="/register" method="POST">
        <div class="field">
            <label class="label" for="email">Email</label>
            <div class="control">
                <input id="email" class="input" type="email" placeholder="Email" name="email">
            </div>
        </div>
        <div class="field">
            <label class="label" for="password">Password</label>
            <div class="control">
                <input id="password" class="input" type="password" placeholder="Password" name="password">
            </div>
        </div>
        <div class="field">
            <label class="label" for="password_confirm">Confirm Password</label>
            <div class="control">
                <input id="password_confirm" class="input" type="password" placeholder="Password" name="password_confirm">
            </div>
        </div>
        <div class="field is-grouped">
            <div class="control">
                <input type="submit" class="button is-link" value="Register">
            </div>
        </div>
    </form>
</div>

<?php require __DIR__ .  '/../partials/footer.php' ?>