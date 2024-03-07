const navbar = document.getElementById("link_navbar");
function onToggleMenu(e) {
  if (e.name === "menu") {
    e.name = "close";
    navbar.classList.toggle("sm:translate-x-[-30vw]");
  } else {
    e.name = "menu";
    navbar.classList.toggle("sm:translate-x-[-30vw]");
  }
  if (!navbar.classList.contains("sm:transition-all")) {
    navbar.classList.add("sm:transition-all");
  }
}

function handleResize() {
  var isMediumViewport = window.matchMedia("(min-width: 768px)").matches;

  if (isMediumViewport) {
    navbar.classList.remove("sm:transition-all");
  }
}
window.addEventListener("resize", handleResize);

//bagian di bawah buat animasi

const observer = new IntersectionObserver((entries) => {
  entries.forEach((entry) => {
    if (entry.isIntersecting) {
      entry.target.classList.remove("translate-y-1/2");
    } else {
      entry.target.classList.add("translate-y-1/2");
    }
  });
});

const animasi = document.querySelectorAll(".pop");
animasi.forEach((el) => observer.observe(el));

const komen = new IntersectionObserver((entries) => {
  entries.forEach((entry) => {
    if (entry.isIntersecting) {
      entry.target.classList.remove("translate-x-[-40px]");
    } else {
      entry.target.classList.add("translate-x-[-40px]");
    }
  });
});

const comment = document.querySelectorAll(".komen");
comment.forEach((ed) => komen.observe(ed));
