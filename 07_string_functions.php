<?php
/* ---------- String Functions -------- */

/*
  Functions to work with strings
  https://www.php.net/manual/en/ref.strings.php
*/

$string = 'Hello World';

// Get the length of a string
echo strlen($string);
echo('<br>');

// Find the position of the first occurrence of a substring in a string
echo strpos($string, 'o');
echo('<br>');

// Find the position of the last occurrence of a substring in a string
echo strrpos($string, 'o');
echo('<br>');

// Reverse a string
echo strrev($string);
echo('<br>');

// Convert all characters to lowercase
echo strtolower($string);
echo('<br>');

// Convert all characters to uppercase
echo strtoupper($string);
echo('<br>');

// Uppercase the first character of each word
echo ucwords($string);
echo('<hr>');

// String replace
echo str_replace('World', 'Everyone', $string);
echo('<br>');

// Return portion of a string specified by the offset and length
echo substr($string, 0, 5);
echo substr($string, 5);
echo('<br>');

// Starts with
if (str_starts_with($string, 'Hello')) {
  echo 'YES';
}

// Ends with
if (str_ends_with($string, 'ld')) {
  echo 'YES';
}

echo('<br>');

// HTML Entities
$string2 = '<h1>Hello World</h1>';
echo($string2);
echo htmlentities($string2);
echo('<br>');

// Formatted Strings - useful when you have outside data
// Different specifiers for different data types
printf('%s is a %s', 'Jesus Christ', 'nice guy');