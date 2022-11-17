<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movies</title>
    <link href="movie.css" rel="stylesheet" type="text/css">
    <link href="movie.js" rel="script" type="text/css">
</head>
<body>
<div class = "wrapper">
    <div class = "logo">
        <div class = "container">
            <p>Mov<span>ies</span></p>

        </div>
        <nav class="navMenu">
            <a href="#">Home</a>
            <a href="#">Blog</a>
            <a href="#">Work</a>
            <a href="#">About</a>
            <div class="dot"></div>
        </nav>
    </div>
    <div class = "search-container">
        <div class = "search-element">
            <h3>Search Movie:</h3>
            <input type = "text" class = "form-control" placeholder="Search Movie Title ..." id = "movie-search-box" onkeyup="findMovies()" onclick = "findMovies()">
            <div class = "search-list" id = "search-list">
            </div>
        </div>
    </div>
    <div class = "container">
        <div class = "result-container">
            <div class = "result-grid" id = "result-grid">

            </div>
        </div>
    </div>
</div>
<script src = "movie.js"></script>
</body>
</html>