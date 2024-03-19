<?php
/* ---------- PHP Data Types ---------- */
/*
- String        Series of characters surrounded by quotes
- Integer       Whole numbers
- Float         Decimal numbers
- Boolean       true or false
- Array         Special variable, which can hold more than one values
- Object        A class
- NULL          Empty variable
- Resource      Special variable that holds resource
*/


/* ---------- Variable Rules ----------  */
/*
- Variables must be prefixed with $
- Variables must start with letter or the underscore character
- Variables can't start with a number
- Variables can only contain alpha-numeric characters and underscores (A-z, 0-9, and _)
- Variables are case-sensitive ($name and $NAME are two different variables)
*/
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP Data Types</title>
</head>

<?php
  $name = 'Endless';
  $age = 35;
  $has_kids = false;
  $cash_on_hand = 12.75;
?>

<?php
// echo - Output strings, numbers, html, etc
  echo 123, ' Hello ', 10.5, '<br>'; 

// print - Works like echo, but can only take in a single argument
  print 321;
  print '<br>';

// print_r() - Print single values and arrays
  print_r([554,555,556]);

// var_dump() - Returns more info like data type and length
  var_dump('Greetings <br>');
  var_dump([99,98,97], '<br>');
  var_dump(true, '<br>');

// var_export() - Similar to var_dump(). Outputs a string representation of a variable
  var_export('Hello!');
  echo('<br>');
  echo('Hello! <br>');
  print('Hello!');  
?>

<body>
  <hr>
<?php
    // var_dump($cash_on_hand)

    // Different Syntax, same Results
    echo $name . ' is ' . $age . ' years old <br>';
    echo "$name is $age years old <br>";
    echo "${name} is ${age} years old <br>"; // very similar to JS

    // echo '5' + '5';     = 10 // in JS is concatenated and result 55
    // echo 5 + 5;         = 10

    define('HOST', 'localhost');
    define('DB_NAME', 'local_database');
    echo('<br>');
    echo HOST;
    echo('<br>');
    echo DB_NAME;

?>
    <h1>
    <?php echo "${name} is ${age} years old!" ?>
    <br>
  </h1>
</body>
</html>

