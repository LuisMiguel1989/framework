<h3>Inicio de sesión</h3>

<form action="<?php echo APP_URL."/users/login"; ?>" method="post">
    <p>
        <label for="username">Username</label>
        <input type="text" name="username">
    </p>
    <p>
        <label for="password">Password</label>
        <input type="password" name="password">
    </p>
    <p>
        <input type="submit" value="Entrar">
    </p>
</form>