<?php
function reverseString($inputString) {
    return strrev($inputString);
}

function toUpperCase($inputString) {
    return strtoupper($inputString);
}

function toLowerCase($inputString) {
    return strtolower($inputString);
}

function countLetters($inputString) {
    return strlen(preg_replace('/[^a-zA-Z]/', '', $inputString));
}
?>