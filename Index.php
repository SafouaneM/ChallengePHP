<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="icon" type="image/png" href="Apple.png">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
    <meta charset="UTF-8">
    <title>Playlist</title>
    <link rel="stylesheet" href="Style.css">
    <style>
        .imagebox {
            position: relative;
            width: 300px;
            display: inline-block;
        }

        .foto {
            display: block;
            width: 300px;
            height: 300px;
        }

        .overlay {
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            background-color: transparent;
            overflow: hidden;
            width: 100%;
            height: 0;
            transition: .5s ease;
        }

        .imagebox:hover .overlay {
            height: 100%;
            width: 50%;
        }

        .text {
            color: white;
            font-size: 20px;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            -ms-transform: translate(-50%, -50%);
            text-align: center;
        }

    </style>
</head>
<body>
<header>

    <nav class="navbar navbar-dark bg-dark">


        <ul class="navbar2">

            <li><a href="Index.php">Home</a></li>
            <li><a href="Index.php">Playlists</a></li>
            <li><a href="Inlog.php">Aanmelden</a></li>
        </ul>
</header>
<div class="jumbotron">

    <h1 class="headtitle">SpotiTube</h1>
    <p class="lead">This is a YouTube/Spotify knockoff version, but you can still listen to music!</p> <?php echo "<br>";
      loggedin(); ?>

    <hr class="my-4">
    <p></p>

</div>
<h3>Playlists 2018</h3>
<div class="row">

    <div class="column imagebox">

        <a href="Josylvio.html"><img class="ShowcaseImage foto" src="https://i.boring.host/5Z9O1Df.jpeg"></a>
        <div class="overlay">
            <div class="text">Hella Cash</div>
        </div>
    </div>

    <div class="column imagebox">
        <a href="Ismo.html"><img class="ShowcaseImage foto" src="https://i.boring.host/5Z7Jst9.jpg"></a>
        <div class="overlay">
            <div class="text">Transformatie</div>
        </div>
    </div>

    <div class="column imagebox">
        <a href="Riffi.html"><img class="ShowcaseImage foto" src="https://i.boring.host/5Z8CrvZ.jpg"></a>
        <div class="overlay">
            <div class="text">Adem Noot</div>
        </div>
    </div>

    <div class="column imagebox">
        <a href="Esko.html"><img class="ShowcaseImage foto" src="https://i.boring.host/5ZAf8jq.jpg"></a>
        <div class="overlay">
            <div class="text">Beats By Esko</div>
        </div>
    </div>
</div>

</body>

</html>

<?php
function loggedin(){
    echo "Current user: ". $_POST["username"];

}
?>

