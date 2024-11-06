<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Dynamic Content App</title>
</head>
<body>
    <h1>Welcome to My PHP Dynamic Content App!</h1>
    <p>Current Date and Time: <?php echo date("Y-m-d H:i:s"); ?></p>

    <?php
        $messages = ["Hello, World!", "PHP is awesome!", "Have a great day!"];
        $randomMessage = $messages[array_rand($messages)];
        echo "<p>Random Message: $randomMessage</p>";
    ?>
</body>
</html>
