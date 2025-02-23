<?php

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
</head>
<body>
    <header>
        <nav>
            <a href="?page=dashboard">Dashboard</a>
            <a href="?page=settings">Settings</a>
            <a href="?page=about">About</a>
        </nav>
    </header>
    <main>
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
    </main>
    <footer>

    </footer>
</body>
</html>
