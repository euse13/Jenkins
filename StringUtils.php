<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $action = $_POST['action'];
    $inputString = $_POST['inputString'];

    switch ($action) {
        case 'reverse':
            $result = strrev($inputString);
            break;
        case 'toUpperCase':
            $result = strtoupper($inputString);
            break;
        case 'toLowerCase':
            $result = strtolower($inputString);
            break;
        case 'countLetters':
            $result = strlen(preg_replace('/[^a-zA-Z]/', '', $inputString));
            break;
        default:
            $result = 'Acción no válida';
            break;
    }

    echo $result;
}

?>