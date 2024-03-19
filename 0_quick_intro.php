<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="main.css"></link>
  <title>Quick PHP Intro</title>
</head>

<?php 
  $mode = "dark"; // change to "light"
  $name = "Endless";
  $greeting = "Greeting";

  // Data Types
  $num = 42; // integer
  $dub = 42.02; // double
  $boolean = true; // true or false
  $arr = array('e','l','o','h');
  define('DAYS_IN_YEAR', 365)

?>

<body <?php if ($mode === "dark"): ?> class="dark" <?php endif?>>
  <h1>
    <?php echo "${greeting} ${name}!" ?>
    <br>
  </h1>
  <hr>
  <h3 class="redtext">
    <?php echo "$arr[0]$arr[1]$arr[2] Hell" ?>
  </h3>

  <h2>
    <?php echo $arr[3]; echo $arr[0]; echo $arr[1]; echo $arr[1]; echo $arr[2] ?>
  </h2>
  <h2>
    <?php echo "! $arr[3]$arr[0]$arr[1]$arr[1]$arr[2] !" ?>
  </h2>
  <h2>
    <?php echo DAYS_IN_YEAR ?>
  </h2>
  
</body>
</html>

