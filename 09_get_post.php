<?php
/* --- $_GET & $_POST Superglobals -- */

// echo $_GET['username'];
// echo $_GET['email'];

/*
  We can pass data through urls and forms using the $_GET and $_POST superglobals.
*/

if (isset($_POST['submit'])) {
  // echo '<h3>' . $GET['username'] . $GET['email'] . '</h3>';
  echo '<h3>' . $_POST['username'] . ' - ' . $_POST['email'] . '</h3>';
} ?>


<!-- Pass data through a link -->
<a href="<?php echo $_SERVER['PHP_SELF']; ?>?username=FABRI-&email=endless@gmail.com">
  <p>Click Me!<p>
</a>


<br><br>

<!-- Pass data through a form -->
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
<div>
  <label for="username">Name: </label>
  <input type="text" name="username">
</div>
<br>
<div>
<label for="email">Email: </label>
  <input type="email" name="email">
</div>
<br>
  <input type="submit" name="submit" value="Submit">
</form>