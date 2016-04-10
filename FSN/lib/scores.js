
function getFixtures() {
  var target, xhr, success;

  target = document.getElementById("tables");

  xhr = new XMLHttpRequest();

  success = function(){
    var fixtures = JSON.parse(xhr.responseText);

    if(fixtures != false) {
      for (var fix in fixtures) {
        target.innerHTML += "<tr>\
          <td>"+fix[0]+"</td>\
          <td>"+fix[1]+"</td>\
          <td>v</td>\
          <td>"+fix[2]+"</td>\
        </tr>";
      }
    }

    console.log(JSON.parse(xhr.responseText));

  }


  xhr.open("GET", "PHP/refreshFixtures.php", true);
  xhr.addEventListener("load", success);
  xhr.send();
}

function getScores() {
  setInterval(function() {
    var target, xhr, success;

    target = document.getElementById("tables");

    xhr = new XMLHttpRequest();

    success = function(){
      var scores = JSON.parse(xhr.responseText);
      target.innerHTML = "";
      if(scores != false){
        for (var Lscore in LiveScores) {
          target.innerHTML += "<tr>\
            <td>"+Lscore[0]+"</td>\
            <td>"+Lscore[1]+"</td>\
            <td>"+Lscore[2]+"</td>\
            <td>"+Lscore[3]+"</td>\
            <td>"+Lscore[4]+"</td>\
            <td>"+Lscore[5]+"</td>\
          </tr>";
        }
      } else {
        getFixtures();
        // target.innerHTML = "No Scores available... getting fixtures...";

      }
        console.log(JSON.parse(xhr.responseText));
    }

    xhr.open("GET", "PHP/refreshTable.php", true);
    xhr.addEventListener("load", success);
    xhr.send();
  }, 5000);
}

window.addEventListener("load", getScores());
