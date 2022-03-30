<?php
require_once __DIR__ . '/config.php';
require __DIR__ . '/src/models/recipe-model.php';

if ($_SERVER["REQUEST_METHOD"] === 'POST') {
    $recipe = array_map('trim', $_POST);
    $recipe = array_map('htmlentities', $recipe);
    $errors = [];
    if (empty($recipe["title"]) || empty($recipe["description"])) {
        $errors []= "Title and description fields are mandatory.";
    }
    if (mb_strlen($recipe["title"]) > 255 ) {
        $errors []= "Title lenght must be under 255 characters.";
    }

    // if (empty($recipe["title"])) {
    //     $errors []= "Title field is mandatory.";
    // }

    // if (empty($recipe["description"])) {
    //     $errors []= "Description field is mandatory.";
    // }

    if (empty($errors)) {
        saveRecipe($recipe);
        header('Location: /');
    }
}


require __DIR__ . '/src/views/form.php';