<?php
  require("database.php");
  
  $id = $_POST["id"];

  $sql = "delete from word where id='$id'";

  mysqli_query($conn, $sql);
  
  mysqli_close($conn);

?>