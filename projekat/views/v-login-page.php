<main class="mt-3 mb-3 text-center">
    <h3>Ukoliko ste registrovani, ulogujte se...</h3>
    <?php include ('./database/errors.php'); ?>
    <form method="POST" action="login-page.php">
        <img src="./public/theme/img/kontakt.jpg" alt="contact" width="50%"><br>
        <label>Username</label><br>
        <input type="text" name="username"><br><br>
        <label>Password</label><br>
        <input type="password" name="password"><br><br>

        <button type="submit" name="log_user" class="btn btn-primary">Login</button><br><br>
        <p>
            Not yet a member? <a href="register-page.php">Sign up</a>
        </p>
    </form>
</main>