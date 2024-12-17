const headerPart = document.querySelector("header.wp-block-template-part") as HTMLElement;

document.addEventListener("scroll", () => 
    headerPart.classList.toggle("on-scroll", window.scrollY > 0)
);
