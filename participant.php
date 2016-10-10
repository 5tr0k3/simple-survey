<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Participant Details - Survey</title>
  </head>
  <body>
    <center>
    <h1>Participant Details</h1>
      <form action="display.php" method="post">
        Please enter your name: <input type="text" name="user"><br />
        <input type="hidden" value="<?php $session_id = rand(1000000,9999999); echo $session_id; ?>" name="session_id">
        <br /><br />
        <input type="submit" value="Next" >
      </form>
    </center>
  </body>
</html>
