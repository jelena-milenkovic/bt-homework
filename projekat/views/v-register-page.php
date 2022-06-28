<main class="mt-3 mb-3 text-center">
    <h3>Registrujte se</h3>
    <?php include ('./database/errors.php'); ?>
    <form method="POST" action="register-page.php">
       
        <img src="./public/theme/img/contact.jpg" alt="contact" width="50%"><br>
        <label for="name">Username</label><br>
        <input type="text" name="username" id="name" value=""><br><br>
        <label for="email">Email</label><br>
        <input type="email" name="email" id="email" value=""><br><br>
        <label>Password</label><br>
        <input type="password" name="password"><br><br>

        <button type="submit" name="reg_user" class="btn btn-primary">Register</button><br><br>
        <p>
            Already a member? <a href="login-page.php">Sign in</a>
        </p>
    </form>
</main>