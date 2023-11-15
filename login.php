<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ResQ | Login</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <header>
        <?php include_once("includes/navbar.php"); ?>
    </header>
    <main>
        <div class="login">
            <div class="select-language">
                <h3>Select your language</h3>
                <select name="language" id="">
                    <option value="English">English</option>
                    <option value="Dutch">Dutch</option>
                    <option value="Chinese">Chinese</option>
                    <option value="German">German</option>
                </select>
                <p>Click to change.</p>
            </div>
            <div class="checkbox">
                <div class="checkbox-location">
                    <label for="">I agree that I will give away my location when Iam using this app.</label>
                    <input type="checkbox" name="" id="">
                </div>
                <div class="checkbox-medical-information">
                    <label for="">I agree that all emergency’s posts know my medical information.</label>
                    <input type="checkbox" name="" id="">
                </div>
            </div>
            <div class="phone-number">
                <input type="tel" name="" id="" placeholder="+ 06 23957891" pattern="[0-9]{2}-[0-9]{8}">
                <p>Enter your phone number</p>
            </div>
            <div class="docs-resq">
                <a href="">Click here to read how the app works</a>
            </div>
            <div class="terms-of-service">
                <label for="">I agree to the terms of service</label>
                <input type="checkbox" name="" value="Confirm" id="">
            </div>
            <div class="submit-login">
                <input type="submit" value="Confirm" name="confirm">
            </div>
        </div>
    </main>
</body>
</html>