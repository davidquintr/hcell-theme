function initializeCarousel() {
    const carouselSliders = document.querySelectorAll(".tecnoblock-carousel-slider") as NodeListOf<HTMLUListElement>;
    const carouselCounters = document.querySelectorAll(".tecnoblock-carousel-counter") as NodeListOf<HTMLDivElement>;

    carouselSliders.forEach((carousel, index) => {
        const items = carousel.children as HTMLCollectionOf<HTMLLIElement>;
        const counterElement = carouselCounters[index];
        const buttons = Array.from(counterElement.children) as HTMLButtonElement[];

        const automovement = carousel.getAttribute("automovement");
        const intervalTime = automovement ? parseInt(automovement) : 0;

        buttons.forEach((button, btnIndex) => {
            button.addEventListener("click", () => {
                scrollToItem(carousel, items[btnIndex]);
            });
        });

        carousel.addEventListener("scroll", () => {
            updateActiveClass(carousel, buttons, items);
        });

        updateActiveClass(carousel, buttons, items);

        if (intervalTime > 0) {
            setInterval(() => scrollToItem(carousel, items[(findActiveIndex(carousel, items) + 1) % items.length]), intervalTime);
        }
    });
}

function scrollToItem(carousel: HTMLUListElement, targetItem: HTMLLIElement) {
    carousel.scrollTo({
        left: targetItem.offsetLeft,
        behavior: "smooth"
    });
}

function updateActiveClass(carousel: HTMLUListElement, buttons: HTMLButtonElement[], items: HTMLCollectionOf<HTMLLIElement>) {
    const activeIndex = findActiveIndex(carousel, items);
    buttons.forEach((button, index) => {
        button.classList.toggle("active", index === activeIndex);
    });
}

function findActiveIndex(carousel: HTMLUListElement, items: HTMLCollectionOf<HTMLLIElement>): number {
    return Math.round(carousel.scrollLeft / (items[0]?.offsetWidth || 1));
}

if (window.acf) {
    window.acf.addAction('render_block_preview', initializeCarousel);
}

document.addEventListener('DOMContentLoaded', initializeCarousel);
