<?php
include 'StringUtilsFunctions.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $action = $_POST['action'];
    $inputString = $_POST['inputString'];

    switch ($action) {
        case 'reverse':
            $result = reverseString($inputString);
            break;
        case 'toUpperCase':
            $result = toUpperCase($inputString);
            break;
        case 'toLowerCase':
            $result = toLowerCase($inputString);
            break;
        case 'countLetters':
            $result = countLetters($inputString);
            break;
        default:
            $result = 'Acción no válida';
            break;
    }

    echo $result;
}
?>