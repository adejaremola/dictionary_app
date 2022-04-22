<?php
  require("database.php");

  $sql = "select * from word";

  $result = mysqli_query($conn, $sql);
  
  $word_arrays = [];
  while($row = mysqli_fetch_assoc($result)) {
    $word_array = [];
    $word_array["id"] = $row["id"];
    $word_array["word"] = $row["word"];
    $word_array["meaning"] = $row["meaning"];
    array_push($word_arrays, $word_array);
  }

  echo json_encode($word_arrays);
  
  mysqli_close($conn);



?>