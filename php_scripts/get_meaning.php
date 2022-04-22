<?php
  require("database.php");
  
  $word = $_POST["word"];
  $meaning = "The inputed word isn't in the application's word pool. Please try again with another word.";

  $sql = "select meaning from word where word='" . $word . "'";

  $result = mysqli_query($conn, $sql);

  while($row = mysqli_fetch_assoc($result)) {
    $meaning = $row["meaning"];
  }

  echo $meaning;
  
  mysqli_close($conn);


?>