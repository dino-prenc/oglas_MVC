<html>

<head>
    <title>Oglasnik</title>
</head>

<body>
    <h1><a href="<?php echo URL ?>">Oglasnik</a></h1>
    <h2>Prijava</h2>
    <form method="post" action="<?php echo URL ?>/login/loginUser">
        <p>Email: <input type="text" name="email" placeholder="Upisi svoj email"></p>
        <p>Lozinka: <input type="password" name="pass"></p>
        <p><input type="submit" name="submit_login" value="Prijava"></p>
    </form>
    <p><a href="<?php echo URL ?>/login/register">Registracija novog korisnika</a></p>
</body>

</html>