<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ResQ | Welverbinding</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
</head>
<body>
    <header>
        <?php include("includes/navbar.php") ?>
    </header>
    <main>
        <form action="php/wellocatie.php" method="post">
            <div class="locatie-opgeven">
                <div class="wel-verbinding">
                    <h2>U heeft verbinding!</h2>
                </div>
                <div class="locatie">
                    <h2>U houdige locatie</h2>
                    <input type="text" name="locatie" id="" placeholder="Heyendaalseweg 98, 6525 EE Nijmegen ">
                    <p>Klik om aan te passen</p>
                </div>
                <div class="submit-locatie-foto">
                    <input type="submit" value="Submit" name="submit">
                </div>
            </div>
        </form>
    </main>
</body>
</html>