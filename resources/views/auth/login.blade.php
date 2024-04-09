<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="custom/css/login-form.css">
    <title>Login</title>
</head>

<body>
    <section>
        <div class="form-box">
            <div class="form-value">
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <h2 class="tajuk-login">Login</h2>
                    <h2>Data Inventaris MCC</h2>
                    <div class="inputbox">
                        <ion-icon name="mail-outline"></ion-icon>
                        <input id="email" type="email" name="email" required
                            class="@error('email') is-invalid @enderror">
                        <label for="email">Email</label>
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="inputbox">
                        <ion-icon name="lock-closed-outline" id="clickIconShowPassword"></ion-icon>
                        <input id="password" type="password" name="password" required
                            class="@error('password') is-invalid @enderror">
                        <label for="password">Password</label>
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="forget">
                        <label for="remember">
                            <input class="form-check-input" type="checkbox" name="remember" id="remember"
                                {{ old('remember') ? 'checked' : '' }}>
                            Remember Me
                        </label>
                        <a href="{{ route('password.request') }}">Forget Password</a>
                    </div>
                    <button type="submit">Log in</button>
                    <div class="register">
                        <p>Don't have an account <a href="{{ route('register') }}">Register</a></p>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var clickIconShowPassword = document.getElementById('clickIconShowPassword');
            var passwordInput = document.getElementById('password');

            clickIconShowPassword.addEventListener('click', function() {
                if (passwordInput.type === "password") {
                    passwordInput.type = "text";
                    clickIconShowPassword.setAttribute('name', 'eye-off-outline'); // Mengubah ikon menjadi eye-off-outline
                } else {
                    passwordInput.type = "password";
                    clickIconShowPassword.setAttribute('name', 'lock-closed-outline'); // Mengubah ikon kembali ke lock-closed-outline
                }
            });
        });
    </script>

</body>

</html>
