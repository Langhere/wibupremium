const observer = new IntersectionObserver((entries) => {
  entries.forEach((entry) => {
    const isBelowViewport = entry.boundingClientRect.top >= window.innerHeight;
    if (!entry.isIntersecting && isBelowViewport) {
      entry.target.classList.add("translate-y-1/2");
    } else {
      entry.target.classList.remove("translate-y-1/2");
    }
  });
});

const animasi = document.querySelectorAll(".pop");
animasi.forEach((el) => observer.observe(el));
