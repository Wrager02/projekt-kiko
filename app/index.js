document.getElementById("ansuchen").addEventListener("click", () => {
    document.getElementById("ansuchenDownload").click();
});

document.getElementById("antrag").addEventListener("click", () => {
    document.getElementById("antragDownload").click();
});

document.getElementById("buch").addEventListener("click", () => {
    document.getElementById("buchDownload").click();
});

document.getElementById('hamburgerContainer').addEventListener('click', navStatus);
document.getElementById("sliderBackground").addEventListener("click", navStatus);

function navStatus() {
    let hamburger = document.getElementById("hamburger");
    let slider = document.getElementById("slider");
    if (hamburger.classList.contains("hamburgerActive")) {
        hamburger.classList.remove("hamburgerActive");
        slider.classList.remove("sliderActive");
        document.getElementById("sliderBackground").classList.remove("sliderActive");
        document.getElementsByTagName("body")[0].classList.remove("disableScrolling");
    } else {
        hamburger.classList.add("hamburgerActive");
        slider.classList.add("sliderActive");
        document.getElementById("sliderBackground").classList.add("sliderActive");
        document.getElementsByTagName("body")[0].classList.add("disableScrolling");
    }
}