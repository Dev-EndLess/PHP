<?php

/* ---- Conditionals & Operators ---- */

/* ------------ Operators ----------- */

/*
  < Less than
  > Greater than
  <= Less than or equal to
  >= Greater than or equal to
  == Equal to
  === Identical to
  != Not equal to
  !== Not identical to
*/

/* ---------- If Statements --------- */

/*
** If Statement Syntax
if (condition) {
  // code to be executed if condition is true
}
*/

$age = 12;

if ($age >= 18) {
  echo '<h3> You are old enough to vote! <h3>';
} else {
  echo '<h3> Sorry, you are too young to vote. <h3>';
}

// Dates
// $today = date("F j, Y, g:i a");

$t = date('H');

if ($t < 12) {
  echo '<h2> Have a good morning! <h2>';
} elseif ($t < 17) {
  echo '<h2> Have a good afternoon! <h2>';
} else {
  echo '<h2> Have a good evening! <h2>';
}


// Check if an array is empty
// The isset() function will generate a warning or e-notice when the variable does not exists. The empty() function will not generate any warning or e-notice when the variable does not exists.

// isset(): Verifica se una variabile è stata impostata e non è nulla.
// empty(): Verifica se una variabile è vuota. Una variabile è considerata vuota se non è stata impostata, o se il suo valore è false, null, 0, '', o un array vuoto.

$posts = [];

if (!empty($posts[0])) {
  echo $posts[0];
} else {
  echo '<p> There are no posts <p>';
}

echo '<br>';

// Echo based on a condition (Same as above)
echo !empty($posts[0]) ? $posts[0] : '<p> There are no posts <p>';

// Assign a variable based on a condition
$firstPost = !empty($posts[0]) ? $posts[0] : '<p> There are no posts <p>';
$firstPost = !empty($posts[0]) ? $posts[0] : null;


// Null Coalescing Operator ?? (PHP 7.4)
// Will return null if $posts is empty
// Always returns first parameter, unless first parameter happens to be NULL
$firstPost = $posts[0] ?? null;

var_dump($firstPost);

echo '<br>';

/* -------- Switch Statements ------- */

$favcolor = 'red';

switch ($favcolor) {
  case 'red':
    echo 'Your favorite color is red!';
    break;
  case 'blue':
    echo 'Your favorite color is blue!';
    break;
  case 'green':
    echo 'Your favorite color is green!';
    break;
  default:
    echo 'Your favorite color is not red, blue, nor green!';
}