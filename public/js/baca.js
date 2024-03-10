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



function like(e) {
  const parent = e.parentNode.parentNode;
  const child = parent.children[1].children[0];
  if (child.classList.contains("text-[#2f8cc0]")) {
    child.classList.remove("text-[#2f8cc0]");
  }

  e.classList.toggle("text-[#2f8cc0]");
}
function dislike(e) {
  const parent = e.parentNode.parentNode;
  const child = parent.children[0].children[0];
  if (child.classList.contains("text-[#2f8cc0]")) {
    child.classList.remove("text-[#2f8cc0]");
  }

  e.classList.toggle("text-[#2f8cc0]");
}
