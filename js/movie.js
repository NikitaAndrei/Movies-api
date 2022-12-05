const searchMovie = document.getElementById('movie-search-box');
const listsearchmovie = document.getElementById('search-list');
const result = document.getElementById('result-grid');

// laadige filme API-st
async function loadMovies(searchTerm){
    const url = `https://omdbapi.com/?s=${searchTerm}&page=1&apikey=cc5ab448`;
    const res = await fetch(`${url}`);
    const data = await res.json();
    if(data.Response == "True") displayMovieList(data.Search);
}

function findMovies(){
    let searchTerm = (searchMovie.value).trim();
    if(searchTerm.length > 0){
        listsearchmovie.classList.remove('hide-search-list');
        loadMovies(searchTerm);
    } else {
        listsearchmovie.classList.add('hide-search-list');
    }
}

function displayMovieList(movies){
    listsearchmovie.innerHTML = "";
    for(let i = 0; i < movies.length; i++){
        let movieListItem = document.createElement('div');
        movieListItem.dataset.id = movies[i].imdbID;
        movieListItem.classList.add('search-list-item');
        if(movies[i].Poster != "N/A")
            moviePoster = movies[i].Poster;
        else
            moviePoster = "img/cai.jpg";

        movieListItem.innerHTML = `
        <div class = "search-item-thumbnail">
            <img src = "${moviePoster} ">
        </div>
        <div class = "search-item-info">
            <h3>${movies[i].Title}</h3>
            <p>${movies[i].Year}</p>
            <p>${movies[i].rate}</p>
        </div>
        `;
        listsearchmovie.appendChild(movieListItem);
    }
    loadDetails();
}

function loadDetails(){
    const searchListMovies = listsearchmovie.querySelectorAll('.search-list-item');
    searchListMovies.forEach(movie => {
        movie.addEventListener('click', async () => {
            listsearchmovie.classList.add('hide-search-list');
            searchMovie.value = "";
            const result = await fetch(`http://www.omdbapi.com/?i=${movie.dataset.id}&apikey=cc5ab448`);
            const movieDetails = await result.json();
            displayDetails(movieDetails);
        });
    });
}

function displayDetails(details){
    result.innerHTML = `
    
    <div class = "movie-info">
        <h3 class = "movie-title">${details.Title}</h3>
        <ul class = "movie-misc-info">
            <li class = "year">Year: ${details.Year}</li>
            <li class = "rated">Ratings: ${details.Rated}</li>
            <li class = "released">Released: ${details.Released}</li>
        </ul>
        <p class = "genre"><b>Genre:</b> ${details.Genre}</p>
        <p class = "writer"><b>Writer:</b> ${details.Writer}</p>
        <p class = "director"><b>Director:</b> ${details.Director}</p>
        <p class = "actors"><b>Actors: </b>${details.Actors}</p>
        <p class = "plot"><b>Plot:</b> ${details.Plot}</p>
        <br><br>
        <p class = "rating"><b>Rating:</b> ${details.imdbRating}</p>
        <p class = "votes"><b>Votes:</b> ${details.imdbVotes}</p>
    </div>
    <div class = "movie-poster">
        <img src = "${(details.Poster != "N/A") ? details.Poster : "img/cai.jpg"}" alt = "movie poster">
    </div>
    <div>
</div>
    `;
}