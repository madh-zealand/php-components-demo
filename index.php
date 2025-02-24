<?php

    require_once 'bootstrap.php';

    // Get the page value from the url GET parameter.
    // If the key 'page' isn't set in the GET array, default to 'dashboard'.
    $page = $_GET['page'] ?? 'dashboard';

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PHP Components Demo</title>
    <link rel="stylesheet" href="assets/style.css">
</head>
<body>
    <header class="app-header">
        <nav class="app-navigation">
            <?= navItem('Dashboard', 'dashboard', $page) ?>
            <?= navItem('Settings', 'settings', $page) ?>
            <?= navItem('About', 'about', $page) ?>
        </nav>
    </header>
    <main class="app-content">
        <div class="content-page">
            <?php
                // Check the value of the $page variable,
                // and include the correct page file.
                // Page files are kept in the 'pages' folder to keep it organized.
                match ($page) {
                    'dashboard' => include 'pages/dashboard.page.php',
                    'settings' => include 'pages/settings.page.php',
                    'about' => include 'pages/about.page.php',
                    // If $page contains another value than above, show a 404 page.
                    default => include 'pages/404.page.php',
                };

                // The above code using 'match (...)', is a prettier way to write
                // the logic below. Functionally no difference, but it looks cleaner
                //
                // if ($page === 'dashboard') {
                //     include 'pages/dashboard.page.php';
                // } elseif ($page === 'settings') {
                //     include 'pages/settings.page.php';
                // } elseif ($page === 'about') {
                //     include 'pages/about.page.php';
                // } else {
                //     include 'pages/404.page.php';
                // }
            ?>
        </div>
    </main>
    <footer class="app-footer">
        <div>
            Code on
            <a href="https://github.com/madh-zealand/php-components-demo" target="_blank">
                GitHub
            </a>
        </div>
    </footer>
</body>
</html>
