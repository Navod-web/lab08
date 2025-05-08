<?php include 'header.inc'; ?>
    <h2>Login</h2>
    <form action="process.php" method="POST">
        <label for="username">Username:</label>
        <input type="text" name="username" id="username" required><br><br>

        <label for="password">Password:</label>
        <input type="password" name="password" id="password" required><br><br>

        <!-- Hidden field for user token -->
        <input type="hidden" name="user_token" value="F1234567"><br><br>

        <input type="submit" value="Login">
    </form>
<?php include 'footer.inc'; ?>