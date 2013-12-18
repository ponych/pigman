<div class="auth-form" id="login">

    <form accept-charset="UTF-8" action="/session" method="post"><div style="margin:0;padding:0;display:inline"><input name="authenticity_token" type="hidden" value="W23b9Z119ldXrmmae4GzkznOEpPqwxPJTeCQgjlOogg=" /></div>      <div class="auth-form-header">
            <h1>Sign in</h1>
        </div>
        <div class="auth-form-body">
            <label for="login_field">
                Username or Email
            </label>
            <input autocapitalize="off" autofocus="autofocus" class="input-block" id="login_field" name="login" tabindex="1" type="text" />

            <label for="password">
                Password <a href="/user/forgot_password">(forgot password)</a>
            </label>
            <input class="input-block" id="password" name="password" tabindex="2" type="password" />

            <input class="button" name="commit" tabindex="3" type="submit" value="Sign in" />
        </div>
    </form>
</div><!-- ./login -->