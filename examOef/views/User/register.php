<section class="form">

    <h1>Register</h1>

    <form method="POST">
        <div class="form-input"><label><span>First name</span> <input type="text" name="firstname"></label></div>
        <div class="form-input"><label><span>Last name</span> <input type="text" name="lastname"></label></div>
        <div class="form-input"><label><span>Email</span> <input type="email" name="email" required></label></div>
        <div class="form-input"><label><span>Password</span> <input type="password" name="password" required></label></div>
        <button type="submit">Register</button>
    </form>
    Heb je nog reeds een account? <a href="<?= URI ?>user/login">Inloggen.</a>
</section>
