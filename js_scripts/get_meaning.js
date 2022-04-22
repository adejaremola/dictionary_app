window.addEventListener("load", function() {
  function sendData() {
    let XHR = new XMLHttpRequest();

    let FD = new FormData(form);

    XHR.addEventListener("load", function(event){
      responseArea.innerHTML = event.target.responseText;
    });

    XHR.open("POST", "php_scripts/get_meaning.php");

    XHR.send(FD);
  }

  let form = document.getElementById("myForm");
  let responseArea = document.getElementById("res-area");

  form.addEventListener("submit", function(event){
    event.preventDefault();
    sendData();
  });
});
