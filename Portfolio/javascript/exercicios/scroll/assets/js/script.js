function scrollingTop() {
    window.scrollTo({
        top: 0,
        left: 0,
        behavior: "smooth"
    })
}
function scrollAtt() {
    if (window.scrollY === 0) {
        document.querySelector('.buttonUp').style.display = "none";
    } else {
        document.querySelector('.buttonUp').style.display = "block";
    }
}

window.addEventListener('scroll', scrollAtt);