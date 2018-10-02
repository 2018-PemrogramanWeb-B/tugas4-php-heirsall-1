<?php
session_start()
?>

<html>
  <head>
    <title>Login Page</title>
    </style>
  </head>
  <body>
    <h1>Tugas 4</h1>
    <h2>Login form dengan PHP</h2>
    <form action="validate.php" method="post">
      Username : <input type="text" name="username" placeholder="user" required><br>
      Password : <input type="password" name="password" placeholder="password" required><br>
      <input type="submit">
    </form>
  </body>
</html>