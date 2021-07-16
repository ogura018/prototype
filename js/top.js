const BTN_TOP = document.querySelector("#back_top");

BTN_TOP.addEventListener("click", () => {
    window.scrollTo({
        top: 0,
        behavior: "smooth"
    });
});

window.addEventListener('scroll', () => {
    let _offsetY = window.pageYOffset;
    if (_offsetY > 300) {
        BTN_TOP.style.display = "flex";
    } else {
        BTN_TOP.style.display = "none";
    };
});