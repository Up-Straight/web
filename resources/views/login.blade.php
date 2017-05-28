@component('components.components.headers.header2')
    @slot('background')
        background-image: url('images/login-background.png'); background-size: cover; background-repeat:no-repeat;
    @endslot
@endcomponent

    <div id="logo"></div>

    <div id="login-box">
        <div class="container-inner">
            <div class="container-fluid">
                <label for="email">USERNAME</label>
                <div><input type="text" name="username" id="username" placeholder="Username" autocomplete="off" required></div>
            </div>
            <div class="container-fluid">
                <label for="password">PASSWORD</label>
                <div><input type="password" name="password" id="password" placeholder="Password" autocomplete="off" required></div>
            </div>
            {{ csrf_field() }}
            <div class="container-fluid">
                <button type="submit" class="fluid-button normal-login-button" onclick="location.href = '/dashboard';">Sign in</button>
            </div>
            <div class="container-fluid" id="register-text">
                <span class="register-text">DON'T HAVE AN ACCOUNT? <a href="#" class="text-button">SIGN UP!</a></span>
            </div>
            <hr>
            <div class="container-fluid">
                <button type="button" class="fluid-button facebook-button">Log in with Facebook</button>
            </div>
            <div class="container-fluid">
                <button type="button" class="fluid-button google-plus-button">Log in with Google Plus</button>
            </div>
        </div>
    </div>
</main>
</body>