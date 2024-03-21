<?php 
  // Simple Array
  $numbers = [1,44,55,22];
  $fruits = array('apple', 'orange', 'pear');

  print_r($numbers);
  echo('<br>');
  var_dump($numbers); // useful for debugging
  echo('<br>');
  echo $fruits[1];
  echo('<hr>');

  // Associative Array
  $hex = [
    'red' => '#f00',
    'blue' => '#00f',
    'green' => '#0f0'
  ];

  echo $hex['blue'];
  echo('<br>');

  $person = [
    'first_name' => 'Fabrizio',
    'nick_name' => 'Endless',
    'email' => '#endless@gmail.com'
  ];

  echo $person['first_name'];
  echo('<hr>');

  $people = [
    [
      'first_name' => 'Gesu Cristo',
      'nick_name' => 'Jesus',
      'email' => '#jesus666@gmail.com'
    ],
    [
      'first_name' => 'Santa Vergine Maria',
      'nick_name' => 'Mary',
      'email' => 'mary69@gmail.com'
    ],
    [
      'first_name' => 'Fabrizio',
      'nick_name' => 'Endless',
      'email' => 'endless999@gmail.com'
    ],
  ];

  $JSONpeople = '{"Endless": 35, "Jesus": 33, "Mary": 25 }';
  var_dump(json_decode($JSONpeople));
  echo('<br>');
  echo('<br>');

  echo $people[1]['email'];
  echo('<br>');
  echo('<br>');
  print_r(json_encode($people));
?>