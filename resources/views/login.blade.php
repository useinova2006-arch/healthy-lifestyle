<h1>Login</h1>
<form action="/login" method="POST">
    @csrf
    <input type="text" name="login" placeholder="Login (admin)" required>
    <input type="password" name="password" placeholder="Password (12345)" required>
    <button type="submit">Login</button>
</form>
<p>Don't have an account? <a href="/register">Register here</a></p>