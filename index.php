<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack b1</title>
</head>
<body>
    <!-- Inizio esercizio snack b1 -->

    <!-- NAME, MAIL, AGE -->
    <?php
    $name = $_GET['name'];
    $mail = $_GET['mail'];
    $age = $_GET['age'];
   
    // CONTROL VAR
    if (strlen($name) > 3) {
        $reply = 'Accesso riuscito';
    }
    elseif (strpos($mail, '@') && strpos($mail, '.')) {
        $reply = 'Accesso riuscito';
    }
    elseif (is_numeric($age)) {
        $reply = 'Accesso riuscito';
    } else {
        $reply = 'Accesso negato, riprova';
    }
    ?>

    <p><?php echo($reply); ?></p>

    <!-- Fine esercizio snack b1 -->
</body>
</html>