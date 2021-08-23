
<section class="form">
    <h1>Inloggen</h1>
    <form method="post">
        <div class="form-input">
            <label for="email">Email</label>
            <input type="email" name="email" id="email">
        </div>
        <div class="form-input">
            <label for="password">Wachtwoord</label>
            <input type="password" name="password" id="password">
        </div>
        <div class="form-input">
            <label></label>
            <input type="submit" value="Inloggen">
        </div>
    </form>
    Heb je nog geen account? <a href="<?= URI ?>user/register">Register here.</a>
</section>