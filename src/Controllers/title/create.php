<?php

include '../../Models/Title/CreateTitle.php';


if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $title = $_POST['name'] ?? '';
    $description = $_POST['description'] ?? '';
    $duration = $_POST['duration'] ?? '';
    $releaseDate = $_POST['release_date'] ?? '';
    $poster = $_POST['poster'] ?? '';
    $nationality = $_POST['nationality'] ?? '';
    $isErotic = $_POST['is_erotic'] ? true : false;
    $genres = $_POST['genre'] ?? '';

    $create_title = new CreateTitle(
        $title,
        $description,
        $duration,
        $releaseDate,
        $poster,
        $nationality,
        $isErotic,
        $genres,
    );

    // $create_title->showInfo();
    $create_title->saveOnDatabase();
}