<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Podstawy PHP</title>
</head>
<body>
    <h1>Podstawy PHP</h1>
    <?php

    // phpinfo();

    $kolory=['red', 'green', 'blue', 'yellow', 'cyan', 'magenta', 'gold', 'silver', 'brown', 'pink'];

    for ($i=0; $i<10; $i++) {
        echo "<div style='background-color: $kolory[$i]'>".($i+1)."</div>";
    }

        echo "<ol>";
        for ($i=1;$i<=10;$i++) {
            echo "<li>".($i * $i)."</li>";
        }
        echo "</ol>";
    ?>

    <form action="index.php" method="POST">
        <h2>Wpisz tekst:</h2>
        <input type="text" name="tekst"><br>
        <input type="submit" value="Dodaj">
    </form>

    <?php
        if (isset($_POST["tekst"])) {
            $tekst=$_POST["tekst"];
            $teksty=explode(' ',$tekst);
            foreach ($teksty as $tek) {
                echo "<p>$tek</p>";
            }
            
        }
        else {
            echo "<p>Brak danych</p>";
        }



    ?>

</body>
</html>