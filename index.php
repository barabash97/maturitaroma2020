<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

$action = $_GET['action'];

?>


    <html>
    <title><?=getTitleSite($action)?></title>
    <head>

    </head>


    <body>

    <?php
    require_once __DIR__ . "/templates/header.php";

    if (isset($action) && strlen($action) > 0) {
        switch ($action) {
            case "login":
                require_once __DIR__ . "/templates/login.php";
                break;
        }
    }

    require_once __DIR__ . "/templates/footer.php";
    ?>

    </body>
    </html>


<?php

function getTitleSite($action)
{
    $title = "Default Title";
    if (isset($action) && strlen($action) > 0) {
        switch ($action) {
            case "login":
                $title = "Login";
                break;
        }
    }

    return $title;
}