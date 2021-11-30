// scroll TOP Button Events

if (scrollButton) {
    window.addEventListener('scroll', () => {
        if (pageYOffset > (window.innerHeight * 1.2)) {
            scrollButton.style.display = "flex";
        } else {
            scrollButton.style.display = "none";
        }
    });
    scrollButton.addEventListener("click", () => {
        window.scrollTo(0, 0);
    });
}

// Hamburger Menu events
hamburgerMenu.addEventListener('click', () => {
    navContent.classList.add('show');
    document.body.style.overflow = "hidden";
});
closeNavButton.addEventListener('click', () => {
    navContent.classList.remove('show');
    document.body.style.overflow = "initial";
});
navLinks.forEach(link => {
    link.addEventListener('click', () => {
        navContent.classList.remove('show');
        document.body.style.overflow = "initial";
    })
})