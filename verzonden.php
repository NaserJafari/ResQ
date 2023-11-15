<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ResQ | Verzonden</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <header>
        <?php include("includes/navbar.php") ?>
    </header>
    <main>
        <div class="verzonden">
            <div class="verzonden-ambulance">
                <h2>Verzonden</h2>
            </div>
            <div class="ambulance-onderweg">
                <h2>De ambulance is onderweg.</h2>
                <img src="img/ambulance.png" alt="ambulance">
            </div>
            <div class="geschatte-tijd">
                <h2>Geschatte tijd</h2>
                <p>5 min & 50sec.</p>
            </div>
            <div class="kaart">
                <img src="img/map.png" alt="map">
                <p>Klik om te volgen.</p>
            </div>
            <div class="tips-en-videos">
                <input type="submit" value="Tips & video’s explanation" name="tips-en-videos">
            </div>
        </div>
    </main>
</body>
</html>