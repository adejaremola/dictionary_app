<?php
  require("database.php");
  
  $word = $_POST["word"];
  $meaning = $_POST["meaning"];

  $sql = "insert into word (word, meaning) values ('$word', '$meaning')";

  mysqli_query($conn, $sql);

  mysqli_close($conn);

?>