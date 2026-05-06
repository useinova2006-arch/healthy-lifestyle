<h1>Register</h1>
<form action="/register" method="POST">
    @csrf
    <input type="text" name="name" placeholder="Full Name" required>
    <input type="email" name="email" placeholder="Email" required>
    <input type="password" name="password" placeholder="Password" required>
    <button type="submit">Create Account</button>
</form>
<p>Already have an account? <a href="/login">Login here</a></p>