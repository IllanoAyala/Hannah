<?php

if (isset($_POST['routes'])) {
    $name_route = $_POST['routes'];
    header("Location: pages/$name_route/index.php");
    exit;
}

if ($_SERVER['REQUEST_URI']) {
    header("Location: pages/home/index.php");
    exit;
}

if (isset($_POST['bnt-add-movie'])) {
    $connection = mysqli_connect('localhost', '', '', '');
    $name = $_POST['name'];
    $user = $_POST['user'];

    try {
        $connection->query("INSERT INTO movies (name) VALUES ('$name')");
    } catch (Exception $e) {
        echo "<script>console.error('Error to insert movie.')</script>";
    }

    header("Location: pages/movie-list/index.php");
    exit;
}

resolve($_SERVER['REQUEST_URI']);

