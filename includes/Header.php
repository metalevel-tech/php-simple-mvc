<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>PHP Simple MVC</title>
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
</head>

<body>
    <div id="main-menu">
        <?php
        Load::resource('Menu');
        echo "\n";  // Pretty HTML output
        ?>
    </div>
    <div id="body-content">