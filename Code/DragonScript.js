const dragon = document.getElementById("Dragon");
const knight = document.getElementById("Knight");
var counter = 0;
var score = 0;
function jump() {
  if (dragon.classList != "jump") {
    dragon.classList.add("jump");

    setTimeout(function () {
      dragon.classList.remove("jump");
    }, 700);
  }
}

let isAlive = setInterval(function () {
  // get current dragon Y position
  let dragonTop = parseInt(window.getComputedStyle(dragon).getPropertyValue("top"));

  // get current knight X position
  let knightLeft = parseInt(window.getComputedStyle(knight).getPropertyValue("left"));

  
  // detect collision
  if (knightLeft < 65 && knightLeft > 0 && dragonTop >= 450) {

    // collision
    
    alert("Game Over! Score: "+Math.floor(counter/100));

    if(document.getElementById("highSpan").innerHTML <  score)
      document.getElementById("highSpan").innerHTML = score;
    counter =0;
    document.addEventListener("keydown", function(event) {
      jump();
        
    });
      
      
  }else{
    counter++;
    score = document.getElementById("scoreSpan").innerHTML = Math.floor(counter/100);
    
  } 

}, 10);

document.addEventListener("keydown", function(event) {
  jump();
  
});
