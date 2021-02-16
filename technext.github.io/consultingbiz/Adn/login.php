<?php
//session_start();
if(session_status() == PHP_SESSION_NONE){
    session_start();
}
require ('inc/db.php');

if (!empty($_POST) && !empty($_POST['username']) && !empty($_POST['password'])) {
    require ('inc/db.php');
    $req = $pdo->prepare("SELECT * FROM users WHERE username = :username  AND confirmed_at IS NOT NULL");
    $req->execute(['username' => $_POST['username']]);
    $user = $req->fetch(PDO::FETCH_OBJ);
    if ($user && password_verify($_POST['password'], $user->password)) {
        session_start();
        $_SESSION['auth'] = $user;
        $_SESSION['flash']['success'] = 'Vous êtes maintenant bien connecter !';
        header('Location: index.php');
    } else {
        $_SESSION['flash']['danger'] = 'Vos identifiants sont incorrect !';
    }
}

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Conection</title>
    <!-- Custom styles for this template -->
    <link rel="stylesheet" href="../assets/css/signin.css">
    <link rel="stylesheet" href="../assets/css/Bootstrap.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/sign-in/">
    <link href="https://fonts.googleapis.com/css2?family=Bodoni+Moda:ital@1&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css"
          integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A=="
          crossorigin="" />
</head>
<header>
    <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Admin</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarsExampleDefault">
                <ul class="navbar-nav me-auto mb-2 mb-md-0">

                    <li class="nav-item active">
                        <a class="nav-link" aria-current="page" href="../../../index.php">Retour au site</a>
                    </li>

                    <?php if (isset($_SESSION['auth'])): ?>
                        <li class="nav-item">
                            <a class="nav-link" href="logout.php">Se déconnecter</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="register.php">S'inscrire</a>
                        </li>
                    <?php else:?>

                        <li class="nav-item">
                            <a class="nav-link" href="login.php">Se connecter</a>
                        </li>
                    <?php endif;?>
                </ul>

            </div>
</header>
<body>
<div class="container">

    <!--message d'erreur-->

    <?php if(isset($_SESSION['flash'])):?>

        <?php foreach($_SESSION['flash'] as $type => $message):?>

            <div class="alert-<?= $type; ?>">
                <?= $message; ?>
            </div>

        <?php endforeach; ?>

        <!--Ensuite je supprime le message d'erreur-->

        <?php unset($_SESSION['flash']); ?>

    <?php endif; ?>

<?php require 'inc/functions.php';?>


<div class="text-center login">
<?php if(!empty($errors)): ?>
    <div class="alert alert-<?= $type; ?>">
        <p>Vous n'avez pas rempli le formulaire correctement</p>
        <?php foreach($errors as $error):?>
        <ul>
            <li><?= $error; ?></li>
            <?php endforeach; ?>
        </ul>
    </div>
<?php endif; ?>
<main class="form-signin loginBg">

    <form action="" method="post">
        <h1 class="h3 mb-3 fw-normal">Connection à l'espace administrateur</h1>

        <label for="" class="visually-hidden">username ou email</label>
        <input type="text" name="username" class="form-control" placeholder="username ou email" />


        <label for="inputPassword" class="visually-hidden">Password</label>
        <input type="password" id="inputPassword" class="form-control"  name="password" placeholder="Mot de passe" required>

        <button class="w-100 btn btn-lg btn-primary" type="submit">Se connecter</button>
    </form>
</main>
</div>
</div>

</body>
</html>

