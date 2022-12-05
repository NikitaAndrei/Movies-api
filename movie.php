<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movies</title>
    <link href="css/movie.css" rel="stylesheet" type="text/css">
    <link href="js/movie.js" rel="script" type="text/css">
</head>
<body>
<div class = "wrapper">
    <div class = "logo">
        <div class = "container">
            <p>Mov<span>ies</span></p>
            <script src="//embed.bannerboo.com/b3bf77a42730b" async></script>
        </div>
        <nav class="navMenu">
            <a href="movie.php">Kodu</a>
            <a href="rating.php">Hinnang</a>
            <a id="actor" href="Actor.php">Actor</a>
            <a id="nava" href="info.php">Info</a>
            <div class="dot"></div>
        </nav>
    </div>
    <div class = "search-container">
        <div class = "search-element">
            <h3>Otsing filmi:</h3>
            <input type = "text" class = "form-control" placeholder="Otsing filmi..." id = "movie-search-box" onkeyup="findMovies()" onclick = "findMovies()">
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
<script src = "js/movie.js"></script>
</body>
</html>