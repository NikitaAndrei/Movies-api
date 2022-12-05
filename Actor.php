<?php
//$Actorbox=$actorbox;



?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movies</title>
    <link href="css/actor.css" rel="stylesheet" type="text/css">
    <link href="js/actor.js" rel="script" type="text/css">
</head>
<body>
<div class = "wrapper">
    <div class = "logo">
        <div class = "container">
            <p>Mov<span>ies</span></p>
            <script src="//embed.bannerboo.com/b3bf77a42730b" async></script>
        </div>
        <nav class="navMenu">
            <a href="movie.php">Kodu</a>s
            <a href="rating.php">Hinnang</a>
            <a id="actor" href="Actor.php">Actor</a>
            <a id="nava" href="info.php">Info</a>
            <div class="dot"></div>
        </nav>
    </div>
    <div class="contain">
        <div class="tulemus-contain">
            <div class="tulemus" id="tulemus"></div>
        </div>
    </div>
    <div id="content">
        <table id="table">
            <tr>
                <th>Nimi</th>
                <th>Pilti</th>
                <th>Aasta</th>
                <th>Sugu</th>
            </tr>

    <?php
    $file = file_get_contents("actor.json");
    $data = json_decode($file, TRUE);

    foreach ($data as $voti=>$vaartus) {
        $perenimi = $vaartus['enName'];
        $pilti = $vaartus['photo'];
        $aasta = $vaartus['age'];
        $sugu = $vaartus['sex'];

        echo "<tr>";
        echo '<td>'.$perenimi.'</td>';
        echo '<td><img src='.$pilti.' alt="pilt" style="width: 80px; height: 100px; margin-left: 30%"></td>';

        echo '<td>'.$aasta.'</td>';
        echo '<td>'.$sugu.'</td>';
        echo "</tr>";
    }
    ?>
        </table>
    </div>
</div>

<script src = "js/actor.js"></script>
</body>
</html>