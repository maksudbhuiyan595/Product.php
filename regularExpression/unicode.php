<?php

$codePoint = 0x1F600; // Replace with your desired Unicode code point in hexadecimal format

// Get the Unicode character
$unicodeCharacter = mb_chr($codePoint, 'UTF-8');

echo "Unicode character for U+" . dechex($codePoint) . ": " . $unicodeCharacter;

?>