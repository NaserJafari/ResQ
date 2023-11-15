<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ResQ | Beschrijfsituatie</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <header>
        <?php include("includes/navbar.php") ?>
    </header>
    <main>
        <form action="php/situatie.php" method="post">
            <div class="beschrijf-situatie">
                <div class="situatie">
                    <h2>Beschrijf situatie</h2>
                    <input type="text" name="situatie_beschrijving" id="situatie_beschrijving" placeholder="De patient ademt niet!">
                </div>
                <div class="spraakbericht">
                    <h3>Of spreek een bericht in.</h3>
                    <img src="img/mic.png" alt="mic">
                    <img src="img/soudwaves.png" alt="sound">
                    <p>Microfoon pakt geen geluid op!</p>
                </div>
                <div class="submit-situatie">
                    <input type="submit" value="Volgende" name="Volgende">
                </div>
            </div>
            </form>
    </main>
</body>
</html>