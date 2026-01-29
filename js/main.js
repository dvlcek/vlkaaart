/* ================= NAVBAR SCROLL ================= */
const navbar = document.querySelector(".navbar");

window.addEventListener("scroll", () => {
    if (window.scrollY > 50) {
        navbar.classList.add("scrolled");
    } else {
        navbar.classList.remove("scrolled");
    }
});
const hamburger = document.querySelector(".hamburger");
const navLinks = document.querySelector(".nav-links");

hamburger.addEventListener("click", () => {
  hamburger.classList.toggle("active");
  navLinks.classList.toggle("open");
});

// close menu when clicking a link
document.querySelectorAll(".nav-links a").forEach(link => {
  link.addEventListener("click", () => {
    hamburger.classList.remove("active");
    navLinks.classList.remove("open");
  });
});

// /* ================= HERO SLIDER ================= */
// const slides = document.querySelectorAll(".hero-slide");
// let currentSlide = 0;
// let sliderInterval = null;

// function showSlide(index) {
//     slides.forEach(slide => slide.classList.remove("active"));
//     slides[index].classList.add("active");
// }

// function nextSlide() {
//     currentSlide = (currentSlide + 1) % slides.length
//     showSlide(currentSlide);
// }

// function startSlider() {
//     sliderInterval = setInterval(nextSlide, 5000);
// }

// function stopSlider() {
//     clearInterval(sliderInterval);
// }

// startSlider();

// /* Pause slider on hover (desktop) */
// document.querySelector(".hero").addEventListener("mouseenter", stopSlider);
// document.querySelector(".hero").addEventListener("mouseleave", startSlider);

/* ================= PORTFOLIO FILTER ================= */
const filterButtons = document.querySelectorAll(".filters button");
const artCards = document.querySelectorAll(".portfolio .art-card");

filterButtons.forEach(button => {
    button.addEventListener("click", () => {
        const filter = button.dataset.filter;

        filterButtons.forEach(btn => btn.classList.remove("active"));
        button.classList.add("active");

        artCards.forEach(card => {
            const category = card.dataset.category;

            if (filter === "all" || category === filter) {
                card.style.display = "block";
            } else {
                card.style.display = "none";
            }
        });
    });
});
if (filterButtons.length > 0) {
  filterButtons[0].click();
}


/* ================= OPTIONAL: REVEAL ON SCROLL ================= */
const revealElements = document.querySelectorAll("section");

const revealObserver = new IntersectionObserver(
    entries => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add("visible");
            }
        });
    },
    { threshold: 0.15 }
);

revealElements.forEach(section => {
    section.classList.add("reveal");
    revealObserver.observe(section);
});
