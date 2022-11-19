<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/style.css">
    <title>Connexion</title>
</head>
<body>
    <main class="main_connexion">
        <div class="case_connexion">
            <form method="POST" action="login.php">
                <div class="case_input">
                    <label>Login</label>
                    <input type="text" name="username"/>
                </div>
                <div class="case_input">
                    <label>Mot de passe</label>
                    <input type="password" name="password"/>
                </div>
                <div class="case_button">
                    <button type="submit" name="btnConnexion" class="btnAppli">Connecter</button>
                </div>
            </form>
        </div>
    </main>
</body>
</html>