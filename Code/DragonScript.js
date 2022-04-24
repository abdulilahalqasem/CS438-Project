const dragon = document.getElementById("Dragon");
const knight = document.getElementById("Knight");
var lives = 3;
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
    lives -= 1;
    if(lives == 0) {
      alert("Game Over!")
    }
      
  }
}, 10);

window.addEventListener("keydown", function(event) {
  jump();
  
});
