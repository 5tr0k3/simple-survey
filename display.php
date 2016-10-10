<?php require_once("include/connection.php"); ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Survey Index</title>
  </head>
  <body>
    <center>
    <?php
    $user = $_POST["user"];
    $session_id = $_POST["session_id"];
    $sql = "INSERT INTO survey (user, session_id)
              VALUES ('$user', '$session_id')";
              if ($connection->query($sql) === TRUE) { ?>
                <h1>James</h1>
                <form action="choice.php" method="post">
                  <input type="hidden" value="<?php echo $user; ?>" name="user">
                  <input type="hidden" value="<?php echo $session_id; ?>" name="session_id">
                  <input type="hidden" value="defiant-boy" name="display_image">
                  <input type="hidden" value="<?php $display_time = date('Y-m-d H:i:s'); echo $display_time; ?>" name="display_time">
                  <input type="hidden" value="<?php $display_linux_time = time(); echo $display_linux_time; ?>" name="display_linux_time">
                  <br /><br />
                  <input type="image" src="defiant-boy.jpg"  style="height:428px;" alt="Submit Form" />
                <!--  <input type="submit" value="Next" > -->
                </form>
              <h2>Click on one of the image to proceed</h2>
        <?php } else {
                echo "<h1> Something went wrong </h1><br />" . "If this happens again, make note of the error below and email it to the surveyer. <br /> <br />" . $sql . "<br>" . $connection->error . "<br /> <br /> <a href='participant.php'>Go Back</a>";
              }
    ?>
    </center>
  </body>
</html>
<?php
	// Close connection
	mysqli_close($connection);
?>
