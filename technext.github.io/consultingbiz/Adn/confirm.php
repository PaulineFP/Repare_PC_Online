<?php

$user_id = $_GET['id'];
$token = $_GET['token'];

require ('inc/db.php');

$req = $pdo->prepare("SELECT * FROM `users` WHERE `id` = ?");
$req->execute([$user_id]);
$user = $req->fetch();
session_start();


if ($user['confirmation_token'] == $token){
    $activ = $pdo->prepare("UPDATE `users` SET `confirmation_token` = NULL, `confirmed_at` = NOW() WHERE id = :id;");
    $activ->bindParam(':id', $user_id);
    $activ->execute();
    $_SESSION['flash']['success'] = "Votre compte a bien été validé!";
    $_SESSION['auth'] = $user;
    header('Location: index.php');
} else {
    $_SESSION['flash']['danger'] = "Ce token n'est plus valide et/ou n'est pas le bon !";
    header('Location: login.php');
}
?>