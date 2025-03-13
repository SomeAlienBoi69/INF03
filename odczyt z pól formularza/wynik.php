<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dane</title>
</head>
<body>
    <h1>Przesłane dane:</h1>
    <?php

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $imie = $_POST["imie"];
            $nazwisko = $_POST["nazwisko"];
            $wiek = $_POST["nazwisko"];
            $email = $_POST["email"];
            $wiadomosc = $_POST["wiadomosc"];
            $jezyk = $_POST["jezyk"];
            $zgoda = $_POST["zgoda"]?"Tak":"Nie";

            echo "$imie <br>";
            echo "$nazwisko <br>";
            echo "$wiek <br>";
            echo "$email <br>";
            echo "$wiadomosc <br>";
            echo "$jezyk <br>";
            echo "$zgoda <br>";
        }
        else {
            echo "<p>Niepoprwane wywołanie strony</p>";
        }







    ?>
</body>
</html>