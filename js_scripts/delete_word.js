function deleteWord(id) {
  let XHR = new XMLHttpRequest();

  XHR.addEventListener("load", function(event){
    location.reload();
  });

  XHR.open("POST", "php_scripts/delete_word.php");

  XHR.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

  XHR.send("id="+id);
}