import "./bootstrap";

function scrollToTop() {
    window.scrollTo({
        top: 0,
        behavior: "smooth",
    });
}
const scroll = document.getElementById("scroll");
scroll.addEventListener("click", scrollToTop);
