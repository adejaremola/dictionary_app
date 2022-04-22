window.addEventListener("load", function() {
  function sendData() {
    let XHR = new XMLHttpRequest();

    let FD = new FormData(form);

    XHR.addEventListener("load", function(event){
      location.href = "/dashboard.php";
    });

    XHR.open("POST", "php_scripts/upload_image.php");

    XHR.send(FD);
  }

  let form = document.getElementById("myForm");

  form.addEventListener("submit", function(event){
    event.preventDefault();
    sendData();
  });
});
