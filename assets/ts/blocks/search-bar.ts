const searchBarButton = document.querySelector('.tecnoblock-search-bar-button');
console.log(searchBarButton)

if(searchBarButton) {
    searchBarButton.addEventListener('click', () => {
        const searchBar = document.querySelector('.tecnoblock-search-bar');
        searchBar?.classList.toggle('active');
        console.log('search bar clicked');
    });
}
