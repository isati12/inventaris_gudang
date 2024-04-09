<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="custom/css/login-form.css">
    <title>Register</title>
</head>

<body>
    <section>
        <div class="form-box">
            <div class="form-value">
                <form method="POST" action="{{ route('register') }}">
                    @csrf
                    <h2>Register</h2>
                    
                    <div class="inputbox">
                        <ion-icon name="person-outline"></ion-icon>
                        <input id="name" type="text" name="name" required
                            class="@error('name') is-invalid @enderror">
                        <label for="name">Name</label>
                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
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
                        <ion-icon name="lock-closed-outline"></ion-icon>
                        <input id="password" type="password" name="password" required
                            class="@error('password') is-invalid @enderror">
                        <label for="password">Password</label>
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="inputbox">
                        <ion-icon name="lock-closed-outline"></ion-icon>
                        <input id="password-confirm" type="password" name="password_confirmation" required>
                        <label for="password-confirm">Confirm Password</label>
                    </div>
                    <div class="inputbox">
                        <ion-icon name="person-outline"></ion-icon>
                        <input id="no_karyawan" type="text" name="no_karyawan" required
                            class="@error('no_karyawan') is-invalid @enderror">
                        <label for="no_karyawan">No. Karyawan</label>
                        @error('no_karyawan')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="inputbox">
                        <ion-icon name="person-outline"></ion-icon>
                        <select id="role" name="role" required class="@error('role') is-invalid @enderror">
                            <option value="user">User</option>
                            <option value="admin">Admin</option>
                        </select>
                        @error('role')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <a href="{{ route('login') }}" style="float: right;">Back to login</a>

                    <button type="submit">Register</button>
                </form>
            </div>
        </div>
    </section>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>
