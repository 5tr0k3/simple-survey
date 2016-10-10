<?php require_once("include/connection.php"); ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Survey Index</title>
  </head>
  <body>
    <center>
      <h1>Select one, as quickly as possible!</h1>
      <?php
      $user = $_POST["user"];
      $session_id = $_POST["session_id"];
      $display_image = $_POST["display_image"];
      $display_time = $_POST["display_time"];
      $display_linux_time = $_POST["display_linux_time"];
      $sql = "UPDATE survey SET display_image='$display_image', display_time='$display_time', display_linux_time='$display_linux_time' WHERE user='$user' AND session_id='$session_id'";
                if ($connection->query($sql) === TRUE) { ?>
                  <div id="image-table">
                      <table>
                          <tr>
                              <td style="padding:20px">
                                <form action="results.php" method="post">
                                  <input type="hidden" value="<?php echo $user; ?>" name="user">
                                  <input type="hidden" value="<?php echo $session_id; ?>" name="session_id">
                                  <input type="hidden" value="<?php echo $display_time; ?>" name="display_time">
                                  <input type="hidden" value="knife" name="choice_image">
                                  <input type="hidden" value="<?php $choice_time = date('Y-m-d H:i:s'); echo $choice_time; ?>" name="choice_time">
                                  <input type="hidden" value="<?php $choice_linux_time = time(); echo $choice_linux_time; ?>" name="choice_linux_time">
                                  <br /><br />
                                  <input type="image" src="knife-vertical.jpg"  style="height:428px;" alt="Submit Form" />
                                <!--  <input type="submit" value="Next" > -->
                                </form>
                              </td>
                              <td style="padding:20px">
                                <form action="results.php" method="post">
                                  <input type="hidden" value="<?php echo $user; ?>" name="user">
                                  <input type="hidden" value="<?php echo $session_id; ?>" name="session_id">
                                  <input type="hidden" value="<?php echo $display_time; ?>" name="display_time">
                                  <input type="hidden" value="teddy" name="choice_image">
                                  <input type="hidden" value="<?php $choice_time = date('Y-m-d H:i:s'); echo $choice_time; ?>" name="choice_time">
                                  <input type="hidden" value="<?php $choice_linux_time = time(); echo $choice_linux_time; ?>" name="choice_linux_time">
                                  <br /><br />
                                  <input type="image" src="teddy.jpg"  style="height:428px;" alt="Submit Form" />
                                <!--  <input type="submit" value="Next" > -->
                                </form>
                              </td>
                          </tr>
                      </table>
                  </div>
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
