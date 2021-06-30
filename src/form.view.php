<?php

// Schritt 6
$success = false;
// Schritt 2
$errors = [];

// Schritt 4
$name    = $_POST['name']    ?? '';
$email   = $_POST['email']   ?? '';
$phone   = $_POST['phone']   ?? '';

// Schritt 3
if($_SERVER['REQUEST_METHOD'] === 'POST') {

// Schritt 4
$name    = trim($name);
$email   = trim($email);
$phone   = trim($phone);

if($name === '') {
$errors[] = 'Bitte geben Sie einen Namen ein.';
}

if($email === '') {
$errors[] = 'Bitte geben Sie eine Email ein.';
} elseif(strpos($email, '@') === false) {
$errors[] = 'Die Email-Adresse "' . $email . '" ist ungültig.';
}

if($phone === '') {
$errors[] = 'Bitte geben Sie eine Telefonnummer ein.';
} elseif( ! preg_match('/^[\+ 0-9]+$/', $phone)) {
$errors[] = 'Die Telefonnummer "' . $phone . '" ist ungültig.';
}


// Keine Fehler vorhanden
if(count($errors) === 0) {
$success = true;
}

}
?><!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <title>Kreditverleihe PayBack <?= date("Y"); ?></title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<div class="wrapper">

    <?php require("database.php") ?>
    <?php if($success): ?>

        <h1 class="form-title">Anmeldung erfolgreich!</h1>

        <p>Vielen Dank für Ihre Anmeldung. Wir haben diese erfolgreich entgegengenommen.</p>

    <?php else: ?>

    <h1 class="form-title">Kreditverleihe</h1>

    <p>Füllen Sie das folgende Formular aus um bei uns einen Kredit aufzunehmen.</p>

    <!-- SCHRITT 2 -->
    <?php if(count($errors) > 0): ?>
        <ul class="errors">
            <?php foreach($errors as $error): ?>
                <li><?= $error ?></li>
            <?php endforeach; ?>
        </ul>
    <?php endif; ?>
    <!-- /SCHRITT 2 -->

    <form action="index.php" method="post">

        <fieldset>
            <legend class="form-legend">Kundendaten</legend>
            <div class="form-group">
                <label class="form-label" for="name">Ihr Name</label>
                <input class="form-control" type="text" id="name" name="name" value="<?= $name ?>">
            </div>
            <div class="form-group">
                <label class="form-label" for="email">Ihre Email-Adresse</label>
                <input class="form-control" type="email" id="email" name="email" value="<?= $email ?>">
            </div>
            <div class="form-group">
                <label class="form-label" for="phone">Ihre Telefonnummer</label>
                <input class="form-control" type="text" id="phone" name="phone" value="<?= $phone ?>">
            </div>
        </fieldset>

        <fieldset>
            <legend class="form-legend">Kreditverleihe</legend>
            <div class="form-group">
                <label class="form-label" for="people">In wie viele raten Zahlen Sie zurück?</label>
                <input class="form-control" min="0" type="number" id="people" name="people" value="<?= $people ?>">
            </div>
            <div class="form-group">
                <label class="form-label" for="people">Welches Kreditpacket wählen Sie?</label>
                <input class="form-control" min="0" type="number" id="people" name="people" value="<?= $people ?>">
            </div>
        </fieldset>

        <div class="form-actions">
            <input class="btn btn-primary" type="submit" value="Kredit aufnehmen">
            <a href="table.php" class="btn">Kredite anschauen</a>
        </div>

        <?php endif; ?>

    </form>
</div>
</body>
<\html>
