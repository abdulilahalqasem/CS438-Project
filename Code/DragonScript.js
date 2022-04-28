const dragon = document.getElementById("Dragon");
const knight1 = document.getElementById("Knight1");
const knight2 = document.getElementById("Knight2")

document.getElementById("highSpan").innerHTML = 0;

var counter = 0;
var score = 0;

var xhttp = new XMLHttpRequest();

function jump() {
  if (dragon.classList != "jump") {
    dragon.classList.add("jump");

    setTimeout(function () { 
      dragon.classList.remove("jump"); }, 700);
  }
}

let isAlive = setInterval(function () {
  // get current dragon Y position
  let dragonTop = parseInt(window.getComputedStyle(dragon).getPropertyValue("top"));

  // get current knight X position
  let knight1Left = parseInt(window.getComputedStyle(knight1).getPropertyValue("left"));
  let knight2left = parseInt(window.getComputedStyle(knight2).getPropertyValue("left"));
  
  // detect collision
  if ((knight1Left < 65 && knight1Left > 0 && dragonTop >= 450) | (knight2left < 120 && knight2left > 0 && dragonTop >= 450)) {

    // collision
    score = Math.floor(counter/30)

    if (!confirm("Press \"OK\" to play again, OR \"Cancel\" if you want to see the LeaderBoard.")) {
        window.open("leaderboard.php");
      } 
    else {
    }

    xhttp.open("POST", "game.php", true);
    var ourFormData = new FormData();
    ourFormData.append("score", score);
    xhttp.send(ourFormData);

    //set highscore to score, if score > highscore
    if(document.getElementById("highSpan").innerHTML <  score){
      document.getElementById("highSpan").innerHTML = score;
    }

    counter =0;
    
    document.addEventListener("keydown", function(event) {
      jump();  
    });
  }

  else{
    counter++;
    score = document.getElementById("scoreSpan").innerHTML = Math.floor(counter/30);
  } 

}, 10);

document.addEventListener("keydown", function(event) {
  jump();
});
