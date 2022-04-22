window.addEventListener("load", function() {
  
  let XHR = new XMLHttpRequest();

  XHR.addEventListener("load", function(event){
    let data = JSON.parse(event.target.responseText);
    data.forEach((row, index) => {
      let rowStr = `
        
          <td>${++index}</td>
          <td>${row["word"]}</td>
          <td>${row["meaning"]}</td>
          <td><a href="edit.php?id=${row["id"]}" class="btn btn-md btn-primary btn-block">Edit</a></td>
          <td>
              <button onclick="deleteWord(${row["id"]})" class="btn btn-md btn-danger btn-block">Delete</button>
          </td>
      `;
      let tableBody = document.getElementById("table-body");
      let tableRow = tableBody.insertRow();
      tableRow.innerHTML = rowStr;

    });
  });

  XHR.open("GET", "php_scripts/word_index.php", true);

  XHR.send();
});