const liste = document.querySelectorAll(".list");

function activeLink() {
    liste.forEach((item) =>
        item.classList.remove("active"));
    this.classList.add("active");
}
liste.forEach((item) =>
    item.addEventListener("click", activeLink));