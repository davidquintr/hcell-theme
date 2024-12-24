const ACTIVE_SLUG = "active";

function initializehorizontalAccordion() {
    const horizontalAccordion = document.querySelectorAll(".tecnoblock-accordion-horizontal") as NodeListOf<HTMLUListElement>;

    horizontalAccordion.forEach((accordion) => {
        const items = accordion.children as HTMLCollectionOf<HTMLLIElement>;
        const buttons = Array.from(items) as HTMLLIElement[];

        buttons.forEach((button) => {
            button.addEventListener("click", () => {
                powerOffAccordionsItems(buttons);
                button.classList.add(ACTIVE_SLUG)
            })
        })

    })
}

function powerOffAccordionsItems(accordions : HTMLLIElement[]) {
    accordions.forEach((accordion) => {
        accordion.classList.remove(ACTIVE_SLUG);
    })
}

if (window.acf) {
    window.acf.addAction('render_block_preview', initializehorizontalAccordion);
}

document.addEventListener('DOMContentLoaded', initializehorizontalAccordion);