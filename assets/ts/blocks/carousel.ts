const carouselSliders = document.querySelectorAll(".tecnoblock-carousel-slider") as NodeListOf<HTMLUListElement>;
const carouselCounters = document.querySelectorAll(".tecnoblock-carousel-counter") as NodeListOf<HTMLDivElement>;

if (carouselSliders.length && carouselCounters.length) {
    carouselSliders.forEach((carousel, index) => handleCarouselInstance(carousel, index));
}

function handleCarouselInstance(carousel: HTMLUListElement, index: number) {
    const items = carousel.children as HTMLCollectionOf<HTMLLIElement>;
    const buttons = Array.from(carouselCounters[index].children) as HTMLButtonElement[];

    buttons.forEach((button, btnIndex) => {
        button.addEventListener("click", () => {
            const targetItem = items[btnIndex];
            if (targetItem) {
                carousel.scrollTo({
                    top: 0,
                    left: targetItem.offsetLeft,
                    behavior: "smooth"
                });
            }
        });
    });

    carousel.addEventListener("scroll", () => {
        const activeIndex = findActiveCarouselIndex(carousel, items);
        updateActiveCarouselClass(buttons, activeIndex);
    });

    const initialIndex = findActiveCarouselIndex(carousel, items);
    updateActiveCarouselClass(buttons, initialIndex);
}

function findActiveCarouselIndex(carousel: HTMLUListElement, items: HTMLCollectionOf<HTMLLIElement>): number {
    const scrollLeft = carousel.scrollLeft;
    const itemWidth = items[0]?.offsetWidth || 0;

    return Math.round(scrollLeft / itemWidth);
}

function updateActiveCarouselClass(buttons: HTMLButtonElement[], activeIndex: number): void {
    buttons.forEach((button, index) => {
        if (index === activeIndex) {
            button.classList.add("active");
        } else {
            button.classList.remove("active");
        }
    });
}
