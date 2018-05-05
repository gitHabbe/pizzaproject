<?php include_once("../incl/util.php") ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?= setTitle() ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/ico" href="../img/favicon.ico"/>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.12/css/all.css" integrity="sha384-G0fIWCsCzJIMAVNQPfjH08cyYaUtMwjJwqiRKxxE/rx96Uroj1BtIQ6MLJuheaO9" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" media="screen" href="../css/bulma.min.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="../css/main.css" />
</head>
<body>
    <header>
        <section class="hero is-primary">
            <div class="hero-body">
                <div class="container">
                    <h1 class="title">
                        Pizza house
                    </h1>
                    <h2 class="subtitle">
                        Company slogan
                    </h2>
                </div>
            </div>
        </section>
        <div class="tabs is-centered is-large">
            <ul>
                <li class=<?= isActive("index.php") ?>><a href="./index.php">Menu</a></li>
                <li class=<?= isActive("spaceholder.php") ?>><a href="./spaceholder.php">Location</a></li>
                <li class=<?= isActive("spaceholder.php") ?>><a href="./spaceholder.php">Staff</a></li>
                <li class=<?= isActive("spaceholder.php") ?>><a href="./spaceholder.php">About us</a></li>
            </ul>
        </div>
    </header>