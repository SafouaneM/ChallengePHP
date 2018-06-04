<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
    <meta charset="UTF-8">
    <title> </title>
    <link rel="stylesheet" href="Login.css">

</head>
<body>
<header>

    <nav class="navbar navbar-dark bg-dark">


        <ul class="navbar2">

            <li><a href="Index.php">Home</a></li>
            <li><a href="Index.php">Playlists</a></li>
            <li><a href="Inlog.php">Aanmelden</a></li>
        </ul>
    </nav>
</header>
<div class="jumbotron">

    <h1 class="headtitle">SpotiTube</h1>
    <p class="lead">This is a YouTube/Spotify knockoff version, but you can still listen to music!
    Log In Here!!!</p>

</div>
<br>
<div class="login-box">
    <img src="https://i.boring.host/5Z9O1Df.jpeg" class="avatar">
    <h1>Login Here</h1>
    <form action="Index.php" method="post" name="login">
        <p>Username</p>
        <input name="username" placeholder="Enter Username" type="text">
        <p>Password</p>
        <input name="password" placeholder="Enter Password" type="password">
        <input name="submit" value="Login" type="submit">
        <a href="Vergeet.html">Forget Password</a>
    </form>


</div>

<script language="JavaScript" type="text/javascript">
    var frmvalidator  = new Validator("login");
    frmvalidator.EnableFocusOnError(false);
    frmvalidator.EnableMsgsTogether();
</script>

</body>

</html>
