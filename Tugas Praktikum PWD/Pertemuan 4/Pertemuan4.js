const Scroll = document.getElementById("Scroll");

window.onscroll = function () {
  if (document.body.scrollTop > 500 || document.documentElement.scrollTop > 500) {
    scrollTopBtn.style.display = "block";
  } else {
    scrollTopBtn.style.display = "none";
  }
};

Scroll.onclick = function () {
  window.scrollTo({ top: 0, behavior: "smooth" });
};