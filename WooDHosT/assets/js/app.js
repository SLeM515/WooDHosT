document.addEventListener("DOMContentLoaded", function() {
    const cards = document.querySelectorAll(".card");
    cards.forEach(card => {
        card.addEventListener("mouseenter", () => card.classList.add("hovered"));
        card.addEventListener("mouseleave", () => card.classList.remove("hovered"));
    });

    const statFills = document.querySelectorAll(".stat-fill");
    statFills.forEach(fill => {
        const width = fill.getAttribute("data-width");
        setTimeout(() => {
            fill.style.width = width + "%";
        }, 500);
    });
});
