// Optional: click effect on courses
const boxes = document.querySelectorAll('.course-box');
boxes.forEach(box => {
    box.addEventListener('click', () => {
        alert(`You clicked on ${box.textContent}`);
    });
});
window.addEventListener("scroll", function () {
    const footer = document.getElementById("footer");

    if (window.innerHeight + window.scrollY >= document.body.scrollHeight - 5) {
        footer.classList.add("show");
    }
});

