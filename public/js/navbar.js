const navbar = document.getElementById("link_navbar");

function handleResize() {
  var isMediumViewport = window.matchMedia("(min-width: 768px)").matches;

  if (isMediumViewport) {
    navbar.classList.remove("transition-all");
    console.log("asdhfjadshff");
  }
}
window.addEventListener("resize", handleResize);

function onToggleMenu(e) {
  if (e.name === "menu") {
    e.name = "close";
    navbar.classList.toggle("translate-x-[-30vw]");
  } else {
    e.name = "menu";
    navbar.classList.toggle("translate-x-[-30vw]");
  }
  if (!navbar.classList.contains("transition-all")) {
    navbar.classList.add("transition-all");
  }
}
