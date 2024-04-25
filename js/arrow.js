debugger;
const arrow = document.getElementById("arrowr");
const subm = document.getElementsByClassName("submenu")[0];
const h3 = document.getElementById("h3");

arrow.addEventListener("mouseover", function handleMouseOver() {
  //subm.style.display = "flex";
  //subm.style.transition = "all 5s ease-in";
  subm.classList.add("drop");
  h3.style.color = "red";
});

arrow.addEventListener("mouseout", function handleMouseOut() {
  subm.style.display = "none";
  subm.classList.remove("drop");
  h3.style.color = "black";
});

var boxOne = document.getElementsByClassName("box")[0];

document.getElementsByClassName("toggleButton")[0].onclick = function () {
  if (this.innerHTML === "Play") {
    this.innerHTML = "Pause";
    boxOne.classList.add("horizTranslate");
  } else {
    this.innerHTML = "Play";
    var computedStyle = window.getComputedStyle(boxOne),
      marginLeft = computedStyle.getPropertyValue("margin-left");
    boxOne.style.marginLeft = marginLeft;
    boxOne.classList.remove("horizTranslate");
  }
};
