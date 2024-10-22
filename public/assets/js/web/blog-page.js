document.getElementById('filterSort').addEventListener('click', function() {
    const searchBar = document.getElementById('searchBar');
    const overlay = document.getElementById('overlay');

    searchBar.classList.add('active');
    overlay.classList.add('active');
    document.body.classList.add('overlay-active');
});

document.getElementById('closeSearchBar').addEventListener('click', function() {
    hideSearchBar();
});

document.addEventListener('click', function(event) {
    const searchBar = document.getElementById('searchBar');
    const overlay = document.getElementById('overlay');
    if (!searchBar.contains(event.target) && !event.target.closest('#filterSort')) {
        hideSearchBar();
    }
});

function hideSearchBar() {
    const searchBar = document.getElementById('searchBar');
    const overlay = document.getElementById('overlay');

    searchBar.classList.remove('active');
    overlay.classList.remove('active');
    document.body.classList.remove('overlay-active');
}
