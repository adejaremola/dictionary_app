<?php
  require_once("database.php");
  // the input boxes have the current values of the word entry as default values
  function getWord($wordId, $conn)
  {
    $id = $wordId;
  
    $sql = "select word, meaning from word where id='" . $id . "'";
  
    $result = mysqli_query($conn, $sql);

    $wordArr = [];
  
    while($row = mysqli_fetch_assoc($result)) {
      $wordArr["word"] = $row["word"];
      $wordArr["meaning"] = $row["meaning"];
    }
    
    mysqli_close($conn);

    return $wordArr;
  }

  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST["id"];
    $word = $_POST["word"];
    $meaning = $_POST["meaning"];
  
    $sql = "update word set word='$word', meaning='$meaning' where id=$id";
  
    mysqli_query($conn, $sql);

    mysqli_close($conn);

    header("location: /dashboard.php");
  } 


?>