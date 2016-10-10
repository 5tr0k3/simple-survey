<?php require_once("include/connection.php"); ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Survey Index</title>
  </head>
  <body>
    <h1> Thank You</h1>
    <?php
    $user = $_POST["user"];
    $session_id = $_POST["session_id"];
    $choice_image = $_POST["choice_image"];
    $choice_time = $_POST["choice_time"];
    $choice_linux_time = $_POST["choice_linux_time"];
    $display_time = $_POST["display_time"];
    $diff_display_time = new DateTime($display_time);
    $diff_choice_time = new DateTime($choice_time);
    $time_difference  = $diff_display_time->diff($diff_choice_time);
    //echo $time_difference->format("%H:%I:%S") . "<br />";
    $seconds_difference = $time_difference->s;
    //echo $interval;
    $sql = "UPDATE survey SET choice_image='$choice_image', choice_time='$choice_time', choice_linux_time='$choice_linux_time', time_difference='$seconds_difference' WHERE user='$user' AND session_id='$session_id'";
              if ($connection->query($sql) === TRUE) {
                    $sql = "SELECT id, user, display_image, choice_image, time_difference FROM survey";
                      $result = $connection->query($sql);
                        if ($result->num_rows > 0) {
                            // output data of each row
                            while($row = $result->fetch_assoc()) {
                                echo "Unique ID: " . $row["id"] . " - User: " . $row["user"] . " - Display Image: " . $row["display_image"]. " - Selected Image:" . $row["choice_image"].  " - Difference in Seconds:" . $row["time_difference"]. "<br>";
                            }
              }} else {
                      echo "<h1> Something went wrong </h1><br />" . "If this happens again, make note of the error below and email it to the surveyer. <br /> <br />" . $sql . "<br>" . $connection->error . "<br /> <br /> <a href='participant.php'>Go Back</a>";
                    }

    ?>
      <a href="index.php" target="_parent">Back to Main</a>
  </body>
</html>
<?php
	// Close connection
	mysqli_close($connection);
?>
