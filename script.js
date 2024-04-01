
    const searchInput = document.getElementById('search-input');
const searchButton = document.getElementById('search-button');
const searchResults = document.getElementById('raad-tan')

searchButton.addEventListener('click', function() {
  const searchTerm = searchInput.value;
  maxaan rabaa inaan sameeyo
  searchResults.innerHTML = `<p> <img src="lacaso.png.JPG"> : ${searchTerm}</p>`;
});