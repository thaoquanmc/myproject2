<?php
$lang = language();
$page = "home";

if (isset($data["page"])) {
    if (file_exists("mvc/views/pages/" . $data["page"] . ".php")) {
        $page = $data["page"];
    }
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>FPT Project</title>
    <?php require_once "./mvc/views/blocks/import-library-default.php" ?>
</head>
<body class="container box-shadow pl-3 pr-3 border-radius-5 pb-5">
<header class="p-2">
    <?php require_once "./mvc/views/blocks/header-default.php" ?>
</header>
<article class="p-2">
    <?php require_once "mvc/views/pages/" . $page . ".php"; ?>
</article>
<footer class="p-2">
    <?php require_once "./mvc/views/blocks/footer-default.php" ?>
</footer>
</body>
</html>