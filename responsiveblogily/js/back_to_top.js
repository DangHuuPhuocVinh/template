const backToTopButton = document.querySelector(".back_to_top_btn");

window.addEventListener("scroll", scrollFunction);

function scrollFunction() {
    if (window.pageYOffset > 300) {
        backToTopButton.style.display = "block";
    } else {
        backToTopButton.style.display = "none";
    }
}

backToTopButton.addEventListener("click", backToTop);

function backToTop() {
    window.scrollTo({ top: 0, behavior: 'smooth' });

}